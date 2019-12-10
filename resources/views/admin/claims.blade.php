@extends('user.header')

@section('admin_content')

{{-- <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

        
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/dt/jqc-1.12.3/dt-1.10.16/b-1.4.2/sl-1.2.3/datatables.min.css"/>
        <link href="//cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="//cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" media="all" href="/assets/jquery/rowReorder.dataTables.min-c7103b3919e75b8e50aa60bff722a28c6d8e13c76883b29f83c46a19f02b47c6.css" />
        <link rel="stylesheet" media="all" href="/assets/jquery/select.dataTables.min-053e24e51e6f01f4284058a32b02bc972986d765e5a024f892de3e1c97bd635e.css" />
        <link rel="stylesheet" media="all" href="/assets/jquery/editor.dataTables.min-5b6ce1df8602d8430747983600415129e013e7965f0db27f2700ec583051e98e.css" />

        <link rel="shortcut icon" href="/images/favicon.ico">

        
        <link rel="stylesheet" media="all" href="/assets/jquery/jquery.datetimepicker-687fd1e22bd02562a9edbd430eca033e571a906b22f03dc62156165bd34a1f64.css" />

        
        <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" type="text/css">
        <link href="//cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" type="text/css">

        
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/qtip2/3.0.3/jquery.qtip.min.css"> --}}

        <link rel="stylesheet" media="all" href="/assets/admin-a2d9679cd876b77306b69505b283d25f085563d38451d0785e8d72886a9fc0e1.css" />
        
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
{{-- <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> --}}
<script type="text/javascript" src="https://cdn.rawgit.com/Holt59/datatable/master/js/datatable.jquery.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/Holt59/datatable/master/js/datatable.js"></script>

<script id="fr-fek">try{(function (k){localStorage.FEK=k;t=document.getElementById('fr-fek');t.parentNode.removeChild(t);})('QA-8pj1euawE2ln==')}catch(e){}</script>
        <script id="fr-fek">try{(function (k){localStorage.FEK=k;t=document.getElementById('fr-fek');t.parentNode.removeChild(t);})('9wdlhnrsmkaD3kfgC6xz==')}catch(e){}</script>







<div class="an-content-body" style="padding-left:210px">
    <div class="row">
        <div class="an-body-topbar wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
<div class="an-page-title">
<h2>債權列表</h2>
</div>
</div>




<div class="an-single-component with-shadow">
<div class="an-component-header search_wrapper">
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="interestRatePanel">
<h4 class="panel-title" style="display:inline">年利率(依風險類別)</h4>
<a class="btn btn-info" style="display:inline-block" role="button" data-toggle="collapse" data-parent="#accordion" href="#riskPanel" aria-expanded="false" aria-controls="riskPanel">
編輯
</a>
</div>
<div class="panel-body">
<h3> > 12 期 </h3>
<table class="table table-bordered table-breaking">
<thead>
<tr>
    <th>A</th>
    <th>B</th>
    <th>C</th>
    <th>D</th>
    <th>E</th>
</tr>
</thead>
<tbody>
<tr>
        <td>7.25%</td>
        <td>7.5%</td>
        <td>7.75%</td>
        <td>8.0%</td>
        <td>8.25%</td>
</tr>
</tbody>
</table>
<h3> <= 12 期 </h3>
<table class="table table-bordered table-breaking">
<thead>
<tr>
    <th>A</th>
    <th>B</th>
    <th>C</th>
    <th>D</th>
    <th>E</th>
</tr>
</thead>
<tbody>
<tr>
        <td>7.25%</td>
        <td>7.5%</td>
        <td>7.75%</td>
        <td>8.0%</td>
        <td>8.25%</td>
</tr>
</tbody>
</table>
</div>
<div id="riskPanel" class="panel-collaspe collapse" role="tabpanel" aria-labelledby="interestRatePanel">
<h4 style="padding-left:15px;">> 12期 </h4>
<div class="panel-body">
<table class="table table-bordered table-breaking">
<thead>
    <tr>
        <th>風險類別</th>
        <th>年利率</th>
        <th>%</th>
    </tr>
</thead>
<tbody>
        <tr>
            <td>A</td>
            <td>
                <div class="riskSlideContainer">
                    <input name="system_variable[risk_percentage_a_12]" type="range" min="0" max="10" step="0.01" value="7.25" class="slider riskSlider">
                </div>
            </td>
            <td style="width:20%"><span class="riskSliderValue">7.25</span></td>
        </tr>
        <tr>
            <td>B</td>
            <td>
                <div class="riskSlideContainer">
                    <input name="system_variable[risk_percentage_b_12]" type="range" min="0" max="10" step="0.01" value="7.5" class="slider riskSlider">
                </div>
            </td>
            <td style="width:20%"><span class="riskSliderValue">7.5</span></td>
        </tr>
        <tr>
            <td>C</td>
            <td>
                <div class="riskSlideContainer">
                    <input name="system_variable[risk_percentage_c_12]" type="range" min="0" max="10" step="0.01" value="7.75" class="slider riskSlider">
                </div>
            </td>
            <td style="width:20%"><span class="riskSliderValue">7.75</span></td>
        </tr>
        <tr>
            <td>D</td>
            <td>
                <div class="riskSlideContainer">
                    <input name="system_variable[risk_percentage_d_12]" type="range" min="0" max="10" step="0.01" value="8.0" class="slider riskSlider">
                </div>
            </td>
            <td style="width:20%"><span class="riskSliderValue">8.0</span></td>
        </tr>
        <tr>
            <td>E</td>
            <td>
                <div class="riskSlideContainer">
                    <input name="system_variable[risk_percentage_e_12]" type="range" min="0" max="10" step="0.01" value="8.25" class="slider riskSlider">
                </div>
            </td>
            <td style="width:20%"><span class="riskSliderValue">8.25</span></td>
        </tr>
</tbody>
</table>
<a href="" class="btn btn-primary updateInterestRates" style="float:right">儲存</a>
</div>
<h4 style="padding-left:15px;"> <= 12期 </h4>
<div class="panel-body">
<table class="table table-bordered table-breaking">
<thead>
    <tr>
        <th>風險類別</th>
        <th>年利率</th>
        <th>%</th>
    </tr>
</thead>
<tbody>
        <tr>
            <td>A</td>
            <td>
                <div class="riskSlideContainer">
                    <input name="system_variable[risk_percentage_a]" type="range" min="0" max="10" step="0.01" value="7.25" class="slider riskSlider">
                </div>
            </td>
            <td style="width:20%"><span class="riskSliderValue">7.25</span></td>
        </tr>
        <tr>
            <td>B</td>
            <td>
                <div class="riskSlideContainer">
                    <input name="system_variable[risk_percentage_b]" type="range" min="0" max="10" step="0.01" value="7.5" class="slider riskSlider">
                </div>
            </td>
            <td style="width:20%"><span class="riskSliderValue">7.5</span></td>
        </tr>
        <tr>
            <td>C</td>
            <td>
                <div class="riskSlideContainer">
                    <input name="system_variable[risk_percentage_c]" type="range" min="0" max="10" step="0.01" value="7.75" class="slider riskSlider">
                </div>
            </td>
            <td style="width:20%"><span class="riskSliderValue">7.75</span></td>
        </tr>
        <tr>
            <td>D</td>
            <td>
                <div class="riskSlideContainer">
                    <input name="system_variable[risk_percentage_d]" type="range" min="0" max="10" step="0.01" value="8.0" class="slider riskSlider">
                </div>
            </td>
            <td style="width:20%"><span class="riskSliderValue">8.0</span></td>
        </tr>
        <tr>
            <td>E</td>
            <td>
                <div class="riskSlideContainer">
                    <input name="system_variable[risk_percentage_e]" type="range" min="0" max="10" step="0.01" value="8.25" class="slider riskSlider">
                </div>
            </td>
            <td style="width:20%"><span class="riskSliderValue">8.25</span></td>
        </tr>
</tbody>
</table>
<a href="" class="btn btn-primary updateInterestRates" style="float:right">儲存</a>
</div>
</div>
</div>

</div>

<div class="an-component-header search_wrapper">
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="commissionTab">
<h4 class="panel-title" style="display:inline">標單佣金回饋金 (每萬元)</h4>
<a class="btn btn-info" style="display:inline-block" role="button" data-toggle="collapse" data-parent="#accordion" href="#commissionPanel" aria-expanded="false" aria-controls="commissionPanel">
編輯
</a>
</div>
<div class="panel-body">
<table class="table table-bordered table-breaking">
<thead>
<tr>
    <th> &lt; 6 期 </th>
    <th> &gt;= 6 &amp;&amp; &lt; 12 期 </th>
    <th> &gt;= 12 &amp;&amp; &lt; 18 期 </th>
    <th> &gt;= 18 期 </th>
</tr>
</thead>
<tbody>
<tr>
        <td>0</td>
        <td>8</td>
        <td>12</td>
        <td>20</td>
</tr>
</tbody>
</table>
</div>
<div id="commissionPanel" class="panel-collaspe collapse" role="tabpanel" aria-labelledby="commissionPanel">
<div class="panel-body">
<form novalidate="novalidate" class="simple_form edit_system_variable" id="edit_system_variable_19" action="/admin/system_variables" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="patch" /><input type="hidden" name="authenticity_token" value="RJaxKhws1SRZjoDmh3KLNBpGwWDFZ4BNEiNvwh2eq0NJdNf7H9O12H7005T3VfUGJbLn1V6XZHN8F5dzjzs7Gg==" />
<table class="table table-bordered table-breaking">
    <thead>
        <tr>
            <th>項次</th>
            <th>回饋金 (每萬元)</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td> &lt; 6 期</td>
                <td><input class="commissionRate" name="system_variable[commission_6]" value="0"></td>
            </tr>
            <tr>
                <td> &gt;= 6 &amp;&amp; &lt; 12 期</td>
                <td><input class="commissionRate" name="system_variable[commission_12]" value="8"></td>
            </tr>
            <tr>
                <td> &gt;= 12 &amp;&amp; &lt; 18 期</td>
                <td><input class="commissionRate" name="system_variable[commission_18]" value="12"></td>
            </tr>
            <tr>
                <td> &gt;= 18 期</td>
                <td><input class="commissionRate" name="system_variable[commission_24]" value="20"></td>
            </tr>
    </tbody>
</table>
<button class="btn btn-primary" type="submit" style="float:right" id="updateCommissionRate">儲存</button>
</form>        </div>
</div>
</div>
</div>

<div class="an-component-header search_wrapper">
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="interestRatePanel">
<h4 class="panel-title" style="display:inline">物件狀態切換天數(T = 檔案上拋日)</h4>
<a class="btn btn-info" style="display:inline-block" role="button" data-toggle="collapse" data-parent="#accordion" href="#statusDaysPanel" aria-expanded="false" aria-controls="statusDaysPanel">
編輯
</a>
</div>
<div class="panel-body">
<table class="table table-bordered table-breaking">
<thead>
<tr>
    <th>開標</th>
    <th>預計結標日</th>
    <th>結標後最後繳款期限</th>
    <th>起息日</th>
    <th>下標後繳款期限</th>
</tr>
</thead>
<tbody>
<tr>
        <td>T + 1</td>
        <td>T + 6</td>
        <td>T + 8</td>
        <td>T + 9</td>
        <td>T + 8</td>
</tr>
</tbody>
</table>
</div>
<div id="statusDaysPanel" class="panel-collaspe collapse" role="tabpanel" aria-labelledby="interestRatePanel">
<div class="panel-body">
<table class="table table-bordered table-breaking">
<thead>
    <tr>
        <th>項目</th>
        <th>天數調整</th>
        <th>天數</th>
    </tr>
</thead>
<tbody>
        <tr>
            <td>開標日</td>
            <td>
                <div class="riskSlideContainer">
                    <input name="system_variable[opened]" type="range" min="1" max="60" step="1" value="1" class="slider statusDaysSlider">
                </div>
            </td>
            <td><span class="riskSliderValue">1</span></td>
        </tr>
        <tr>
            <td>結標日</td>
            <td>
                <div class="riskSlideContainer">
                    <input name="system_variable[closed]" type="range" min="1" max="60" step="1" value="6" class="slider statusDaysSlider">
                </div>
            </td>
            <td><span class="riskSliderValue">6</span></td>
        </tr>
        <tr>
            <td>結標後最後繳款期限</td>
            <td>
                <div class="riskSlideContainer">
                    <input name="system_variable[payment_final_deadline]" type="range" min="1" max="60" step="1" value="8" class="slider statusDaysSlider">
                </div>
            </td>
            <td><span class="riskSliderValue">8</span></td>
        </tr>
        <tr>
            <td>起息日</td>
            <td>
                <div class="riskSlideContainer">
                    <input name="system_variable[repayment]" type="range" min="1" max="60" step="1" value="9" class="slider statusDaysSlider">
                </div>
            </td>
            <td><span class="riskSliderValue">9</span></td>
        </tr>
        <tr>
            <td>下標後教款期限</td>
            <td>
                <div class="riskSlideContainer">
                    <input name="system_variable[payment_deadline]" type="range" min="1" max="60" step="1" value="8" class="slider statusDaysSlider">
                </div>
            </td>
            <td><span class="riskSliderValue">8</span></td>
        </tr>
</tbody>
</table>
<a href="" class="btn btn-primary" style="float:right" id="updateClaimStatusDays">儲存</a>
</div>
</div>
</div>

</div>

<div class="an-component-header search_wrapper">
<div class="m-b-10">
<a class="an-btn an-btn-primary" href="/admin/claims/new">新增債權</a>
<button class="an-btn an-btn-primary" data-toggle="modal" data-target="#import-modal">匯入</button>
<button type="button" class="an-btn an-btn-primary" id="export-floating">匯出流標應還款項</button>
<button type="button" class="an-btn an-btn-primary" data-toggle="modal" data-target="#import-floating">匯入流標還款</button>

</div>

<div class="m-b-10" style="width: 50%; background-color: white; padding: 10px; border: 1px dotted">
開始時間: <input type="date" id="claim_state_start">
結束時間: <input type="date" id="claim_state_end">
<button class="an-btn an-btn-primary" id="export_claim_state">匯出債權狀態</button>
</div>

<div class="panel panel-default an-sidebar-search">
<div class="panel-heading" role="tab" id="headingTwo">
<h4 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#search_panel" aria-expanded="false" aria-controls="search_panel">篩選條件</a>
</h4>
</div>
<div id="search_panel" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
<div class="panel-body">

<div class="form-group">
<label class="col-sm-2 control-label l-h-34">物件編號</label>
<div class="col-sm-4">
    <input type="text" name="claim_number" placeholder="請輸入物件編號" class="an-form-control no-redius border-bottom m-0 text_color filter-claim_number">
</div>

<label class="col-sm-2 control-label l-h-34">對應流水號</label>
<div class="col-sm-4">
    <input type="text" name="serial_number" placeholder="請輸入對應流水號" class="an-form-control no-redius border-bottom m-0 text_color filter-serial_number">
</div>
<div class="clear"></div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label l-h-34">狀態</label>
<div class="col-sm-4">
    <form novalidate="novalidate" class="simple_form new_claim" id="new_claim" action="/admin/claims" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="1QYfonZ9cVAvJyCwH8M9XCXuxXyDsvdb8JHJJIDQK9nY5HlzdYIRrAhdc8Jv5ENuGhrjyRhCE2WepTGVEnW7gA==" />
        <select name="state" class="select required form-control select2 filter-state" include_blank="true" id="claim_state"><option value=""></option>
<option value="0">上架預覽</option>
<option value="1">募集中</option>
<option value="2">結標繳款</option>
<option value="3">已流標</option>
<option value="4">繳息還款</option>
<option value="5">回收結案</option>
<option value="6">墊款</option>
<option value="7">逾期</option>
<option value="8">買回</option></select>
</div>

<label class="col-sm-2 control-label l-h-34">募集群別</label>
<div class="col-sm-4">
    <select name="grouping" class="select optional form-control select2 filter-grouping" include_blank="true" id="claim_grouping"><option value=""></option>
<option value=""></option>
<option value="S">S</option>
<option value="asdf">asdf</option></select>
</div>
<div class="clear"></div>

<label class="col-sm-2 control-label l-h-34">風險類別</label>
<div class="col-sm-4">
    <select name="risk_category" class="select required form-control select2 filter-risk_category" include_blank="true" id="claim_risk_category"><option value=""></option>
<option value="0">A</option>
<option value="1">B</option>
<option value="2">C</option>
<option value="3">D</option>
<option value="4">E</option>
<option value="5">V</option>
<option value="6">H</option>
<option value="7">M</option>
<option value="8">S</option></select>
</div>

<label class="col-sm-2 control-label l-h-34">場景類別</label>
<div class="col-sm-4">
    <input type="text" name="typing" placeholder="請輸入場景類別" class="an-form-control no-redius border-bottom m-0 text_color filter-typing">
</form>                </div>
<div class="clear"></div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label l-h-34">上架日</label>
<div class="col-sm-10">
<div class="col-sm-5 no-padding">
<div class="col-sm-12 no-padding">
<input type="text" name="launched_at_start" placeholder="請輸入開始時間" class="an-form-control no-redius border-bottom m-0 text_color datetimepicker filter-launched_at">
</div>
</div>
<div class="col-sm-1 no-padding l-h-34 t-center"> ~ </div>
<div class="col-sm-6 no-padding">
<div class="col-sm-12 no-padding">
<input type="text" name="launched_at_end" placeholder="請輸入結束時間" class="an-form-control no-redius border-bottom m-0 text_color datetimepicker filter-launched_at">
</div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label l-h-34">結標日</label>
<div class="col-sm-10">
<div class="col-sm-5 no-padding">
<div class="col-sm-12 no-padding">
<input type="text" name="closed_at_start" placeholder="請輸入開始時間" class="an-form-control no-redius border-bottom m-0 text_color datetimepicker filter-closed_at">
</div>
</div>
<div class="col-sm-1 no-padding l-h-34 t-center"> ~ </div>
<div class="col-sm-6 no-padding">
<div class="col-sm-12 no-padding">
<input type="text" name="closed_at_end" placeholder="請輸入結束時間" class="an-form-control no-redius border-bottom m-0 text_color datetimepicker filter-closed_at">
</div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
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

<div class="paging"></div>

<table id="claims_datatable" class="table table-bordered table_breaking m-b-10">
{{-- <input type="hidden" name="claims_edit_button_display_boolean" id="js-claims-edit-button-display-boolean" value="true" />
<input type="hidden" name="claims_collect_close_setup_visible_or_destroy_button_display_boolean" id="js-claims-collect-close-setup-visible-or-destroy-button-display-boolean" value="true" />
<input type="hidden" name="claims_force_float_early" id="js-force_float_early" value="true" /> --}}

    <thead>
        <tr>
            <th class="all">物件編號</th>
            <th class="all">對應流水號</th>
            <th class="all">狀態</th>
            <th class="all">上拋次數</th>
            <th class="all">預計募集金額</th>
            <th class="all">原始期數</th>
            <th class="all">總標單金額</th>
            <th class="all">實際募集金額</th>
            <th class="all">強制結標</th>
            <th class="all">設定</th>
            <th class="all">顯示</th>
            <th class="all">操作</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($claims as $row)
            <tr id="1" role="row" class="odd" dtat-id="1">
                <td class="sorting_1" tabindex="0">
                    <a href="admin/claims/1">{{ $row->claim_number }}</a>
                </td>
                <td class="editable col-serial_number">{{ $row->tax_id }}</td>
                <td class="editable col-state">{{ $row->claim_state }}</td>
                        <td class="editable col-state"></td>
                <td class="editable col-state">{{ $row->staging_amount }}</td>
                <td class="editable col-state">{{ $row->periods }}</td>
                <td class="editable col-state"></td>
                <td class="editable col-state">{{ $row->final_payment }}</td>
                <td class="editable col-state"></td>
                <td class="editable col-state"></td>
                <td class="editable col-state">
                    <a href="#" class="btn btn-info">隱藏</a>
                </td>
                <td class="editable col-state"></td>
            </tr>
        @endforeach
    </tbody>
</table>

</div>
</div>
</div>
</div>

<div class="modal fade" tabindex="-2" role="dialog" id="import-floating">
<form id="import_floating_return_form" novalidate="novalidate" class="simple_form floating" enctype="multipart/form-data" action="/admin/claims/import_floating_return" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">匯入流標還款</h4>
    <h5 class="modal-title">
      <ol>
        <li>返還日期格式範例：2018/04/28 或 2018-04-28,請依照此格式輸入</li>
        <li>標單若再次匯入,則會覆蓋原有返還日期</li>
      </ol>
    </h5>
</div>
<div class="modal-body">
    <input required="required" type="file" name="floating[xlsx]" id="floating_xlsx" />
</div>
<div class="modal-footer">
    <input type="submit" name="commit" value="匯入還款資料" class="btn btn-default btn btn-primary" data-disable-with="匯入還款資料" />
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</form></div><!-- /.modal -->



<div class="modal fade" tabindex="-1" role="dialog" id="import-modal">
<form id="import_claims_form" novalidate="novalidate" class="simple_form claim" enctype="multipart/form-data" action="/admin/claims/import" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header" style="background:#5bb0bd">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 class="modal-title">匯入物件資料</h4>
</div>
<div class="modal-body">
    <h4>注意</h4>
    <ol>
        <li>請依照範例擋格式匯入，前兩行請勿刪除。</li>
    </ol>
    <input required="required" type="file" name="claim[file]" id="claim_file" />
</div>
<div class="modal-footer">
    <a class="an-btn an-btn-default" href="/download_claims_example">下載匯入範例</a>
    <button type="button" class="an-btn an-btn-default" data-dismiss="modal">返回</button>
    <input type="submit" name="commit" value="匯入" class="an-btn an-btn-primary" data-disable-with="匯入" />
</div>
</div>
</div>
</form></div>


    </div>
</div>
</div>
</div>

<script> 
        
        $('#claims_datatable').datatable({
            pageSize: 8,
            sort: [true, true, false],
            // filters: [true, false, 'select'],
            // filterText: 'Type to filter... ',
            onChange: function(old_page, new_page){
                console.log('changed from ' + old_page + ' to ' + new_page);
            }
        }) ;
    </script> 


{{-- <script src="/assets/admin-909f25b62467f942627fef2834c7df441ac27d1a1a6c018e88671ba7b15302c7.js"></script>


<script src="//cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js" type="text/javascript"></script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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


<script src="/assets/jquery/jquery.datetimepicker.full-78d292ac53a74a4f2a40611d4e329de1be284d6b15a0c024d093edb6ef08f785.js"></script>


<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js" type="text/javascript"></script>


<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript"></script>


<script src="//cdnjs.cloudflare.com/ajax/libs/qtip2/3.0.3/jquery.qtip.min.js"> </script>

<script src="/assets/admin/claims_datatables-7289f392282d431a3be4d71cd3a537f9c25d793323d4ad58d71fc76059c2f800.js"></script>
<script src="/assets/admin/claims_configure-ebb665e99711c4d1717222e48e9577c7f1346cc748c1cabae262662bc860dc1d.js"></script>
<script src="/assets/admin/claims_update_data-030b258463e133dbcbd8d399a33420867569f5ea31464ae5d12ad4ce2b9be7b3.js"></script>
 --}}



@endsection   