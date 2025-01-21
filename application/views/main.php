<!-- 6분할 레이아웃 -->
<div class="ws-wrap ml-auto mr-auto">
    <h1 class="ws_title mt-8 text-center">말씀영상</h1>
    <div class="ws_channel_wrap ws_maxk mt-1 mr-auto ml-auto">
        <ul class="flex gap-1">
            <li class="ws_video_segment ws_mask flex items-center">
                <img src="<?=BASE_URL?>dist/img/arrow_left.png">
            </li>
            <?php for($i=0;$i<10;$i++){?>
            <li class="ws_video_segment ws_mask flex items-center">
                <img src="<?=BASE_URL?>dist/img/channer01.jpg">
            </li>
            <?php } ?>
            <li class="ws_video_segment ws_mask flex items-center">
                <img src="<?=BASE_URL?>dist/img/arrow_right.png">
            </li>
        </ul>
    </div>
    <div class="flex flex-between mt-9" data-aos="fade-up">
        <h1 class="ws_title">인기영상</h1>
        <span class="ws_more_btn">더보기 ></span>
    </div>
    <div class="layout cols-3 mt-3" data-aos="fade-up">
        <?php for($i=0;$i<3;$i++){?>
        <div class="col">
            <figure class="thumbnail ws_mask">
                <img src="<?=BASE_URL?>dist/img/thumbnail1.png">
            </figure>
            <div class="ws_meta flex gap-1 mt-05">
                <p class="ws_meta_tit">성경쨈과</p>
                <span>|</span>
                <span class="ws_meta_sub"> 조회수 5.0만</span>
            </div>
            <p class="ws_video_title text-left mt-05">Ep 07-1. 무엇이든지 할 수 있게 되는 마법의 주문</p>
        </div>
        <?php } ?>
    </div>
    <div class="flex flex-between mt-9" data-aos="fade-up">
        <h1 class="ws_title">추천영상</h1>
        <span class="ws_more_btn">더보기 ></span>
    </div>
    <div class="layout cols-3 mt-3" data-aos="fade-up">
        <?php for($i=0;$i<3;$i++){?>
        <div class="col">
            <figure class="thumbnail ws_mask">
                <img src="<?=BASE_URL?>dist/img/thumbnail1.png">
            </figure>
            <div class="ws_meta flex gap-1 mt-05">
                <p class="ws_meta_tit">성경쨈과</p>
                <span>|</span>
                <span class="ws_meta_sub"> 조회수 5.0만</span>
            </div>
            <p class="ws_video_title text-left mt-05">Ep 07-1. 무엇이든지 할 수 있게 되는 마법의 주문</p>
        </div>
        <?php } ?>
    </div>
    <div class="flex flex-between mt-9" data-aos="fade-up">
        <h1 class="ws_title">신규영상</h1>
        <span class="ws_more_btn">더보기 ></span>
    </div>
    <div class="layout cols-3 mt-3" data-aos="fade-up">
        <?php for($i=0;$i<3;$i++){?>
        <div class="col">
            <figure class="thumbnail ws_mask">
                <img src="<?=BASE_URL?>dist/img/thumbnail1.png">
            </figure>
            <div class="ws_meta flex gap-1 mt-05">
                <p class="ws_meta_tit">성경쨈과</p>
                <span>|</span>
                <span class="ws_meta_sub"> 조회수 5.0만</span>
            </div>
            <p class="ws_video_title text-left mt-05">Ep 07-1. 무엇이든지 할 수 있게 되는 마법의 주문</p>
        </div>
        <?php } ?>
    </div>
    <div class="flex flex-between mt-9" data-aos="fade-up">
        <h1 class="ws_title">문화콘텐츠</h1>
        <span class="ws_more_btn">더보기 ></span>
    </div>
    <div class="layout cols-4 mt-3" data-aos="fade-up">
        <?php for($i=0;$i<4; $i++){?>
        <div class="col">
            <figure class="thumbnail ws_mask">
                <img src="<?=BASE_URL?>dist/img/thumbnail1.png">
            </figure>
            <div class="ws_meta flex gap-1 mt-05">
                <p class="ws_meta_tit">성경쨈과</p>
                <span>|</span>
                <span class="ws_meta_sub"> 조회수 5.0만</span>
            </div>
            <p class="ws_video_title text-left mt-05">Ep 07-1. 무엇이든지 할 수 있게 되는 마법의 주문</p>
        </div>
        <?php } ?>
    </div>
</div>
