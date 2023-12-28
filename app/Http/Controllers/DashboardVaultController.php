<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardVaultController extends Controller
{
    public function index()
    {
        return view("app.vault.dashboard");
    }
}
