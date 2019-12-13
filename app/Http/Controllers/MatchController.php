<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Match;

class MatchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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



    public function update_submit(Request $request, Match $match)
    {
        
        $datas = [];
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

        return response()->json([
                'success' => true,
                'msg' => '已儲存'
            ]);
       
    }
}
