<?php
function reverse($str)
{
    if (($str == null) ||
        (strlen($str) <= 1)
    ) echo ($str);
    else {
        echo ($str[strlen($str) - 1]);
        reverse(substr($str, 0, (strlen($str) - 1)));
    }
}

// trigger
$str = "\"h\",\"e\",\"l\",\"l\",\"o\"";
reverse($str);
