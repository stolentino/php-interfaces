<?php
require_once "src/config.php";
$content = new Collection($repo);
$title = "My Website";

require 'views/header.php';

//var_dump($repo->all('posts'));
//var_dump($repo->find('posts', 1));

foreach ($content as $item){
    //echo $item->title;
    include 'views/list.php';
}

require 'views/footer.php';