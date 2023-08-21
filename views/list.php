<?php

if($item->status == "published"){
    echo '<article>';
    echo '<h2><a href="?id=' . $item->id . '">' . $item->title . '</a></h2>';
    echo '<p>' . $content->shortDescription() . '</p>';
    echo '</article>';
    
}