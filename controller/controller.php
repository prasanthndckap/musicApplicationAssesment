<?php
require "model/model.php";

class Usercontroller
{
    private $Usermodel;

    public function __construct()
    {
        $this->Usermodel = new usermodels();
    }




    public function login(){
          require "view/artist/login.php";
    }
    public function checkUser($checkdata){
//        var_dump($checkdata["email"]);
$this->Usermodel->checkLoggedUser($checkdata);
    }

public function CreateNewArtist(){


    require "view/artist/createartist.php";
}
    public function insertintoartist($artist,$file){
//        $name = $artist['artistName'];
//        var_dump($file['Image']);
        $this->Usermodel->insertartistinfo($artist['artistName'],$file);

        require "view/artist/createartist.php";

    }



    public function listedpage(){


$getartistinfo = $this->Usermodel->ShowArtist();



        require "view/artist/index.php";
    }

    public function showartistinfo($id){
        $artistid = $id['artistid'];
        $artistinfo = $this->Usermodel->showartistinfo($artistid);

var_dump($artistinfo);
        require "view/artist/index.php";
    }

public function addnewsong(){
    require "view/artist/addSong.php";
}

}