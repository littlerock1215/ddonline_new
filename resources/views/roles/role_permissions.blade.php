@extends('user.header')

@section('admin_content')

<link rel="stylesheet" media="all" href="/assets/admin-a2d9679cd876b77306b69505b283d25f085563d38451d0785e8d72886a9fc0e1.css" />


    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header">功能與操作列表</h3>
          </div>
        </div>

        {{-- <div class="an-single-component with-shadow">
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
                      <label class='col-sm-2 control-label l-h-34'>名稱</label>
                      <div class="col-sm-10">
                        <input type='text' name='name' placeholder='請輸入名稱' class='an-form-control no-redius border-bottom m-0 text_color filter-name'>
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
        </div> --}}

        {{-- <a style="margin-bottom:20px;"  class="btn btn-primary">新增功能與操作</a> --}}

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="paging"></div>
              <table id="customer" class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th style="width:350px;">功能項目/角色項目</th>
                    <th>產品行銷人員</th>
                    <th>客服專員</th>
                    <th>營運主管</th>
                    <th>資料分析人員</th>
                    <th>財務專員</th>
                    <th>系統管理者</th>
                  </tr>
                </thead>
                <tbody>
                    <tr style="background-color: #688a7e;">
                        <td>
                            智能媒合設定
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>
                            g
                        </td>
                    
                        <td>
                            g
                        </td>

                        <td>
                            g
                        </td>
                    
                        <td>
                        <input type="checkbox">
                        </td>

                        <td>
                            <input type="checkbox">
                        </td>

                        <td>
                            <input type="checkbox">
                        </td>

                        <td>
                            <input type="checkbox">
                        </td>
                    </tr>

                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>

  </section>
  <!-- container section end -->


  @endsection             