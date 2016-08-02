<?php

include('config.php');


$mysql = mysql_query("select * from bm_admin_login_user");
while($results = mysql_fetch_assoc($mysql))
{
    print_r($results);
}





?>