<?php

namespace PluginNamespace\Services;

class Howdy
{
    public static function register()
    {
        add_action('rest_api_init', function () {
            register_rest_route('plugin-name/v1', '/howdy', [
                'methods' => 'GET',
                'callback' => [Howdy::class, 'howdy'],
                'permission_callback' => '__return_true',
            ]);
        });
    }

    public static function howdy()
    {
        return [
            'message' => 'Howdy!',
        ];
    }
}
