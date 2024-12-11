
<?php
  if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
  
  $g5_debug['php']['begin_time'] = $begin_time = get_microtime();

if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    // 상태바에 표시될 제목
    $g5_head_title = implode(' | ', array_filter(array($g5['title'], $config['cf_title'])));
}

$g5['title'] = strip_tags($g5['title']);
$g5_head_title = strip_tags($g5_head_title)
?>
<!DOCTYPE html>

<html lang="ko" class="" data-overlayscrollbars-initialize>
	<head>


		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">
		<meta name="HandheldFriendly" content="true">
		<meta name="format-detection" content="telephone=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<?php
			if($config['cf_add_meta'])
				echo $config['cf_add_meta'].PHP_EOL;
		?>
		<meta name="robots" content="index">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	

		<title><?php echo $g5_head_title; ?></title>

		<!-- 플러그인-css-->

		<link rel="preconnect" href="//fonts.googleapis.com">
		<link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
		<link href="//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		<link href="<?php echo G5_URL;?>/2024/font/static/pretendard.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo G5_URL;?>/2024/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo G5_URL;?>/2024/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="<?php echo G5_URL;?>/2024/css/font-awesome.min.css">
		<link href="<?php echo G5_URL;?>/2024/css/helper.css" rel="stylesheet">
		



		<!-- CSS Files -->
		<link href="<?php echo G5_URL;?>/2024/css/counter.css" rel="stylesheet">
		<link href="<?php echo G5_URL;?>/2024/css/prettify.css" rel="stylesheet">



		<link href="/dabong/2024/css/counting-animation.css" rel="stylesheet">
		<link href="<?php echo G5_URL;?>/2024/css/parter-slide.css" rel="stylesheet">
		<link href="<?php echo G5_URL;?>/2024/css/sshwork.css" rel="stylesheet">


		<!-- 테마-베이직 -->

		<link href="<?php echo G5_URL;?>/2024/css/content.css" rel="stylesheet">
		<!-- 메인 css -->
		<link href="<?php echo G5_THEME_CSS_URL; ?>/default.css" rel="stylesheet">
		<link href="<?php echo G5_URL;?>/2024/css/common_v2.css?var=<?php echo time(); ?>" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo G5_URL;?>/2024/css/layout.min.css?var=<?php echo time(); ?>">

		<?php
		if(defined('_INDEX_')) { 
			?>
		<link rel="stylesheet" href="<?php echo G5_URL;?>/2024/css/main.min.css?var=<?php echo time(); ?>">

	  <?php

		}else{
			$board = get_board_db($bo_table, true);
			if($board['bo_content_tail']){
				preg_match('/<img[^>]+src="([^"]+)"/', $board['bo_content_tail'], $matches2);
				if(isset($matches2[1])) {
					$timg = $matches2[1];
				}
			}
		
			if($board['bo_content_head']) {
				// 정규 표현식을 사용하여 img 태그의 src 속성 값을 추출합니다.
				//게시판 상단이미지 데스크탑
				preg_match('/<img[^>]+src="([^"]+)"/', $board['bo_content_head'], $matches);
				//게시판 하단이미지 모바일
				// $matches 배열에서 이미지 경로를 가져옵니다.
				if(isset($matches[1])) {
					$himg = $matches[1];
				}
				
			}else{
				//내용관리
				$himg = isset($co_id) ? G5_DATA_URL.'/content/'.$co_id.'_h' : ""; //상단이미지
				$timg = isset($co_id) ? G5_DATA_URL.'/content/'.$co_id.'_t' : ""; //하단이미지		
			}	    
		echo  '<link href="<?php echo G5_URL;?>/2024/css/sub.css" rel="stylesheet">';
		} ?>



		
				<!-- 플러그인 -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>	


	
