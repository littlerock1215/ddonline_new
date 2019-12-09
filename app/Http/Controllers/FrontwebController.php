<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Loan;

class FrontwebController extends Controller
{
    // public function index(){
    //     return view('home.panel');
    // }

    public function index()
    {
        $data['loans'] = Loan::orderBy('loan_id','asc')->get();
        return view('home.panel',$data);

    }
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    
    public function about_index(){
        return view('about.business_model');
    }
    public function about_index_finance (){
        return view('about.finance');
    }
    public function about_index_news (){
        return view('about.news');
    }
    public function operation_index(){
        return view('operation.operational_process');
    }
    public function operation_faq(){
        return view('operation.faq');
    }
    public function claim_category_index(){
        return view('category.claim_category');
    }
    public function claim_category_special(){
        return view('category.claim_category_special');
    }
    public function loan_index(){
        return view('loan.panel');
    }

    // public function sign_in_index(){
    //     return view('user.login');
    // }
}
