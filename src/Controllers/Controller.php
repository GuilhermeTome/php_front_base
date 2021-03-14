<?php

namespace Controllers;

use CoffeeCode\Optimizer\Optimizer;
use Interfaces\ControllerInterface;

abstract class Controller implements ControllerInterface
{
    /**
     * @var Optimizer|null */
    private $seo = null;

    /**
     * @param string|null $title
     * @return Optimizer
     */
    public function getSeo(?string $title = null): Optimizer
    {
        if (!is_null($this->seo)) {
            return $this->seo;
        }

        $this->seo = (new Optimizer)->optimize(
            (is_null($title) ? SITE_TITLE : "{$title} | " . SITE_TITLE),
            SITE_DESCRIPTION,
            SITE_URL,
            SITE_IMAGE
        );

        if (FACEBOOK_ENABLED) {
            $this->seo = $this->seo->publisher(
                FACEBOOK_PUBLISHER,
                FACEBOOK_AUTHOR
            );
        }

        if (TWITTER_ENABLED) {
            $this->seo = $this->seo->twitterCard(
                TWITTER_CREATOR,
                TWITTER_SITE,
                TWITTER_DOMAIN,
                TWITTER_CARD
            );
        }

        if (OPEN_GRAPH_ENABLED) {
            $this->seo = $this->seo->openGraph(
                OPEN_GRAPH_SITE_NAME,
                OPEN_GRAPH_LOCALE,
                OPEN_GRAPH_SCHEMA
            );
        }

        return $this->seo;
    }
}
