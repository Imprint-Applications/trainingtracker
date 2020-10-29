<?php

namespace App\Models;

use App\Models\User;
use App\Models\Training;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $table = 'employer';

    protected $fillable = [
        'employer_name',
        'employer_address',
        'employer_postcode',
        'employer_logo',
        'employer_description',
        'employer_primary_color',
        'employer_secondary_color',
    ];

    public function user()
    {
        return $this->hasMany('App\Models\User');
    }

    public function training()
    {
        return $this->hasMany('App\Models\Training');
    }
}
