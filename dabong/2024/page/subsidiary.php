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
                                <strong class='fw600 d-block text-black masked-text-ani lh-15'>Our Subsidiaries</strong>
                                미래를 여는 다봉산업의 계열사<span class="bg-dark rounded-circle dotani ms-2"></span>
                            </div>
                           
                        </div>
                        <div class="grid-layout-cell grid-2">
                            <div class="item-info">
                                <ol class="page-history">
                                    <li class='text-black afterslush'>홈</li>
                                    <li class='text-black afterslush'>회사소개</li>
                                    <li class='text-black'>계열사</li>
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
                                <div class="grid-layout-cell w-100">
                                        <div class="point-items effect-data ">
                                            <div class="parallax-items effect-items w-auto">
                                                <div class="parallax-parents d-flex" >
                                                    <div class="parallax-children w-auto col">

                                                        <div id="subsidairy0" class='h-100 kakaowrap'></div>

                                                    </div>
                                                    <div class="item-info ms-5 ps-5 col-4 d-flex flex-column justify-content-between">
                                                        <div class="item-subject">
                                                        (주)신우디스트리뷰션</div>
                                                        <div class="item-desc d-flex flex-column justify-content-between">    
                                                        <p class='mb-4'>
                                                            <span>대표번호</span>
                                                            <strong class='fs24 fw500 masked-text-ani lh-12'> 1800-8994</strong>
                                                        </p>                                                         
                                                        
                                                            온/오프라인 유통전문업체로 도약 <br>
                                                                                                           
                                                          핫팩, 미유박스 브랜드개발 및 D2C 사업 확장<br>
                                                          
                                                            1981년 창립 이래 현재까지 꾸준히 핫팩을 생산해 온 온열팩 제조/유통 선두기업
                                                         							
                                                          
                                                        </div>
                                                        <img src="/dabong/2024/img/p01_dabong.png" class='col-6 mt-auto'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="grid-layout-cell w-100">
                                        <div class="point-items effect-data mt-4">
                                            <div class="parallax-items effect-items w-auto ">
                                                <div class="parallax-parents d-flex" >
                                                    <div class="parallax-children w-auto col">
                                                        <div id="subsidairy1" class='h-100 kakaowrap'></div>
                                                    </div>
                                                    <div class="item-info ms-5 ps-5 col-4 d-flex flex-column justify-content-between">
                                                        <div class="item-subject">
                                                        (주)신우베스틸</div>
                                                        <div class="item-desc">
                                                        <p class='mb-4'>
                                                            <span>대표번호</span>
                                                            <strong class='fs24 fw500 masked-text-ani lh-12'> 032-561-0047</strong>
                                                        </p> 
                                                       
                                                        철분, 브리켓 등을 생산하여 해외 수출<br>
                                                        기타 제철 및 제강업체<br>
                                                        환경산업과 소재산업의 발전에 기여          			
                                                        </div>
                                                        <img src="https://meowbox0383.cafe24.com/web/bs21/img/layout/brand/history/image/p01_swb.png" class='col-6 mt-auto'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="grid-layout-cell w-100">
                                        <div class="point-items effect-data mt-4">
                                            <div class="parallax-items effect-items w-auto ">
                                                <div class="parallax-parents d-flex" >
                                                    <div class="parallax-children w-auto col"><div id="subsidairy2" class='h-100 kakaowrap'></div></div>
                                                    <div class="item-info ms-5 ps-5 col-4 d-flex flex-column justify-content-between">
                                                        <div class="item-subject">
                                                        (주)유진소재산업</div>
                                                        <div class="item-desc">
                                                        <p class='mb-4'>
                                                            <span>대표번호</span>
                                                            <strong class='fs24 fw500 masked-text-ani lh-12'>054-773-8278</strong>
                                                        </p> 
                                                  
                                                        1974년 유진화학공업사<br>
창업을 시작으로<br>
국내 최초 리사이클링 철분말을 제조					
                                                        </div>
                                                        <img src="https://meowbox0383.cafe24.com/web/upload/img/p01_yoojin.png" class='col-6 mt-auto ' style='border-radius:25px'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="grid-layout-cell w-100">
                                        <div class="point-items effect-data ">
                                            <div class="parallax-items effect-items w-auto mt-0">
                                                <div class="parallax-parents d-flex" >
                                                    <div class="parallax-children w-auto col">
                                                        <div id="subsidairy3" class='h-100 kakaowrap'></div>
                                                    </div>
                                                    <div class="item-info ms-5 ps-5 col-4  d-flex flex-column justify-content-between">
                                                        <div class="item-subject">
                                                        (주)위니스트</div>
                                                        <div class="item-desc">
                                                        <p class='mb-4'>
                                                            <span>대표번호</span>
                                                            <strong class='fs24 fw500 masked-text-ani lh-12'>032-766-0040</strong>
                                                        </p> 
                                                        고객의 건강과 안전을 최우선 목표로<br>
핫팩,마스크등<br>
건강,안전용품 종합기업			
                                                        </div>
                                                        <img src="https://meowbox0383.cafe24.com/web/bs21/img/layout/brand/history/image/p01_winist.png" class='col-6 mt-auto'>
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
<script>
    const locationData = [
    {
        imageUrl: "https://meowbox.co.kr/web/bs21/img/layout/brand/history/image/logo_dabong.png",
        address: "서울특별시 영등포구 여의나루로 71, 동화빌딩 4층 404~410호",
        jibunAddress: "(우) 07327 (지번) 여의도동 25-3",
        homepage : "http://myhot.co.kr/",
        domid :'subsidairy0',
        len : 37.5228603, 
        long: 126.924735
    },
    {
        imageUrl: "https://meowbox0383.cafe24.com/web/bs21/img/layout/brand/history/image/logo_sb.png",
        address: "인천 서구 호두산로 128 ",
        jibunAddress: "(우) 22744 (지번) 경서동 687-2",
        homepage: "http://www.swbesteel.co.kr/",
        domid :'subsidairy1',
        len :37.5498783, 
        long: 126.6377966
    },
    {
        imageUrl: "https://meowbox0383.cafe24.com/web/bs21/img/layout/brand/history/image/logo_yoojin.png",
        address: "경북 경주시 외동읍 냉천공단길 26",
        jibunAddress: "(우) 38204 (지번) 외동읍 냉천리 1247-24",
        homepage: "",
        domid :'subsidairy2',
        len : 35.7006814, 
        long: 129.3055491 
    },
    {
        imageUrl: "https://meowbox0383.cafe24.com/web/bs21/img/layout/brand/history/image/logo_winist.png",
        address: "인천 서구 사렴로32번길 24",
        jibunAddress: "(우) 22744 (지번) 경서동 363-174",
        homepage: "https://www.winistlsp.com/",
        domid :'subsidairy3',
        len : 37.5516572, 
        long: 126.6409182
    }

];

function createMapContent(data) {
    return `
        <div class="wrap">
            <div class="info">
                <div class="close" title="닫기"></div>
                <div class="body">
                    <div class="img">
                        <img src="${data.imageUrl}" alt="Location Image">
                    </div>
                    <div class="desc">
                        <div class="ellipsis text-wrap">${data.address}</div>
                        <div class="jibun ellipsis">${data.jibunAddress}</div>
                        <a class="homepage ellipsis" href='${data.homepage}' target='_blank'>${data.homepage}</a>
                    </div>
                </div>
            </div>
        </div>
    `;
}

locationData.forEach((location) => {
    const mapContent = createMapContent(location);
    const subsidairy = new MapMarker(location.domid, location.len, location.long, mapContent);
    
});

  </script>
