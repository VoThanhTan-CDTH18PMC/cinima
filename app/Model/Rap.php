<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rap extends Model
{
   
	use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    protected $fillable = [
    	'Tenrap',
		'hang',
		'cot',
        'chinhanh'
    ];

    public function ghes(){
    	return $this->hasMany('Model\Ghe','rap_id','id');
    }
    public function lichchieus(){
    	return $this->hasMany('Model\LichChieu','id_rap','id');
    }
    public function suatchieu(){
        return $this->hasMany('Model\SuatChieu','id_rap','id');
    }
}
