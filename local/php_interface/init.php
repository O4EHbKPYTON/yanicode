<?php

define('INCLUDE_PATH','/include');
function debug($data)
{
    echo '<pre style="color: white;">' . print_r($data,1) . '</pre>';
}
