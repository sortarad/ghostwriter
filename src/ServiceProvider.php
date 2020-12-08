<?php

namespace Sortarad\Ghostwriter;

use Statamic\Statamic;
use Statamic\Support\Str;
use Statamic\Facades\Addon;
use Statamic\Providers\AddonServiceProvider;
use Sortarad\Ghostwriter\Tags\GhostwriterTags;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        GhostwriterTags::class,
    ];

    protected $publishables = [
        __DIR__.'/../resources/dist' => '',
    ];

    public function boot()
    {
        parent::boot();

        $this->bootAddonPublishAfterInstall();
    }

    public function bootAddonPublishAfterInstall()
    {
        if (! $this->publishAfterInstall) {
            return $this;
        }

        if (empty($this->publishables)) {
            return $this;
        }

        $addon = Addon::all()->first(function ($addon) {
            return Str::startsWith(get_class($this), $addon->namespace());
        });

        Statamic::afterInstalled(function ($command) use ($addon) {
            $command->call('vendor:publish', [
                '--tag' => $addon->slug(),
                '--force' => true,
            ]);
        });

        return $this;
    }
}
