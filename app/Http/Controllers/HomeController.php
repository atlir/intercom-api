<?php namespace App\Http\Controllers;

use App\Intercom;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$api = \App::make('\App\Intercom\Api');

		$userId=rand();
		$userProperties=[
			'email' => 'test@test.com'
		];
		//$newUser = $api->createUser($userId, $userProperties);

		// 54885ce43767ce589f00267c
		// 177902117
		$userId='177902117';

		/*
		$eventProperties=[
			'email' => 'test@test.com',
		];
		$api->pushEvent($userId, 'test event', $eventProperties);
		*/

		/*
		$price = 23;
		$api->pushPurchase($userId,$price);
		*/

		/*
		$userId='54885ce43767ce589f00267c';
		$property = 'email';
		$value = 'testtest@test.com';
		$api->updateProperty($userId, $property, $value);
		*/

		/*
		$users = $api->getUsers();
		foreach($users as $user){
			var_dump($user);
		}
		*/

	}

}
