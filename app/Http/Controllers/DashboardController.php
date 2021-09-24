<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Review;
use App\Models\Scholarship;
use App\Traits\ApplicantTrait;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use ApplicantTrait;

    public function index()
    {
        return inertia('Dashboard', [
            'applicantCount' => fn () => $this->countApplicants(),
            'latestApplicants' => fn () => $this->getApplicants(3),
        ]);
    }
    public function applicants()
    {
        return inertia('Applicant/Applicants', [
            'applicants' => fn () => $this->getApplicants(),
        ]);
    }
    public function reviewedApplicants()
    {
        return inertia('Applicant/ReviewedApplicants', [
            //
        ]);
    }
}
