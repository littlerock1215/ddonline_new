@extends('user.header')

@section('admin_content')

<link rel="stylesheet" media="all" href="/assets/admin-a2d9679cd876b77306b69505b283d25f085563d38451d0785e8d72886a9fc0e1.css" />


    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header">角色項目列表</h3>
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
        
                    <div class="form-group">
                      <label class='col-sm-2 control-label l-h-34'>系統代稱</label>
                      <div class="col-sm-10">
                        <input type='text' name='name' placeholder='請輸入系統代稱' class='an-form-control no-redius border-bottom m-0 text_color filter-name'>
                      </div>
                      <div class="clear"></div>
                    </div>
        
                    <div class="form-group">
                      <label class='col-sm-2 control-label l-h-34'>名稱</label>
                      <div class="col-sm-10">
                        <input type='text' name='id_number' placeholder='請輸入名稱' class='an-form-control no-redius border-bottom m-0 text_color filter-id_number'>
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
        </div>

        <a style="margin-bottom:20px;"  class="btn btn-primary">新增角色項目</a>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="paging"></div>
              <table id="customer" class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th>系統代稱</th>
                    <th>名稱</th>
                    <th>排序</th>
                    <th>操作</th>
                  </tr>
                </thead>
                <tbody>
                 <tr>
                     <td>
                        g
                     </td>
                 
                    <td>
                        g
                    </td>
                
                    <td>
                        s
                    </td>
                
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-success" href="#"><i class="fa fa-pencil"></i></a>
                            <button class="btn btn-danger" name="changeValue" onClick="#" ><i class="fa fa-trash-o"></i></button>
                        </div>
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