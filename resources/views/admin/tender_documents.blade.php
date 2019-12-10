@extends('user.header')

@section('admin_content')

<link rel="stylesheet" media="all" href="/assets/admin-a2d9679cd876b77306b69505b283d25f085563d38451d0785e8d72886a9fc0e1.css" />




<div class="an-content-body">
    <div class="row">
        <div class="an-body-topbar wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
<div class="an-page-title">
<h2>標單列表</h2>
</div>
</div>

<div class="an-single-component with-shadow">
<div class="an-component-header search_wrapper">

<div class="panel panel-default an-sidebar-search">
<div class="panel-heading" role="tab" id="headingTwo">
<h4 class="panel-title">
    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#search_panel" aria-expanded="false" aria-controls="search_panel">篩選條件</a>
</h4>
</div>
<div id="search_panel" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
<div class="panel-body">

    <form novalidate="novalidate" class="simple_form new_tender_document" id="new_tender_document" action="/admin/tender_documents" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="CybM/tUdn9Y4QW7HeJ/cE5MUKCRPawhuC/HFdcxThmqT24I2nolPsaUOFVwY3fML6zEG9I6g6zWSoFehShOoEw==" />
        <div class='form-group'>
            <label class='col-sm-2 control-label l-h-34'>物件編號</label>
            <div class='col-sm-4'>
                <input type='text' name='claim_claim_number' placeholder='請輸入物件編號' class='an-form-control no-redius border-bottom m1 text_color filter-claim_claim_number'>
            </div>

            <label class='col-sm-2 control-label l-h-34'>債權憑證號</label>
            <div class='col-sm-4'>
                <input type='text' name='claim_certificate_number' placeholder='請輸入債權憑證號' class='an-form-control no-redius border-bottom m-0 text_color filter-claim_certificate_number'>
            </div>
            <div class='clear'></div>
        </div>

        <div class='form-group'>
            <label class='col-sm-2 control-label l-h-34'>狀態</label>
            <div class='col-sm-4'>
                <select name="state" class="enum optional form-control form-control select2 filter-state" include_blank="true" id="tender_document_state"><option value=""></option>
<option value="checked_out">待繳款</option>
<option value="paid">已繳款</option>
<option value="repayment">還款中</option>
<option value="failure_of_bid">已流標</option>
<option value="closed">已結案</option>
<option value="refunded">已退款</option>
<option value="abnormal">異常</option></select>
            </div>

            <label class='col-sm-2 control-label l-h-34'>得標序號</label>
            <div class='col-sm-4'>
                <input type='text' name='order_number' placeholder='請輸入得標序號' class='an-form-control no-redius border-bottom m-0 text_color filter-order_number'>
            </div>
            <div class='clear'></div>
        </div>

        <div class='form-group'>
            <label class='col-sm-2 control-label l-h-34'>得標人</label>
            <div class='col-sm-4'>
                <input type='text' name='user_name' placeholder='請輸入得標人' class='an-form-control no-redius border-bottom m-0 text_color filter-user_name'>
            </div>

            <label class='col-sm-2 control-label l-h-34'>得標人編號</label>
            <div class='col-sm-4'>
                <input type='text' name='user_member_number' placeholder='請輸入得標人編號' class='an-form-control no-redius border-bottom m-0 text_color filter-user_member_number'>
            </div>
            <div class='clear'></div>
        </div>

        <div class='form-group'>
            <label class='col-sm-2 control-label l-h-34'>得標人身份證</label>
            <div class='col-sm-4'>
                <input type='text' name='user_id_card_number' placeholder='請輸入得標人身份證' class='an-form-control no-redius border-bottom m-0 text_color filter-user_id_card_number'>
            </div>

            <label class='col-sm-2 control-label l-h-34'>債權轉讓人</label>
            <div class='col-sm-4'>
                <input type='text' name='claim_endorser' placeholder='請輸入債權轉讓人' class='an-form-control no-redius border-bottom m-0 text_color filter-claim_endorser'>
            </div>
            <div class='clear'></div>
        </div>

        <div class='form-group'>
            <label class='col-sm-2 control-label l-h-34'>繳款狀態</label>
            <div class='col-sm-4'>
                <select name="repayment_state" class="enum optional form-control form-control select2 filter-repayment_state" include_blank="true" id="tender_document_repayment_state"><option value=""></option>
