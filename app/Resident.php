<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    /*public static $table = 'residents';

    public static $rules = array(
        'res_pccid' => 'required|min:1',
        'res_fname' => 'required|min:1',
        'res_mname' => 'required|min:1',
        'res_lname' => 'required|min:1',
        'res_gender' => 'required|min:1',
        'res_phone' => 'required|min:10',
        'res_cellphone' => 'required|min:10',
        'res_email' => 'required|min:1',
        'res_comment' => 'required|min:10',
        'res_status' => 'required|min:1 '
    );
    public static function validate($data) {
        return validator::make($data, static::$rules);
    } */

    public $timestamps = false;
    protected $fillable=[
        'id',
        'res_pccid',
        'apt_id',
        'res_fname',
        'res_mname',
        'res_lname',
        'res_gender',
        'res_phone',
        'res_cellphone',
        'res_email',
        'res_comment',
        'res_status',
    ];

    public function resident() {

    }

}
