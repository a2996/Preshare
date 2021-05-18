<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

// 모바일접속시 모바일전용 index.php 파일 연동 

 if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
} 

include_once(G5_PATH.'/head.php');
?>

<div id="visual_wrap">
        <section id="visual_inner">
            <h2 class="hidden">메인비주얼</h2>
            <ul id="visual_list">
                <li><a href="#"><img src="/preshare/images/visual_01.jpg" alt="여러 가방이 들어있는 케비닛"></a> 
                <p id="visual01_title" class="visual_title">지금 바로 가까운 <span>Share BOX</span> <br>에서 대여해 보세요</p>
                <p id="visual01_text" class="visual_text">프리쉐어는 위치서비스를 기반으로 사용자 주변에 있는 쉐어박스를  볼 수 <br>있습니다. 내 주변에 어떤 대여상품들이 기다리고 있는지 실시간으로<br> 확인이 가능합니다. 지금 바로 원하는 상품을 대여 해 보세요!</p></li>
                <li><a href="#"><img src="/preshare/images/visual_02.jpg" alt="테이블에 올려진 커피잔"></a>
                <p id="visual02_title" class="visual_title">커피 한 잔 값으로 명품 대여</p>
                <p id="visual02_text" class="visual_text">새로운 명품을 경험하고 싶지만 부담스러운 가격, <br>프리쉐어에서 커피 한 잔 값의 저렴한 가격으로 매일 매일 다양한 명품을 사용해 보세요</p></li>
                <li><a href="#"><img src="/preshare/images/visual_03.jpg" alt="main_visual"></a>
                <p id="visual03_title" class="visual_title">포토후기 쓰고 <span>BURBERRY</span> 키링 받자!</p>
                <p id="visual03_text" class="visual_text">포토후기 쓰고 선물받아가세요! 포토후기를 작성해주신 분들중 선정하여 <br>선물을 드립니다. 1월 BEST 포토후기로 선정 되신분께는 버버리 키링을 드립니다.</p>
                </li>
           </ul>
           <!-- <li><a href="/preshare/community/review.php"><img src="/preshare/images/visual_03.jpg" alt="포토후기쓰고버버리키링받자"></a></li>
                <li><a href="/preshare/introduce/rentinfo.php"><img src="/preshare/images/visual_02.jpg" alt="커피한잔값으로하는명품대여"></a></li>
                <li><a href="/preshare/nearproduct/nearproduct.php"><img src="/preshare/images/visual_01.jpg" alt="지금바로가까운쉐어박스에서대여해보세요"></a></li> -->
           <!--비주얼네비게이터시작-->
           <ul id="slide_gather">
               <li><a href="#">첫번째슬라이드</a></li>
               <li><a href="#">두번째슬라이드</a></li>
               <li><a href="#">세번째슬라이드</a></li>
           </ul>
           <!--비주얼네비게이터끝-->
        </section>
    </div>
    <!--비주얼영역끝-->
    <!--컨텐츠영역시작-->
    <div id="contents_wrap">
            <h2 class="hidden">컨텐츠영역</h2>
            <section id="contents_bestitem_wrap">
                <section id="contents_bestitem_inner">
                  <h3 class="title title_blue">BEST ITEM<span><br>내 근처에 있는 인기상품 보기</span></h3>
                  <section id="ul_wrap">
                    <ul class="bestitem_list">
                        <li>
                            <p class="bestitem_img">
                                <a href="#">
                                <img src="/preshare/images/best_01.jpg" alt="빨간색퀼팅생로랑가방">
                            </a>
                            </p>
                            <p class="bestitem_title">
                                <a href="#">
                                Saint Laurent
                            </a>
                            </p>
                            <p class="bestitem_text">
                                <a href="#">
                                마틀라쎄
                            </a>
                            </p>
                            <p class="bestitem_price">
                                <a href="#">
                                일 6,500
                            </a>
                            </p>
                        </li>
                        <li>
                            <p class="bestitem_img">
                                <a href="#">
                                <img src="/preshare/images/best_02.jpg" alt="검정색루이비통가방">
                            </a>
                            </p>
                            <p class="bestitem_title">
                                <a href="#">
                                Louis Vuitton
                            </a>
                            </p>
                            <p class="bestitem_text">
                                <a href="#">
                                포쉐트 메티스
                            </a>
                            </p>
                            <p class="bestitem_price">
                                <a href="#">
                                일 5,900
                            </a>
                            </p>
                        </li>
                        <li>
                            <p class="bestitem_img">
                                <a href="#">
                                <img src="/preshare/images/best_03.jpg" alt="갈색디올털원단가방">
                            </a>
                            </p>
                            <p class="bestitem_title">
                                <a href="#">
                                Dior
                            </a>
                            </p>
                            <p class="bestitem_text">
                                <a href="#">
                                새들
                            </a>
                            </p>
                            <p class="bestitem_price">
                                <a href="#">
                                일 7,000
                            </a>
                            </p>
                        </li>
                        <li>
                            <p class="bestitem_img">
                                <a href="#">
                                <img src="/preshare/images/best_04.jpg" alt="검정색회색이섞인프라다가방">
                            </a>
                            </p>
                            <p class="bestitem_title">
                                <a href="#">
                                PRADA
                            </a>
                            </p>
                            <p class="bestitem_text">
                                <a href="#">
                                카이에
                            </a>
                            </p>
                            <p class="bestitem_price">
                                <a href="#">
                                일 7,000
                             </a>
                            </p>
                        </li>

                    </ul>
                    <ul class="bestitem_list">
                        <li>
                            <p class="bestitem_img">
                                <a href="#">
                                <img src="/preshare/images/best_05.jpg" alt="갈색에루이비통무늬가있는버킷백">
                            </a>
                            </p>
                            <p class="bestitem_title">
                                <a href="#">
                                Louis Vuitton
                            </a>
                            </p>
                            <p class="bestitem_text">
                                <a href="#">
                                노에
                            </a>
                            </p>
                            <p class="bestitem_price">
                                <a href="#">
                                일 5,000
                            </a>
                            </p>
                        </li>
                        <li>
                            <p class="bestitem_img">
                                <a href="#">
                                <img src="/preshare/images/best_06.jpg" alt="앞코가검정색이고나머지는살구색인샤넬구두">
                            </a>
                            </p>
                            <p class="bestitem_title">
                                <a href="#">
                                CHANEL
                            </a>
                            </p>
                            <p class="bestitem_text">
                                <a href="#">
                                슬링백펌프스
                            </a>
                            </p>
                            <p class="bestitem_price">
                                <a href="#">
                                일 7,900
                            </a>
                            </p>
                        </li>
                        <li>
                            <p class="bestitem_img">
                                <a href="#">
                                <img src="/preshare/images/best_07.jpg" alt="진한베이지색에금색의끈과장금장치가있는가방">
                            </a>
                            </p>
                            <p class="bestitem_title">
                                <a href="#">
                                Chloe
                            </a>
                            </p>
                            <p class="bestitem_text">
                                <a href="#">
                                드류
                            </a>
                            </p>
                            <p class="bestitem_price">
                                <a href="#">
                                일 5,400
                            </a>
                            </p>
                        </li>
                        <li>
                            <p class="bestitem_img">
                                <a href="#">
                                <img src="/preshare/images/best_08.jpg" alt="흰색에삼색끈이달려있고금속은금색인가방">
                            </a>
                            </p>
                            <p class="bestitem_title">
                                <a href="#">
                                GUCCI
                            </a>
                            </p>
                            <p class="bestitem_text">
                                <a href="#">
                                실비
                            </a>
                            </p>
                            <p class="bestitem_price">
                                <a href="#">
                                일 5,200
                             </a>
                            </p>
                        </li>

                    </ul>
                    <ul class="bestitem_list">
                        <li>
                            <p class="bestitem_img">
                                <a href="#">
                                <img src="/preshare/images/best_09.jpg" alt="빨간색퀼팅생로랑가방">
                            </a>
                            </p>
                            <p class="bestitem_title">
                                <a href="#">
                                Bottega Veneta   
                            </a>
                            </p>
                            <p class="bestitem_text">
                                <a href="#">
                                패딩카세트
                            </a>
                            </p>
                            <p class="bestitem_price">
                                <a href="#">
                                일 6,300
                            </a>
                            </p>
                        </li>
                        <li>
                            <p class="bestitem_img">
                                <a href="#">
                                <img src="/preshare/images/best_010.jpg" alt="루이비통무늬의갈색사다리꼴모양가방">
                            </a>
                            </p>
                            <p class="bestitem_title">
                                <a href="#">
                                Louis Vuitton
                            </a>
                            </p>
                            <p class="bestitem_text">
                                <a href="#">
                                클루니
                            </a>
                            </p>
                            <p class="bestitem_price">
                                <a href="#">
                                일 4,900
                            </a>
                            </p>
                        </li>
                        <li>
                            <p class="bestitem_img">
                                <a href="#">
                                <img src="/preshare/images/best_011.jpg" alt="분홍색가죽의네모난가방">
                            </a>
                            </p>
                            <p class="bestitem_title">
                                <a href="#">
                                Marni
                            </a>
                            </p>
                            <p class="bestitem_text">
                                <a href="#">
                                트렁크
                            </a>
                            </p>
                            <p class="bestitem_price">
                                <a href="#">
                                일 5,500
                            </a>
                            </p>
                        </li>
                        <li>
                            <p class="bestitem_img">
                                <a href="#">
                                <img src="/preshare/images/best_012.jpg" alt="검정색네모모양가방">
                            </a>
                            </p>
                            <p class="bestitem_title">
                                <a href="#">
                                CELINE
                           </a>
                            </p>
                            <p class="bestitem_text">
                                <a href="#">
                                클래식박스
                            </a>
                            </p>
                            <p class="bestitem_price">
                                <a href="#">
                                일 6,300
                             </a>
                            </p>
                        </li>

                    </ul> 
                    
                  
                </section>
                    <span id="next_btn"><img src="/preshare/images/next_btn.png" alt="다음보기버튼"></span>
                    <span id="prev_btn"><img src="/preshare/images/prev_btn.png" alt="이전보기버튼"></span>
            </section>
        </section>
        <section id="contents_maincollection_wrap">
            <section id="contents_maincollection_inner">
                <h3 class="title title_top" id="collection">COLLECTION<br><span>기획전에서 다양한 상품을 만나보세요</span></h3>
                <section id="maincollection">
                    <p id="maincollection_img"><img src="/preshare/images/collection_01.jpg" alt="와인색미니가방"></p>
                    <p id="maincollection_title" class="maincollection_txt">Minibag collection</p>
                    <p id="maincollection_subtitle" class="maincollection_txt">가방도 악세서리 처럼</p>
                    <p id="maincollection_text" class="maincollection_txt">필요한 물건만 쏙쏙 들어가는<br>실용적인 악세서리<br>미니백 컬랙션에서 만나보세요.</p>        
                </section>
               <button id="maincollection_btn">
                   Collection 더보기
               </button>    
            </section>
        </section>
        <section id="contents_subcollection_wrap">
            <section id="contents_subcollection_inner">
                <ul id="subcollection_img_list">
                <li><img src="/preshare/images/collection_02.jpg" alt="주얼리컬렉션">
                    <button class="subcollection_btn">
                       More View
                    </button>
                </li>
                <li><img src="/preshare/images/collection_03.jpg" alt="퀵렌트">
                    <button class="subcollection_btn">
                        More View
                    </button>
                </li>
                <li><img src="/preshare/images/collection_04.jpg" alt="스테디셀러아이템">
                    <button class="subcollection_btn">
                        More View
                    </button>
                
                </li>
                </ul>
               
            </section>
        </section>

        <section id="contents_brand_wrap">
            <section id="contents_brand_inner">
                <h3 class="title title_top">BRAND<span><br>인기 브랜드별 모아보기</span></h3>
                <ul id="brand_list">
                    <li><a href="#"><img src="/preshare/images/brand_01.jpg" alt="프라다"></a></li>
                    <li><a href="#"><img src="/preshare/images/brand_02.jpg" alt="디올"></a></li>
                    <li><a href="#"><img src="/preshare/images/brand_03.jpg" alt="샤넬"></a></li>
                    <li><a href="#"><img src="/preshare/images/brand_04.jpg" alt="구찌"></a></li>
                </ul>
            </section>
        </section>
        <div id="bottommenu_wrap">    
                <h3 class="hidden">하단빠른메뉴</h3>
                <nav id="bottommenu">
                    <ul id="bottonmenu_list">
                        <li><a href="/preshare/upload/upload.php">상품올리기</a></li>
                        <li><a href="/preshare/community/review.php">대여후기</a></li>
                        <li><a href="#">1:1문의</a></li>
                        <li><a href="/preshare/community/event.php">이벤트</a></li>
                        <li><a href="/preshare/nearproduct/nearproduct.php">내근처상품</a></li>
                    </ul>
                </nav>
           
        </div>
         <!--컨텐츠영역끝-->



<?php
include_once(G5_PATH.'/tail.php');
?>
