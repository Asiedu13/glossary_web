<?php

function get_data()
{
    $fname = CONFIG['data_file'];
    $json_content = ' ';

    if(!file_exists($fname)) {
        file_put_contents($fname, ' ');
    }else {
        $json_content = file_get_contents($fname); 
    }

    return $json_content;
}
function view($name, $model)
{
    require("views/layouts.view.php");
}