<?php

if($item->status == "published"){
    echo '<article>';
    echo '<h2>' . $item->title . '</h2>';
    echo '<p>' . $content->shortDescription() . '</p>';
    echo '</article>';
    
}