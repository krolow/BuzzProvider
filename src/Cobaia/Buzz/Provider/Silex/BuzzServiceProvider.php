<?php
namespace Cobaia\Buzz\Provider\Cilex;

use Silex\Application;
use Silex\ServiceProviderInterface;

class BuzzServiceProvider implements ServiceProviderInterface
{

	public function boot(Application $app)
	{

	}

	public function register(Application $app)
	{
        $app['buzz'] = $app->share(function () use ($app) {
            $app['buzz.client'] = new \Buzz\Client\Curl();
            $app['buzz.browser'] = new \Buzz\Browser($app['buzz.client']);

            return $app['buzz.browser'];
        });
	}
	
}