@extends('user.header')

@section('admin_content')

<link rel="stylesheet" media="all" href="/assets/admin-a2d9679cd876b77306b69505b283d25f085563d38451d0785e8d72886a9fc0e1.css" />


    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header">新增媒合表現設定</h3>
          </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="padding:10px;">
                    <h4>媒合表現設定</h4>
                </div>
            <div class="panel-body">
                <form novalidate="novalidate" class="simple_form new_match_performance" id="new_match_performance" enctype="multipart/form-data" action="/admin/match_performances" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="vb/d2Zqgrik1mfI3GWN1GDyUdlQxPmn0qhBggwP3VccaAeDilJQJ2jcHSaJ0cpQceYZuXux4LghkaPDsg7nJDA==" />
                    @csrf
                    <div class="advantage_wrapper">
                    <div class="advantage_area">
                        <div class="advantage_row clearAfter col-xs-12 m-b-15 no-padding">
                        <div class="col-md-4 col-xs-12">
                            <div class="advantage_block">
                            <div class="match_performance_img"><img class="match_img" src="/assets/user_income-40489668de74bbfd42b8eb259cc8d110dd697288ed1ee6114330324a221dabb3.png" alt="User income" /></div>
                            <div class="advantage_block_title m-b-5">
                                會員收益
                            </div>
                            <div class="advantage_block_content">
                                
                            <input class="numeric integer required form-control width_eighty" value='{{$memberBenefits}}' type="number" step="1" name="memberBenefits" id="memberBenefits" />元
                               
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="advantage_block">
                            <div class="match_performance_img"><img class="match_img" src="/assets/invest_amount-8cddc19e90f97316ee4d3058bcf83b26ebab3bbfb7d018e6658993ea463abbcc.png" alt="Invest amount" /></div>
                            <div class="advantage_block_title m-b-5">
                                投資總額
                            </div>
                            <div class="advantage_block_content">
                                <input class="numeric integer required form-control width_eighty" value='{{$totalInvestAmount}}' type="number" step="1" name="totalInvestAmount" id="totalInvestAmount" />元
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="advantage_block">
                            <div class="match_performance_img"><img class="match_img" src="/assets/annual_avg-0cecbb30a376edc0a64291d9ebbb8295a47dad4ab833afc8913bb97a1a06834f.png" alt="Annual avg" /></div>
                            <div class="advantage_block_title m-b-5">
                                年平均報酬
                            </div>
                            <div class="advantage_block_content">
                                <input class="numeric float required form-control width_eighty" value='{{$annualBenefitsRate}}' type="number" step="any" name="annualBenefitsRate" id="annualBenefitsRate" /> %
                          
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-sm-12">
                        <a class="an-btn an-btn-default pull-right" href="/admin/match_performances">返回</a>
                        <button type="button" onclick="update_item();" class="an-btn an-btn-primary pull-right m-r-5">儲存</button>
                        
                        </div>
                    
                    </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

        <!-- page end-->
      </section>
    </section>

  </section>
  <!-- container section end -->
<script>

    function update_item(){
            if($("#new_match_performance").valid()){
                    $.ajax({
                    type:"POST",
                    url:"/admin/match_performances/new",
                    dataType:"json",
                    data:
                        $('#new_match_performance').serialize()
                    ,
                    success:function(data){
                        if(data.success){
                            alert("更新成功");
                            location.href='/admin/match_performances/new';
                        }
                    }
                });
            }
            
        }
    
        
        

   
       
    // }


    
</script>

  @endsection             