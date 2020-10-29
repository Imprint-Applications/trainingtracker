<?php

namespace App\Models;

use App\Models\Module;
use App\Models\Employer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $table = 'training';

    protected $fillable = [
        'training_title',
        'training_requirement',
        'department',
        'provider',
        'refresher',
    ];

    public function modules()
    {
        return $this->hasMany('App\Models\Module');
    }

    public function employer()
    {
        return $this->belongsTo('App\Models\Employer');
    }
}
