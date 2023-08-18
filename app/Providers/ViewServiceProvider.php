<?php

namespace App\Providers;

use League\Container\Container;
use League\Container\ServiceProvider\AbstractServiceProvider;
use Psr\Container\ContainerInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

/**
 * 
 * @property Container $container
 */
class ViewServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        Environment::class
    ];

    public function register()
    {
        $this->container->share(Environment::class, function(ContainerInterface $container) {
            $loader = new FilesystemLoader([
                __DIR__ . '/Views/'
            ]);
            $options = [
                'cache' => false
            ];
            return new Environment($loader, $options);
        });
    }
}