<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function ShowCreatePortfolioForm() {
        if (isset($_COOKIE['auth'])) {
            echo '1212';
        } else {
            return redirect(route('auth'));
        }
    }
}