</head>
<?php
if(defined('_INDEX_')) {
   // include G5_BBS_PATH.'/newwin.inc.php';
    $_pagecls = 'index-page';
    $_pagedatail = 'main';
}else{
    $_pagecls = 'sub-page';
    if (isset($bo_table)) {
        $_pagedatail = $bo_table;
    } elseif (isset($co_id)) {
        $_pagedatail = $co_id;
    } else {
        $_pagedatail = 'etc ';
    }
}
if(isset($fm_id)){
	
	$himg = G5_DATA_URL.'/faq/'.$fm_id.'_h';
	$timg = G5_DATA_URL.'/faq/'.$fm_id.'_t';

}
?>
<body class="<?php echo $_pagecls.' sub-'.$_pagedatail; ?>  desktop chrome" >
	
	<!-- Top content -->
	<nav class="navbar fixed-top">
		<div class="main-nav menu-over w-100 " >
			<div class="navbar-bg" ></div>
			<div class="d-flex justify-content-between align-items-center maxWidth mx-auto">
					<h1 class="navbar-brand m-0 p-0 zup position-relative">
							<a href="<?php echo G5_URL; ?>" >
								<span class='sr-only'>다봉산업</span>
								<?php include_once(G5_PATH."/2024/layout/src/logo.php"); ?>
							</a>
					</h1>
					<div class="gnb d-flex align-items-center flex-row-reverse">
							<div class="all ms-4">
								<a href="javascript:void(0);" id="open-menus"></a>
							</div>
				
							<div class="utils mx-xl-5">
								<ul>					
									<li class="item language">
										<a data-bs-toggle="collapse" href="#language-combo" aria-expanded="false" aria-controls="language-combo" class='collapsed'>
												<span class="text d-flex align-items-center gap-2">KR 
													<?php include_once(G5_PATH."/2024/layout/src/arrow_down.php"); ?>
												</span>
										</a>
										<ul class="language-combo text-center border-white px-3 collapse" id="language-combo">								
											<li class="active pt-4"><a href="/lang/ko">KR</a></li>
											<li class=""><a href="/lang/en">EN</a></li>
											<li class=""><a href="/lang/cn">CN</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="menus position-relative zup">
								<ul class='d-xl-flex d-none '>
							
												<?php
														$menu_datas = get_menu_db(0, true);
														$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
																		$i = 0;
												foreach( $menu_datas as $row ){
														if( empty($row) ) continue;
													
												?>
													<li class="navi_1dli position-relative" >
															<a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="navi_1da"><?php echo $row['me_name'] ?></a>
															<?php
															$k = 0;
															foreach( (array) $row['sub'] as $row2 ){

																	if( empty($row2) ) continue; 

																	if($k == 0)
																			echo '<span class="sr-only">하위분류</span><ul class="sub-menus pt-5 pb-5 position-absolute w-100 overflow-hidden zup text-center">'.PHP_EOL;
															?>
																	<li class="navi_2dli  <?php if($k == 0) echo 'pt-5 mt-4'; ?>"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="navi_2da"><?php echo $row2['me_name'] ?></a></li>
															<?php
															$k++;
															}   //end foreach $row2

															if($k > 0)
																	echo '</ul>'.PHP_EOL;
															?>
													</li>
												<?php
													$i++;
												}   //end foreach $row

											if ($i == 0) {  ?>
															<li class="navi_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?>
															</li>
											<?php } ?>
								</ul>
							</div>
				
					</div>
			</div>
		</div>
		<div class="sub-nav d-flex justify-content-center align-items-center" >
			<div class="maxWidth mx-auto w-100 px-5 px-xxl-0">
				<div class="subnav-inner">
					<ul>
									<?php
											$menu_datas = get_menu_db(0, true);
											$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
															$i = 0;
									foreach( $menu_datas as $row ){
											if( empty($row) ) continue;
										
									?>
						<li>
							<dl class='d-flex justify-content-between align-items-end py-4 b_ani_line'>
								<dt  class='me-auto'>
															<a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="navi_1da text-white"><?php echo $row['me_name'] ?></a>
								</dt>
															<?php
																	$k = 0;
																	foreach( (array) $row['sub'] as $row2 ){
																			if( empty($row2) ) continue;
															?>

								<dd class='ms-4 afterslush'>
									<div class="menu-main">
																			<a href="<?php echo $row2['me_link']; ?>" class='text-white'  target="_<?php echo $row2['me_target']; ?>" >
																					<?php echo $row2['me_name'] ?>
																			</a>
									</div>									
								</dd>
								<?php
																	$k++;
																	}   //end foreach $row2
															?>
							</dl>
						</li>
											<?php
													$i++;
													}   //end foreach $row

									if ($i == 0) {  ?>
											<li class="navi_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
									<?php } ?>
						
						
						
					</ul>
					
				</div>
			</div>
		</div>
	</nav>

	<!-- 게시판에서 서브페이지 상단이미지관리 php와 연동중이므로 css 파일로 옮기는 것은 불가 -->
	<style>
		.sub-content:before{
			content:"";
			background-image:url(<?php echo $himg; ?>);
			background-repeat: no-repeat;
			background-position:center top;
			background-size: auto;
			padding-top: 430px;
			display:block;
		}
		@media (max-width:990px) {
			.sub-content:before{

				background-image:url(<?php echo $timg; ?>);				
				background-position:center;
				background-size:cover;
				padding-top: 0;
				height:370px;
		    }
		}
		@media (max-width:575px) {
			.sub-content:before{

				background-image:url(<?php echo $timg; ?>);				
				background-position:center;
				background-size:cover;
				padding: 0;
				height: 65vw;
		    }
		}
		
		</style>

<!-- /Top content -->
<div class="<?php if(!defined('_INDEX_')) { echo 'sub-content '; } echo $_pagedatail; ?> " >	






