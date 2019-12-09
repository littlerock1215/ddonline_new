@extends('user.header')

@section('admin_content')

<link rel="stylesheet" media="all" href="/assets/admin-a2d9679cd876b77306b69505b283d25f085563d38451d0785e8d72886a9fc0e1.css" />

<div class="an-content-body" style="margin-left:180px;width:86%">
    <div class="row">
        <div class="an-body-topbar wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
<div class="an-page-title">
<h2>債權帳務列表</h2>
</div>
</div>

<div class="an-single-component with-shadow">
<div class="an-component-header search_wrapper">
<a class="an-btn an-btn-primary m-b-10" href="/admin/claim_repayments/new">新增債權帳務</a>
<div class="panel panel-default an-sidebar-search">
<div class="panel-heading" role="tab" id="headingTwo">
<h4 class="panel-title">
    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#search_panel" aria-expanded="false" aria-controls="search_panel">篩選條件</a>
</h4>
</div>
<div id="search_panel" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
<div class="panel-body">

    <div class='form-group'>
        <label class='col-sm-2 control-label l-h-34'>物件編號</label>
        <div class='col-sm-4'>
            <form novalidate="novalidate" class="simple_form new_claim_repayment" id="new_claim_repayment" action="/admin/claim_repayments" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="gVnVBz4WsYRRChPO52CvypNKPwrOz0Hqhl4BtMI2Q+4ick3K+S8FCneMMt7AysMLzXnEIv4L07Yx6uY+gYDkfg==" />
                <select name="claim_id" class="select optional form-control select2 filter-claim_id" include_blank="true" id="claim_repayment_claim_id"><option value=""></option>
</select>
</form>                            </div>
        
        <label class='col-sm-2 control-label l-h-34'>銀行代碼</label>
        <div class='col-sm-4'>
            <input type='text' name='bank_code' placeholder='請輸入銀行代碼' class='an-form-control no-redius border-bottom m-0 text_color filter-bank_code'>
        </div>
        <div class='clear'></div>
    </div>

    <div class='form-group'>
        <label class='col-sm-2 control-label l-h-34'>銀行帳號</label>
        <div class='col-sm-4'>
            <input type='text' name='bank_account_number' placeholder='請輸入銀行帳號' class='an-form-control no-redius border-bottom m-0 text_color filter-bank_account_number'>
        </div>
        
        <label class='col-sm-2 control-label l-h-34'>狀態</label>
        <div class='col-sm-4'>
            <form novalidate="novalidate" class="simple_form new_claim_repayment" id="new_claim_repayment" action="/admin/claim_repayments" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="aGZjnGCTeN4gw71IlHJ2VbTzBoNIia8gzwbUKBWk+tDLTftRp6rMUAZFnFiz2BqU6sD9q3hNPXx4sjOiVhJdQA==" />
                <select name="state" class="enum optional form-control form-control select2 filter-state" include_blank="true" id="claim_repayment_state"><option value=""></option>
<option value="reserved">保留中</option>
<option value="writeoff">已沖帳</option></select>
</form>                            </div>
        <div class='clear'></div>
    </div>

    <div class='form-group'>
        <label class='col-sm-2 control-label l-h-34'>備註</label>
        <div class='col-sm-4'>
            <input type='text' name='remark' placeholder='請輸入備註' class='an-form-control no-redius border-bottom m-0 text_color filter-remark'>
        </div>
        
        <div class='clear'></div>
    </div>

<div class='form-group'>
        <label class='col-sm-2 control-label l-h-34'>繳款日期</label>
        <div class='col-sm-10'>
        <div class='col-sm-5 no-padding'>
            <div class='col-sm-12 no-padding'>
                <input type='text' name='paid_at_start' placeholder='請輸入開始時間' class='an-form-control no-redius border-bottom m-0 text_color datetimepicker filter-paid_at'>
                </div>
            </div>
            <div class='col-sm-1 no-padding l-h-34 t-center'> ~ </div>
            <div class='col-sm-6 no-padding'>
                <div class='col-sm-12 no-padding'>
                <input type='text' name='paid_at_end' placeholder='請輸入結束時間' class='an-form-control no-redius border-bottom m-0 text_color datetimepicker filter-paid_at'>
                </div>
            </div>
            <div class='clear'></div>
            </div>
            <div class='clear'></div>
            </div>

<div class='form-group'>
        <label class='col-sm-2 control-label l-h-34'>入帳日</label>
        <div class='col-sm-10'>
        <div class='col-sm-5 no-padding'>
            <div class='col-sm-12 no-padding'>
                <input type='text' name='credited_at_start' placeholder='請輸入開始時間' class='an-form-control no-redius border-bottom m-0 text_color datetimepicker filter-credited_at'>
                </div>
            </div>
            <div class='col-sm-1 no-padding l-h-34 t-center'> ~ </div>
            <div class='col-sm-6 no-padding'>
                <div class='col-sm-12 no-padding'>
                <input type='text' name='credited_at_end' placeholder='請輸入結束時間' class='an-form-control no-redius border-bottom m-0 text_color datetimepicker filter-credited_at'>
                </div>
            </div>
            <div class='clear'></div>
            </div>
            <div class='clear'></div>
            </div>

