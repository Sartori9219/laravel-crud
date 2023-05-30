<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
            return view('allMembers', [
              'members' => Member::all()
          ]);
    }
    public function newMember(){
        return view('newMember');
    }
    public function createMember(Request $request): RedirectResponse {
        $member = new Member();

        $member->memname = $request->memname;
        $member->hobby = $request->hobby;

        $member->save();

        return redirect('/member');
    }

}
