<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LichChieu extends Model
{
    
	use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    protected $fillable = [
		'phim_id',
		'rap_id',
		'thgian_batdau',
		'thgian_ketthuc'
    ];

    protected function phim()
	{
		$this->belongsTo('Model\Phim','phim_id');
	}
	protected function rap()
	{
		$this->belongsTo('Model\Rap','rap_id');
	}
}
