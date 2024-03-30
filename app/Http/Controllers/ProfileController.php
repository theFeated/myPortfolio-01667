<?php

namespace App\Http\Controllers;
use App\Models\Education;
use App\Models\ContactInformation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    public function profile()
    {
        $educations = Education::orderBy('created_at', 'desc')->get();
        $contactInformations = ContactInformation::orderBy('created_at', 'desc')->get();

        return view('profile', compact('educations', 'contactInformations'));
    }
    
}
