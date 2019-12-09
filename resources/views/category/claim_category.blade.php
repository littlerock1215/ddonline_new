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
      <div class="icon_left"><img src="/images/con1.png" alt=""></div>
      <div class="icon_right">
        <div class="f28">
           4,392,039
        </div>
        <div class="f15"> 會員收益</div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="icon_left"><img src="/images/con2.png" alt=""></div>
      <div class="icon_right">
        <div class="f28">
           52,554,000
        </div>
        <div class="f15"> 投資總額</div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="icon_left"><img src="/images/con3.png" alt=""></div>
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
    <div class="btn_1 w0 ">
      {{-- <a href="/claim_category?type=special"> --}}
        <a href="/claim_category_special">
        <i class="fa fa-bar-chart" aria-hidden="true"></i> 特別投資項目
</a>        </div>
  </div>
  <div class="btn_left">
    <div class="btn_1 active_1">
      <a href="/claim_category?type=regular">
        <i class="fa fa-align-left" aria-hidden="true"></i> 智能媒合項目
</a>        </div>
  </div>
  
    <div id="invest" class="btn_right_R">
      <div class="btn_3 active_2">
        <a style="color:white">
          <i class="fa fa-cog" aria-hidden="true"></i>立即投資
        </a>
      </div>
    </div>
