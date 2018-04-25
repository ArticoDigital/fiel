<?php

namespace App\Http\Controllers\Auth;

use App\Customer;
use Auth;
use Illuminate\Support\Facades\Session;
use Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialAuthController extends Controller{
	public function redirectToProvider( $provider ) {
		return Socialite::driver( $provider )->redirect();
	}

	public function handleProviderCallback( $provider ) {

		$social_user = Socialite::driver( $provider )->user();
		if ( $user = Customer::where( 'email', $social_user->email )->first() ) {
			Session::flash( 'status', 'old' );

			return view( 'welcome' );
		} else {
			$user = Customer::create( [
				'name'   => $social_user->name,
				'email'  => $social_user->email,
				'avatar' => $social_user->avatar,
			] );
			Session::flash( 'status', 'new' );

			return view( 'welcome' );
		}
	}
}
