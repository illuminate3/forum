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
        $this->publishes([
            __DIR__.'/../Config/forum.php' => base_path('config/forum.php'),
        ]);

        view()->share('template', config('forum.template'));
        view()->share('content', config('forum.content'));

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
