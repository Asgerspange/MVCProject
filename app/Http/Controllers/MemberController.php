<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function getMemberList(Request $request)
    {
        $members = Member::all();

        return response()->json(['members' => $members]);
    }

    public function Delete(Request $request) {
        $delete = Member::where('id', $request->id)->delete();
    }
    public function addMember(Request $request)
    {
        $member = new Member();
        $member->name = $request[0]['name'];
        $member->name = $request[0]['age'];
        $member->record = $request[0]['record'];
        $member->style = $request[0]['style'];
        $member->save();
        dd(addMember());
    }
}