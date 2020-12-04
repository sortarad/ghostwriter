<?php

namespace Sortarad\Ghostwriter\Tags;

use Statamic\Tags\Tags;

class GhostwriterTags extends Tags
{
    protected static $handle = 'ghostwriter';

    /**
     * The {{ ghostwriter }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        $options = [
            'typeSpeed' => $this->params->int('speed', 40),
            'loop' => $this->params->bool('loop'),
        ];
        $json = json_encode( $options, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT );

        return sprintf("data-ghostwriter='%s'", $json );
    }

    /**
     * The {{ ghostwriter:assets }} tag.
     *
     * @return string|array
     */
    public function assets()
    {
        return view('ghostwriter::assets');
    }
}
