<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

// 모바일 접속시 모바일전용 head.php 파일연동 

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단영역시작 -->
<!--바로가기메뉴시작-->
<ul id="skipmenu_list">
  <li><a href="#header_wrap">메뉴바로가기</a></li>
  <li><a href="#contents_wrap">본문바로가기</a></li>
  <li><a href="#footer_wrap">하단바로가기</a></li>
</ul>
<!--바로가기메뉴끝-->
<!--상단영역시작-->
<div id="header_wrap">
  <header id="header_inner">
     
      <h1 id="logo"><a href="/preshare/index.php"><img src="/preshare/images/logo.png" alt="프리쉐어홈페이지"></a></h1>
     

      <nav id="topmenu">
          <h2 class="hidden">상단빠른메뉴</h2>
              <ul id="topmenu_list">        
            <?php if ($is_member) {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
            <?php if ($is_admin) {  ?>
            <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
            <?php }  ?>
            <?php } else {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 회원가입</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> 로그인</a></li>
            <?php }  ?>

          </ul>
      </nav>
      <nav id="mainmenu">
          <h2 class="hidden">메인메뉴</h2>
          <ul id="mainmenu_list">
              <li>
                  <a href="/preshare/introduce/introduce.php" title="프리쉐어소개">Preshare소개</a>
              <ul class="submenu_list">
                  <li><a href="/preshare/introduce/introduce.php" title="프리쉐어란">Preshare란?</a></li>
                  <li><a href="/preshare/introduce/rentinfo.php" title="대여이용안내">대여이용안내</a></li>
              </ul>
          </li>
              <li><a href="/preshare/nearproduct/nearproduct.php" title="내근처상품">내근처상품</a></li>
              <li><a href="/preshare/category/brand.php" title="카테고리">카테고리</a>
                  <ul class="submenu_list">
                      <li><a href="/preshare/category/brand.php" title="브랜드">BRAND</a></li>
                      <li><a href="/preshare/category/item.php" title="아이템">ITEM</a></li>
                  </ul>
              </li>
              <li><a href="/preshare/bbs/write.php?bo_table=free" title="상품올리기">상품올리기</a></li>
              <li><a href="/preshare/community/event.php" title="커뮤니티">커뮤니티</a>
                  <ul class="submenu_list">
                      <li><a href="/preshare/community/event.php" title="이벤트">이벤트</a></li>
                      <li><a href="/preshare/bbs/board.php?bo_table=gallery" title="대여후기">대여후기</a></li>
                      <li><a href="/preshare/bbs/board.php?bo_table=notice" title="상품구해요">상품구해요</a></li>
                  </ul>
              </li>
          </ul>

          <div id="menu_bar"></div>
      </nav>
  
      <nav id="mobilemenu">
          <h2 id="menu_icon" class="hidden">모바일메뉴</h2>
          <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>


      </nav>
      <section id="search">
          <h2 class="hidden">검색</h2>    
              <input type="text" class="text_box" maxlength="10" >           
              <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                            
      </section>
  </header>
</div>
<!--상단영역끝-->

      <!-- 검색영역시작 -->
  
    <!-- 검색영역끝-->
      
      

    <!--로그인영역시작-->
         
        

    <!--로그인영역끝-->
           

<!--상단영역끝 -->


<?

		/*
			서브 컨텐츠 페이지를 제외한  게시판, faq, 회원관련 등 그누보드 내부 프로그램 페이지 상단연결
		    ( 각 서브 컨텐츠 페이지 상단은 각 메인메뉴별 카테고리폴더 (해당테마폴더 > html폴더 > sub폴더 복사해서 생성 ) 안에 header.php 에서 각각 설정 수정가능 )			

		*/

		if(!defined('_INDEX_') && $title_view != "no"){ // if문을 수정하지 마십시오.			

			// 게시판 타이틀 정비
			if($bo_table){
				$g5['title'] = $board['bo_subject'];
			}
			
			//faq 타이틀 정비
			if($fm_id){
				$g5['title'] = "자주하시는 질문";
			}
			
			
	?>

		<section id="board_visual">
			<!--회원가입및게시판 상단 비쥬얼 -->
					
		
        </section>
        
        <!-- <p id="upload_title">내상품올리기</p> -->


		
		<div id="board_wrapper">
			<section id="board_contents">
			<!-- 회원가입및게시판 컨텐츠 레이아웃시작 -->




	<?}?>
