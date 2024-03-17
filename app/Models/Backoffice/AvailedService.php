<?php

namespace App\Models\Backoffice;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AvailedService extends Model
{
    use SoftDeletes;

    protected $table = 'availed_services';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    
    public function service(){
        return $this->belongsTo('App\Models\Backoffice\Service', 'service_id','id');
    }

    public function record(){
        return $this->belongsTo('App\Models\Backoffice\Record', 'record_id','id');
    }
}
