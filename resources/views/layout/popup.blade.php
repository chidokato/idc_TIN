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
        <a href="https://line.me/ti/p/yQJQunMFQD">
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
                <input type="text" name="name" placeholder="Full Name (*)">
            </label>
            <label>
                <input type="text" name="phone" placeholder="Phone (*)">
            </label>
            <label>
                <input type="text" name="email" placeholder="Email">
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
