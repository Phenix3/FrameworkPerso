<?php

namespace App\Http\Controllers;

use League\Container\ContainerAwareInterface;
use League\Container\ContainerAwareTrait;
use Psr\Container\ContainerInterface;

class AbstractController implements ContainerAwareInterface
{
    use ContainerAwareTrait;

}