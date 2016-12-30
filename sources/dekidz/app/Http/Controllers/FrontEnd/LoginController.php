<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Kodeplus\Kandylaravel\Facades\KandyLaravel;
use Pingpong\Admin\Entities\Article;
use Pingpong\Admin\Uploader\ImageUploader;
use Pingpong\Admin\Validation\Article\Create;
use Pingpong\Admin\Validation\Article\Update;

class LoginController extends BaseController
{

    /**
     * Login user
     *
     * @return mixed
     */
    public function login()
    {
        $credentials = \Input::only('email', 'password');

        if (\Auth::attempt($credentials)) {
            $_SESSION['user'] = \Auth::id();

            return $this->redirect('home')->withFlashMessage('Đăng nhập thành công!')->withFlashType('success');
        }

        if (getenv('PINGPONG_ADMIN_TESTING')) {
            return \Redirect::to('admin/login')->withFlashMessage('Đăng nhập thất bại!')->withFlashType('danger');
        }

        return \Redirect::back()->withFlashMessage('Đăng nhập thất bại!')->withFlashType('danger');
    }

    /**
     * Logout.
     *
     * @return \Response
     */
    public function logout()
    {
        \Auth::logout();

        Session::forget('admin');

        return $this->redirect('home');
    }
}
