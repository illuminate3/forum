<?php namespace Socieboy\Forum\Providers;

use Illuminate\Support\ServiceProvider;
use Socieboy\Forum\Commands\MigrationForum;
use Socieboy\Forum\Commands\MigrateForumCommand;

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

        $this->app->bindShared('command.forum.table', function ($app) {
            return new MigrateForumCommand();
        });

        $this->commands('command.forum.table');

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

    /**
     * Share variables across the views.
     */
    protected function shareGlobalVariables()
    {
        view()->share('template', config('forum.template'));

        view()->share('content', config('forum.content'));

    }

}
