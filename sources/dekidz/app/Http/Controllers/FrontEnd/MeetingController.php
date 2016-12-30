<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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
        $kandyUser = KandyLaravel::getUser(Auth::id());
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
        $links = [];
        foreach(Option::lists('value', 'key') as $key => $option){
            if (strpos($key, 'video_link') !== false) {
                $links[$key] = $option;
            }
        }
        return view('frontend.pages.stream_videos', compact('links'));
    }
}
