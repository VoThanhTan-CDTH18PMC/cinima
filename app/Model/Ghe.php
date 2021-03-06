<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ghe extends Model
{
   
	use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
    	'Soghe',
		'Loaighe',
		'Trangthai',
		'rap_id'
    ];

    protected function phim()
	{
		$this->belongsTo('Model\Phim','Loaighe_id');
	}
	protected function rap()
	{
		$this->belongsTo('Model\Rap','rap_id');
	}

	protected function ve()
	{
		$this->hasOne('Model\Ve','ghe_id','id');
	}
}
