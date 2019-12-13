<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Loan;

use App\Claim;
// use App\Exports\UsersExport;
use App\Exports\InvoicesExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function admin_index(){
        return view('user.login');
    }
    
    public function admin_loans_index(){

        $data['loans'] = Loan::orderBy('loan_id','asc')->get();
        return view('admin.loans',$data);
    }
    
    public function admin_loans_choose(Request $request){

        // $target = $request->id;
        // $row['content'] = $request->content;
        $content = $request->content;
        // $row['event_type_id'] = $request->categorynew_type_id;
        DB::table('loans')->where('lender_name', $content)->get();
        $data['row'] = $content;
        
        return response()->json([
            'success' =>true,
            'msg' =>'新增成功'
        ]);
    }
    
    // public function admin_loans_detail(){

    //     $data['loans'] = Loan::orderBy('loan_id','asc')->get();
    //     return view('admin.loans_detail',$data);
    // }

    public function admin_loans_detail(Loan $event)
    {
        $data['loans'] = $event;
        return view('admin.loans_detail',$data);
    }

    public function admin_claims_index(){

        $data['claims'] = Claim::orderBy('claim_id','asc')->get();
        return view('admin.claims',$data);
        // return view('admin.claims');
    }

    public function admin_claim_repayments(){

        return view('admin.claim_repayments');
    }

    // public function export(){
    //     return Excel::download(new UsersExport(), 'users.xlsx');
    // }

    public function export() {
        return Excel::download(new InvoicesExport(), 'invoice.xlsx');
    }

    public function admin_tender_documents_index(){
        return view('admin.tender_documents');
    }

    public function admin_tender_detail_index(){
        return view('admin.tender_detail');
    }

    public function admin_internal_letters_index(){
        return view('admin.internal_letters');
    }
}
