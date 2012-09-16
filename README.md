Buzz Silex/Cilex Provider
==================


Dependency Injection provider for <a href="https://github.com/kriswallsmith/Buzz">Buzz</a> can be used in <a href="https://github.com/fabpot/Silex">Silex</a> and <a href="https://github.com/Cilex/Cilex">Cilex</a>.



### How to use in Silex:

```php
<?php

  $app->register(new Cobaia\Buzz\Provider\Silex\BuzzServiceProvider());
	$app['bus']->get('http://cobaia.net');
```

### How to use in Cilex:


```php
<?php

  $app->register(new Cobaia\Buzz\Provider\Cilex\BuzzServiceProvider());
  $app['bus']->get('http://cobaia.net');
```