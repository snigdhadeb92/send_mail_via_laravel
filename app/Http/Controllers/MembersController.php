<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Mail;

class MembersController extends Controller
{
    function addData(Request $req){
        $member = new Member;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->address=$req->address;
        $member->save();
        
        $name = $member->name;
        $to_email = 'kushalash555@gmail.com';
        $data = array('name'=>$member->name,'email'=>$member->email,'address'=>$member->address);
        Mail:: send('addMember',$data, function($message) use($name, $to_email){
            $message->to($to_email)
                ->subject($name.'Web test mail');
        });

        return redirect()->back()->with('message','Thank you... Submitted');

    }
}
