<?php

namespace App\Http\Controllers\Admin;

use App\Application;
use App\Http\Controllers\Controller;
use App\Mail\ApplicationAccepted;
use App\Mail\ApplicationDeclined;
use Illuminate\Support\Facades\Mail;

class ApplicationsController extends Controller
{
    public function show(Application $application)
    {
        return view('admin.applications.show')
            ->with('application', $application);
    }

    public function update(Application $application)
    {
        $application->update([
            'status' => 1,
        ]);

        Mail::to([$application->email])
            ->send(new ApplicationAccepted($application));

        flash()->success('Application for ' . $application->battlenet . ' has Accepted');

        return redirect('admin');
    }

    public function destroy(Application $application)
    {
        $application->update([
            'status' => 2,
        ]);

        Mail::to([$application->email])
            ->send(new ApplicationDeclined($application));

        flash()->error('Application for ' . $application->battlenet . ' has  declined');

        return redirect('admin');
    }
}
