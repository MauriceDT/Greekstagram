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
        if (isset($_GET['god_id'])) {
            $god_id = (int)$_GET['god_id'];

            if ($god_id > 0) {
                if (AllGodsModel::existsById($god_id, 'gods')) {

                    View::render('god-detail.view', [
                        'god' => AllGodsModel::get($god_id)
                    ]);
                } else {
                    dd('This God does not exist');
                }
            } else {
                dd('Give me a integer!!!');
            }
        } else {
            dd('give me a god_id!');
        }
    }
}