<option value="repaid">已還款</option>
<option value="need_to_repay">應還款而未還款</option></select>
            </div>

            <div class='clear'></div>
        </div>

        <div class='form-group'>
            <label class='col-sm-2 control-label l-h-34'>存入日期</label>
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
            <label class='col-sm-2 control-label l-h-34'>起息還款日</label>
            <div class='col-sm-10'>
                <div class='col-sm-5 no-padding'>
                    <div class='col-sm-12 no-padding'>
                        <input type='text' name='target_repayment_date_start' placeholder='請輸入開始時間' class='an-form-control no-redius border-bottom m-0 text_color datetimepicker filter-target_repayment_date'>
                    </div>
                </div>
                <div class='col-sm-1 no-padding l-h-34 t-center'> ~ </div>
                <div class='col-sm-6 no-padding'>
                    <div class='col-sm-12 no-padding'>
                        <input type='text' name='target_repayment_date_end' placeholder='請輸入結束時間' class='an-form-control no-redius border-bottom m-0 text_color datetimepicker filter-target_repayment_date'>
                    </div>
                </div>
                <div class='clear'></div>
            </div>
            <div class='clear'></div>
        </div>

</form>                    <div class="form-group pull-right">
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
</div>
<div class="clear"></div>
<div class="an-component-body">
<div class="an-helper-block">
<div class="m-b-10">
<button type="button" class="an-btn an-btn-primary" id="export-all">全標單資料</button>
<button type="button" class="an-btn an-btn-primary" id="export-uncollected">匯出未繳款標單</button>
<button type="button" class="an-btn an-btn-primary" data-toggle="modal" data-target="#import-uncollected">標單繳款</button>
<button type="button" class="an-btn an-btn-primary" data-toggle="modal" data-target="#import-repayment">標單還款</button>
<button type="button" class="an-btn an-btn-primary" id="export_invoice">下載發票</button>
<button type="button" class="an-btn an-btn-primary" data-toggle="modal" data-target="#import-invoice">上傳發票</button>
<button type="button" class="an-btn an-btn-primary" id="export_abnormal">下載異常標單</button>
<button type="button" class="an-btn an-btn-primary" data-toggle="modal" data-target="#import-repurchase">上拋買回清單</button>
<div style="margin-top:10px;padding:10px; border:1px dotted; width:25%;">
    請選擇年份: 
    <select id="tax_year">
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
    </select>
    <button type="button" class="an-btn an-btn-primary" id="export_tax_list">下載報稅資料</button>
</div>
<div style="margin-top:10px;padding:10px; border:1px dotted; width:50%;">
    請選擇日期: 
    <input type="date" id="repayment_date"><br/>
    <button type="button" class="an-btn an-btn-primary export_tender_repayment"  data-type="normal">下載待還款資料</button>
    <button type="button" class="an-btn an-btn-primary export_tender_repayment"  data-type="list">下載待還款資料清單(國內)</button>
    <button type="button" class="an-btn an-btn-primary export_tender_repayment" data-type="list" data-foreign="true">下載待還款資料清單(海外)</button>
</div>
<div style="margin-top:10px;padding:10px; border:1px dotted; width:50%;">
    <form id="export_tender_pdf_form" action="/admin/tender_documents/download_tender_pdfs" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="sSPCBsnLL6YHWAnVRXjgetdhUWr4GzIuKgqE1bEG6L4p3ozOgl//wZoXck4lOs9ir0R/ujnQ0XWzWxYBN0bGxw==" />
      <label for="claim_number">債權編號：</label>
      <input type="text" name="claim_number" id="claim_number" required="required">
      <button type="submit" class="an-btn an-btn-primary">下載債權憑證</button>
</form>                </div>
</div>
<div class="table-responsive">
<table id='tender_documents_datatable' class='table table-bordered table_breaking m-b-10'>
<input type="hidden" name="tender_documents_force_repayment_early" id="js-force_repayment_early" value="true" />
<thead>
<tr>
<th class='all'>債權憑證號</th>
<th class='all'>得標人編號</th>
<th class='all'>得標人</th>
<th class='all'>得標序號</th>
<th class='all'>物件編號</th>
<th class='all'>狀態</th>
<th class='all'>標單金額</th>
<th class='all'>期數</th>
<th class='all'>年化利率</th>
<th class='all'>還款方式</th>
<th class='all'>檢視</th>
<th class='all'>繳款</th>
<th class='all'>公司買</th>
<th class='never'>存入日期</th>
<th class='never'>得標人身份證</th>
<th class='never'>繳款狀態</th>
<th class='never'>起息日</th>
<th class='never'>起息還款日</th>
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

