@extends('user.header')

@section('admin_content')

<link rel="stylesheet" media="all" href="/assets/admin-a2d9679cd876b77306b69505b283d25f085563d38451d0785e8d72886a9fc0e1.css" />


<div class="an-content-body">
    <div class="row">
        <div class="an-body-topbar wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
<div class="an-page-title">
<h2>站內信列表</h2>
</div>
</div>


<div class="an-single-component with-shadow">
<div class="an-component-header search_wrapper">
<div class="panel panel-default an-sidebar-search filter-condition-panel">

<div class="panel-heading" role="tab">
<h4 class="panel-title">
<a class="collapsed" role="button" href="#search_panel"
data-toggle="collapse" data-parent="#accordion"
aria-expanded="false" aria-controls="search_panel">
篩選條件
</a>
</h4>
</div>

<div id="search_panel" class="panel-collapse collapse" role="search panel">
<div class="panel-body">

<div class='form-group'>
<div class="col-sm-2">
    <label class='control-label'>標題</label>
</div>
<div class='col-sm-10'>
    <input type='text' name='title' placeholder='請輸入標題'
    class='an-form-control no-redius border-bottom m-0 text_color filter-title filter-condition'>
</div>
<div class='clear'></div>
</div>


<div class='form-group'>
<div class="col-sm-2">
    <label class='control-label'>內容</label>
</div>
<div class='col-sm-10'>
    <input type='text' name='content' placeholder='請輸入內容'
    class='an-form-control no-redius border-bottom m-0 text_color filter-content filter-condition'>
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

</div>

<div class="an-component-body">
<div class="an-helper-block">
<a class="an-btn an-btn-primary" href="/admin/internal_letters/new">新增站內信</a>
</div>

<div class="an-bootstrap-custom-tab">
<div class="an-tab-control">
<div class="table-responsive">
<table id='all_internal_letters_table' data-tab_column_name='' data-tab_key='all' class='table table-bordered table_breaking internal_letters_table m-b-20'>
<thead>
<tr>
<th class='all'>標題</th>
<th class='all'>內容</th>
<th class='all'>Deleted at</th>
<th class='all'>發送時間</th>
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
</div>

@endsection    