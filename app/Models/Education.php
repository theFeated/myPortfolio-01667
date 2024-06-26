<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'levelOfEducation',
        'institutionName',
        'location',
        'yearStarted',
        'yearGraduated',
        'image',
        'institutionColor',
        'institutionTextColor'
    ];

}
