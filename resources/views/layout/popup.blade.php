<!--  <div class="hotline-phone-ring-wrap form-ring-wrap">
    <div class="hotline-phone-ring ">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle click_wechat">
            <a href="javascript:void(0)" class="pps-btn-img">
                <img style="width: 35px;height: 35px;border-radius: 100%;" src="assets/img/icon/wechat.png" alt="Gọi điện thoại" width="50">
            </a>
        </div>
        <div class="hotline-bar click_wechat">
            <a href="javascript:void(0)">
                <span class="text-hotline">Wechat</span>
            </a>
        </div>
    </div>
    <div class="wechat-mini-popup" id="wechatMiniPopup">
        <img src="assets/img/icon/wechat-qr.jpg" alt="WeChat QR">
        <p>ID: xiaoyan999</p>
    </div>
</div>   -->                             


<div class="hotline-phone-ring-wrap form-ring-wrap">
    <div class="hotline-phone-ring ">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle click_popup">
            <a href="javascript:void(0)" class="pps-btn-img">
                <img src="assets/img/icon/dowload.png" alt="Gọi điện thoại" width="50">
            </a>
        </div>
        <div class="hotline-bar click_popup">
            <a href="javascript:void(0)">
                <span class="text-hotline">Price List</span>
            </a>
        </div>
    </div>
</div>

<div class="hotline-phone-ring-wrap zalo-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle">
        <a target="_blank" href="{{$setting->chat}}" class="pps-btn-img">
            <img src="assets/img/icon/zalo.png" alt="Gọi điện thoại" width="50">
        </a>
        </div>
    
    <div class="hotline-bar">
        <a target="_blank" href="https://zalo.me/{{$setting->hotline}}">
            <span class="text-hotline">Chat</span>
        </a>
    </div>
    </div>
</div>

<div class="hotline-phone-ring-wrap hotline-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle">
        <a href="tel:{{$setting->hotline}}" class="pps-btn-img">
            <img src="assets/img/icon/icon-call-nh.png" alt="Gọi điện thoại" width="50">
        </a>
        </div>
    
    <div class="hotline-bar">
        <a target="_blank" href="https://line.me/ti/p/yQJQunMFQD">
            <span class="text-hotline">Call Now</span>
        </a>
    </div>
    </div>
</div>


<div id="popup-banggia" class="popup-overlay">
    <div class="popup-content">
        <span class="close-popup">&times;</span>
        <h3>Download Price List</h3>
        <form id="validateForm" method="post" action="question">
        @csrf
            <input type="hidden" id="current-url" name="url" value="">
            <label>
                <input type="text" name="name" placeholder="Full Name (*)" required>
            </label>
            <label>
                <input type="email" name="email" placeholder="Email (*)" required>
            </label>
            <label>
                <input type="text" name="wechat" placeholder="Wechat/Kakaotalk ID (*)" required>
            </label>
            <p class="sub">(*) By clicking on ‘Request a Quote’, you agree to our Privacy Policy.</p>
            <button class="btn btn-circle" type="submit">Send Now</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const urlInput = document.getElementById("current-url");
        if (urlInput) {
            urlInput.value = window.location.href;
        }
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const btns = document.querySelectorAll('.click_wechat');
    const popup = document.getElementById('wechatMiniPopup');

    btns.forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            popup.style.display = 
                popup.style.display === 'block' ? 'none' : 'block';
        });
    });

    // Click ra ngoài thì ẩn
    document.addEventListener('click', function () {
        popup.style.display = 'none';
    });

});
</script>

