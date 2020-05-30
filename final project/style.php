<?php
if(!isset($_SESSION))
    session_start();
if(!isset($_SESSION['role']))
{
    echo  "<link rel=\"stylesheet\" href=\"css/user.css\">";
}
else
    if($_SESSION['role'] == "suadmin")
        echo  "<link rel=\"stylesheet\" href=\"css/admin.css\">";
    else
        echo  "<link rel=\"stylesheet\" href=\"css/user.css\">";
?>