<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $commonData=[
            'title' => 'Administrator',
            'page_title' => 'Dashboard',
            'menu' => 'users',
            'menu-active' => 'users-list'
        ];

        $users = User::all();

        return view('pages.users.index')
            ->with(compact('commonData', 'users'));
    }

    public function create(){
        $commonData=[
            'title' => 'Administrator',
            'page_title' => 'Dashboard',
            'menu' => 'users',
            'menu-active' => 'users-create'
        ];

        $users = User::all();

        return view('pages.users.form')
            ->with(compact('commonData', 'users'));
    }
}
