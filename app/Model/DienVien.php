<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class DienVien extends Model
{  
	use SoftDeletes;
	protected $dates = ['deleted_at'];

    protected $fillable = [
    	'Tendienvien',
		'Ngaysinh',
		'Gioitinh'
    ];

    public function ds_dienviens(){
    	return $this->hasMany('Model\DsDienVien','dienvien_id','id');
    }
}
