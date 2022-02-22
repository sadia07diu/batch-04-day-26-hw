<?php


namespace App\Classes;


class Home
{
    public function index()
    {
        header("Location: action.php?pages=logIn");
    }
}