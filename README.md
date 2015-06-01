# Laravel Forum Integration Package

# Installation.

Install package

```
composer require 'socieboy/forum:dev-master'
```

Add the service provider to your app config file.

```
'Socieboy\Forum\Providers\ForumServiceProvider',
```

Open terminal on your Laravel Project folder and execute the command vendor:publish to copy the config file.

```
php artisan vendor:publish
```

On your terminal excute the command to create the migrations.

```
php artisan forum:migrate
```

Then just execute.

```
php artisan migrate
```

# Configuration

On your config folder you should found the forum.php file, set your project values to run the forum.




