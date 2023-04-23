<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hsp extends Model
{
    use HasFactory;
    protected $table= "hsp";
    public $timestamps = false;

    protected $fillable = [
    'fecha_medicion',
    'hsp'];
    
    protected $dates=['fecha_medicion'];


}
