<?php
namespace App\Exports;
 
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Loan;

class InvoicesExport implements FromView
{
    public function view(): View
    {
        // return view('exports.invoices', [
        //     'invoices' => Invoice::all()
        // ]);
        return view('admin.loan_test', [
            'invoices' => Loan::all()
        ]);
    }
}