<div class='form-group'>
        <label class='col-sm-2 control-label l-h-34'>還款金額</label>
        <div class='col-sm-10'>
        <div class='col-sm-5 no-padding'>
            <div class='col-sm-12 no-padding'>
                <input type='number' name='amount_start' placeholder='請輸入開始數值' class='an-form-control no-redius border-bottom m-0 text_color filter-amount'>
                </div>
            </div>
            <div class='col-sm-1 no-padding l-h-34 t-center'> ~ </div>
            <div class='col-sm-6 no-padding'>
                <div class='col-sm-12 no-padding'>
                <input type='number' name='amount_end' placeholder='請輸入開始數值' class='an-form-control no-redius border-bottom m-0 text_color filter-amount'>
                </div>
            </div>
            <div class='clear'></div>
            </div>
            <div class='clear'></div>
            </div>

<div class='form-group'>
        <label class='col-sm-2 control-label l-h-34'>期數</label>
        <div class='col-sm-10'>
        <div class='col-sm-5 no-padding'>
            <div class='col-sm-12 no-padding'>
                <input type='number' name='period_number_start' placeholder='請輸入開始數值' class='an-form-control no-redius border-bottom m-0 text_color filter-period_number'>
                </div>
            </div>
            <div class='col-sm-1 no-padding l-h-34 t-center'> ~ </div>
            <div class='col-sm-6 no-padding'>
                <div class='col-sm-12 no-padding'>
                <input type='number' name='period_number_end' placeholder='請輸入開始數值' class='an-form-control no-redius border-bottom m-0 text_color filter-period_number'>
                </div>
            </div>
            <div class='clear'></div>
            </div>
            <div class='clear'></div>
            </div>

    <div class="form-group pull-right">
        <div class="col-sm-12">
            <button class="btn btn-default reset-button">
                清空
            </button>
            <button class="btn btn-info filter-button">
                查詢
            </button>
        </div>
        <div class="clear"></div>
    </div>
</div>
</div>
</div>
<div class="clear"></div>
</div>

<div class="an-component-body">
<div class="an-helper-block">
<div class="table-responsive">
<table id='claim_repayments_datatable' class='table table-bordered table_breaking m-b-20'>
<thead>
<tr>
<th class='all'>物件編號</th>
<th class='all'>物件狀態</th>
<th class='all'>繳款日期</th>
{{-- <th class='all'>入帳日</th> --}}
<th class='all'>還款金額</th>
{{-- <th class='all'>期數</th>
<th class='all'>銀行代碼</th>
<th class='all'>銀行帳號</th> --}}
<th class='all'>備註</th>
<th class='all'>狀態</th>
<th class='all'>操作</th>
</tr>
</thead>
<tbody>
</tbody>
</table>

</div>
</div>
</div>
</div>


    </div>
</div>
</div>
</div>


<script src="/assets/admin-909f25b62467f942627fef2834c7df441ac27d1a1a6c018e88671ba7b15302c7.js"></script>

        <!-- bootboxjs -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js" type="text/javascript"></script>

        <!-- sweetalert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- datatables -->
        <script type="text/javascript" src="//cdn.datatables.net/v/dt/jqc-1.12.3/dt-1.10.16/b-1.4.2/sl-1.2.3/datatables.min.js"></script>
        <script src="//cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
        <script src="//cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
        <script src="//cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
        <script src="//cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
        <script src="//cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
        <script src="/assets/jquery/dataTables.rowReorder.min-248541d712a2a39a2a21e3122a00d1f57b27d2911ff75c5258546203250dd2e4.js"></script>
        <script src="/assets/jquery/dataTables.select.min-6827c36c297a439a0a04955ad3358b42d28096021d07e386815e7b8545542eb6.js"></script>
        <script src="/assets/jquery/dataTables.editor.min-8750989283fc48c6f75ac7adc11d69767d3d7547d9ef831857a5383c96e0328c.js"></script>
        <script src="/assets/jquery-fileupload/index-7776aa4b7a5cf355022658eb7e87aff47f65f1d68b20ee10c035aac122038800.js"></script>

        <!-- datetimepicker -->
        <script src="/assets/jquery/jquery.datetimepicker.full-78d292ac53a74a4f2a40611d4e329de1be284d6b15a0c024d093edb6ef08f785.js"></script>

        <!-- select2 -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js" type="text/javascript"></script>

        <!-- toastr -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript"></script>

        <!-- qtip -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/qtip2/3.0.3/jquery.qtip.min.js"> </script>

          <script src="/assets/admin/claim_repayments-36dc5c95d95cef34e3f0da267e3990745c509b6999c40142aff93b5604aba9dc.js"></script>
  <script src="/assets/admin/claim_repayments_datatables-7c2ea22f611b0e3e9dce5f3f131a4ba3d4b4aea05d964b1e58cf878305291441.js"></script>


@endsection   