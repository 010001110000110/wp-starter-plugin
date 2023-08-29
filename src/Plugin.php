<?php

namespace PluginNamespace;

use PluginNamespace\Services\Howdy;

class Plugin
{
    protected function services()
    {
        return [
            Howdy::class,
        ];
    }

    public function register()
    {
        foreach ($this->services() as $service) {
            (new $service)->register();
        }
    }
}
