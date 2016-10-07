<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Pingpong\Admin\Entities\User;

class OAuthController extends BaseController
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return Response
     */
    public function redirectToGoogleProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Goole.
     *
     * @return Response
     */
    public function handleGoogleProviderCallback()
    {
        $userInfo = Socialite::driver('google')->user();

        return $this->authenticate($userInfo);
    }

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToFacebookProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleFacebookProviderCallback()
    {
        $userInfo = Socialite::driver('facebook')->user();

        return $this->authenticate($userInfo);
    }

    /**
     * Redirect the user to the Twitter authentication page.
     *
     * @return Response
     */
    public function redirectToTwitterProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Obtain the user information from Twitter.
     *
     * @return Response
     */
    public function handleTwitterProviderCallback()
    {
        $userInfo = Socialite::driver('twitter')->user();

        return $this->authenticate($userInfo);
    }

    protected function authenticate($userInfo){
        $user = User::where('email', '=', $userInfo->email)->first();
        if (!is_null($user)) {
            $user->remember_token = $userInfo->token;
            $user->save();
            Auth::login($user, true);
            $_SESSION['admin'] = \Auth::id();
            return $this->redirect('home')->withFlashMessage('Login Success!');
        }

        return \Redirect::to('admin/login')->withFlashMessage('Login failed!')->withFlashType('danger');
    }
}
