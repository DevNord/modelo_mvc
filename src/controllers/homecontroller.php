<?php 
namespace Mvc\Controllers;

use Mvc\Controllers\Engine\EnginePlates;
use Mvc\Models\MysqlRepository;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController
{

    public function home(Request $request, Response $response, $args)
    {
        //Renderizar página html
        $data = ['title' => WEB_TITLE . '- Home'];

        $response->getBody()->write(EnginePlates::view('home', $data));

        return $response;
    }

    public function about(Request $request, Response $response, $args)
    {
        //Renderizar página html
        $data = ['title' => WEB_TITLE . '- About'];

        $response->getBody()->write(EnginePlates::view('about', $data));

        return $response;
    }

    public function connect(Request $request, Response $response, $args)
    {
        $connect = MysqlRepository::getConect("127.0.0.1", "root", "", "crud");
        if($connect) {
            var_dump($connect);
        } else{
            echo '<p> Falha ao abrir conexão</p>';
        }

        return $response;
    }

    // public function about(Request $request, Response $response, $args)
    // {
    //     //Renderizar página html
    //     $template = $this->views->render('about', [
    //         'title' => 'About'
    //     ]);
    //     $response->getBody()->write($template);
    //     return $response;
    // }
}

