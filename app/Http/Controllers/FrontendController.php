<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class FrontendController extends Controller
{
    public function langChoser($type) {
        session(['locale' => $type]);
        return redirect()->back();
    }
}
