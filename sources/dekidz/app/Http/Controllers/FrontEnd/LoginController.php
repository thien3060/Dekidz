<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Kodeplus\Kandylaravel\Facades\KandyLaravel;
use Pingpong\Admin\Entities\Article;
use Pingpong\Admin\Uploader\ImageUploader;
use Pingpong\Admin\Validation\Article\Create;
use Pingpong\Admin\Validation\Article\Update;

class LoginController extends BaseController
{

    /**
     * Get repository instance.
     *
     * @return mixed
     */
    public function login()
    {
        $credentials = \Input::only('email', 'password');

        if (\Auth::attempt($credentials)) {
            $_SESSION['user'] = \Auth::id();

            return $this->redirect('/')->withFlashMessage('Login Success!');
        }

        if (getenv('PINGPONG_ADMIN_TESTING')) {
            return \Redirect::to('admin/login')->withFlashMessage('Login failed!')->withFlashType('danger');
        }

        return \Redirect::back()->withFlashMessage('Login failed!')->withFlashType('danger');
    }
}
