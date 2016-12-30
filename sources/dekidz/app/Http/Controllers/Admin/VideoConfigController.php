<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\DateHelper;
use App\Validation\SubjectTopic\CreateRequest;
use App\Validation\SubjectTopic\UpdateRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Pingpong\Admin\Entities\Option;

class VideoConfigController extends BaseController
{
    function get_form(){
        $links = [];
        foreach(Option::lists('value', 'key') as $key => $option){
            if (strpos($key, 'video_link') !== false) {
                $links[$key] = $option;
            }
        }
        return view('admin.pages.video_config.form', compact('links'));
    }

    function post_form(){
        $data = Input::all();
        foreach($data as $key => $value){
            if (strpos($key, 'video_link') !== false) {
                $link = Option::where('key', '=', $key)->first();
                $link->value = $value;
                $link->save();
            }
        }
        return Redirect::back();
    }
}
