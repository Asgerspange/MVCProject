<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class AppController extends Controller
{
    public function getMemberList(Request $request)
    {
        $members = Member::all();

        return response()->json(['members' => $members]);
    }
}