</div>
    <table id="claims" cellspacing="0" cellpadding="0" class="rwd-table tablesorter" style="margin-bottom: 5%;">
      <thead>
        <tr class="title_tr">
          <th data-field="action" data-formatter="ActionFormatter" width="8%">
            <span>風險等級</span>
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
        <tr name="164" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              A
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">5.25 %</span>
          </td>
          <td data-th="物件編號">A0984581</td>
          <td data-th="債權額度">
            <span class="fbold">
               14,000
            </span>
          </td>
          <td data-th="期數">15 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-12-19</td>
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
        <tr name="97" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              C
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">4.75 %</span>
          </td>
          <td data-th="物件編號">C0965951</td>
          <td data-th="債權額度">
            <span class="fbold">
               31,000
            </span>
          </td>
          <td data-th="期數">10 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-11-07</td>
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
        <tr name="73" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              A
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">5.25 %</span>
          </td>
          <td data-th="物件編號">A0972711</td>
          <td data-th="債權額度">
            <span class="fbold">
               90,000
            </span>
          </td>
          <td data-th="期數">24 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-10-31</td>
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
        <tr name="77" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              B
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">5.5 %</span>
          </td>
          <td data-th="物件編號">B0971951</td>
          <td data-th="債權額度">
            <span class="fbold">
               23,000
            </span>
          </td>
          <td data-th="期數">24 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-10-31</td>
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
        <tr name="78" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              B
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">5.5 %</span>
          </td>
          <td data-th="物件編號">B0965911</td>
          <td data-th="債權額度">
            <span class="fbold">
               90,000
            </span>
          </td>
          <td data-th="期數">24 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-10-31</td>
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
        <tr name="66" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              B
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">5.5 %</span>
          </td>
          <td data-th="物件編號">B0974661</td>
          <td data-th="債權額度">
            <span class="fbold">
               90,000
            </span>
          </td>
          <td data-th="期數">24 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-10-31</td>
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
        <tr name="55" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              A
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">5.25 %</span>
          </td>
          <td data-th="物件編號">A0962611</td>
          <td data-th="債權額度">
            <span class="fbold">
               120,000
            </span>
          </td>
          <td data-th="期數">18 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-10-24</td>
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
        <tr name="56" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              A
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">5.25 %</span>
          </td>
          <td data-th="物件編號">A0963251</td>
          <td data-th="債權額度">
            <span class="fbold">
               69,000
            </span>
          </td>
          <td data-th="期數">18 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-10-24</td>
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
        <tr name="57" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              A
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">5.25 %</span>
          </td>
          <td data-th="物件編號">A0963261</td>
          <td data-th="債權額度">
            <span class="fbold">
               86,000
            </span>
          </td>
          <td data-th="期數">18 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-10-24</td>
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
        <tr name="58" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              A
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">5.25 %</span>
          </td>
          <td data-th="物件編號">A0963521</td>
          <td data-th="債權額度">
            <span class="fbold">
               64,000
            </span>
          </td>
          <td data-th="期數">18 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-10-24</td>
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
        <tr name="59" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              B
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">5.5 %</span>
          </td>
          <td data-th="物件編號">B0964151</td>
          <td data-th="債權額度">
            <span class="fbold">
               191,000
            </span>
          </td>
          <td data-th="期數">18 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-10-24</td>
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
        <tr name="62" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              A
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">5.25 %</span>
          </td>
          <td data-th="物件編號">A0964201</td>
          <td data-th="債權額度">
            <span class="fbold">
               47,000
            </span>
          </td>
          <td data-th="期數">18 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-10-24</td>
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
        <tr name="64" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              E
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">6.25 %</span>
          </td>
          <td data-th="物件編號">E0969411</td>
          <td data-th="債權額度">
            <span class="fbold">
               95,000
            </span>
          </td>
          <td data-th="期數">18 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-10-24</td>
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
        <tr name="53" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              C
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">5.75 %</span>
          </td>
          <td data-th="物件編號">C0953942</td>
          <td data-th="債權額度">
            <span class="fbold">
               31,000
            </span>
          </td>
          <td data-th="期數">18 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-10-24</td>
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
        <tr name="54" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              B
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">5.5 %</span>
          </td>
          <td data-th="物件編號">B0954762</td>
          <td data-th="債權額度">
            <span class="fbold">
               37,000
            </span>
          </td>
          <td data-th="期數">24 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-10-24</td>
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
        <tr name="38" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              B
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">3.5 %</span>
          </td>
          <td data-th="物件編號">B0931691</td>
          <td data-th="債權額度">
            <span class="fbold">
               81,000
            </span>
          </td>
          <td data-th="期數">24 期</td>
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
        <tr name="158" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              C
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">4.75 %</span>
          </td>
          <td data-th="物件編號">C0954952</td>
          <td data-th="債權額度">
            <span class="fbold">
               23,000
            </span>
          </td>
          <td data-th="期數">6 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-12-19</td>
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
        <tr name="162" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              C
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">4.75 %</span>
          </td>
          <td data-th="物件編號">C0961602</td>
          <td data-th="債權額度">
            <span class="fbold">
               9,000
            </span>
          </td>
          <td data-th="期數">6 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-12-19</td>
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
        <tr name="151" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              D
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">5.0 %</span>
          </td>
          <td data-th="物件編號">D0936781</td>
          <td data-th="債權額度">
            <span class="fbold">
               7,000
            </span>
          </td>
          <td data-th="期數">3 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-12-19</td>
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
        <tr name="153" class="bd-example-modal-lg tender_document_detail" data-toggle="modal">
          <td class="lalign" data-th="風險等級">
            <span class="fcolor" style="white-space:nowrap;">
              E
            </span>
          </td>
          <td data-th="年化收益">
            <span class="fcolor2 ">5.25 %</span>
          </td>
          <td data-th="物件編號">E0938951</td>
          <td data-th="債權額度">
            <span class="fbold">
               13,000
            </span>
          </td>
          <td data-th="期數">6 期</td>
          <td data-th="剩餘金額">
            <span class="fbold">
               0
            </span>
          </td>
          <td data-th="上架日期">2018-12-19</td>
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
  <div class="pagination"><span class="page-link bg-dark-blue near-white"><i class='fa fa-caret-left' aria-hidden='true'></i> 上一頁</span> <li class="page-item active"><a class="page-link" href="/claim_category?page=1">1</a></li> <li class="page-item"><a class="page-link" rel="next" href="/claim_category?page=2">2</a></li> <li class="page-item"><a class="page-link" href="/claim_category?page=3">3</a></li> <li class="page-item"><a class="page-link" href="/claim_category?page=4">4</a></li> <a class="page-link" rel="next" href="/claim_category?page=2">下一頁 <i class='fa fa-caret-right' aria-hidden='true'></i></a></div>
  </nav>

  <div class="form-group page_b page_ba">
  <div class="pagination"><span class="page-link bg-dark-blue near-white"><i class='fa fa-caret-left' aria-hidden='true'></i> 上一頁</span> <a class="page-link" rel="next" href="/claim_category?page=2">下一頁 <i class='fa fa-caret-right' aria-hidden='true'></i></a></div>
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