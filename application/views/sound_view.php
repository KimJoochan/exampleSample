<div class="ws-wrap ml-auto mr-auto">
    <p class="ws_breadcrumb mt-4">소리쉼터 / 오디오 </p>
    <div class="ws_video_view" >
    <iframe
        src="https://www.youtube.com/embed/07DT5dG9pIQ"
        title="[신천지 하늘팟] 시즌5 &#39;트렌디&#39;한 신앙인들의 놀이터! 말씀광장 상편 feat.장반장, 한팩트, 라쿤, 나궁금"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen="allowfullscreen"></iframe>
    </div>
    <div class="flex flex-between">
        <div class="flex flex-col">
            <h1 class="ws_video__title mt-1">31. 내 머릿속에 신</h1>
            <p class="ws_sub_text mt-05">조회수 10만 좋아요 0</p>
        </div>
        <div class="flex gap-1 items-center">
            <a href="" class="ws_reaction">
                <img src="<?=BASE_URL?>dist/img/heart.png">
                <!-- <img src="<?=BASE_URL?>dist/img/heart_actvie.png"> -->
            </a>
            <a href="" class="ws_reaction">
                <img src="<?=BASE_URL?>dist/img/share.png">
            </a>
            
        </div>
    </div>
    <div class="ws_video_channel_info flex flex-col mt-9">
        <div class="ws_video_channel_info--mark flex gap-3">
            <figure></figure>
            <h2 class="ws_video_channel__title ml-1">바이블라이프</h2>
        </div>
        <p class="ws_video_channel__desc mt-2">당신이 신에게 묻고 싶은 인생 질문은 무엇입니까? <br/>
            살면서 누구나 한 번쯤 갖게 되는 근본적인 의문에 대한 답! <br/>
            이 답을 찾아가는 동안 어느새 '인생의 의미'도 재발견하게 될 것입니다.</p>

        <ul class="ws_keyword_list flex gap-1 mt-7">
            <li class="ws_hash">
                <a href="#">#1분성경</a>
            </li>
            <li class="ws_hash">
                <a href="#">#1분성경</a>
            </li>
            <li class="ws_hash">
                <a href="#">#1분성경</a>
            </li>
        </ul>
    </div>
    <div class="hr mt-10"></div>
    <div class="flex flex-between mt-10">
        <h1 class="ws_title">추천영상</h1>
        <span class="ws_more_btn">더보기 ></span>
    </div>
    <div class="layout cols-4 mt-3">
        <?php for($i=0;$i<4;$i++){?>
        <div class="col">
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
    <div class="flex flex-between mt-10">
        <h1 class="ws_title">추천 콘텐츠</h1>
        <span class="ws_more_btn">더보기 ></span>
    </div>
    <div class="layout cols-4 mt-3 mb-16">
        <?php for($i=0;$i<4;$i++){?>
        <div class="col">
            <figure class="thumbnail ws_mask">
                <img src="<?=BASE_URL?>dist/img/thumbnail1.png">
            </figure>
            <div class="ws_meta flex gap-1 mt-05">
                <p class="ws_meta_tit">유형테스트</p>
            </div>
            <p class="ws_video_title text-left mt-05 mb-2">Ep 07-1. 무엇이든지 할 수 있게 되는 마법의 주문</p>
        </div>
        <?php } ?>
    </div>

</div>