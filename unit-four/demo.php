<?php

/* Cross side scripting attacks or SQL Injection 
    htmlentities()
    htmlspecialchars()
    strip_tags()
*/

$str = "<b>Thames<b>";

echo strip_tags($str);