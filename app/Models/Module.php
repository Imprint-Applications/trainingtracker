<?php

namespace App\Models;

use App\Models\Training;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $table = 'modules';

    protected $fillable = [
        'training_id',
        'module_name',
        'module_requirement',
        'duration',
        'refresher',
        'created_by',
    ];

    public function training()
    {
        return $this->belongsTo('App\Models\Training');
    }

    public function user()
    {
        return $this->hasMany('App\Models\User');
    }
}
