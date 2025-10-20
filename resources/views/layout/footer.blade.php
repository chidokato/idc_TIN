
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
                    <div class="ft-contact-item">
                        <div class="ft-contact-item-text">
                            <h6>Head Office</h6>
                            <span>Tầng 5 tòa nhà Vạn Gia Phát, Số 1 Trần Khánh Dư, Phường Tân Định, Thành Phố Hồ Chí Minh, Việt Nam</span>
                        </div>
                        <span class="ft-contact-item-ico"><i class="icon-building-filled"></i></span>
                    </div>
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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4690.512692187741!2d106.7229934!3d10.7484217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fb2f3dfc163%3A0x51a07369e53958f4!2sIndochine%20Coffee!5e1!3m2!1svi!2s!4v1760953283108!5m2!1svi!2s" width="600" height="450" style="border:0; width: 100%; height: 300px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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