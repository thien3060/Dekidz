<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Camera;
use App\Models\Lesson;
use App\Models\Staff;
use App\Models\Student;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Kodeplus\Kandylaravel\Facades\KandyLaravel;
use Pingpong\Admin\Entities\Article;
use Pingpong\Admin\Entities\Option;
use Pingpong\Admin\Uploader\ImageUploader;
use Pingpong\Admin\Validation\Article\Create;
use Pingpong\Admin\Validation\Article\Update;

class MeetingController extends BaseController
{

    /**
     * Get repository instance.
     *
     * @return mixed
     */
    public function meeting()
    {
        $kandyUser = DB::table('kandy_users')->where('main_user_id', '=', Auth::id())->first();
        return view('frontend.pages.meeting', compact("kandyUser"));
    }

    public function sendContact()
    {
        $data = Input::all();
        Mail::send('frontend.partials.email', $data, function($message)
        {
            $message->from('12520424@gm.uit.edu.vn', 'admin');

            $message->to('thien3060@gmail.com');
            $message->subject('Contact admin');
        });
        return \Redirect::back();
    }
    
    public function streamVideos()
    {
        $cameras = Camera::lists('name', 'id');
        $cameras->prepend('Select Camera', 0);

        return view('frontend.pages.stream_videos', compact('cameras'));
    }
    
    public function getCamera()
    {
        $camera = Camera::find(Input::get('id'));

        return $camera;
    }
    
    public function getTeachSchedule()
    {
        $lessons = Lesson::withTrashed()->lists('lesson_name', 'id');
        $lesson_goals = Lesson::withTrashed()->lists('lesson_goal', 'id');
        $teachers = Staff::whereHas('type', function ($query){
            $query->where('name', '=', 'Teacher');
        })->lists('staffs.name', 'staffs.id');
        $class = null;
        if(Auth::check()){
            $student = Student::where('email', '=', Auth::user()->email)->first();
            if($student != null){
                $class = $student->dekidzClass->sortBy('created_at')->last();
            }
        }
        return $this->view('frontend.pages.teach_schedule', compact('student', 'class', 'lessons', 'teachers', 'lesson_goals'));
    }
}
