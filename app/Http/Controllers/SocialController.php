<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Auth;
use App\User;
class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function Callback($provider)
    {
        $userSocial =   Socialite::driver($provider)->user();
    }
}
