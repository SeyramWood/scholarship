<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return inertia('Dashboard', [
            //
        ]);
    }
    public function applicants()
    {
        return inertia('Applicant/Applicants', [
            //
        ]);
    }
    public function reviewedApplicants()
    {
        return inertia('Applicant/ReviewedApplicants', [
            //
        ]);
    }
}
