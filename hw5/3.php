<?php
function add_cookie($name, $value, $timelife)
{
    setcookie($name, $value, $timelife);
}

function update_cookie($name, $value, $timelife)
{
    setcookie($name, $value, $timelife);
}

function delete_cookie($name)
{
    setcookie($name, '');
}

