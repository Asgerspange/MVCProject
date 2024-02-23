<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function getMembers(Request $request)
    {
        $members = Member::all();

        return response()->json(['members' => $members]);
    }

    public function deleteMember(Request $request) {
        return Member::where('id', $request->id)->delete();
    }

    public function updateMember(Request $request) {
        $member = Member::find($request->id);
        $member->name = $request->name;
        $member->age = $request->email;
        $member->record = $request->email;
        $member->style = $request->email;
        $member->save();

        return response()->json(['member' => $member]);
    }
   

}