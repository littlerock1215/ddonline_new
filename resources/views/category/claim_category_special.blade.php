@extends('layout.header')

@section('content')


<div id="main-page">
    <link rel="stylesheet" media="screen" href="/table/css/table.css" />
<link rel="stylesheet" media="screen" href="/css/modal.css" />
<link rel="stylesheet" media="screen" href="/css/v.css" />
<link rel="stylesheet" media="screen" href="/css/list.css" />
<link rel="stylesheet" media="screen" href="/css/list_modal.css" />
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div class="list_banner">
<div class="container">
<div class="row">
  <div class="animate-box png">
    <div class="t-d" aos="fade-right" aos-duration="1000">
      <h2>債權項目</h2>
      <br/>
      <p>
        提供多種類型債權轉讓項目及投資周期選擇，資金運用有彈性，投資組合更豐富。
      </p>
    </div>
  </div>
</div>
</div>
<div class="w100 top500 h115 m_none">
<div class="container">
  <div class="row ">
    <div class="col-md-4">
      <div class="icon_left"><img src="/template/images/con1.png" alt=""></div>
      <div class="icon_right">
        <div class="f28">
           4,392,039
        </div>
        <div class="f15"> 會員收益</div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="icon_left"><img src="/template/images/con2.png" alt=""></div>
      <div class="icon_right">
        <div class="f28">
           52,554,000
        </div>
        <div class="f15"> 投資總額</div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="icon_left"><img src="/template/images/con3.png" alt=""></div>
      <div class="icon_right">
        <div class="f28">
          8.14 %
        </div>
        <div class="f15"> 年平均報酬</div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="container">
<div class="row taa">
<div class="btn_bottom btn_bottom_a btn_20">
  <div class="btn_left">
    <div class="btn_1 w0 active_3">
      {{-- <a href="/claim_category?type=special"> --}}
        <a href="/claim_category_special">
        <i class="fa fa-bar-chart" aria-hidden="true"></i> 特別投資項目
</a>        </div>
  </div>
  <div class="btn_left">
    <div class="btn_1 ">
      <a href="/claim_category?type=regular">
        <i class="fa fa-align-left" aria-hidden="true"></i> 智能媒合項目
</a>        </div>
  </div>
  
