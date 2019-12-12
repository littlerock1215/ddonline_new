@extends('user.header')

@section('admin_content')

<link rel="stylesheet" media="all" href="/assets/admin-a2d9679cd876b77306b69505b283d25f085563d38451d0785e8d72886a9fc0e1.css" />

<div class="an-content-body" style="margin-left: 180px;padding-top: 60px;width: 86%">
    <div class="row">
        <h2>檢視標單</h2>

<div class="col-md-12">
<div class="panel panel-success">
<div class="panel-heading" style="padding: 10px 15px">
<h4>標單</h4>
</div>
<div class="panel-body">
<div class='form-group'>
<div class="form_table_area">
<table class="table table-bordered">
<tr>
<td class="bg-g">債權憑證號</td>
<td class="bg-g">得標人編號</td>
<td class="bg-g">得標人</td>
<td class="bg-g">得標序號</td>
<td class="bg-g">物件編號</td>
<td class="bg-g">狀態</td>
<td class="bg-g">標單金額</td>
</tr>
<tr>
<td>044S100021</td>
<td>P000384</td>
<td>鍾智惠</td>
<td>044</td>
<td>S100021</td>
<td>還款中</td>
<td>3000000</td>
</tr>
<tr>
<td class="bg-g">原始期數</td>
<td class="bg-g">年化利率</td>
<td class="bg-g">還款方式</td>
<td class="bg-g">投資人下標日</td>
<td class="bg-g">債權實際結/流標日</td>
</tr>
<tr>
<td>12</td>
<td>9.0</td>
<td>先息後本</td>
<td>2019/09/03</td>
<td></td>
</tr>
<tr>
<td class="bg-g">繳款截止日</td>
<td class="bg-g">虛擬帳號</td>
<td class="bg-g">存入日期</td>
<td class="bg-g">起息日</td>
<td class="bg-g">總應實現投資額</td>
<td class="bg-g">總已實現投資額</td>
<td class="bg-g"></td>
</tr>
<tr>
<td>2019/09/05</td>
<td>否</td>
<td>2019/09/05</td>
<td>2019/09/06</td>
<td> 3,000,000</td>
<td> 0</td>
<td></td>
</tr>
<tr>
<td class="bg-g">總應實現利潤</td>
<td class="bg-g">總已實現利潤</td>
<td class="bg-g">總應付手續費</td>
<td class="bg-g">總已付手續費</td>
<td class="bg-g">債權轉讓人</td>
<td class="bg-g">總應實現淨利</td>
<td class="bg-g">總已實現淨利</td>
</tr>
<tr>
<td> 270,000</td>
<td> 67,500</td>
<td> 27,000</td>
<td> 6,750</td>
<td>亞太惠普金融股份有限公司</td>
<td> 243,000</td>
<td> 60,750</td>
</tr>
<tr>
<td class="bg-g">投資者提前贖回日</td>
<td class="bg-g">投資者提前贖回總金額</td>
<td class="bg-g">轉讓人提前解約日</td>
<td class="bg-g">轉讓人提前贖回總金額</td>
<td class="bg-g">流標退款日期</td>
<td class="bg-g">流標退款金額</td>
<td class="bg-g"></td>
</tr>
<tr>
<td>---</td>
<td></td>
<td>---</td>
<td></td>
<td>---</td>
<td></td>
<td></td>
</tr>
</table>
</div>
<a class="an-btn an-btn-default" href="/admin/tender_documents">返回</a>
</div>

