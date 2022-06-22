<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formdata extends Model
{
    use HasFactory;
    protected $table = "form";
    protected  $updated_at = false;
    protected  $created_at = false;
    
}