</div>
    <table id="claims" cellspacing="0" cellpadding="0" class="rwd-table tablesorter" style="margin-bottom: 5%;">
      <thead>
        <tr class="title_tr">
          <th data-field="action" data-formatter="ActionFormatter" width="8%">
            <span>債權總類</span>
          </th>
          <th width="8%"><span>年化收益</span></th>
          <th width="10%"><span>物件編號</span></th>
          <th width="10%"><span>債權額度</span></th>
          <th width="7%"><span>期數</span></th>
          <th width="10%"><span>剩餘金額</span></th>
          <th width="10%"><span>上架日期</span></th>
          <th width="14%"><span>認購進度</span></th>
          <th width="14%"><span>繳款進度</span></th>
          <th width="9%"><span>還款方式</span></th>
        </tr>
      </thead>
      <tbody>
        <tr name="186" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="債權總類">
            <span class="fcolor" style="white-space:nowrap;">
              美容商品分期付款
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">11.0 %</span>
          </td>
          <td data-th="物件編號">S0989971</td>
          <td data-th="債權額度">
            <span class="fbold">
               45,000
            </span>
          </td>
          <td data-th="期數">10 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2019-11-08</td>
          <td data-th="認購進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="繳款進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp2" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="還款方式">本息攤還</td>
        </tr>
        <tr name="185" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="債權總類">
            <span class="fcolor" style="white-space:nowrap;">
              租房押金及租金分期
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">11.0 %</span>
          </td>
          <td data-th="物件編號">S0995521</td>
          <td data-th="債權額度">
            <span class="fbold">
               56,000
            </span>
          </td>
          <td data-th="期數">10 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2019-11-08</td>
          <td data-th="認購進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="繳款進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp2" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="還款方式">本息攤還</td>
        </tr>
        <tr name="184" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="債權總類">
            <span class="fcolor" style="white-space:nowrap;">
              柬埔寨不動產抵押融資
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">11.0 %</span>
          </td>
          <td data-th="物件編號">S100025</td>
          <td data-th="債權額度">
            <span class="fbold">
               1,000,000
            </span>
          </td>
          <td data-th="期數">12 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2019-11-08</td>
          <td data-th="認購進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="繳款進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp2" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="還款方式">先息後本</td>
        </tr>
        <tr name="180" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="債權總類">
            <span class="fcolor" style="white-space:nowrap;">
              醫美療程分期付款
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">10.0 %</span>
          </td>
          <td data-th="物件編號">S0992811</td>
          <td data-th="債權額度">
            <span class="fbold">
               32,000
            </span>
          </td>
          <td data-th="期數">4 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2019-11-04</td>
          <td data-th="認購進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="繳款進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp2" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="還款方式">本息攤還</td>
        </tr>
        <tr name="178" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="債權總類">
            <span class="fcolor" style="white-space:nowrap;">
              柬埔寨不動產抵押融資
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">9.0 %</span>
          </td>
          <td data-th="物件編號">S100024</td>
          <td data-th="債權額度">
            <span class="fbold">
               15,000,000
            </span>
          </td>
          <td data-th="期數">12 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2019-10-27</td>
          <td data-th="認購進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="繳款進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp2" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="還款方式">先息後本</td>
        </tr>
        <tr name="174" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="債權總類">
            <span class="fcolor" style="white-space:nowrap;">
              押租貸
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">9.0 %</span>
          </td>
          <td data-th="物件編號">S0995181</td>
          <td data-th="債權額度">
            <span class="fbold">
               44,000
            </span>
          </td>
          <td data-th="期數">10 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2019-10-01</td>
          <td data-th="認購進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="繳款進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp2" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="還款方式">本息攤還</td>
        </tr>
        <tr name="175" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="債權總類">
            <span class="fcolor" style="white-space:nowrap;">
              押租貸
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">9.0 %</span>
          </td>
          <td data-th="物件編號">S0995191</td>
          <td data-th="債權額度">
            <span class="fbold">
               18,000
            </span>
          </td>
          <td data-th="期數">10 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2019-10-01</td>
          <td data-th="認購進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="繳款進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp2" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="還款方式">本息攤還</td>
        </tr>
        <tr name="176" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="債權總類">
            <span class="fcolor" style="white-space:nowrap;">
              押租貸
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">9.0 %</span>
          </td>
          <td data-th="物件編號">S0995221</td>
          <td data-th="債權額度">
            <span class="fbold">
               27,000
            </span>
          </td>
          <td data-th="期數">10 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2019-10-01</td>
          <td data-th="認購進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="繳款進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp2" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="還款方式">本息攤還</td>
        </tr>
        <tr name="172" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="債權總類">
            <span class="fcolor" style="white-space:nowrap;">
              柬埔寨不動產融資
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">9.0 %</span>
          </td>
          <td data-th="物件編號">S100022</td>
          <td data-th="債權額度">
            <span class="fbold">
               10,000,000
            </span>
          </td>
          <td data-th="期數">12 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2019-09-09</td>
          <td data-th="認購進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="繳款進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp2" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="還款方式">先息後本</td>
        </tr>
        <tr name="171" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="債權總類">
            <span class="fcolor" style="white-space:nowrap;">
              柬埔寨不動產融資
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">9.0 %</span>
          </td>
          <td data-th="物件編號">S100021</td>
          <td data-th="債權額度">
            <span class="fbold">
               20,000,000
            </span>
          </td>
          <td data-th="期數">12 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2019-08-29</td>
          <td data-th="認購進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="繳款進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp2" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="還款方式">先息後本</td>
        </tr>
        <tr name="1" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="債權總類">
            <span class="fcolor" style="white-space:nowrap;">
              房屋抵押借款
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">3.5 %</span>
          </td>
          <td data-th="物件編號">S1000111</td>
          <td data-th="債權額度">
            <span class="fbold">
               4,000,000
            </span>
          </td>
          <td data-th="期數">42 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-07-10</td>
          <td data-th="認購進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="繳款進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp2" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="還款方式">本息攤還</td>
        </tr>
        <tr name="23" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="債權總類">
            <span class="fcolor" style="white-space:nowrap;">
              醫美
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">4.25 %</span>
          </td>
          <td data-th="物件編號">M0951341</td>
          <td data-th="債權額度">
            <span class="fbold">
               148,000
            </span>
          </td>
          <td data-th="期數">3 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-09-20</td>
          <td data-th="認購進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="繳款進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp2" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="還款方式">本息攤還</td>
        </tr>
        <tr name="30" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="債權總類">
            <span class="fcolor" style="white-space:nowrap;">
              醫美
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">4.25 %</span>
          </td>
          <td data-th="物件編號">M0943421</td>
          <td data-th="債權額度">
            <span class="fbold">
               893,000
            </span>
          </td>
          <td data-th="期數">3 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-09-20</td>
          <td data-th="認購進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="繳款進度">
            <div class="progress ">
              <div class="progress-bar progress-barpp2" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100 %
              </div>
            </div>
          </td>
          <td data-th="還款方式">本息攤還</td>
        </tr>
        </div>
      </tbody>
    </table>
  <!-- 分頁 -->
  <nav aria-label="..." class="m-auto pd2070 page_n">
  
  </nav>

  <div class="form-group page_b page_ba">
  
  </div>

</div>
</div>

<!-- modal -->
<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
  <div class="mobg2">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div id="claim_detail"></div>
    </div>
  </div>
  <div class="modal-footer">
  </div>
</div>
</div>
</div>
<!-- modal    -->

    </div>
   

    
<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.14/js/jquery.tablesorter.min.js"></script>
<script src="/aos/aos_wy.js"></script>
<script src="/assets/front/claim_investment_trial-eac8d2b2104d96718a40109d93efb3eba5693f7c90ad21518d55bdf05d590b5b.js"></script>
<script src="/assets/front/claim_category-d946778952f23ff925b6fd8bdec06fe2edd933c5137a99a7c7d49bb54f99c930.js"></script>  
<script type="text/javascript">
var user_risk_category = 0;
var user_risk_options = '';


</script>



</body>
</html>

@endsection