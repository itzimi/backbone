<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZipCode;

class ZipCodeController extends Controller
{

    public function index($zip_code)
    {
        //get the input zip code
        $result= ZipCode::where('d_codigo',"$zip_code")->first();

        //if there are no zipcodes in the db, return error
        if(!$result)return array("error_code" => 204,"description" => "No Content", "comment" => "Server received the request, but there is no information to send back");

        //building the response array
        $array = array(
          "zip_code" => sprintf('%05d', $result->d_codigo),//formating the result to five 0s
          "locality" => strtoupper($result->d_ciudad),
          "federal_entity"=> array(
            "key" => $result->c_estado,
            "name" => strtoupper($result->d_estado),
            "code" => $result->c_CP?$result->c_CP:NULL
          ),
          "settlements"=>"",
          "municipality"=> array(
            "key" => $result->c_mnpio,
            "name" => strtoupper($result->D_mnpio),
          ),
        );

        //Since one ZIpcode can have many settlements we do a second querry for the settlements array
        $result_settlements=array();
        $settlements=ZipCode::where('d_codigo',"$zip_code")->get();
        foreach ($settlements as $settlement) {
          $aux_settlement=array(
            "key" => $settlement->id_asenta_cpcons,
            "name"=> strtoupper($settlement->d_asenta),
            "zone_type" => strtoupper($settlement->d_zona),
            "settlement_type"=> array(
              "name" => $settlement->d_tipo_asenta,
            )
          );
          //building the settlements array
          array_push($result_settlements, $aux_settlement);
        }

        //updating the array
        $array['settlements']=$result_settlements;
        return $array;
    }

}
