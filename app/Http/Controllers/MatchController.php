<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Match;

class MatchController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    private $items = array('annualBenefitsRate','memberBenefits','totalInvestAmount');
    
    public function index()
    {
        $datas = Match::where('value_type','=','frontShow')->get();
        $result = array();
        foreach($datas as $data)
        {
            if($data->value_name == 'annualBenefitsRate')
            {
                $result['annualBenefitsRate'] = $data->value;
                continue;
            }
            else if($data->value_name == 'memberBenefits')
            {
                $result['memberBenefits'] = $data->value;
                continue;
            }
            else if ($data->value_name == 'totalInvestAmount')
            {
                $result['totalInvestAmount'] = $data->value;
                continue;
            }
        }
        return view('match.match_panel',$result);   
    }



    public function update_submit(Request $request)
    {
        
        foreach($this->items as $item){
            $value = $request->input($item);

            $match = Match::where('value_name',$item)->first();

            $match->value = $value;
            $match->save();
            // $update_data['value'] = $value;
            // DB::table('data_value')->where('value_name',$item)->update($update_data);
        }

        return response()->json([
                'success' => true,
                'msg' => '已儲存'
            ]);
       
    }
}
