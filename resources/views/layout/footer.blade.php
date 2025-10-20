
<!------------------- FOOTER ------------------->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 ft-contact-wrap">
                <div class="ft-contact">
                    <div class="ft-contact-item">
                        <div class="ft-contact-item-text">
                            <h6>Support Hotline</h6>
                            <span><a href="tel:{{$setting->hotline}}">{{$setting->hotline}}</a></span>
                        </div>
                        <span class="ft-contact-item-ico"><i class="icon-phone-filled"></i></span>
                    </div>
                    <!-- <div class="ft-contact-item">
                        <div class="ft-contact-item-text">
                            <h6>Head Office</h6>
                            <span>Tầng 5 tòa nhà Vạn Gia Phát, Số 1 Trần Khánh Dư, Phường Tân Định, Thành Phố Hồ Chí Minh, Việt Nam</span>
                        </div>
                        <span class="ft-contact-item-ico"><i class="icon-building-filled"></i></span>
                    </div> -->
                    <div class="ft-contact-item">
                        <div class="ft-contact-item-text">
                            <h6>Office Address</h6>
                            <span>{{$setting->address}}</span>
                        </div>
                        <span class="ft-contact-item-ico"><i class="icon-building-filled"></i></span>
                    </div>
                </div>
                <div class="ft-social">
                    <ul class="social">
                        <li><a href="{{$setting->facebook}}"><i class="icon-facebook"></i></a></li>
                        <li><a href="{{$setting->youtube}}"><i class="icon-youtube"></i></a></li>
                        <!-- <li><a class=""><i class="icon-zalo"></i></a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-md-8 ft-main">
                <div class="row">
                    <div class="col-md-6 ft-info">
                        <img src="data/images/logo_-02.png" alt="">
                    </div>
                    
                    <div class="col-md-6">
                        <div class="ft-link">
                            {!! $setting->maps !!}
                        </div>
                    </div>
                </div>

                
                <div class="row ft-register-subscribe mb-4">
                    <div class="col-lg-6 align-self-center"><span class="line-b">Subscribe to updates from <b>INDOCHINE</b></span></div>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter your email" aria-label="Enter your email" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="icon-send"></i></button>
                        </div>
                    </div>
                </div>
                <p class="ft-copyright text-end">Copyright © 2024 INDOCHINE, All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<!------------------- END: FOOTER ------------------->