<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
	protected $table = "store";
    //
     protected $fillable = ['name', 'type','city','address','latitude','longitude','district','channelName','channelTypeName','investmentType','storeTypeName','openingDate','tax_id','staff','fsm','closingTime','businessType','storeInfo','channelID','channelTypeId','investmentTypeId','storetypeIID','regionId','region'];
}
