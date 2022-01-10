<?php

function titlepara(string $title,string $paragraph, int $level=1){
    return "<h$level>$title</h$level><p>$paragraph</p>";
}