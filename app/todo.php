<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class todo extends Model
{

    protected $table = "tbltodo";

    protected $fillable = ["keterangan","status"];
}
