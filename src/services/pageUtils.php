<?php

function echoCommonHeadTags(string $title):void{
    echo "<title>{$title}</title>";
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<meta charset="UTF-8">';
}
