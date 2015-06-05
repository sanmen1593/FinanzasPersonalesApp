<?php namespace App\Repositories;

use App\User;
use App\UserProvider;
use Auth;

class UserProviderRepository{
	public function findByUserNameOrCreate($providerData, $provider){
		$provider = UserProvider::where('provider_id', '=', $providerData->id)->first();
		if(!$provider){
			$provider = UserProvider::create([
			    'provider_id'   => $userData->id,
			    'token'         => $userData->token,
			    'email'         => $userData->email,
			    'avatar'        => $userData->avatar,
			    'username'      => $userData->nickname,
			    'provider'      => $provider,
			]);
		}
		return $provider;
	}

	public function createProvider($providerData, $provider){
		$provider = UserProvider::create([
		    'provider_id'   => $userData->id,
		    'token'         => $userData->token,
		    'email'         => $userData->email,
		    'avatar'        => $userData->avatar,
		    'username'      => $userData->nickname,
		    'provider'      => $provider,
		]);
	}
}