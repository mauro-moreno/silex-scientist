<?php
/**
 * Class ScientistServiceProvider
 *
 * @author Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
namespace Scientist\Silex;

use Scientist\Laboratory;
use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * Class ScientistServiceProvider
 * @package Scientist\Silex
 */
class ScientistServiceProvider implements ServiceProviderInterface
{

    /**
     * {@inheritdoc}
     */
    public function register(Application $app)
    {
        $app['scientist'] = $app->protect(function () use ($app) {
            return new Laboratory;
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(Application $app)
    {
    }

}