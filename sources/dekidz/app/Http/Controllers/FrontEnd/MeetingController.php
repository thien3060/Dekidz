<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Kodeplus\Kandylaravel\Facades\KandyLaravel;
use Pingpong\Admin\Entities\Article;
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
}
