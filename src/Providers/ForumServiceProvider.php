<?php namespace Socieboy\Forum\Providers;

use Illuminate\Support\ServiceProvider;

class ForumServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->loadViewsFrom(__DIR__.'/../Views', 'Forum');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
        /**
         * Include routes for the forum.
         */
        include __DIR__.'/../routes.php';
	}

}
