<?php
//Consonants;

define("HOST", "localhost");
define("ROOT", "root");
define("ROOT_PASSWORD", "");
define("DB", 'BLOG_DATABASE');
define("TABLE", 'BLOG');


function getConnection()
{
    $dbh = new PDO("mysql:host=localhost;", "root", "");
    $dbh->exec("USE " . DB);
    return $dbh;
}
