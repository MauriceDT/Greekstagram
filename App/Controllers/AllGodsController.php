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

    public function show()
    {
        if (isset($_GET['god_id']) && (int)$_GET['god_id'] > 0) {
            $gods = AllGodsModel::get($_GET['god_id']);

            // if (is_null($gods)) {
            //     return View::render
            // }

            return View::render('allgods/god-detail.view', $vars = ['gods' => $gods]);
        }

        return View::render('allgods/gods404.view');
    }
}
