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
        var_dump($artistid);
        $artistinfo = $this->Usermodel->showartistinfo($artistid);
        $getsongname= $this->Usermodel->getSonglist($artistid);
        var_dump($getsongname);

//var_dump($artistinfo);
        require "view/artist/artistinfo.php";
    }
    public function addnewsong($id){
        $artistid = $id['artistid'];
//        var_dump($artistid);
        require "view/artist/addSong.php";
    }

    public function insertsongs($name,$files){


$this->Usermodel->insertsongs($name,$files);

        require "view/artist/addSong.php";
    }
//public function addnewsong(){
//    require "view/artist/addSong.php";
//}

}