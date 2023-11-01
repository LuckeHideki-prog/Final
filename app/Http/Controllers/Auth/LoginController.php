<?php

namespace App\Http\Controllers\Auth;

use Laravel\Socialite\Facades\Socialite;

function redirectToProvider($provider)
{
    return Socialite::driver($provider)->redirect();
}

function handleProviderCallback($provider)
{
    $user = Socialite::driver($provider)->user();

    auth()->login($authUser);

    return redirect('/home');
}

function redirectToGoogle()
{
    return Socialite::driver('google')->redirect();
}

function handleGoogleCallback()
{
    $user = Socialite::driver('google')->user();

}
