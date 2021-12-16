<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApplicantTrait;
use App\Http\Requests\ApplicantRequest;
use App\Models\Applicant;
use Illuminate\Support\Facades\Redirect;

class ApplicantController extends Controller
{
    use ApplicantTrait;

    public function index(ApplicantRequest $applicantRequest)
    {
        Applicant::create([
            'surname' => $applicantRequest->nom,
            'first_name' => $applicantRequest->prénom,
            'age' => $applicantRequest->age,
            'email' => $applicantRequest->email,
            'phone' => $applicantRequest->téléphone,
            'year_of_bac' => $applicantRequest->année,
            'type_of_bac' => $applicantRequest->type,
            'question' => $applicantRequest->question,
            'school' => $applicantRequest->école,
        ]);

        return Redirect::route('home');
    }
    public function filter($keys)
    {
        return $this->filterApplicants($keys);
    }
}
