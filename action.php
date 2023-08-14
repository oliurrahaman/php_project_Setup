<?php
require_once "vendor\autoload.php";
use App\classes\Home;
$home =new Home();
if(isset($_GET['page']))
{
    if($_GET['page']=='home')
    {
        return $home->index();
    }
    elseif ($_GET['page']=='about')
    {
        return $home->about();
    }
    elseif ($_GET['page']=='full-name')
    {
        return $home->fullName();
    }
    elseif ($_GET['page']=='contact')
    {
        return $home->contact();
    }

}
