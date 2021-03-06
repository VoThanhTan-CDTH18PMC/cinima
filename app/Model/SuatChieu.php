<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuatChieu extends Model
{
    
	use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'GioChieu',
    	'NgayChieu',
		'rap_id',
        'phim_id'
    ];

    protected function rap()
	{
		$this->belongsTo('Model\Rap','rap_id');
	}
    protected function phim()
    {
        $this->belongsTo('Model\Phim','phim_id');
    }
}
