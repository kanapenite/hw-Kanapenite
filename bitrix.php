<?
session_start();
    $index2="В последний раз вы посещали сайт bitrix";
    $_SESSION["page"]=array();
if(isset($_SESSION["page"]))
{
    if(count($_SESSION["page"])<1)
    {
    $_SESSION["page"][]=$index2;
    }}