<?php

namespace App\Models\Backoffice;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;

    protected $table = 'appointments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $guarded = [];

    public function patient(){
        return $this->belongsTo('App\Models\Backoffice\Patient', 'patient_id','id');
    }

    public function pet(){
        return $this->belongsTo('App\Models\Backoffice\Pets', 'pet_id','id');
    }

    public function vet(){
        return $this->belongsTo('App\Models\Backoffice\Vet', 'vet_id','id');
    }
    
    public function service(){
        return $this->belongsTo('App\Models\Backoffice\Service', 'service_id','id');
    }
    
    public function serviceType(){
        return $this->belongsTo('App\Models\Backoffice\ServiceType', 'service_type_id','id');
    }
}
