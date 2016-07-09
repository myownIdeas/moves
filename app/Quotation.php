<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model {

    protected $table = 'quotation';
    public $timestamps = true;
    protected $fillable = array('f_name','mobile','email','text');

}