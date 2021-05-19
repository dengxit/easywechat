<?php

declare(strict_types=1);

namespace EasyWeChat\Pay\Merchant;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['merchant'] = function ($app) {
            return new Client($app);
        };
    }
}