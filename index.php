<?php
require "controller/controller.php";
require "router/router.php";
$controller = new Usercontroller();
$router = new router();

$router->get("/","default");
$router->get("/login","login");
$router->post("/checkUser","checkUser");
$router->post("/CreateNewartist","CreateNewartist");
$router->post("/Addsong","Addsong");
$router->post("/Addartistinfo","Addartistinfo");
$router->post("/artistinfo","artistinfo");
$router->post("/addnewsong","addnewsong");
$router->post("/createSong","createSong");

//$router->post("/artistinfo","artistinfo");



$router->routing();
