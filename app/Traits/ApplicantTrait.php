<?php

namespace App\Traits;

use App\Models\Applicant;
use App\Models\Review;
use Illuminate\Console\Application;

/**
 * ApplicantTrait
 */
trait ApplicantTrait
{
  public function countApplicants()
  {
    return [
      'total' => Applicant::count(),
      // 'inProgress' => Applicant::whereNotIn('status', ['completed'])->count(),
      // 'completed' => Applicant::whereIn('status', ['completed'])->count(),
      // 'scholarship' => Applicant::where('scholarship', '!=', '')->count(),
      // 'reviewed' => Review::count()
    ];
  }

  public function getApplicants($limit = null)
  {
    if ($limit) {
      return Applicant::select('id', 'surname', 'first_name', 'email', 'phone')
        ->limit($limit)
        ->orderByDesc('id')->get();
    }
    return Applicant::orderByDesc('id')->get();
  }

  public function filterApplicants($keys)
  {
    $terms = explode(',', $keys);
    $status = [];
    $scholarship = null;
    $reviewed = null;
    foreach ($terms as  $value) {
      if ($value === 'In-Progress') {
        array_push($status, '');
      }
      if ($value === 'Completed') {
        array_push($status, 'completed');
      }
      if ($value === 'Scholarship') {
        $scholarship = true;
      }
      if ($value === 'Reviewed') {
        $reviewed = true;
      }
    }
    // dd($status, $scholarship, $reviewed);
    if ($reviewed) {
      if ($scholarship) {
        if (count($status)) {
          return Review::join('applicants', 'applicants.id', '=', 'reviews.applicant_id')
            ->whereIn('applicants.status', $status)
            ->where('applicants.scholarship', '!=', '')
            ->select(
              'reviews.id',
              'reviews.reviewer_name',
              'applicants.first_name',
              'applicants.last_name',
              'applicants.email',
              'applicants.contact_number',
              'applicants.desired_major'
            )
            ->orderByDesc('reviews.id')->get();
        }
        return Review::join('applicants', 'applicants.id', '=', 'reviews.applicant_id')
          ->where('applicants.scholarship', '!=', '')
          ->select(
            'reviews.id',
            'reviews.reviewer_name',
            'applicants.first_name',
            'applicants.last_name',
            'applicants.email',
            'applicants.contact_number',
            'applicants.desired_major'
          )
          ->orderByDesc('reviews.id')->get();
      }
      return Review::join('applicants', 'applicants.id', '=', 'reviews.applicant_id')
        ->select(
          'reviews.id',
          'reviews.reviewer_name',
          'applicants.first_name',
          'applicants.last_name',
          'applicants.email',
          'applicants.contact_number',
          'applicants.desired_major'
        )
        ->orderByDesc('reviews.id')->get();
    } elseif ($scholarship) {
      if (count($status)) {
        return Applicant::whereIn('status', $status)
          ->where('scholarship', '!=', '')
          ->select('id', 'first_name', 'last_name', 'email', 'contact_number', 'desired_major')
          ->orderByDesc('id')->get();
      }
      return Applicant::where('scholarship', '!=', '')
        ->select('id', 'first_name', 'last_name', 'email', 'contact_number', 'desired_major')
        ->orderByDesc('id')->get();
    } else {
      return Applicant::whereIn('status', $status)
        ->select('id', 'first_name', 'last_name', 'email', 'contact_number', 'desired_major')
        ->orderByDesc('id')->get();
    }
  }
}
