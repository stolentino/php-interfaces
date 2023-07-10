<?php
require_once "src/config.php";
$content = new Collection();
$title = "My Website";

require 'views/header.php';

//var_dump($repo->all('posts'));
var_dump($repo->find('posts', 1));


require 'views/footer.php';