<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Additional_service extends Model
{
    use HasFactory;
    protected $table = "additional_services";
    protected $fillable = ['name'];
}
