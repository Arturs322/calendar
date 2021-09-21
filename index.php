<?php
require_once 'htmlSide.php';
require_once 'vendor/autoload.php';

use Spatie\CalendarLinks\Link;

if (isset($_POST['submit']))
{
    $from = DateTime::createFromFormat('Y-m-d H:i', $_POST['from']);
    $to = DateTime::createFromFormat('Y-m-d H:i', $_POST['to']);

    $link = Link::create($_POST['title'], $from, $to)
        ->description($_POST['description'])
        ->address($_POST['address']);

    if ($_POST["link"] == "Google")
    {
        echo "<a href='" . $link->google() . "' target='_blank'> CLICK HERE FOR GOOGLE LINK</a>";
    } elseif ($_POST["link"] == "Yahoo")
    {
        echo "<a href='" . $link->google() . "' target='_blank'> CLICK HERE FOR YAHOO LINK</a>";
    } elseif ($_POST["link"] == "Outlook")
    {
        echo "<a href='" . $link->google() . "' target='_blank'> CLICK HERE FOR OUTLOOK LINK</a>";
    } elseif ($_POST["link"] == "ICall")
    {
        echo "<a href='" . $link->google() . "' target='_blank'> CLICK HERE FOR ICALL LINK</a>";
    }

}

