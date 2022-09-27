<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Patients extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = "patients";
    protected $primaryKey = "id";
    
    protected $fillable = [
            'fk_borncity',
            'fk_range', 
            'fk_eps', 
            'dni',
            'name',
            'lastname',
            'gender', 
            'borndate',
            'age',
            'civilsate',
            'academiclevel',
            'occupation',
            'address',
            'city',
            'zone',
            'country',
            'phone',
            'cellphone',
            'email',
            'emailfa',
            'documenttype',
            'documentplace', 
            'z_xOne'
    ];
}
