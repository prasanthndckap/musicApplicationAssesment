<?php
class database
{
    public $db;
    public function __construct(){
        try {
            $this->db= new PDO
            ("mysql:host=localhost;dbname=musicapplication",
                "admin",
                "welcome");
//            echo "hii";


        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}


class usermodels extends database{




    public function checkLoggedUser($data)
    {
        $email = $data['email'];
        $password = $data['pwd'];

        $echoingUsername = $this->conn->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        $loginUserExists = $echoingUsername->fetchAll();

        $_SESSION['User'] = $loginUserExists[0]['username'];

        if ($loginUserExists)
        {
            header('location: view/projects/index.php');
        }
        else
        {
            $_SESSION['Incorrect credentials'] = "Incorrect credentials";
            header('location: /login');
        }

    }

public function insertartistinfo($name,$files) {
//    inserting the artist

    $this->db->query("INSERT INTO artist (artist_name) values ('$name')");
//    fetch the last inserted artist id;
    $getlastid = $this->db->query("SELECT * FROM artist order by id desc limit 1 ");
    $lastid = $getlastid->fetch(PDO::FETCH_OBJ);
// var_dump($lastid->id);

//    var_dump($files['Image']['name']);
     var_dump(count($files['Image']['name']));
$count = count($files['Image']['name']);
//print_r($count);


for($i=0;$i<$count;$i++){
echo $i;
    $imagepath = "Image/". $files['Image']['name'][$i];
//var_dump($imagepath);
    $imageName = $files['Image']['tmp_name'][$i];
    move_uploaded_file($imageName,$imagepath);
    $this->db->query("insert into artist_images (image_path,artist_id) values ('$imagepath','$lastid->id')");

}
}

public function ShowArtist(){
    $selectquery = $this->db->query("SELECT * FROM artist");
    $data = $selectquery->fetchAll(PDO::FETCH_OBJ);
    return $data;
}



public function showartistinfo($id){
    $selectquery = $this->db->query("Select * from artist_images where artist_id = '$id'");
    $artistinfo = $selectquery->fetchAll(PDO::FETCH_OBJ);
    return $artistinfo;
}

public function insertsongs($name,$files){
    $SongName = $name['song_name'];
    $Artistid = $name['artistid'];
//    $songs = $files['songs'];
    $song_desccription = $name['song_description'];

    $this->db->query("INSERT INTO songs (song_name,song_description,artist_id) values ('$SongName','$song_desccription','$Artistid')");
    $getlastid = $this->db->query("SELECT * FROM songs order by id desc limit 1 ");
    $lastid = $getlastid->fetch(PDO::FETCH_OBJ);
 var_dump($lastid->id);
//    var_dump(count($files['Image']['name']));
    $count = count($files['Image']['name']);


    for($i=0;$i<$count;$i++){

        $imagepath = "songsinfo/images/". $files['Image']['name'][$i];
        $songpath = "songsinfo/songs/". $files['songs']['name'][$i];
var_dump($imagepath);
var_dump($songpath);
        $imageName = $files['Image']['tmp_name'][$i];
        $songName = $files['songs']['tmp_name'][$i];
        move_uploaded_file($imageName,$imagepath);
        move_uploaded_file($songName,$songpath);
        $this->db->query("insert into songs_info (image_path,song_path,song_id) values ('$imagepath','$songpath','$lastid->id')");
    }

}

public function getSonglist($id){
    $selectquery = $this->db->query("Select * from songs where artist_id = '$id'")->fetch(PDO::FETCH_OBJ);
return $selectquery;
}

}