<?php 
define('_ABOUT_', true);
include_once('./_common.php');
include_once(G5_PATH."/2024/layout/top2.php"); 
?>
<link rel='stylesheet' id='jetpack-block-map-css'  href='http://da-bong.com/wp-content/plugins/jetpack/_inc/blocks/map/view.css?minify=false&#038;ver=11.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-map-block-stylesheets-css'  href='http://da-bong.com/wp-content/plugins/wp-map-block/assets/dist/wpmapblock-frontend.core.min.css?ver=450b0b7392016e708da4' type='text/css' media='all' />
<link href="/dabong/2024/css/form.css" rel='stylesheet' />

<section id="wrap" class="actived">
	<!-- dBody -->
	<section id="dBody" class='formway'>
		
    <div class="company-wrap ">
        <div class="company-visual h-auto">
            <div class="">
                <div class="inner">
                    <div class="grid-layout-inner">
                        <div class="grid-layout-cell grid-2">
                          
                            <div class="page-headline text-black text-nowrap overflow-visible">
                                <strong class='fw600 d-block text-black masked-text-ani lh-12'>Work with us</strong>
                                다봉산업과 함께 성장합니다<span class="bg-dark rounded-circle dotani ms-2"></span>
                            </div>
                            
                        </div>
                        <div class="grid-layout-cell grid-2">
                            <div class="item-info">
                                <ol class="page-history">
                                    <li class='text-black afterslush'>홈</li>
                                    <li class='text-black afterslush'>고객센터</li>
                                    <li class='text-black'>견적문의 & 오시는 길</li>
                                </ol>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="con  formway effect-data">
                    <div id="dabongmap" class='effect-items'>
                        <ul class="nav nav-tab d-flex  inner pt-5 mb-5  nav-tabs border-0 align-items-end" role="tablist">
                            <li class="nav-item me-4  fs36 mb-0" role="presentation">
                                <button class="nav-link fw700 p-0 border-0 n_btn text-black active" data-bs-toggle="tab" data-bs-target="#companymap" type="button" role="tab" aria-controls="companymap" aria-selected="true">서울 사무소</button>                                
                            </li>
                            <li class="n_btn me-auto nav-item fs36 mb-0  border-0" role="presentation">
                            <button class="nav-link fw700 p-0 border-0 n_btn text-black" data-bs-toggle="tab" data-bs-target="#factorymap" type="button" role="tab" aria-controls="factorymap" aria-selected="false">제조 공장</button>
                            </li>
                            <li><a class=" fs36 fw700  text-black morebtn  d-block lh-13" href="#request">OEM 문의</a></li>
                        </ul>                        
                        <div class="tab-content position-relative" id="mapsContent" >
                            <div id="companymap" class='tab-pane fade apimap  show active d-block' >
                                    <!-- 카카오톡 지도 서울사무소 -->
                                     <div style='height: min(600px, 50vh)'>
                                        <div id="kakaoapi_company" class='h-100'>

                                        </div>
                                     </div>                                  
                                     
                                    <div class="inner pt-5 mt-5">
                                        <dl class="addr d-flex mb-3">
                                            <dt>Address</dt>
                                            <dd class='fs21'>
                                            서울특별시 영등포구 여의나루로 71, 동화빌딩 4층 404~410호
                                                <p class="addr_en fs21 mt-1 masked-text-ani lh-12">4th Floor, Suite 404-410, Donghwa Building, 71 Yeouinaru-ro, Yeongdeungpo-gu, Seoul, South Korea</p>
                                            </dd>
                                        </dl>
                                        <dl class="tel d-flex mb-3">
                                            <dt>Telephone</dt>
                                            <dd class='fs21'>+82-1800-8994</dd>
                                        </dl>					
                                        <dl class="mail d-flex">
                                            <dt>E-mail</dt>
                                            <dd class='fs21'><a href="mailto:dabong@da-bong.com">dabong@da-bong.com</a></dd>
                                        </dl>
                                    </div>
                            </div>
                            <div id="factorymap"  class='position-absolute top-0 start-0 w-100  h-100 tab-pane fade apimap d-block '>

                              <!-- 카카오톡 지도 제조 음성공장 -->
                              <div style='height: min(600px, 50vh)'>
                                        <div id="kakaoapi_factory" class='h-100'>

                                        </div>
                                     </div>                                  
                                     
                                    <div class="inner pt-5 mt-5">
                                        <dl class="addr d-flex mb-3">
                                            <dt>Address</dt>
                                            <dd class='fs21'>
                                            충청북도 음성군 대소면 초금로 169-13 (대소면)
                                                <p class="addr_en fs21 mt-1 masked-text-ani lh-12">169-13, Chogeum-ro, Daeso-myeon, Eumseong-gun, Chungcheongbuk-do, South KoreaKorea</p>
                                            </dd>
                                        </dl>
                                        <dl class="tel d-flex mb-3">
                                            <dt>Telephone</dt>
                                            <dd class='fs21'>+82-1800-8994</dd>
                                        </dl>					
                                        <dl class="mail d-flex">
                                            <dt>E-mail</dt>
                                            <dd class='fs21'><a href="mailto:dabong@da-bong.com">dabong@da-bong.com</a></dd>
                                        </dl>
                                    </div>
                            </div>
                        </div>
 

                    </div>
                    
				
				</div>
               
            </div>
            
        
            
        </div>
        <div  id="request" class='mt-5 pt-5 '>
 

        <div class="sectionWrap sectionWrap02 wide aniElm visible mt-5 pt-5">
			<div class="tit_box text-center pb-5 pt-5 mt-5  effect-data" >
				<h3 class="page-headline text-black text-nowrap overflow-visible effect-items">
                    <span class='fw800 masked-text-ani lh-9 fs-13'>1981</span>년에서 <span class='fw800 masked-text-ani lh-12'>지금</span>까지<span class="bg-dark rounded-circle dotani ms-2"></span></h3>
				<p class="txt my-5 effect-items ">
					다봉산업에서 개발된 상품들이 대한민국 어디에서나 만날 수 있게 되었습니다.<br>
					따뜻한 긍정적인 기업이미지를 위한  파트너로 다봉산업은 기다리고 있습니다.
				</p>
			</div>
			<div class="con_box  effect-data" >
				<div class="flex_box row mx-0">
					<div class="img_box dim position-relative col-xl-6 overflow-hidden d-flex flex-column justify-content-center align-items-center effect-items" style="background:url(/dabong/2024/img/08_transport.jpg) no-repeat; background-size:auto 100% ">
                        <div class='b2b_benefit  position-relative zup'>
                        <div class="main_map_banner_txt  text-white ">
				                <h2 class="main_map_banner_txt01   fs54 masked-text-ani lh-12" >B2B 혜택안내</h2>
                                <div class="main_map_banner_txt02 fs26" data-ez-role="desc" >                                  
                                    <!-- <p class='text-white'>사업자회원가입 후 아래의 혜택을 누리세요</p> -->
                                    <ol class="pl-3  text-white mt-5 fs21 ms-4 mb-5 ">
                                        <li style="list-style:decimal; ">회원등급에 따른 알림톡 안내</li>
                                        <li style="list-style:decimal; ">사업자회원 전용 메뉴를 통한 구매</li>
                                        <li style="list-style:decimal;  ">필요에 따른 견적서 요청</li>
                                    </ol>
                                </div><!-- //main_map_banner_txt02 -->
                                <div class="main_long_banner_link">
                                    <a class='morebtn text-white' href="https://swdb.co.kr/article/%EC%A0%9C%ED%9C%B4-%EC%A0%9C%EC%95%88/1002/1984/" target="_blank">자세히</a>
                                </div>
			            </div>

                        </div>
						
						<p class="position-absolute bottom-0 end-0 text-white fw500 zup pe-4 pb-4">· 충청북도 음성 공장 </p>
					</div>
					<div class="text_box col-xl-6 bg-light contact_content p-5 effect-items">
                        <div class='pb-5'>
                        <form id="writeFrom" name="writeFrom" method="post" enctype="multipart/form-data">
		<input type="hidden" id="gubun" name="gubun" value="2">
            <ul class="flist maxWidth pt-5 px-4">
                <li>
                    <div class="fbox">
						<dl>
							<dt><label class=" require_icon" for="companyNm">회사명</label></dt>
							<dd><input type="text" class="contactInput" id="companyNm" name="companyNm" required=""></dd>
						</dl>
                    </div>
                </li>
                <li>
                    <div class="fbox">
						<dl>
							<dt><label class=" require_icon" for="managerNm">담당자 성함 </label></dt>
							<dd><input type="text" class="contactInput" id="managerNm" name="managerNm" required=""></dd>
						</dl>
                    </div>
                </li>
                <li>
                    <div class="fbox">
						<dl>
							<dt><label class="require_icon" for="email">이메일</label></dt>
							<dd><input type="text" class="contactInput" id="email" name="email" required=""></dd>
						</dl>
                    </div>
                </li>
                <li>
                    <div class="fbox">
						<dl>
							<dt><label class="require_icon" for="tel">연락처</label></dt>
							<dd><input type="text" class="contactInput" id="tel" name="tel" required=""></dd>
						</dl>
                    </div>
                </li>
               
                <li>
					<div class="fbox">
						<dl>
							<dt><span class="require_icon">문의분야</span>
                            <p>중복선택 가능 </p>     
                            </dt>
							<dd>
								<input type="hidden" id="prjObject" name="prjObject">
                            
								<ul class="service_btn_box" id="prjObjectBtnBox">
									<li><button class="active" type="button" id="prjObject1" name="prjObject[]" value="1">마이핫 시리즈</button></li>                                
                                    <li><button type="button" id="prjObject6" name="prjObject[]" value="6">히트템 시리즈</button></li>                                    
                                    <li><button type="button" id="prjObject7" name="prjObject[]" value="7">마스크</button></li>
                                    <li><button type="button" id="prjObject7" name="prjObject[]" value="7">핫팩</button></li>   
                                    <li><button type="button" id="prjObject7" name="prjObject[]" value="7">기타</button></li>
								</ul>
							</dd>
						</dl>
					</div>
                </li>
               
              
                <li class=''>
                    <div class="fbox">
						<dl class="inquire">
							<dt><label class="text_content_title" for="prjInfo">문의 내용</label></dt>
							<dd><textarea placeholder="취급하고자 하는 용도(도소매/판촉 등), 판매처(오프라인/온라인), 지역 등 문의 사항 자세하게 기재 부탁드립니다." class="text_content_box" id="prjInfo" name="prjInfo"></textarea></dd>
						</dl>
                    </div>
                </li>
              
            </ul>
            <div class="agree pt-0 pb-5 px-4 d-flex justify-content-between align-items-end mt-5">
                    <div class="agree-check-group d-flex align-items-center">
                        <label class="form-check-box check d-flex position-relative"><input type="checkbox" id="chkAgree" title=""><span class="form-check-icon d-block position-relative"></span></label>
                        <button type="button" onclick="front.pop.open('personalAgreePop' , this);" class="btn-agree-nav">개인정보 수집 및 이용에 동의 합니다.</button>
                    </div>

                    <button type='submit' class="morebtn  d-block ">견적문의하기</button>
            </div>
          
        </form>
                        </div>
                   
					</div>
				</div>
			</div>
		</div>
            
        
        </div>
        
       
    </div>

	</section>
	<!-- //dBody -->


</section>

<!-- <script type='text/javascript' src='https://www.google.com/recaptcha/api.js?render=6Le_WskUAAAAAPVI79-puVBOsi3MrNhsMmtvvWZh&#038;ver=3.0' id='google-recaptcha-js'></script> -->





<?php 

include_once("../layout/bottom.php"); 
?>
<script>
  

  // Example usage:
  const factoryMarker = new MapMarker('kakaoapi_factory', 36.9420837, 127.5260583, '<div style="padding:5px;">Custom HTML Content for Factory!</div>');
  const companyMarker = new MapMarker('kakaoapi_company', 37.5228603, 126.924735, '<div style="padding:5px;">Custom HTML Content for Company!</div>');
   
  
  </script>
