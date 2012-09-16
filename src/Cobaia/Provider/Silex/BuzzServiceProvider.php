<?php
namespace Cobaia\Provider\Silex;

use Silex\Application;
use Silex\ServiceProviderInterface;

class BuzzServiceProvider implements ServiceProviderInterface
{

	public function boot(Application $app)
	{

	}

	public function register(Application $app)
	{
		$options = isset($app['buzz.options']) ? array_merge($this->options, $app['buzz.options']) : $this->options;

        $app['buzz'] = $app->share(function () use ($app, $options) {
            $app['buzz.client'] = new Buzz\Client\Curl();
            $app['buzz.browser'] = new Buzz\Browser();

            return $app['buzz.browser'];
        });
	}
	
}