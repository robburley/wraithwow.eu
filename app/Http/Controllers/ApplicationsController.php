<?php

namespace App\Http\Controllers;

use App\Application;
use App\Mail\ApplicationEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationsController extends Controller
{
    public function create()
    {
        return view('apply');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'                => 'required|email',
            'battlenet'            => 'required',
            'info'                 => 'required',
            'armoury_url'          => 'required|url',
            'why_us'               => 'required',
            'ui'                   => 'required',
            'alt'                  => 'required',
            'class_info'           => 'required',
            'attendance'           => 'required',
            'spec'                 => 'required',
            'sat'                  => 'required',
            'raid_info'            => 'required',
            'raid_experience'      => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $application = Application::create($request->except('g-recaptcha-response'));

        Mail::to(['alexander.urheim@gmail.com', 'leviathan1991@live.co.uk'])
//        Mail::to(['rcburley@icloud.com'])
            ->send(new ApplicationEmail($application));

        flash('Thanks for applying, we will be in touch')->success();

        return redirect('/');
    }
}
