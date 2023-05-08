<?
session_start();
    $index1="В последний раз вы посещали сайт fact";
    $_SESSION["page"]=array();
if(isset($_SESSION["page"]))
{
    if(count($_SESSION["page"])<1)
    {
    $_SESSION["page"][]=$index1;
    }}