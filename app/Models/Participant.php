<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    // A user can be male, female or other
    const GENDER_MALE = 0;
    const GENDER_FEMALE = 1;
    const GENDER_OTHER = 2;

    const STATUS_PENDING = 0;
    const STATUS_APPROVED = 1;
    const STATUS_DENIED = 2;

    const LOCATIONS = ["Wilhelmina Hospital", "FlevoHospital ALmere", "Nij Smellinghe Ziekenhuis", "Gelderland Valley Hospital", "University Medical Center Groningen", "Ziekenhuis Oost-Limburg", "Jeroen Bosch Ziekenhuis", "Amstelland Hospital", "Saxenburgh Medical Center", "Erasmus University Medical Center", "UMC Utrecht", "Adrz Medical Center"];
    const PROVINCES = ["Drenthe", "Flevoland", "Friesland", "Gelderland", "Groningen", "Limburg", "North Brabant", "North Holland", "Overijssel", "South Holland", "Utrecht", "Zeeland"];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'user_id',
        'location',
        'trial_results'
    ];


    // A participant belongs to an user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function province()
    {
        return $this->user->province;
    }

    public function setLocation()
    {
        for ($x = 0; $x < 12; $x+=1) {
            if (self::PROVINCES[$x] == $this->province()) {
                $this->location = self::LOCATIONS[$x];
            }
        }
    }

//    public function getCount()
//    {
//
//    }
}
