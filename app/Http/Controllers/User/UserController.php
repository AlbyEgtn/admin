<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisasi;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Admin;
use App\Models\Ormawa;

class UserController extends Controller
{
    public function index()
    {
        $organisasi = Organisasi::all();

        return view('pages.user.index', compact('organisasi'));
    }
    public function welcome(Request $request) {
        return view('welcome');
    }
    public function organisasi(Request $request) {
        return view('pages.user.organisasi');
    }
    public function pendaftaran(Request $request) {
        return view('pages.user.pendaftaran');
    }
    public function dashboard(Request $request) {
        return view('pages.user.dashboard');
    }
}
