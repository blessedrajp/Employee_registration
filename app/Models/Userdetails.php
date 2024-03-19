<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdetails extends Model
{
    protected $table="userdetails";
    protected $fillable=['firstname','lastname','email','altemail','password','gender','dob','number','altnumber','country','city','address','resume','skills','photo','coverletter','terms'];
    // protected $guarded=[];

}
