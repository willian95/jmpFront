<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appliance;
use App\Http\Requests\ApplianceStoreRequest;

class ApplianceController extends Controller
{
    
    function storeAppliance(ApplianceStoreRequest $request){

        try{

            $originName = $request->file('file')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('file')->move(public_path('cv'), $fileName);

            $url = asset('cv/'.$fileName); 

            $appliance = new Appliance;
            $appliance->name = $request->name;
            $appliance->email = $request->email;
            $appliance->cv = $url;
            $appliance->phone = $request->phone;
            $appliance->vacancy_id = $request->vacancyId;
            $appliance->save();

            return response()->json(["success" => true, "msg" => "Successfully applied"]);

        }catch(\Exception $e){
            return response()->json(["success" => false, "msg" => "Something went wrong", "ln" => $e->getLine(), "err" => $e->getMessage()]);
        }

    }

}
