<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


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
        'dni',
        'photo',
        'documenttype',
        'documentplace',
        'name',
        'lastname',
        'gender',
        'borndate',
        'age',
        'academiclevel',
        'fkborncountry',
        'fkbornstate',
        'fkborncity',
        'fklivecountry',
        'fklivestate',
        'fklivecity',
        'civilsate',
        'job',
        'address',
        'phone',
        'cellphone',
        'email',
        'emailfa',
        'capitado',
        'fkeps',
        'epstype',
        'contract',
        'epslevel',
        'legaldocumenttype',
        'legaldni',
        'legalname',
        'kindred',
        'legalphone',
        'legaladress',
        'observation',
        'violence',
        'abused',
        'fromwork',
        'guardianship',
        'gaoler',
        'icbf',
        'pregnant',
        'suicide',
        'virtualadvice',
        'hospitalitation',
        'external',
        'cenpi',
        'srpa',
        'activeselection',
        'through',
        'pyramid',
        'particular',
        'z_xOne'
    ];


    public function name(): Attribute
    {
        return new Attribute(
            get: fn($value) => strtoupper($value),
            set: fn($value) => strtolower($value)
        );
    }

    // public function setPasswordAttribute ($value) {
    //     $this->attributes['password']=bcrypt($value);
    // }}

}

            