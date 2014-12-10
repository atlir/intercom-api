<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class IntercomServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('\App\Intercom\Api', function($app)
		{
			return new \App\Intercom\Api($app['config']['intercom']);
		});
	}

}
