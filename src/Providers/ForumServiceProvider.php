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
        $this->publishFiles();

        $this->shareGlobalVariables();

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

    /**
     * Publish config files for the forum.
     */
    protected function publishFiles()
    {
        $this->publishes([
            __DIR__.'/../Config/forum.php' => base_path('config/forum.php'),
        ]);
    }

    protected function shareGlobalVariables()
    {
        view()->share('template', config('forum.template'));

        view()->share('content', config('forum.content'));

    }

}
