<?php
require_once 'connectDB.php';

function selectAnsw()
{
    $db = db();
    $answ = $db->query('SELECT * FROM answers')->fetchAll();
    return $answ;
}
?>