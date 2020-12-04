<?php

namespace Sortarad\Ghostwriter;

use Sortarad\Ghostwriter\Tags\GhostwriterTags;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        GhostwriterTags::class,
    ];

    protected $publishables = [
        __DIR__.'/../resources/dist' => '',
    ];
}
