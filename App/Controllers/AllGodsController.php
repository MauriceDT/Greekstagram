<?php

namespace App\Controllers;

use App\Libraries\View;

class AllGodsController
{

    public function index()
    {
        return View::render('allgods/home-allgods');
    }
}
