<?php

return [

    /*
     * Define the path to your master view on your "resources/view" folder.
     */

    'template'  => 'app',


    /*
     * Define @yield( $content ) area where the forum views will be displayed on your app.
     */

    'content'   => 'content',

    /*
     * Define topics for the forum
     */

    'topics' => [
        'general' => 'General',
    ],


    /**
     * User settings
     */

    'user' => [

        /**
         * Path to your user model.
         */

        'model'         => 'App\User',

        /**
         * Define the field on your table user that the forum will use to display to indetify the user.
         *
         *  examples:
         *
         *  username
         *  name
         *  full_name
         *
         *  etc...
         */

        'username'    => 'name',

        /*
         * If you need avatars on the forum.
         */

        'avatar'        => true,

        /**
         * Required if the avatar key is true.
         *
         * Define the field avatar on your users table.
         */

        'user-avatar'  => 'avatar'

    ],


];