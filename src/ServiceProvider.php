<?php

namespace Sortarad\Ghostwriter;

use Statamic\Statamic;
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

        Statamic::afterInstalled(function ($command) {
            $command->call('vendor:publish', [
                '--tag' => $this->getAddon()->slug(),
                '--force' => true,
            ]);
        });

        return $this;
    }
}
