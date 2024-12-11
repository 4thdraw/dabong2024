<?php 
define('_ABOUT_', true);
include_once('./_common.php');
include_once(G5_PATH."/2024/layout/top2.php"); 
?>
<style>
    .kakaowrap .wrap {position: absolute;left: 0; bottom: 53px;
        transform: translateX(-50%); text-align: left;overflow: hidden;font-size: 12px; line-height: 1.5; padding:16px}
    .kakaowrap .wrap * {padding: 0;margin: 0;}
    .kakaowrap .wrap .info {width: 286px; border-radius: 5px;border-bottom: 2px solid #ccc;border-right: 1px solid #ccc;overflow: hidden;background: #fff;}
   .kakaowrap .wrap .info:nth-child(1) {border: 0;box-shadow: 0px 1px 2px #888;}
    .kakaowrap .info .title {
       padding: 5px 0 0 10px;height: 30px;background: #eee;border-bottom: 1px solid #ddd;font-size: 18px;font-weight: bold;
    }
    .kakaowrap .close {
        position: absolute;
    top: 20px;
    right: 22px;
    color: #888;
    width: 11px;
    height: 17px;
    background: url(https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/overlay_close.png) center no-repeat;
    background-size: 100%;
    z-index: 100;
    /* filter: grayscale(1) brightness(0.8) sepia(1) saturate(5) hue-rotate(-20deg); */
        
        /* filter: invert(1) brightness(2); */
    }
   .kakaowrap .info .close:hover {cursor: pointer;}
   .kakaowrap .info .body {
    position: relative;
    overflow: hidden;
    gap: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 18px 13px 10px;
 }
   .kakaowrap .info .desc { 
     position: relative; 
    }
   .kakaowrap .desc .ellipsis {overflow: hidden;text-overflow: ellipsis;white-space: nowrap;}
   .kakaowrap .desc .jibun {font-size: 11px;color: #888;margin-top: -2px;}
   .kakaowrap .info .img { }
   .kakaowrap .info  img{ transform:none !important}
   .kakaowrap .info:after {content: '';position: absolute;margin-left: -12px;left: 50%;bottom: 5px;width: 22px;height: 12px;background: url('https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/vertex_white.png')}
  .kakaowrap .info .link {color: #5085BB;}
    </style>

	
<section id="wrap" class="actived">


	<!-- dBody -->
	<section id="dBody">
		
    <div class="company-wrap  subsidairy-wrap">
        <div class="company-visual h-auto">
            <div class="item-sticky h-auto">
                <div class="inner">
                    <div class="grid-layout-inner">
                        <div class="grid-layout-cell grid-2">
                          
                            <div class="page-headline text-black text-nowrap overflow-visible">
                                <strong class='fw600 d-block text-black masked-text-ani lh-15'>Creativity, redefined</strong>
                               다봉산업의 차별화된 가치를 제공합니다<span class="bg-dark rounded-circle dotani ms-2"></span>
                            </div>
                           
                        </div>
                        <div class="grid-layout-cell grid-2">
                            <div class="item-info">
                                <ol class="page-history">
                                    <li class='text-black afterslush'>홈</li>
                                    <li class='text-black afterslush'>제품구매</li>
                                    <li class='text-black'>브랜드</li>
                                </ol>                                
                            </div>
                        </div>
                    </div>
                </div><!--////inner-->                
            </div>            
        </div>
        <div class="company-value">
            <div class="inner">
               
                <div class="point-list mt-0">
                            <div class="grid-layout-inner pb-5 mb-5">
                                <div class="grid-layout-cell col-6 px-3">
                                        <div class="point-items effect-data mt-4">
                                            <div class="parallax-items effect-items w-auto">
                                                <div class="parallax-parents d-flex" >                                                   
                                                    <div class="item-info    d-flex">
                                                        <div class='d-flex flex-column justify-content-between'>
                                                            <div class="item-subject">
                                                                <img src="https://swdb.co.kr/web/upload/appfiles/ZaReJam3QiELznoZeGGkMG/a7207555c7a873161a627acac7aabb37.png">
                                                            </div>
                                                            <div class="item-desc d-flex flex-column justify-content-between">    
                                                                <p class='mb-4'>
                                                                    <span>쇼핑몰이름</span>
                                                                    <strong class='fs24 fw500 masked-text-ani lh-12'>  다봉스토어</strong>
                                                                </p>  
                                                                <p class='mb-4'>
                                                                    <span>대표번호</span>
                                                                    <strong class='fs24 fw500 masked-text-ani lh-12'> 1800-8994</strong>
                                                                </p>      
                                                                <p class='mb-4'>
                                                                    <span>CS운영시간</span>
                                                                    <strong class='fs24 fw500 masked-text-ani lh-12'> 평일 10:00 ~ 17:00 ( 공휴일 휴무 )</strong>                                                                
                                                                </p>
                                                                <p class='mb-4'>
                                                                    <span>상담 / 주문 이메일</span>
                                                                    <strong class='fs24 fw500 masked-text-ani lh-12'> sw.on@swdb.co.kr </strong>                                                                
                                                                </p>
                                                                <p class='mb-4 d-flex align-items-center'>
                                                                    <span class='me-1'>대표브랜드</span>
                                                                    <strong class='fs24 fw500 masked-text-ani lh-12'>
                                                                     <img src="https://swdb.co.kr/dabong/myhot.png" width='80' >
                                                                     <img src="/dabong/2024/img/mycair.jpg" width="80"> 

                                                                </strong>                                                                
                                                                </p>
                                                                <p class='item-desc mb-5'>
                                                                마이핫 브랜드의 핫팩 시리즈, 온열안대, 마이케어 브랜드의 제품제/물티슈, 마스크등 다량구매 및 정기구독 , 사업자회원혜택으로 유통마진 제로가 가능했습니다. 썩지 않는 생활용품은 많이 살 수록 이득을 주는 가성비높은 다봉산업의 자사몰입니다.                                                          
                                                                </p>
                                                                <a class="morebtn" href="https://swdb.co.kr/" target="_blank">다봉스토어 바로가기</a>
                                                            </div>
                                                        </div>                                                      
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="grid-layout-cell col-6 px-3">
                                        <div class="point-items effect-data mt-4">
                                            <div class="parallax-items effect-items w-auto ">
                                                <div class="parallax-parents d-flex" >
                                                <div class="item-info  d-flex">
                                                        <div class='d-flex flex-column justify-content-between'>
                                                            <div class="item-subject">

                                                                <img src="/dabong/2024/img/meowboxlogo.jpg" height="58px">
                                                            </div>
                                                            <div class="item-desc d-flex flex-column justify-content-between">   
                                                                <p class='mb-4'>
                                                                    <span>쇼핑몰이름</span>
                                                                    <strong class='fs24 fw500 masked-text-ani lh-12'>  미유박스</strong>
                                                                </p>   
                                                                <p class='mb-4'>
                                                                    <span>대표번호</span>
                                                                    <strong class='fs24 fw500 masked-text-ani lh-12'> 1800-8994</strong>
                                                                </p>      
                                                                <p class='mb-4'>
                                                                    <span>CS운영시간</span>
                                                                    <strong class='fs24 fw500 masked-text-ani lh-12'> 평일 10:00 ~ 17:00 ( 공휴일 휴무 ) </strong>                                                                
                                                                </p>
                                                                <p class='mb-4'>
                                                                    <span>상담 / 주문 이메일</span>
                                                                    <strong class='fs24 fw500 masked-text-ani lh-12'> meowbox@swdb.co.kr </strong>                                                                
                                                                </p>
                                                                <p class='mb-4'>
                                                                    <span>주요제품</span>
                                                                    <strong class='fs24 fw500 masked-text-ani lh-12'>웹툰  '뽀짜툰'' 작가 채유리 콜라보</strong>                                                                
                                                                </p>
                                                                <p class='item-desc mb-5'>
                                                                반려동물을 위한 후원과 사회공헌으로  잘 알려진 미유박스 정기구독 및 시즌이벤트로 알뜰한 집사생활을 위한 자사몰,   집사생활을 다룬 웹툰 "뽀짜툰"작가 채유리님의 미유박스 웹툰으로 초보집사의 재미를 시작해보세요.                                                    
                                                                </p>
                                                                <a class="morebtn" href="https://meowbox.co.kr/" target="_blank">미유박스 바로가기</a>
                                                            </div>
                                                        </div>
                                                       
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                
                                
                            </div>
                </div>
            </div><!--////inner-->
        </div>       
    </div>

	</section>
	<!-- //dBody -->


</section>



<?php 

include_once("../layout/bottom.php"); 
?>

