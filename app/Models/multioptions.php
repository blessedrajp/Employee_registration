<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multioptions extends Model
{
    protected $table="multioptions";
    protected $fillable=['skill','image','status'];
}
