<?php

namespace App\Controllers;

use App\Libraries\View;

class VoteController extends Controller
{

    public function index()
    {
        return View::render('vote.view');
    }

    public function store()
    {
        View::redirect('vote.thanks.view');
    }
}
