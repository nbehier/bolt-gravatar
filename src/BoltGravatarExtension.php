<?php

namespace Bolt\Extension\Leskis\BoltGravatar;

use Bolt\Extension\SimpleExtension;
use Silex\Application;

/**
 * BoltGravatar extension class.
 *
 * @author Nicolas Béhier-Dévigne
 */
class BoltGravatarExtension extends SimpleExtension
{
    public function registerServices(Application $app)
    {
        $app['twig'] = $app->share($app->extend(
            'twig',
            function ($twig) use ($app) {
                $config = $this->getConfig();
                $twig->addExtension(new \TwigGravatar() );
                return $twig;
            }
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getDisplayName()
    {
        return 'Gravatar Twig Helper';
    }
}
