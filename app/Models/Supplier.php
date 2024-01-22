<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable=['name','description','file','published_by','date','route','Talento_Humano', 'administracion', 'nomina', 'psiquiatria', 'gestion_humana', 'medicos'];
}
