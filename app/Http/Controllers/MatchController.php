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
        // foreach($request->input as $key => $value)
        // {
        //     $target = Match::where('value_name','=',$key)->first();
        //     $target->value = $value;
        // }
        
        // $match->value_name[0] = 'annualBenefitsRate';
        // $match->value_name[1] = 'memberBenefits';
        // $match->value_name[2] = 'totalInvestAmount';
        // $match->value = $request->value;

        // $match->save();

        // $annualBenefitsRate = Match::where('value_name','=','annualBenefitsRate');
        // $annualBenefitsRate->value = $request->input('annualBenefitsRate');
        // $memberBenefits = Match::where('value_name','=','memberBenefits');
        // $memberBenefits->value = $request->input('memberBenefits');
        // $totalInvestAmount = Match::where('value_name','=','totalInvestAmount');
        // $totalInvestAmount->value = $request->input('totalInvestAmount');
        
        // $match->save();
        // return response()->json([
        //     'success' => true,
        //     'msg' => '已儲存'
        // ]);
        

        // return response()->json([
        //         'success' => true,
        //         'msg' => '已儲存'
        //     ]);
        return view('category.claim_category');
    }
}
