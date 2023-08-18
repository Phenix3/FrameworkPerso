<?php
namespace App\Providers;

use App\Http\Controllers\AbstractController;
use League\Container\Container;
use League\Container\ServiceProvider\AbstractServiceProvider;
use Psr\Container\ContainerInterface;

/**
 * @property Container $container
 */
class AppServiceProvider extends AbstractServiceProvider
{

    protected $provides = [
        'response',
        'request',
        'emitter',
        AbstractController::class,
    ];

    /**
     * Use the register method to register items with the container via the
     * protected $this->container property or the `getContainer` method
     * from the ContainerAwareTrait.
     *
     * @return void
     */
    public function register()
    {
        $this->container
            ->add(AbstractController::class)
            ->addMethodCall('setContainer', [$this->getContainer()])
            ;

        var_dump($this->container->get(AbstractController::class));die;
    }
}
