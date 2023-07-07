<?php
class router
{
    public $router = [];
    public $controller;

    public function __construct()
    {
        $this->controller = new Usercontroller();
    }

    public function get($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET',
        ];
    }

    public function post($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET',
        ];
    }
    public function routing(){
        foreach ($this->router as $roots){
            if ($roots['uri'] == $_SERVER['REQUEST_URI']){
              if($roots['action']){
                  switch($roots['action']){

                      case 'login';
                          $this->controller->login();
                          break;
                      case 'CreateNewartist';
                          $this->controller->CreateNewArtist();
                          break;
                      case 'Addsong';
                          $this->controller->addnewsong($_POST,$_FILES);
                          break;
                      case 'Addartistinfo';
                          $this->controller->insertintoartist($_POST,$_FILES);
                          break;
                      case 'artistinfo';
                          $this->controller->showartistinfo($_POST);
                          break;


                      default:
                          $this->controller->listedpage($_POST);

                  }
              }
            }
        }
    }

}