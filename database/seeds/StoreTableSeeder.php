<?php

use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      	$no_of_data = 2000000;
		$test_data = array();
		for ($i = 5000; $i < $no_of_data; $i++){
		  $test_data[$i]['name'] = "name ".$i;
		  $test_data[$i]['type'] = "type ".$i;
		  $test_data[$i]['city'] = "city ".$i;
		  $test_data[$i]['address'] = "address ".$i;
		  $test_data[$i]['latitude'] = "latitude ".$i;
		  $test_data[$i]['longitude'] = "Longitude ".$i;
		  $test_data[$i]['district'] = "District ".$i;
		  $test_data[$i]['channelName'] = "Channel Name Dummy ".$i;
		  $test_data[$i]['channelTypeName'] = "Channel Type Dummy ".$i;
		  $test_data[$i]['investmentType'] = "Investment Type Dummy ".$i;
		  $test_data[$i]['storeTypeName'] = "Store Name Dummy ".$i;
		  $test_data[$i]['openingDate'] = "12-09-2020";
		  $test_data[$i]['tax_id'] = 'taxId '.$i;
		  $test_data[$i]['staff'] = "253";
		  $test_data[$i]['fsm'] = "fsm" .$i;
		  $test_data[$i]['closingTime'] = "closing Time ".$i;
		  $test_data[$i]['businessType'] = "business type ".$i;
		  $test_data[$i]['storeInfo'] = "store info ".$i;
		  $test_data[$i]['channelID'] = $i;
		  $test_data[$i]['channelTypeId'] = $i;
		  $test_data[$i]['investmentTypeId'] = $i;
		  $test_data[$i]['storetypeIID'] = $i;
		  $test_data[$i]['regionId'] = $i;
		  $test_data[$i]['region'] = "region".$i;
		}
		$chunk_data = array_chunk($test_data, 1000);
		if (isset($chunk_data) && !empty($chunk_data)) {
		  foreach ($chunk_data as $chunk_data_val) {
		     DB::table('store')->insert($chunk_data_val);
		  }
		}
    }
}
