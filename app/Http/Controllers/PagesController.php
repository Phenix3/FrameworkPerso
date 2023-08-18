<?php
/**
 * Created by PhpStorm.
 * User: IBM-Phenix
 * Date: 22/08/2018
 * Time: 17:31
 */

namespace App\Http\Controllers;

use App\Models\User;
use League\Route\Http\Exception;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response;



class PagesController extends AbstractController
{
    public function __construct(private User $user)
    {
        
    }


    public function home(ServerRequestInterface $request): ResponseInterface
    {
        var_dump($this->getContainer());die;

        $response = new Response();

        $response->getBody()->write("<h1>Hello IBM-Phenix !!!</h1>");

        return $response;

    }

    public function blogIndex(ServerRequestInterface $request): ResponseInterface
    {
    
    }

}
