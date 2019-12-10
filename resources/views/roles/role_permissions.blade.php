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
                    <tr>
                        <td class="role_td_color">
                            智能媒合設定
                        </td>
                        <td class="role_td_color"></td>
                        <td class="role_td_color"></td>
                        <td class="role_td_color"></td>
                        <td class="role_td_color"></td>
                        <td class="role_td_color"></td>
                        <td class="role_td_color"></td>
                    </tr>

                    <tr>
                        <td>
                            智能媒合設定(頁面)
                        </td>
                    
                        <td>
                            <input type="checkbox" name="">
                        </td>

                        <td>
                            <input type="checkbox" name="">
                        </td>
                    
                        <td>
                            <input type="checkbox" name="">
                        </td>

                        <td>
                            <input type="checkbox" name="">
                        </td>

                        <td>
                            <input type="checkbox" name="">
                        </td>

                        <td>
                            <input type="checkbox" name="">
                        </td>
                    </tr>


                        <tr>
                            <td class="role_td_color">
                                會員專區
                            </td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                        </tr>
    
                        <tr>
                            <td>
                                會員專區(頁面)
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                會員專區-會員禁用(button限制)
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                會員專區-VIP 設定(button限制)
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                會員專區 - 檢視資料
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                會員專區-VIP 設定(button顯示)
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                會員專區-警示戶設定(button顯示)
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                會員專區-警示戶設定(button限制)
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                會員專區-會員禁用(button顯示)
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                會員專區-編輯會員資料(button顯示)
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                會員專區-銀行帳戶審核(button顯示)
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                編輯會員-進入編輯頁面
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                編輯會員-更新會員資料
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                會員專區-駁回銀行帳戶申請
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                會員專區-銀行帳戶審核通過
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                會員專區 - 會員啟用
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                會員專區 - 會員審核駁回
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>


                        <tr>
                            <td class="role_td_color">
                                編輯前台資料
                            </td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                        </tr>
    
                        <tr>
                            <td>
                                編輯前台資料(頁面)
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                編輯前台資料 - 進入操作頁面
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                編輯前台資料 - 進入編輯頁面
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                編輯前台資料 - 更新資料
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                編輯前台資料 - 刪除一筆資料
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>
        
                        <tr>
                            <td class="role_td_color">
                                媒合表現設定
                            </td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                        </tr>
    
                        <tr>
                            <td>
                                媒合表現設定(頁面)
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                媒合表現設定 - 儲存資料
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td class="role_td_color">
                                借款專區
                            </td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                        </tr>
    
                        <tr>
                            <td>
                                借款專區(頁面)
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                借款專區 - 檢視內容頁面
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td class="role_td_color">
                                管理債權
                            </td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                        </tr>
    
                        <tr>
                            <td>
                                管理債權(頁面)
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                管理債權-年利率設定(button顯示)
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                管理債權-債權匯入/新增、修改(button顯示)
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                管理債權-債權募集/結標/設定/隱藏/刪除(button顯示)
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                管理債權-檢視頁面
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                管理債權 - 前台隱藏債權
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td class="role_td_color">
                                管理帳務
                            </td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                        </tr>
    
                        <tr>
                            <td>
                                管理帳務(頁面)
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                管理帳務 - 新增頁面
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                管理帳務 - 建立新資料
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td class="role_td_color">
                                標單專區
                            </td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                        </tr>
    
                        <tr>
                            <td>
                                標單專區(頁面)
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                標單專區 - 進入新增頁面
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                標單專區 - 建立一筆新資料
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                標單專區 - 匯入還款資料
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                標單專區 - 匯入繳款資料
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                標單專區 - 匯出未繳款標單
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td class="role_td_color">
                                系統參數
                            </td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                        </tr>
    
                        <tr>
                            <td>
                                系統參數 - 系統參數資料更新
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td class="role_td_color">
                                報表
                            </td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                            <td class="role_td_color"></td>
                        </tr>
    
                        <tr>
                            <td>
                                報表專區 - 頁首
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                報表專區 - 會員專區
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
                        
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
                            </td>
    
                            <td>
                                <input type="checkbox" name="">
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