<!-- 輸入csv檔案model -->
<div class="modal fade" tabindex="-1" role="dialog" id="import-repayment">
<form id="import_form" novalidate="novalidate" class="simple_form return" enctype="multipart/form-data" action="/admin/tender_documents/import_repayment" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">匯入還款資料</h4>
    <h5 class="modal-title">
      <ol>
        <li>請依照範例匯入,第一行請勿刪除</li>
        <li>日期格式為yyyy/MM/dd,2018年4月18日請輸入2018/4/18</li>
        <li>金額不需加上千分位符號</li>
        <li>若要修改,則該標單的同一期資料再次匯入即可</li>
        <li>系統id請勿更動</li>
      </ol>
    </h5>
</div>
<div class="modal-body">
    <input required="required" type="file" name="return[xlsx]" id="return_xlsx" />
</div>
<div class="modal-footer">
    <input type="submit" name="commit" value="匯入還款資料" class="btn btn-default btn btn-primary" data-disable-with="匯入還款資料" />
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</form></div><!-- /.modal -->


<div class="modal fade" tabindex="-2" role="dialog" id="import-uncollected">
<form id="import_uncollected_form" novalidate="novalidate" class="simple_form uncollected" enctype="multipart/form-data" action="/admin/tender_documents/import_uncollected" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">標單批次繳款</h4>
    <h5 class="modal-title">
      <ol>
        <li>繳款日期若未填入,則該筆資料會略過不處理</li>
        <li>若該筆標單狀態已繳款,則略過不進行處理</li>
        <li>繳款日期格式範例：2018/04/28 或 2018-04-28,請依照此格式輸入</li>
      </ol>
    </h5>
</div>
<div class="modal-body">
    <input required="required" type="file" name="uncollected[xlsx]" id="uncollected_xlsx" />
</div>
<div class="modal-footer">
    <input type="submit" name="commit" value="匯入繳款資料" class="btn btn-default btn btn-primary" data-disable-with="匯入繳款資料" />
    <!-- <button type="button" id='import-uncollected-confirm' data-audit="true" class="btn btn-primary">匯入繳款資料</button> -->
    <button type="button" id='import-uncollected-btn' class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</form></div><!-- /.modal -->

<div class="modal fade" tabindex="-3" role="dialog" id="import-invoice">
<form id="import_invoice_form" novalidate="novalidate" class="simple_form invoice" enctype="multipart/form-data" action="/admin/tender_documents/import_invoice" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title">匯入發票資料</h4>
    <h5 class="modal-title">
      <ol>
        <li>請依照範例匯入,第一行請勿刪除</li>
        <li>日期格式為yyyy/MM/dd,2018年4月18日請輸入2018/4/18</li>
        <li>金額不需加上千分位符號</li>
        <li>系統id請勿更動</li>
      </ol>
    </h5>
</div>
<div class="modal-body">
    <input required="required" type="file" name="invoice[xlsx]" id="invoice_xlsx" />
</div>
<div class="modal-footer">
    <input type="submit" name="commit" value="匯入發票資料" class="btn btn-default btn btn-primary" data-disable-with="匯入發票資料" />
    <button type="button" 
        id='import-invoice-btn' class="btn btn-default" data-dismiss="modal">Close
    </button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</form></div><!-- /.modal -->

<div class="modal fade" tabindex="-4" role="dialog" id="import-repurchase">
<form id="import_repurchase_form" novalidate="novalidate" class="simple_form repurchase" enctype="multipart/form-data" action="/admin/tender_documents/import_repurchase" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title">匯入買回清單</h4>
    <h5 class="modal-title">
      <ol>
        <li>日期格式為yyyy/MM/dd,2018年4月18日請輸入2018/4/18</li>
        <li>金額不需加上千分位符號</li>
        <li>債權憑證號請勿更動</li>
      </ol>
    </h5>
</div>
<div class="modal-body">
    <input required="required" type="file" name="repurchase[xlsx]" id="repurchase_xlsx" />
</div>
<div class="modal-footer">
    <input type="submit" name="commit" value="匯入買回清單資料" class="btn btn-default btn btn-primary" data-disable-with="匯入買回清單資料" />
    <button type="button" 
        id='import-repurchase-btn' class="btn btn-default" data-dismiss="modal">Close
    </button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</form></div><!-- /.modal -->



    </div>
</div>
</div>
</div>

@endsection    