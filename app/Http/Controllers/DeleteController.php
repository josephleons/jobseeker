<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete($id)
    {
        $users = new User();
        $result=$users->find($id);
        $result->delete();

        return redirect('/users')->with('success' ,'User Remove');
    }
}
