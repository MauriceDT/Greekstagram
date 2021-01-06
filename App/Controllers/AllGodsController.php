<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Models\AllGodsModel;

class AllGodsController extends Controller
{

    public function index()
    {
        $gods = AllGodsModel::all();
        return View::render('allgods/home-allgods', $vars = ['gods' => $gods]);
    }
}
