<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Apartment extends Model
{
    public $timestamps = false;
    protected $fillable=[
        'apt_floornumber',
        'apt_number',
        'apt_comments',
        'cntr_name',
    ];
    public function aptres() {
        return $this->hasMany('App\aptres');
    }
    public function conres() {
        return $this->hasMany('App\conres');
    }
    public function center() {
        return $this->belongsTo('App\center');
    }
    public function residents() {
        return $this->belongsTo('App\Resident','apt_id');

    }

}