<?php

namespace App\Http\Controllers;
use App\Models\Skill;
use App\Models\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{

    public function skills()
    {
        $skills = Skill::latest()->get();
        $services = Services::all();

        foreach ($services as $service) {
            $service->fetchImageManually = !Storage::exists('images/' . $service->image);
        }
    
        return view('skills', compact( 'skills', 'services'));   
    }
}
