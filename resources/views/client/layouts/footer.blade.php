<!-- Footer Section here -->
<footer>
    <div class="main_footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="M_footer">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 quick_links">
                            <div class="title">{{ __('messages.quick_links') }}</div>
                            <div class="main_cnt">
                                <ul>
                                    <li><a href="about.html" class="trans" title="{{ __('messages.about_us') }}">{{ __('messages.about_us') }}</a></li>
                                    <li><a href="faq.html" class="trans" title="{{ __('messages.faq') }}">{{ __('messages.faq') }}</a></li>
                                    <li><a href="contactus.html" class="trans" title="{{ __('messages.contacts') }}">{{ __('messages.contacts') }}</a></li>
                                    <li><a href="login.html" class="trans" title="{{ __('messages.login') }}">{{ __('messages.login') }}</a></li>
                                    <li><a href="login.html" class="trans" title="{{ __('messages.register') }}">{{ __('messages.register') }}</a></li>
                                    <li><a href="terms_conditions.html" class="trans" title="{{ __('messages.terms_and_conditions') }}">{{ __('messages.terms_and_conditions') }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 location">
                            <div class="title">{{ __('messages.our_location') }}</div>
                            <div class="main_cnt">
                                <span class="address"><a href="https://www.google.com/maps">{{ __('messages.address_restaurant') }}</a></span>
                                <span class="time1">{{ __('messages.time_open') }}</span>
                                <span class="time2">{{ __('messages.time_open_2') }}</span>
                                <span class="conact"><a href="">{{ __('messages.tel') }}</a></span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 subscribe">
                            <div class="title">{{ __('messages.subscribe_us') }}</div>
                            <div class="main_cnt">
                                <p class="sbcr_label">{{ __('messages.subscribe_to') }}</p>
                                <form method="post" id="subscribeform" action="thank-you.html">
                                    <div class="sbcrb_input">
                                        <input type="text" name="subscribeemail" class="form-control" placeholder="{{ __('messages.enter_your_email') }}">
                                        <button class="subscribebutton send" name="getbutton" type="submit">
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="F_footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="payment">
                        <span>{{ __('messages.payment_options') }}</span>
                        <span class="pay_cards"><img src="images\card_img.png" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p>© <a href="index.html" class="trans" title="Crave Ordering">Crave Ordering</a> 2019, All rights reserved </p>
        </div>
    </div>
</footer>
<!-- Footer Section here -->
</div>
