@extends('manage_layout.header')

@section('admin_content')



<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

<!-- datatables -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/dt/jqc-1.12.3/dt-1.10.16/b-1.4.2/sl-1.2.3/datatables.min.css"/>
<link href="//cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="//cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" media="all" href="/assets/jquery/rowReorder.dataTables.min-c7103b3919e75b8e50aa60bff722a28c6d8e13c76883b29f83c46a19f02b47c6.css" />
<link rel="stylesheet" media="all" href="/assets/jquery/select.dataTables.min-053e24e51e6f01f4284058a32b02bc972986d765e5a024f892de3e1c97bd635e.css" />
<link rel="stylesheet" media="all" href="/assets/jquery/editor.dataTables.min-5b6ce1df8602d8430747983600415129e013e7965f0db27f2700ec583051e98e.css" />

<link rel="shortcut icon" href="/images/favicon.ico">

<!-- datetimepicker -->
<link rel="stylesheet" media="all" href="/assets/jquery/jquery.datetimepicker-687fd1e22bd02562a9edbd430eca033e571a906b22f03dc62156165bd34a1f64.css" />

<!-- select2 -->
<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" type="text/css">
<link href="//cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" type="text/css">

<!-- qtip -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/qtip2/3.0.3/jquery.qtip.min.css">

<link rel="stylesheet" media="all" href="/assets/admin-a2d9679cd876b77306b69505b283d25f085563d38451d0785e8d72886a9fc0e1.css" />




<link rel="stylesheet" media="all" href="/assets/admin-a2d9679cd876b77306b69505b283d25f085563d38451d0785e8d72886a9fc0e1.css" />

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i>貸款專區列表</h3>
          </div>
        </div>
        <!-- page start-->
        
        {{-- <p style="display:inline-block">內容 {{ $loans->lender_name }}</p> --}}
        
        <div class="an-content-body">
          <div class="row">
              <h2>檢視貸款專區</h2>

<div class="col-md-12">
<div class="panel panel-success">
<div class="panel-heading" style="padding:10px 15px">
  <h4>貸款專區</h4>
</div>
<div class="panel-body">
  <form novalidate="novalidate" class="simple_form edit_loan" id="edit_loan_164" enctype="multipart/form-data" action="/admin/loans/164" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="patch" /><input type="hidden" name="authenticity_token" value="vnwzR7/WkzQt2gOsW3Lv20/Cot0jQguybjjW2qILDcIOVPj3EnA7rD0gL5FVNuLucvgeF9Sr4ifF6S/9B6nSrw==" />
<div class='form-group'>
<label class='col-sm-12 control-label'><h3>申請人基本資料</h3></label>
<div class='clear'></div>
</div>
<div class='form-group'>
<label class='col-sm-2 control-label'>姓名</label>
<div class='col-sm-10'>
  <input disabled="disabled" class="string optional disabled form-control" type="text" value="{{ $loans->lender_name }}" name="loan[name]" id="loan_name" />
  
</div>
<div class='clear'></div>
</div>
<div class='form-group'>
<label class='col-sm-2 control-label'>出生年月日</label>
<div class='col-sm-10'>
  <input disabled="disabled" value="{{ $loans->dob }}" class="string optional disabled form-control datetimepicker" type="text" name="loan[dob]" id="loan_dob" />
  
</div>
<div class='clear'></div>
</div>
<div class='form-group'>
<label class='col-sm-2 control-label'>身分證字號</label>
<div class='col-sm-10'>
  <input disabled="disabled" class="string optional disabled form-control" type="text" value="{{ $loans->lender_id_number }}" name="loan[id_number]" id="loan_id_number" />
  
</div>
<div class='clear'></div>
</div>
<div class='form-group'>
<label class='col-sm-2 control-label'>行動電話</label>
<div class='col-sm-10'>
  <input disabled="disabled" class="string tel optional disabled form-control" type="tel" value="{{ $loans->cellphone_number }}" name="loan[cellphone_number]" id="loan_cellphone_number" />
  
</div>
<div class='clear'></div>
</div>
<div class='form-group'>
<label class='col-sm-2 control-label'>住家電話</label>
<div class='col-sm-10'>
  <input disabled="disabled" class="string tel optional disabled form-control" type="tel" value="{{ $loans->telephone_number }}" name="loan[telephone_number]" id="loan_telephone_number" />
  
