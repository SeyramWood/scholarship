<?php

namespace App\Http\Controllers;

use App\Traits\ApplicantTrait;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    use ApplicantTrait;

    public function filter($keys)
    {
        return $this->filterApplicants($keys);
    }
}
