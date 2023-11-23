<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class managementUsers extends Controller
{
    public function index() {
        $allUsers = User::get();
        return view('pages.management-user')->with('allUsers', $allUsers);
    }

    public function destroy($id)
    {
        $allUsers = User::findOrFail($id);
        $allUsers->delete();
        return redirect()->route('management')->with('succes', 'The data has been successfully deleted', );
    }
    
    public function lihat($id)
    {
        $allUsers = User::findOrFail($id);
        
        return view('pages.tampil', compact('management'));
    }
}