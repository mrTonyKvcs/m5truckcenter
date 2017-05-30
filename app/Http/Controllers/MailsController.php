<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailsController extends Controller
{
    public function sendTenderToSupport(Request $request)
    {
    	// $this->validate($request, [
     //        'name'      			=> 'required',
     //        'phone'     			=> 'required',
     //        'vehicle_type'			=> 'required',
     //        'chassis_number'		=> 'required',
     //        'part'					=> 'required',
     //        'message'   			=> 'required|min:10|max:1000'
     //    ]);
        \Mail::send('emails.tender', ['data' => $request], function ($m) use ($request) {
            $m->to("attila.kovacs92@gmail.com")
	            ->subject('Árajánlat')
		        // ->from("test@test.com", $request->name);
        });

        // flash()->success('Köszönjük!', 'Az üzenetét elküldtük.');
        // flash()->success(trans('message.title'), trans('message.body'));

        return back();
    }
}
