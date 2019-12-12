@extends('user.header')

@section('admin_content')

<link rel="stylesheet" media="all" href="/assets/admin-a2d9679cd876b77306b69505b283d25f085563d38451d0785e8d72886a9fc0e1.css" />



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
{{-- <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> --}}
<script type="text/javascript"  src="https://cdn.rawgit.com/Holt59/datatable/master/js/datatable.jquery.js"></script>
<script type="text/javascript"  src="https://cdn.rawgit.com/Holt59/datatable/master/js/datatable.js"></script>

{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script> --}}

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i>貸款專區列表</h3>
            {{-- <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>Basic Table</li>
            </ol> --}}
          </div>
        </div>
        <!-- page start-->
        
        {{-- @foreach ($loans as $row)
        <p style="display:inline-block">內容 {{ $row->lender_name }}</p> --}}
        {{-- <form class="data_form_test">
            <p style="display:inline-block">類別:{{ $row->type->content }}</p>
            <a href="/event/edit?id={{$row->id}}" style="display:inline-block"><p> {{ $row->content }}</p></a>
            <button type="button" onclick="remove_item({{ $row->id }})" style="display:inline-block">刪除</button>
            
        </form>     --}}
        {{-- <br/>    
        @endforeach --}}



        {{-- <form id="data_form">
            
            <input type="hidden" name="id" value="">
            <input type="text" name="content" id="test1" value="">
            <button type="submit" onclick="edit_info(event)">submit</button>
            
        </form> --}}

        
        




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
        
                    <div class="form-group">
                      <label class='col-sm-2 control-label l-h-34'>貸款人</label>
                      <div class="col-sm-4">
                        <input type='text' name='name' placeholder='請輸入貸款人' class='an-form-control no-redius border-bottom m-0 text_color filter-name'>
                      </div>
                      <div class="clear"></div>
                    </div>
        
                    <div class="form-group">
                      <label class='col-sm-2 control-label l-h-34'>貸款人身分證</label>
                      <div class="col-sm-4">
                        <input type='text' name='id_number' placeholder='請輸入貸款人身分證' class='an-form-control no-redius border-bottom m-0 text_color filter-id_number'>
                      </div>
                      <div class="clear"></div>
                    </div>
        
                    <div class='form-group'>
                      <label class='col-sm-2 control-label l-h-34'>貸款種類</label>
                      <div class='col-sm-4'>
                        <form novalidate="novalidate" class="simple_form new_loan" id="new_loan" action="/admin/loans" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="XIrVJQzCe58iBsrmbC7iSVsarqJpehCiA0VcSxSqCvZOqqPjE/9qvnKy/9uOvjTOD+m6RQ3LFqVLU+RiseFBOA==" />
                          <select name="loan_type" class="select optional form-control select2 filter-loan_type" include_blank="true" id="loan_loan_type">
                            <option value=""></option>
                            <option value="0">個人信用貸款</option>
                            <option value="1">個⼈抵押貸(車貸)</option>
                            <option value="2">個⼈抵押貸(房子)</option>
                            <option value="3">商業貸</option>
                          </select>
                        </form>
                      </div>
                      <div class="clear"></div>
                    </div>
        
                    <div class='form-group'>
                      <label class='col-sm-2 control-label l-h-34'>建立時間</label>
                      <div class='col-sm-10'>
                        <div class='col-sm-5 no-padding'>
                          <div class='col-sm-12 no-padding'>
                            <input type='text' name='created_at_start' placeholder='請輸入開始時間' class='an-form-control no-redius border-bottom m-0 text_color datetimepicker filter-created_at'>
                          </div>
                        </div>
                        <div class='col-sm-1 no-padding l-h-34 t-center'> ~ </div>
                        <div class='col-sm-6 no-padding'>
                          <div class='col-sm-12 no-padding'>
                            <input type='text' name='created_at_end' placeholder='請輸入結束時間' class='an-form-control no-redius border-bottom m-0 text_color datetimepicker filter-created_at'>
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
                  {{-- dflkdj; 上  --}}
                </div>
              </div>
          </div>
          {{-- <button id="export_button" class="btn btn-success">
            匯出
          </button> --}}
        </div>

        <a href="{{ route('export') }}" class="btn btn-primary">匯出資料</a>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              {{-- <header class="panel-heading">
                Advanced Table
              </header> --}}
              <div class="paging"></div>
              <table id="customer" class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th style="width:130px"><i class="icon_profile"></i> 姓名</th>
                    <th><i class="icon_calendar"></i> 出生年月日</th>
                    <th><i class="icon_key"></i> 身分證字號</th>
                    <th><i class="icon_mobile"></i> 行動電話</th>
                    <th><i class="icon_star_alt"></i> 貸款種類</th>
                    <th><i class="icon_cogs"></i> 金額</th>
                    <th><i class="icon_cogs"></i> 期數</th>
                    <th><i class="icon_cogs"></i> 已聯繫</th>
                    <th><i class="icon_cogs"></i> 備註</th>
                    <th><i class="icon_cogs"></i> 操作</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($loans as $row)
                  {{-- <p style="display:inline-block">內容 {{ $row->lender_name }}</p> --}}
                  {{-- <form class="data_form_test">
                      <p style="display:inline-block">類別:{{ $row->type->content }}</p>
                      <a href="/event/edit?id={{$row->id}}" style="display:inline-block"><p> {{ $row->content }}</p></a>
                      <button type="button" onclick="remove_item({{ $row->id }})" style="display:inline-block">刪除</button>
                      
                  </form>     --}}
                  <?php
                        $check = $row->is_contact=='1'? 'checked':'';
                  ?>

                  <tr>
                    <td>{{ $row->lender_name }}</td>
                    <td>{{ $row->dob }}</td>
                    <td>{{ $row->lender_id_number }}</td>
                    <td>{{ $row->telephone_number }}</td>
                    <td>個人信用貸款</td>
                    <td>100,000</td>
                    <td>24</td>
                    <td>
                      <input type="checkbox" class="isContact" {{ $check }}>
                    </td>
                    <td>{{ $row->remark }}</td>
                    <td>
                      <div class="btn-group">
                        {{-- <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a> --}}
                        <a class="btn btn-primary" href="/admin/loans/{{$row->loan_id}}">內容</a>
                      </div>
                    </td>
                  </tr>

                  @endforeach

                </tbody>
              </table>

              <div class="paging"></div>

            </section>
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

 <script> 
  
// function edit_info(e){
//     e.preventDefault();
//     $.post('/event/update/{{$row->id}}',$('#data_form').serialize(),function(data){

//         if(data.success){
//             location.href="/test";
//         }else{
//             alert(data.msg);
//         }
//     },'json');
// }
// function edit_info(e){
//     e.preventDefault();
//     $.post('/admin/loans',$('#data_form').serialize(),function(data){

//         if(data.success){
//             location.href="/admin/loans";
//         }else{
//             alert(data.msg);
//         }
//     },'json');
// }

// $(document).ready( function () {
//     $('#customer').DataTable();
// } );

$('#customer').datatable({
    pageSize: 8,
    sort: [true, true, false],
    // filters: [true, false, 'select'],
    // filterText: 'Type to filter... ',
    onChange: function(old_page, new_page){
      console.log('changed from ' + old_page + ' to ' + new_page);
    }
}) ;
</script> 
  @endsection             