<table class="table table-bordered table_breaking">
<thead>
<tr>
<th colspan="5">投資應收明細</th>
<th colspan="3">實際付款明細</th>
</tr>
<tr>
<th>期數</th>
<th>應返還日</th>
<th>應收投資金額</th>
<th>應收利潤</th>
<th>應付手續費</th>
<th>返還投資金額</th>
<th>實際到帳日</th>
<th>實際返還日</th>
</tr>
</thead>
<tbody>
<tr>
<td data-title="期數">1</td>
<td data-title="應返還日">2019-10-06</td>
<td data-title="應收投資金額"> 0</td>
<td data-title="應收利潤"> 22,500</td>
<td data-title="應付手續費"> 2,250</td>
<td data-title="返還投資金額"> 20,250</td>
<td data-title="實際到帳日">2019-10-04</td>
<td data-title="實際返還日">2019-10-06</td>
</tr>
<tr>
<td data-title="期數">2</td>
<td data-title="應返還日">2019-11-06</td>
<td data-title="應收投資金額"> 0</td>
<td data-title="應收利潤"> 22,500</td>
<td data-title="應付手續費"> 2,250</td>
<td data-title="返還投資金額"> 20,250</td>
<td data-title="實際到帳日">2019-11-05</td>
<td data-title="實際返還日">2019-11-05</td>
</tr>
<tr>
<td data-title="期數">3</td>
<td data-title="應返還日">2019-12-06</td>
<td data-title="應收投資金額"> 0</td>
<td data-title="應收利潤"> 22,500</td>
<td data-title="應付手續費"> 2,250</td>
<td data-title="返還投資金額"> 20,250</td>
<td data-title="實際到帳日">2019-12-06</td>
<td data-title="實際返還日">2019-12-06</td>
</tr>
<tr>
<td data-title="期數">4</td>
<td data-title="應返還日">2020-01-06</td>
<td data-title="應收投資金額"> 0</td>
<td data-title="應收利潤"> 22,500</td>
<td data-title="應付手續費"> 2,250</td>
<td data-title="返還投資金額"></td>
<td data-title="實際到帳日"></td>
<td data-title="實際返還日"></td>
</tr>
<tr>
<td data-title="期數">5</td>
<td data-title="應返還日">2020-02-06</td>
<td data-title="應收投資金額"> 0</td>
<td data-title="應收利潤"> 22,500</td>
<td data-title="應付手續費"> 2,250</td>
<td data-title="返還投資金額"></td>
<td data-title="實際到帳日"></td>
<td data-title="實際返還日"></td>
</tr>
<tr>
<td data-title="期數">6</td>
<td data-title="應返還日">2020-03-06</td>
<td data-title="應收投資金額"> 0</td>
<td data-title="應收利潤"> 22,500</td>
<td data-title="應付手續費"> 2,250</td>
<td data-title="返還投資金額"></td>
<td data-title="實際到帳日"></td>
<td data-title="實際返還日"></td>
</tr>
<tr>
<td data-title="期數">7</td>
<td data-title="應返還日">2020-04-06</td>
<td data-title="應收投資金額"> 0</td>
<td data-title="應收利潤"> 22,500</td>
<td data-title="應付手續費"> 2,250</td>
<td data-title="返還投資金額"></td>
<td data-title="實際到帳日"></td>
<td data-title="實際返還日"></td>
</tr>
<tr>
<td data-title="期數">8</td>
<td data-title="應返還日">2020-05-06</td>
<td data-title="應收投資金額"> 0</td>
<td data-title="應收利潤"> 22,500</td>
<td data-title="應付手續費"> 2,250</td>
<td data-title="返還投資金額"></td>
<td data-title="實際到帳日"></td>
<td data-title="實際返還日"></td>
</tr>
<tr>
<td data-title="期數">9</td>
<td data-title="應返還日">2020-06-06</td>
<td data-title="應收投資金額"> 0</td>
<td data-title="應收利潤"> 22,500</td>
<td data-title="應付手續費"> 2,250</td>
<td data-title="返還投資金額"></td>
<td data-title="實際到帳日"></td>
<td data-title="實際返還日"></td>
</tr>
<tr>
<td data-title="期數">10</td>
<td data-title="應返還日">2020-07-06</td>
<td data-title="應收投資金額"> 0</td>
<td data-title="應收利潤"> 22,500</td>
<td data-title="應付手續費"> 2,250</td>
<td data-title="返還投資金額"></td>
<td data-title="實際到帳日"></td>
<td data-title="實際返還日"></td>
</tr>
<tr>
<td data-title="期數">11</td>
<td data-title="應返還日">2020-08-06</td>
<td data-title="應收投資金額"> 0</td>
<td data-title="應收利潤"> 22,500</td>
<td data-title="應付手續費"> 2,250</td>
<td data-title="返還投資金額"></td>
<td data-title="實際到帳日"></td>
<td data-title="實際返還日"></td>
</tr>
<tr>
<td data-title="期數">12</td>
<td data-title="應返還日">2020-09-06</td>
<td data-title="應收投資金額"> 3,000,000</td>
<td data-title="應收利潤"> 22,500</td>
<td data-title="應付手續費"> 2,250</td>
<td data-title="返還投資金額"></td>
<td data-title="實際到帳日"></td>
<td data-title="實際返還日"></td>
</tr>
<tr>
<td data-title="期數">總計</td>
<td data-title="應返還日"></td>
<td data-title="應收投資金額"> 3,000,000</td>
<td data-title="應收利潤"> 270,000</td>
<td data-title="應付手續費"> 27,000</td>
<td data-title="返還投資金額"> 60,750</td>
<td data-title="實際到帳日"></td>
<td data-title="實際返還日"></td>
</tr>
</tbody>
</table>

</div>
</div>
</div>

    </div>
</div>
</div>
</div>


@endsection 