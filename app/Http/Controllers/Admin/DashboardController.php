<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; // Jangan lupa import ini
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Tampilkan view dashboard admin
        return view('admin.dashboard');
    }
}