</div>
<div class='clear'></div>
</div>
<div class='form-group'>
<label class='col-sm-2 control-label'>居住地址</label>
<div class='col-sm-10'>
  <input disabled="disabled" class="string optional disabled form-control" type="text" value="{{ $loans->address }}" name="loan[address]" id="loan_address" />
  
</div>
<div class='clear'></div>
</div>

<div class='form-group'>
<label class='col-sm-12 control-label'><h3>申請人工作資料</h3></label>
<div class='clear'></div>
</div>

<div class='form-group'>
<label class='col-sm-2 control-label'>公司名稱</label>
<div class='col-sm-10'>
  <input disabled="disabled" class="string optional disabled form-control" type="text" value="{{ $loans->company_name }}" name="loan[company_name]" id="loan_company_name" />
  
</div>
<div class='clear'></div>
</div>
<div class='form-group'>
<label class='col-sm-2 control-label'>職稱</label>
<div class='col-sm-10'>
  <input disabled="disabled" class="string optional disabled form-control" type="text" value="{{ $loans->job_title }}" name="loan[job_title]" id="loan_job_title" />
  
</div>
<div class='clear'></div>
</div>
<div class='form-group'>
<label class='col-sm-2 control-label'>月薪</label>
<div class='col-sm-10'>
  <input disabled="disabled" class="numeric integer optional disabled form-control" type="number" step="1" value="{{ $loans->monthly_salary }}" name="loan[monthly_salary]" id="loan_monthly_salary" />
  
</div>
<div class='clear'></div>
</div>
<div class='form-group'>
<label class='col-sm-2 control-label'>公司電話</label>
<div class='col-sm-10'>
  <input disabled="disabled" class="string tel optional disabled form-control" type="tel" value="{{ $loans->company_phone }}" name="loan[company_phone]" id="loan_company_phone" />
  
</div>
<div class='clear'></div>
</div>

<div class='form-group'>
    <label class='col-sm-12 control-label'><h3>貸款細項</h3></label>
    <div class='clear'></div>
</div>



<div class='form-group'>
<div class='col-sm-4'>

  <div class='form-group'>
      <label class='col-sm-6 control-label p-lr-0'>貸款種類</label>
              {{-- <div class='col-sm-2'> --}}
              {{-- <select disabled="disabled" class="enum optional disabled form-control form-control" name="loan[loan_type]" id="loan_loan_type">
                <option value=""></option>
                <option selected="selected" value="credit">個人信用貸款</option>
                <option value="car">個⼈抵押貸(車貸)</option>
                <option value="houses">個⼈抵押貸(房子)</option>
                <option value="check">商業貸</option>
              </select>     type="number" step="1"            --}}
      <div class='col-sm-6'>
          <input disabled="disabled" class="enum optional disabled form-control form-control"  value="{{ $loans->loan_type }}" name="loan_type" id="loan_loan_type" />
      </div>
              {{-- </div> --}}
      <div class='clear'></div>
  </div>

  <div class='form-group'>
      <label class='col-sm-6 control-label p-lr-0'>金額</label>
      <div class='col-sm-6'>
          <input disabled="disabled" class="numeric integer optional disabled form-control" type="number" step="1" value="{{ $loans->amount }}" name="loan[amount]" id="loan_amount" />
      </div>
      <div class='clear'></div>
  </div>
  <div class='form-group'>
      <label class='col-sm-6 control-label p-lr-0'>期數</label>
      <div class='col-sm-6'>
          <input disabled="disabled" class="numeric integer optional disabled form-control" type="number" step="1" value="{{ $loans->periods }}" name="loan[periods]" id="loan_periods" />
          
      </div>
      <div class='clear'></div>
  </div>
  <div class='form-group'>
      <label class='col-sm-6 control-label p-lr-0'>貸款用途</label>
      <div class='col-sm-6'>
          <input disabled="disabled" class="string optional disabled form-control" type="text" value="{{ $loans->description }}" name="loan[description]" id="loan_description" />
          
      </div>
      <div class='clear'></div>
  </div>
</div>
<div class='col-sm-8'>
</div>
</div>


<div class='form-group'>
<label class='col-sm-12 control-label'>
<!-- <!%= f.submit t('button.save'), class: 'an-btn an-btn-primary' %> -->
<a class="an-btn an-btn-default" href="/admin/loans">返回</a>
</label>
<div class='clear'></div>
</div>

</form>

</div>
</div>
</div>

          </div>
      </div>
  </div>
</div>

        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->


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




  @endsection             