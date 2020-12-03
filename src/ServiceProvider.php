<?php

namespace Sortarad\Ghostwriter;

use Sortarad\Ghostwriter\Tags\Ghostwriter;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        Ghostwriter::class,
    ];
}
