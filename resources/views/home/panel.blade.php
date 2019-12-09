@extends('layout.header')

@section('content')

<div id="main-page">
        
        <link rel="stylesheet" media="screen" href="/modal/modal.css" />
        <link rel="stylesheet" media="screen" href="/css/sliderbar.css" />
        <link rel="stylesheet" media="screen" href="/table/css/table.css" />
        <link rel="stylesheet" media="screen" href="/css/goodpopup.min.css?v=2018091701" />
        <link rel="stylesheet" media="screen" href="/assets/front/index-58a94d7228d40d3df1b1858bd770f8785cefaade1d626b333e149099e452543f.css" />
        
        {{-- <a class="btn btn-outline-success my-2 my-sm-0" href="{{ url('/logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          登出
        </a>

        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
        </form> --}}



        {{-- @foreach ($loans as $row)
        <p style="display:inline-block">內容 {{ $row->lender_name }}</p> --}}
            {{-- <form class="data_form_test">
                <p style="display:inline-block">類別:{{ $row->type->content }}</p>
                <a href="/event/edit?id={{$row->id}}" style="display:inline-block"><p> {{ $row->content }}</p></a>
                <button type="button" onclick="remove_item({{ $row->id }})" style="display:inline-block">刪除</button>
                
            </form>     --}}
        {{-- <br/>    
        @endforeach --}}












        <div id="banner-box">
          <div class="banner-list">
            <!--活动-->
            <!-- <div class="banner_wrapper" style="background-image:url() "> -->
            <li style="background: url('../banner/img/1.jpg') ; background-attachment: fixed;">
              <div class="animate-box png">
                <div class="index-section1-banner" aos="fade-right" aos-duration="1000">
                  <h2>債權投資 月月領錢</h2>
                  <p>
                    透過智能媒合、可靠的債權讓與機制<br>提供投資者安全、快速的加薪神器
                  </p>
                  <div class="play">
                    <a href="/front/claim_category?type=special">
                      <button name="button" type="submit" class="play-button" style="background-color:rgb(96,203,31); color:white;">立即投資</button>
        </a>          </div>
                </div>
                <div class='container'>
                  <canvas id='star-particle'></canvas>
                </div>
                <div class="animate-img"><!-- <img src="banner/img/a777b23736b812414d59e18810923b54.png"> --></div>
              </div>
              <div class="enter_more2 floating">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </div>
            </li>
          </div>
        </div>
        <section class="section section-code bg11" id="id2">
            <!-- div class="container_full" style="min-height: 260px;">
                <div style="color:black; text-align: center; padding-top: 20px; font-size: 20px">距離下一次投標時間</div>
                <section class="landing">
                  <div class="landing-inner">
                    <div class="countdown">
                      <div class="days" style="padding-left:5px;"><span>__</span></div> 
                      <div class="hours"><span>__</span></div>
                      <div class="minutes"><span>__</span></div>
                      <div class="seconds" style="width:80px;"><span>__</span></div>
                    </div>
                  </div>
                </section>
              </div -->
              <div class="container">
                  <div class="row con60 cob60">
                      <div style=" width: 100%">
                          <div class="col-md-7">
                              <div style="padding-left: 30px;">
                                  <div class="title1">豬豬在線三大特色</div>
                                  <div style="padding-top:10px;padding-bottom: 10px ">透過智能媒合、可靠的債權讓與機制， 提供投資者安全、快速的加薪神器 </div>
                              </div>
                              <div aos="fade-up" aos-duration="1000" class="aos-init"> <img src="../images/txt1.png" alt="" style="width:100%"></div>
                              <div aos="fade-up" aos-duration="1500" class="aos-init"> <img src="../images/txt2.png" alt="" style="width:100%"></div>
                              <div aos="fade-up" aos-duration="2000" class="aos-init"> <img src="../images/txt3.png" alt="" style="width:100%"></div>
                          </div>
                      </div>
                  </div>
                </div>
        </section>
        <section class="service_jpg2">
          <div class="container">
            <div class="row con60">
              <div class="col-md-6 offset-md-3 text-center">
                <div class="text-center">
                  <!-- <div class="stitle color5">Credit score</div> -->
                  <div class="title1 color5">豬豬在線媒合表現</div>
                </div>
              </div>
              <div class="col-md-4 text-center  " >
                <h1 class="color5 f50 "><span>$</span>
                  <span class="counter">
                     4,392,039
                  </span>
                </h1>
                <div class="color5 ">會員收益</div>
              </div>
              <div class="col-md-4 text-center bored" >
                <h1 class="color5 f50"><span>$</span>
                  <span class="counter" style="font-family:'Arial'";>
                     52,554,000
                  </span>
                </h1>
                <div class="color5">投資總額</div>
              </div>
              <div class="col-md-4 text-center bored" >
                <h1 class="color5 f50">
                  <span class="counter" style="font-family:'Arial'";>8.14</span>
                  <span>%</span>
                </h1>
                <div class="color5">年平均報酬</div>
              </div>
            </div>
            <div class="index-main-button"><a href="/front/operational_process">了解智能媒合</a> </div>
          </div>
        </section>
        <section class="service_jpg22">
            <div class="container">
                <div class="row con60">
                    <div class="col-md-6 offset-md-3 text-center">
                        <div class="text-center">                  
                            <!--
                            <div class="title1">該如何投資? </div>
                            -->
                        </div>
                    </div>
                    <div>
                        <img src="../images/s1.png" width="100%"  class="m1">   
                        <img src="../images/s_img.png" width="100%" style="display:none;" class="m2">            
                    </div>                      
                    <div class="index-main-button" style="margin-top: 20px; margin-bottom: 50px;"><a href="/users/sign_up" style="color: #fff">立即加入</a> </div>
                </div>          
            </div>
        </section>
        <section>
          
        <style>
        .img{
            width: 100%;
        }
        </style>
        <section class="service_jpg2_b" style="background: url(/images/banner_a.jpg)">
            <div class="container mb-center">
                <div class="row con60">
                    <div class="col-md-12">
                        <div class=" ">
                            <div class="title1 color5" style="font-size:38px; ">何謂違約率品質? </div>
                        </div>
                    </div>                                           
                </div>
                <div>
                    <div class="color5 " style="max-width: 500px; font-size: 19px;padding-top:30px;">
                        從投資者角度來看違約率，係指投資者所投資的債權，無法如期兌付本金及利息之機率。債權依據不同風險屬性分為Ａ～Ｅ之債權
                    </div>
                </div>
                    <div class="check-rate-table" style="padding-top: 40px;">
                        <button class="index-main-button" data-toggle="modal" data-target="#defaultRateTableModal" style="margin-top:0px;">違約率品質</button>
                    </div> 
                </div>
        </section>
        <div class="modal fade bd-example-modal-lg" id="defaultRateTableModal" tabindex="-1" role="dialog" aria-labelledby="defaultRateTableModalitle" aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width:1000px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <!--  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <button class="option-btn" data-year="2018" data-season="2">2018年第2季</button>
                            <button class="option-btn" data-year="2018" data-season="3">2018年第3季</button>
                            <button class="option-btn" data-year="2018" data-season="4">2018年第4季</button>
                            <button class="option-btn" data-year="2019" data-season="1">2019年第1季</button>
                            <button class="option-btn" data-year="2019" data-season="2">2019年第2季</button>
                            <button class="option-btn" data-year="2019" data-season="3">2019年第3季</button>
                            <div id="img-box">
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <img class="img" id="img-1" src=../uploads/default_rate_table/dpd30/6/web_2019-09-30.jpg>
                                        <div class="image-title">30+DPD%: 31-180 天逾期件數的比率</div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <img class="img" id="img-2" src=../uploads/default_rate_table/dpd90/6/web_2019-09-90.jpg>
                                        <div class="image-title">90+DPD%: 91-180 天逾期件數的比率</div>                        
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <img class="img" id="img-3" src=../uploads/default_rate_table/nco/6/web_2019-09-N.jpg>
                                        <div class="image-title">NCO %: 180 天以上逾期件數的比率</div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer" style="justify-content: flex-start;">
                        備註：A代表風險等級低、E代表風險等級高
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="section_icon2">
          <!-- 什麼是智能媒合 -->
          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="mobg">
                  <div class="modal-header">
                    <!--  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="modal-title-b">Smart Matching</div>
                    <div class="modal-title-c">什麼是智能媒合 ?</div>
                    <div class="modal-all-p">
                      <div class="modal-f1">根據投資人的風險屬性選擇，自動媒合相對應的投資組合，快速進行投資媒合。
                      </div>
                      <div class="modal-f1">豬豬在線首創債權轉讓智能媒合，依照您挑選的風險屬性，系統將以1,000元為最小單位進行隨機分配。以美國著名的P2P平台Lending Club的資料驗證為例(如圖)，當投資標的物的數量愈來愈多時，投資報酬的波動率會逐漸趨於穩定與一致，其投資收益率和壞帳率將接近整體平台的平均表現。
                      </div>
                    </div>
                    <div class="modal-img"><img src="../images/t3.png" alt=""></div>
                    <div class="modal-all-p">
                      <div class="modal-f1">當投資案件數小於25件時, 平均年化報酬率將有機會創造超額的報酬率(12%)： 也有可能產生投資損失率(-4%), 表示風險變化度極大，投資損益很難預測，但當投資案件數超過 100, 其投資報酬率將趨近於中位數 5%，也就是平台整體的平均報酬率。
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <!--   <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 什麼是智能媒合 -->
          <!-- 什麼是信用評分 -->
          <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="mobg2">
                  <div class="modal-header">
                    <!--  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="modal-title-b">Credit Score</div>
                    <div class="modal-title-c">什麼是信用評分 ?</div>
                    <div class="modal-all-p">
                      <div class="modal-f1">
                      全台唯一具備專業團隊及金融科技技術可以對轉讓債權進行A-Card申請信用評分及B-Card繳款行為信用評分，並定期公告各級信用評分債權的違約率品質。
                      </div>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-6 col-12 modal-title">
                            <div class="modal-title-d">進件信用評分(Application Score)</div>
                            <div><img src="../images/t1.png" alt="" style="width:100%"></div>
                        </div>
                        <div class="col-sm-6 col-12 modal-title">
                          <div class="modal-title-d">行為信用評分(Behavior Score)</div>
                          <div><img src="../images/t2.png" alt="" style="width:100%"></div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-all-p">
                      <div class="modal-f1">豬豬在線的信用評分模型以逾期30天以上定義為違約帳戶(Bad Account)” 遠較巴塞爾協定中的  信用風險－内部評等法（Credit Risk － IRB）中一般性定義以逾期90天以上視爲違約更加謹慎。
                      </div>
                      <div class="modal-f1">K-S值表示好客戶壞客戶累積機率的差值，若K-S值愈高，則代表兩者的差距愈大，即模型評分可區隔好壞客戶的能力愈強。
                      </div>
                      <div class="modal-f1">豬豬在線的債權模型區隔力進件與行爲信用評分的K-S值分別為37.2% 與 61.7%，皆有充分鑑別違約的能力。 
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <!--   <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 什麼是信用評分 -->
          <!-- 投資運行模式 -->
          <div class="modal fade " id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog w-modal-content" role="document">
              <div class="modal-content  ">
                <div class="mobg3">
                  <div class="modal-header">
                    <!--  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="modal-title-b text-center">Operating Mode</div>
                    <div class="modal-title-c text-center">投資運行模式</div>
                    <div class="modal-all-p">
                      <div class="modal-f1">
                        <img src="../images/index_open.png" alt="" width="100%">
                        <div class="" style="width: 100%;text-align: center;">
                          <img src="../images/scroll.png" alt="">
                        </div>
                        <div class="index-modal-open">
                          <div class="open2"><img src="../images/index_open2.png" alt=""></div>
                          <div class="indext20">
                            <div class="f23m">智能媒合項目</div>
                            <div class="index-3">
                              <div class="heblock">
                                <img src="../images/n1.png" alt="" width="22" class="igpd">
                              </div>
                              <span class="fos">完成註冊登入會員</span>
                            </div>
                            <div class="index-3">
                              <div class="heblock">
                                <img src="../images/n2.png" alt="" width="22" class="igpd">
                              </div>
                              <span class="fos">自行風險屬性評估
                              </span>
                            </div>
                            <div class="index-3">
                              <div class="heblock">
                                <img src="../images/n3.png" alt="" width="22" class="igpd">
                              </div>
                              <span class="fos">挑選最適的個人投資風險等級的組合
                              </span>
                            </div>
                            <div class="index-3">
                              <div class="heblock">
                                <img src="../images/n4.png" alt="" width="22" class="igpd">
                              </div>
                              <span class="fos">審閱債權案件及投資條件
                              </span>
                            </div>
                            <div class="index-3">
                              <div class="heblock">
                                <img src="../images/n5.png" alt="" width="22" class="igpd">
                              </div>
                              <span class="fos">進行智能媒合（依照風險組合進行案件媒合挑選）
                              </span>
                            </div>
                            <div class="index-3">
                              <div class="heblock">
                                <img src="../images/n6.png" alt="" width="22" class="igpd">
                              </div>
                              <span class="fos">完成投資及繳費，完成線上投資憑證合約
                              </span>
                            </div>
                            <div class="index-3">
                              <div class="heblock">
                                <img src="../images/n7.png" alt="" width="22" class="igpd">
                              </div>
                              <span class="fos">開始享受每月固定投資利息
                              </span>
                            </div>
                            <div class="index-3">
                              <div class="heblock">
                                <img src="../images/n8.png" alt="" width="22" class="igpd">
                              </div>
                              <span class="fos">豬豬在線僅收取雙方的媒合手續費
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="" style="width: 100%;text-align: center;">
                          <img src="../images/scroll.png" alt="">
                        </div>
                        <div class="index-modal-open">
                          <div class="open2"><img src="../images/index_open3.png" alt=""></div>
                          <div class="indext20">
                            <div class="f23m">特別投資項目</div>
                            <div class="index-3">
                              <div class="heblock">
                                <img src="../images/n1.png" alt="" width="22" class="igpd">
                              </div>
                              <span class="fos">完成註冊登入會員</span>
                            </div>
                            <div class="index-3">
                              <div class="heblock">
                                <img src="../images/n2.png" alt="" width="22" class="igpd">
                              </div>
                              <span class="fos">審閱債權案件及投資條件
                              </span>
                            </div>
                            <div class="index-3">
                              <div class="heblock">
                                <img src="../images/n3.png" alt="" width="22" class="igpd">
                              </div>
                              <span class="fos">進行特別個案挑選及投標
                              </span>
                            </div>
                            <div class="index-3">
                              <div class="heblock">
                                <img src="../images/n4.png" alt="" width="22" class="igpd">
                              </div>
                              <span class="fos">完成投資申購及繳費，完成線上投資憑證合約
                              </span>
                            </div>
                            <div class="index-3">
                              <div class="heblock">
                                <img src="../images/n5.png" alt="" width="22" class="igpd">
                              </div>
                              <span class="fos">開始享受每月固定投資利息
                              </span>
                            </div>
                            <div class="index-3">
                              <div class="heblock">
                                <img src="../images/n6.png" alt="" width="22" class="igpd">
                              </div>
                              <span class="fos">豬豬在線僅收取雙方的媒合手續費
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <!--   <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 投資運行模式 -->
          <!-- 豬豬再現服務項目 -->
          <div class="modal fade" id="exampleModalLong4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="mobg4">
                  <div class="modal-header modal-header2 hader-2">
                    <!--  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body b1">
                    <div class="modal-all-p b1p">
                      <div class="modal-title-b" style="padding-top: 0px;">About</div>
                      <div class="modal-title-c f23ma">豬豬在線服務</div>
                      <div class="f140 tp20"> 豬豬在線是隸屬於亞太普惠金融科技集團旗下信任豬股份有限公司經營的債權轉讓智能媒合投資平台，主要產品為媒合各類優質的消費商品分期債權，客戶數量多且分散，内容涵蓋了醫學美容、教育學習、生活3C用品等實際消費場景；平台也以提昇台灣的消費經濟、互利普惠金融及建立信用環境為運營的宗旨！</div>
                      <div class="f140 tp20"> 亞太普惠金融科技集團憑藉著過去5年的穩健經營績效與經驗，以及有多年國際金融機構服務經驗的資深管理團隊，一起攜手創立了信任豬股份有限公司，志在實現金融科技普惠大眾的願景，創造一個共享互利的互聯網平台。豬豬在線平台主要以最新的智能媒合科技並結合真實驗證的信用風險評分模型，提供給普惠大眾輕鬆方便的理財新體驗。</div>
                    </div>
                  </div>
                  <div class="modal-body b2">
                    <!-- <div class="modal-title-ba">Service</div> -->
                    <div class="modal-all-p b1p b1pr">
                      <div class="modal-title-c f23ma" style="color: #fff">豬豬在線債權轉讓模式特點</div>
                      <div class="f140 tp20" style="color: #fff"> 在法律的規範下，放款人（債權人） 與借款人簽訂借款協議，資金先行出借給借款人（債務人）並取得相應的債權，豬豬在線再將放款人擁有的債權進行整理並上架至網貸平台，通過債權轉讓的方式供投資大眾（債權受讓人）投標買受。在這個模式中，基本的法律主體有四個：投資人、放款人、借款人及網貸平台。其中，放款人與借款人之間是民間借貸法律關係、放款人與投資人之間是債權讓受關係、網貸平台則為相應交易提供居間進行必要的信用及風險評估、資金交易及債權轉讓媒合的服務。此種創新模式可以很好的解決了“P2P點對點”模式中投資人與借款人不好匹配的問題。
                      </div>
                    </div>
                    <div class="clear"></div>
                  </div>
                  <div class="modal-body b3">
                    <div class="w450">
                      <div class="modal-title-c f23ma">豬豬在線會員好處</div>
                      <div class="f140 tp20 tp202"> 豬豬在線會定期且頻繁地提供新的債權上架，成為豬豬在線會員後，可以使用智能媒合科技輕鬆快速地完成最合適自我風險喜好的債權投資組合，當然也可以根據不同的風險評級、自我喜好與債權期限等，選擇單一債權個案進行投資，可以有效地提高閒置資金的利用率並獲得較高的理財報酬。</div>
                      <div class="modal-title-c f23ma top0">成為會員無需支付任何費用</div>
                      <div class="f140 tp20 tp202"> 註冊成為豬豬在線會員是完全免費的，只有在您完成投資媒合，匯款並獲得收益時，平台才會向您收取手續費。</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 豬豬再現服務項目 -->
          <div class="container" id="id3">
            <div class="row con60">
              <div class="text_bg3">
                <div class="col-md-6 offset-md-3 text-center " aos="fade-up">
                  <div class="text-center">
                    <div class="stitle">Service</div>
                    <div class="title1">關於豬豬在線</div>
                    <!--<p class="cop">什麼是豬豬在線、信用評分及智能媒合、投資運行模式: 智能媒合項目, 特別投資項目
                      </p>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <div class="container-fluid  service_jpg" aos="fade-up">
              <div class="row">
                <div class="col-md-3 col-sm-6 mouse_row">
                  <div class="col-md-9 mx-auto imformation-label" data-toggle="modal" data-target="#exampleModalLong4" style="position:relative">
                    <div class="stitle_1">About</div>
                    <div class="title1_1">豬豬在線服務</div>
                    <p class="cop_1">運用最新的智能媒合科技、安全的債權讓與、穩健有效的信用評分模型，提供便捷的普惠金融服務，讓您輕鬆體驗理財樂趣！
                    </p>
                    <div class="learn-more-box">
                        <button class="learn-more-button">閱讀更多</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 mouse_row">
                  <div class="col-md-9 mx-auto imformation-label" data-toggle="modal" data-target="#exampleModalLong2">
                    <div class="stitle_1">Credit Score</div>
                    <div class="title1_1">什麼是信用評分?</div>
                    <p class="cop_1">信用評分最初是由美國的一家信用評分公司FICO(Fair Issac & Company) 於1989年推出，信用評分旨在通過考慮個人財務歷史中的各種因素來衡量違約風險。
                    </p>
                    <div class="learn-more-box">
                        <button class="learn-more-button">閱讀更多</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 mouse_row">
                  <div class="col-md-9 mx-auto imformation-label " data-toggle="modal" data-target="#exampleModalLong">
                    <div class="stitle_1">Smart Matching</div>
                    <div class="title1_1">什麼是智能媒合</div>
                    <p class="cop_1">根據投資人的風險屬性選擇，自動媒合相對應的投資組合，快速進行投資媒合。
                    </p>
                    <div class="learn-more-box">
                        <button class="learn-more-button">閱讀更多</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 mouse_row">
                  <div class="col-md-9 mx-auto imformation-label" data-toggle="modal" data-target="#exampleModalLong3">
                    <div class="stitle_1">Operating Mode</div>
                    <div class="title1_1">投資運行模式</div>
                    <p class="cop_1">借投媒合成立、債權讓與及按期投資報酬給付
                    </p>
                    <div class="learn-more-box">
                        <button class="learn-more-button">閱讀更多</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section section--code bg2">
          <div class="container">
            <div class="row con60 h300">
              <div class="text_bg4">
                <div class="col-md-6 offset-md-3 text-center t20" aos="fade-up">
                  <div class="text-center">
                    <div class="stitle">News</div>
                    <div class="title1">新聞專區</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row articles-box">
                <div class="col-md-4 pd5" aos="fade-up">
                  <a href="/news/217/news_detail">
                    <div class="linka">
                      <div class="news-img">
                          <img src="../uploads/photo/image/130/web_%E8%9E%A2%E5%B9%95%E5%BF%AB%E7%85%A7_2019-10-31_%E4%B8%8B%E5%8D%884.22.19.png" alt="Web %e8%9e%a2%e5%b9%95%e5%bf%ab%e7%85%a7 2019 10 31 %e4%b8%8b%e5%8d%884.22.19" />
                      </div>
                      <div class="news-title">監理沙盒將上路 銀行、P2P借貸業者共進創三贏</div>
                      <p class="news-pretext">【中時電子報 綜合報導 】</p>
                      <div class="news-created-time">2018/09/01</div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 pd5" aos="fade-up">
                  <a href="/news/218/news_detail">
                    <div class="linka">
                      <div class="news-img">
                          <img src="../uploads/photo/image/127/web_%E8%9E%A2%E5%B9%95%E5%BF%AB%E7%85%A7_2019-10-31_%E4%B8%8B%E5%8D%884.19.14.png" alt="Web %e8%9e%a2%e5%b9%95%e5%bf%ab%e7%85%a7 2019 10 31 %e4%b8%8b%e5%8d%884.19.14" />
                      </div>
                      <div class="news-title">銀行結盟P2P 金管會點頭</div>
                      <p class="news-pretext">【經濟日報 記者韓化宇／台北報導 】</p>
                      <div class="news-created-time">2018/09/06</div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 pd5" aos="fade-up">
                  <a href="/news/216/news_detail">
                    <div class="linka">
                      <div class="news-img">
                          <img src="../uploads/photo/image/125/web_%E8%9E%A2%E5%B9%95%E5%BF%AB%E7%85%A7_2019-10-31_%E4%B8%8B%E5%8D%884.17.57.png" alt="Web %e8%9e%a2%e5%b9%95%e5%bf%ab%e7%85%a7 2019 10 31 %e4%b8%8b%e5%8d%884.17.57" />
                      </div>
                      <div class="news-title">年金被砍免驚！66萬軍公教族群三招檢視理財需求 </div>
                      <p class="news-pretext">【鉅亨網記者陳慧菱 台北2018/09/11 】</p>
                      <div class="news-created-time">2018/09/17</div>
                    </div>
                  </a>
                </div>
            </div>
          </div>
          <div class="show-more aos-init aos-animate" data-category="news" aos="fade-up">
            <button class="index-main-button" style="display: block; padding-top: 0;"> 觀看更多</button>
          </div>
        </section>
        <section>
          <input id="intelligent" type="hidden">
          <!-- simulation html template -->
          <script id="demo-popup-1" type="text/x-handlebars-template">
              <div class="popup_wrapper">
                  <div class="list_banner">
            <div class="container">
                <div class="hl4">
                    <div class="" style="text-align: center;padding-bottom: 20px;">
                    <img src="../images/step1.png" width="90"></div>
                    請輸入您的投資金額
                    <div class="p14">輸入您預計要投資的金額，此為模擬投資金額非實際投資金額</div>
                </div>
                <div class="ip">
                    <input type="number" min="1" max="150" class="form-control" id="tenderAmount" placeholder="輸入你目前能投資的金額(單位 - 萬元)">
                    <span class="alert-text"></span>
                </div>
            </div>
        </div>
                  <div class="popup">
                      <button class="popup__button" id="button-go-2">下一步</button>
                  </div>
              </div>
              </div>
          </script>
          <script id="demo-popup-2" type="text/x-handlebars-template">
              <div class="popup_wrapper">
                  <div class="select_lab" style="width: 100%" id="id1">
            <div class="form">
                <div class="" style="text-align: center;padding-top: 30px;">
                <img src="../images/step2.png" width="90"></div>
                <div class="p28a">請選擇您的投資習慣設定
                </div>
                <div class="p140">選擇適合您的投資風險屬性類型進行智能媒合
                </div>
                <div class="tabs">
                    <form>
                        <div class="intelligent_block clearAfter current_block">
                        </div>
                    </form>
                    <div class="tab-button-outer">
                        <ul id="tab-button">
                            <li><a href="#tab01">穩重謹慎型<br>A+B</a></li>
                            <li><a href="#tab02">積極進取型<br>C+D+E</a></a>
                            </li>
                            <li><a href="#tab03">穩健平衡型<br>A+B+C+D+E)</a></a>
                            </li>
                            <li><a href="#tab04">穩健積極型<br>(A/B)+(C/D/E)</a></a>
                            </li>
                            <li><a href="#tab05">足智多謀型<br>(A/B/C/D/E)</a></a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-select-outer">
                        <select id="tab-select" style="1px solid #696969; line-height: 30px; ">
                            <option value="#tab01">穩重謹慎型</option>
                            <option value="#tab02">積極進取型</option>
                            <option value="#tab03">穩健平衡型</option>
                            <option value="#tab04">穩健積極型</option>
                            <option value="#tab05">足智多謀型</option>
                        </select>
                    </div>
                    <div id="tab01" class="tab-contents">
                        <p class="tabp"><i class="fa fa-info-circle" aria-hidden="true"></i> 穩重謹慎型 A+B: 適合風險承受度較低，期望避免投資本金之損失 ; A/B介於 10%-90%可自行調整
                        </p>
                        <p>
                            <div class="proportion_block clearAfter m100 current_block">
                                <div class="space_block"></div>
                                <div class="slider_style_area">
                                    <div class="proportion-slider-first noUi-target noUi-ltr noUi-horizontal"></div>
                                    <div class="proportion_bar clearAfter">
                                        <div class="slider-first-A pull-left"></div>
                                        <div class="slider-first-B pull-right"></div>
                                    </div>
                                </div>
                                <div class="space_block"></div>
                            </div>
                        </p>
                        <a href="#id2" class="goto">
                            <div>
                            </div>
                        </a>
                    </div>
                    <div id="tab02" class="tab-contents">
                        <p class="tabp"><i class="fa fa-info-circle" aria-hidden="true"></i> 積極進取型 C+D+E: 願意承受較高之風險，以追求高的投資報酬 ; C/B/D 可介於 10%-80% 自行調整
                        </p>
                        <p>
                            <div class="proportion_block clearAfter m100">
                                <div class="space_block"></div>
                                <div class="slider_style_area">
                                    <!-- 積極進取 -->
                                    <div class="proportion-slider-second noUi-target noUi-ltr noUi-horizontal"></div>
                                    <div class="proportion_bar clearAfter">
                                        <div class="slider-second-C second_bar"></div>
                                        <div class="slider-second-D second_bar t-center"></div>
                                        <div class="slider-second-E second_bar t-right"></div>
                                    </div>
                                </div>
                                <div class="space_block"></div>
                            </div>
                        </p>
                        <div>
                        </div>
                    </div>
                    <div id="tab03" class="tab-contents">
                        <p class="tabp"><i class="fa fa-info-circle" aria-hidden="true"></i> 穩健平衡型 A+B+C+D+E: ＡBCDE五項平均分配；適合承受少量之風險，以追求合理之投資報酬。
                        </p>
                        <p>
                            <div class="proportion_block clearAfter m100">
                                <div class="average_area">
                                    <div class="average_block a-color"></div>
                                    <div class="average_block b-color"></div>
                                    <div class="average_block c-color"></div>
                                    <div class="average_block d-color"></div>
                                    <div class="average_block e-color"></div>
                                </div>
                                <div class="average_bar clearAfter">
                                    <div class="bar_block ">A：20%</div>
                                    <div class="bar_block ">B：20%</div>
                                    <div class="bar_block ">C：20%</div>
                                    <div class="bar_block ">D：20%</div>
                                    <div class="bar_block ">E：20%</div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </p>
                        <div>
                        </div>
                    </div>
                    <div id="tab04" class="tab-contents">
                        <p class="tabp"><i class="fa fa-info-circle" aria-hidden="true"></i> 穩健積極型 (A/B)+(C/D/E); 適合在穩健中願意承受相當程度之風險，追求較高之投資報酬 ; A/B 擇一，C/D/E擇一，可介於 40%-60% 自行調整
                        </p>
                        <p>
                            <div class="intelligent_block clearAfter third_intelligent_block">
                                <div class="">
                                    <div class="proportion_block clearAfter m100">
                                        <div class="slider_style_area">
                                            <div class="proportion-slider-third noUi-target noUi-ltr noUi-horizontal"></div>
                                            <div class="proportion_bar clearAfter">
                                                <div class="pull-left">
                                                    <span class="slider-third-AB-label">A</span>：<span class="slider-third-AB"></span>
                                                </div>
                                                <div class="pull-right">
                                                    <span class="slider-third-CDE-label">C</span>：<span class="slider-third-CDE"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="proportion_select left8">
                                            <select class="form-control js-change-color" data-id="proportion-slider-third" data-target="first">
                                                <option value="a-color">A</option>
                                                <option value="b-color">B</option>
                                            </select>
                                        </div>
                                        <div class="proportion_select right right8 ">
                                            <select class="form-control js-change-color" data-id="proportion-slider-third" data-target="second">
                                                <option value="c-color">C</option>
                                                <option value="d-color">D</option>
                                                <option value="e-color">E</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </p>
                    </div>
                    <div id="tab05" class="tab-contents">
                        <p class="tabp"><i class="fa fa-info-circle" aria-hidden="true"></i> 足智多謀型 (A/B/C/D/E): 選擇任一投資風險項目；適合各類投資，自身有充分判斷風險的能力。
                        </p>
                        <p>
                            <div class="proportion-slider-forth intelligent_block clearAfter fourth_intelligent_block" data-target="">
                                <div class=" ">
                                    <div class="proportion_block clearAfter m100">
                                        <div class="slider_style_area">
                                            <div class="unique_area ">
                                                <div id='unique_block' class="unique_block a-color h40">A：100%</div>
                                            </div>
                                        </div>
                                        <div class="proportion_select left8 p25">
                                            <select class="form-control js-change-color" data-id="proportion-slider-forth">
                                                <option value="a-color">A</option>
                                                <option value="b-color">B</option>
                                                <option value="c-color">C</option>
                                                <option value="d-color">D</option>
                                                <option value="e-color">E</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup">
            <button class="popup__button" id="button-back-1">上一步</button>
            <button class="popup__button" id="button-go-3">下一步</button>
        </div>
        <script>
            var user_risk_category = 2;
            var user_risk_options = [];
            var user_slider_percents;
            if ("[40, 30, 30]" !== "") {
                user_slider_percents = JSON.parse("[40, 30, 30]");
            }
            if (true && user_risk_category === 0) {
                swal("請⾄投資習慣設定選取⽅案。", "", "warning");
            }
        </script>
        <script src="/assets/front/intelligent-87cfa7a12dccec4e70bc5f821ee8b595545e0d6f00aff899a40501674dddb300.js"></script> 
        <script type="text/javascript">
            var make_slider_dynamic = function(){ 
                var $tabButtonItem = $('#tab-button li'),
                    $tabSelect = $('#tab-select'),
                    $tabContents = $('.tab-contents'),
                    activeClass = 'is-active';
                    $tabContents.hide();
                    $tabContents.first().show()
                $tabButtonItem.first().addClass(activeClass);
                $tabButtonItem.find('a').on('click', function(e) {
                    var target = $(this).attr('href');
        
                    $tabButtonItem.removeClass(activeClass);
                    $(this).parent().addClass(activeClass);
                    $tabSelect.val(target);
                    $tabContents.hide();
                    $(target).show();
                    e.preventDefault();
                    $("#intelligent").val($(this).parent().find('a').attr("href"))
                });
        
                $tabSelect.on('change', function() {
                    var target = $(this).val(),
                        targetSelectNum = $(this).prop('selectedIndex');
        
                    $tabButtonItem.removeClass(activeClass);
                    $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
                    $tabContents.hide();
                    $(target).show();
                    $("#intelligent").val($tabButtonItem.eq(targetSelectNum).find('a').attr("href"))
                });
            }
        </script>
        
        
              </div>
          </script>
          <script id="demo-popup-3" type="text/x-handlebars-template">
              <div class="popup">
                  <div class="row" style="justify-content: center">
            <div class="" style="text-align: center;padding-bottom: 20px;width: 100%;margin-top: 10px;"><img src="../images/step3.png" width="90">
                <div class="p28a">查看預估收益
                </div>
                <div class="p140">可查看您模擬投資後的預估投資收益金額及債權明細
                </div>
            </div>
            <div style="width: 80%;text-align: center;">
                <div style=" text-align: center; ">
                    <span class="f20">實際投入金額</span>
                    <span id="real-tender"class="f35"></span>
                </div>
                <div style="text-align: center; padding-left: 20px">
                    <span class="f20">預估收益</span>
                    <span id="estimated-benefit" class="f35"></span>
                </div>
                <div style="text-align: center; padding-left: 20px">
                    <span class="f20">年化報酬率</span>
                    <span id="tender-income-percent" class="f35"></span>
                </div>
                    
            </div>
            
        
            <table id="claims" cellspacing="0" cellpadding="0" class="table rwd-table" style="width:90%;">
                <thead class="thead-light">
                    <tr class="title_tr">
                        <th width="10%"><span>風險等級</span></th>
                        <th width=""><span>年化收益</span></th>
                        <th width=""><span>物件編號</span></th>
                        <th width=""><span>債權額度</span></th>
                        <th width=""><span>期數</span></th>
                        <th width=""><span>剩餘金額</span></th>
                        <th width=""><span>還款方式</span></th>
                        <th width=""><span>投資金額</span></th>
                    </tr>
                </thead>
                <tbody>
        
                </tbody>
            </table>
        </div>
        <a href="/front/claim_category" class="popup__button_color" > 開啟智能媒合 </a>
        <a href="#" class="popup__button_color" id="button-go-1" > 重新體驗 </a>
              </div>
          </script>
          <!-- simulation html template -->
        </section>
        
                </div>

@endsection

{{-- @extends('layout.footer') --}}