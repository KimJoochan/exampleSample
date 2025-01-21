<nav class="ws-wrap ml-auto mr-auto flex flex-between items-center ws_nav">
    <div>
        <ul class="flex gap-3 ws_main_nav_list">
            <li><img src="<?=BASE_URL?>dist/img/ham.png"></li>
            <li class="ws_nav_item"><a href="">영상마당</a></li>
            <li class="ws_nav_item"><a href="">성경숲</a></li>
            <li class="ws_nav_item"><a href="">광장사거리</a></li>
            <li class="ws_nav_item"><a href="">예술정원</a></li>
            <li class="ws_nav_item"><a href="">소리쉼터</a></li>
            <li class="ws_nav_item"><a href="">광장소식</a></li>
        </ul>
    </div>
    <aside class="flex gap-2">
        <div class="ws_real_word flex items-center flex-between">
            <p><span>2</span> 선악과의 의미</p>
            <img src="<?=BASE_URL?>dist/img/arrow_down.png">
        </div>
    </aside>
</nav>
<div class="ws_sub_nav_color">
    <div class="ws-wrap ml-auto mr-auto flex flex-between items-center">
        <div>
            <ul class="flex gap-3">
                <li style="opacity:0;"><img src="<?=BASE_URL?>dist/img/ham.png"></li>
                <li class="flex flex-col ws_nav_item">
                    <a href="" class="ws_sub_nav_item" onmouseenter="onHandleEnterSubNavItem(this)" onmouseLeave="onHandleLeaveSubNavItem()">말씀영상</a>
                    <a href="" class="ws_sub_nav_item" onmouseenter="onHandleEnterSubNavItem(this)" onmouseLeave="onHandleLeaveSubNavItem()">열린예배</a>
                    <a href="" class="ws_sub_nav_item" onmouseenter="onHandleEnterSubNavItem(this)" onmouseLeave="onHandleLeaveSubNavItem()">온라인 세미나</a>
                </li>
                <li class="flex flex-col ws_nav_item">
                    <a href="" class="ws_sub_nav_item" onmouseenter="onHandleEnterSubNavItem(this)" onmouseLeave="onHandleLeaveSubNavItem()">성경사전</a>
                    <a href="" class="ws_sub_nav_item" onmouseenter="onHandleEnterSubNavItem(this)" onmouseLeave="onHandleLeaveSubNavItem()">온라인 성경</a>
                </li>
                <li class="flex flex-col ws_nav_item">
                    <a href="" class="ws_sub_nav_item" onmouseenter="onHandleEnterSubNavItem(this)" onmouseLeave="onHandleLeaveSubNavItem()">튜터신청</a>
                    <a href="" class="ws_sub_nav_item" onmouseenter="onHandleEnterSubNavItem(this)" onmouseLeave="onHandleLeaveSubNavItem()">유형텟트</a>
                </li>
                <li class="flex flex-col ws_nav_item">
                    <a href="" class="ws_sub_nav_item" onmouseenter="onHandleEnterSubNavItem(this)" onmouseLeave="onHandleLeaveSubNavItem()">그림</a>
                    <a href="" class="ws_sub_nav_item" onmouseenter="onHandleEnterSubNavItem(this)" onmouseLeave="onHandleLeaveSubNavItem()">캘리</a>
                    <a href="" class="ws_sub_nav_item" onmouseenter="onHandleEnterSubNavItem(this)" onmouseLeave="onHandleLeaveSubNavItem()">웹툰</a>
                </li>
                <li class="flex flex-col ws_nav_item">
                    <a href="" class="ws_sub_nav_item" onmouseenter="onHandleEnterSubNavItem(this)" onmouseLeave="onHandleLeaveSubNavItem()">오디오</a>
                    <a href="" class="ws_sub_nav_item" onmouseenter="onHandleEnterSubNavItem(this)" onmouseLeave="onHandleLeaveSubNavItem()">음악</a>
                </li>
                <li class="flex flex-col ws_nav_item">
                    <a href="" class="ws_sub_nav_item" onmouseenter="onHandleEnterSubNavItem(this)" onmouseLeave="onHandleLeaveSubNavItem()">광장소개</a>
                    <a href="" class="ws_sub_nav_item" onmouseenter="onHandleEnterSubNavItem(this)" onmouseLeave="onHandleLeaveSubNavItem()">공지사항</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const nav = document.querySelector('.ws_nav');
        const wsSubNavColor = document.querySelector('.ws_sub_nav_color');
        
        // slideDown: 높이를 0에서 지정된 값으로 변경하여 보이게
        function slideDown(element) {
            element.style.height = element.scrollHeight + 'px'; // 실제 컨텐츠의 높이로 설정
        }
        
        // slideUp: 높이를 0으로 설정하여 숨기기
        function slideUp(element) {
            element.style.height = '0'; // 높이를 0으로 설정하여 숨기기
        }

        // nav 영역에 마우스가 들어갈 때
        nav.addEventListener('mouseenter', function() {
            wsSubNavColor.style.display = 'block'; // display를 block으로 설정
            slideDown(wsSubNavColor); // slideDown 효과
        });

        // nav 영역을 벗어날 때
        nav.addEventListener('mouseleave', function(event) {
            if (!nav.contains(event.relatedTarget)) {
                slideUp(wsSubNavColor); // slideUp 효과
            }
        });

        // ws_sub_nav_color 영역에 마우스가 들어갈 때
        wsSubNavColor.addEventListener('mouseenter', function() {
            wsSubNavColor.style.display = 'block'; // display를 block으로 설정
            slideDown(wsSubNavColor); // slideDown 효과
        });

        // ws_sub_nav_color 영역을 벗어날 때
        wsSubNavColor.addEventListener('mouseleave', function(event) {
            if (!nav.contains(event.relatedTarget)) {
                slideUp(wsSubNavColor); // slideUp 효과
            }
        });
    });

    function onHandleEnterSubNavItem(e){
        e.classList.add('on');
        e.parentNode.classList.add('on');
        let idx = 0;
        for(let item of e.parentNode.parentNode.querySelectorAll('.ws_nav_item')){
            if(item.classList.contains('on')){
                break;
            }
            idx++;
        }
        let targetIdx = idx+1;
        let main_idx=0;
        for(let item of document.querySelector('.ws_main_nav_list').querySelectorAll('.ws_nav_item')){
            if(main_idx == idx){
                item.classList.add('active');
                break;
            }
            main_idx++;
        }


    }

    function onHandleLeaveSubNavItem(){
        document.querySelector('.ws_sub_nav_color').querySelectorAll('.ws_sub_nav_item').forEach(el=>{
            el.classList.remove('on');
            el.parentNode.classList.remove('on');
        })
        for(let item of document.querySelector('.ws_main_nav_list').querySelectorAll('.ws_nav_item')){
            item.classList.remove('active');                
        }
    }

</script>