<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index() {

        $data['title'] = 'My Profiles';
        return view('user/index', $data);

    }

}
