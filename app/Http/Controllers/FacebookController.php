<?php

namespace App\Http\Controllers;

use Socialite;
use App\User;
use Webpatser\Uuid\Uuid;


class FacebookController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $face = Socialite::driver('facebook')->user();
        $user = User::whereEmail($face->getEmail())->first();
        if (!$user) {
           $user = User::create([
               'email' => $face->getEmail(),
               'name' => $face->getName(),
               'password' => Uuid::generate(),
           ]);
       }

       auth()->login($user);
       return redirect()->to('/home');

    }
}