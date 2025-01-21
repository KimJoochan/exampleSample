<div class="ws-wrap ml-auto mr-auto">
    <div class="ws_video_banner flex flex-center flex-col items-center" data-aos="flip-up">
        <h2 class="ws_video_banner__title">말씀영상</h2>
        <h2 class="ws_video_banner__sub-title mt-05">누구나 들을 수 있는, 아무도 몰랐던 말씀!</h2>
    </div>
    <div class="ws_channel_wrap ws_maxk mt-9 mr-auto ml-auto ws_mask">
        <ul class="flex gap-1">
            <?php for($i=0;$i<10;$i++){?>
            <li class="ws_video_segment_lg flex flex-col flex-item">
                <img src="<?=BASE_URL?>dist/img/channer01.jpg">
                <h2 class="ws_video_segment_text mt-1">성경쨈과2</h2>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="hr mt-8"></div>
    <div class="flex flex-between mt-8">
        <h1 class="ws_title">인기영상</h1>
    </div>
    <div class="layout cols-2 mt-3">
        <?php for($i=0;$i<2;$i++){?>
        <div class="col" data-aos="zoom-in-up">
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
    <div class="flex flex-between mt-9">
        <h1 class="ws_title">추천영상</h1>
        <span class="ws_more_btn">더보기 ></span>
    </div>
    <div class="layout cols-4 mt-3">
        <?php for($i=0;$i<16;$i++){?>
        <div class="col" data-aos="zoom-in-up">
            <figure class="thumbnail ws_mask">
                <img src="<?=BASE_URL?>dist/img/thumbnail1.png">
            </figure>
            <div class="ws_meta flex gap-1 mt-05">
                <p class="ws_meta_tit">성경쨈과</p>
                <span>|</span>
                <span class="ws_meta_sub"> 조회수 5.0만</span>
            </div>
            <p class="ws_video_title text-left mt-05 mb-2">Ep 07-1. 무엇이든지 할 수 있게 되는 마법의 주문</p>
        </div>
        <?php } ?>
    </div>
</div>