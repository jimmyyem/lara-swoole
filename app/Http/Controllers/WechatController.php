<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WechatController extends Controller
{
    public function verify() {
        $data = file_get_contents("php://input");
        dd($data);
    }
}
