<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\projek;
use App\Models\visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Nette\Utils\Arrays;
use SplFixedArray;

use function PHPSTORM_META\map;
use function PHPUnit\Framework\isEmpty;

class ChartController extends Controller
{
    
    public function daily_visitor(){

        $data_daily_visitor = visitor::all();
        $daily_data = [];
                
        foreach($data_daily_visitor as $dt){
        $parseWaktu = Carbon::parse($dt['created_at']);
        $dayName = $parseWaktu->englishDayOfWeek;
        
        if(!isset($daily_data[$dayName])){
            $daily_data[$dayName] = ["total" => 0];
        }
        $daily_data[$dayName]["total"]++;
        

    }
        return view('dashboard.home',compact( 'daily_data'));        
    // print_r(
    //     $daily_data["Monday"]
    // );
    
}

public function project_pie(){
        

}

}