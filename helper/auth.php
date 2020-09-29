<?php
if(isset($_SESSION['username']) == true)
{
    header("location: ./index.php");
}