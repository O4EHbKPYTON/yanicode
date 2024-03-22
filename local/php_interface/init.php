<?php

define('INCLUDE_PATH','/local/include');
function debug($data)
{
    echo '<pre>' . print_r($data,1) . '</pre>';
}
