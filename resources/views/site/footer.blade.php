       <!--start footer area-->
        <!--================Start ag Footer Area =================-->
        <footer class="ag_footer_area">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <aside class="f_widget about_w wow fadeInLeft" data-wow-delay="300ms">
                                <a href="#" class="f_logo">
                                    <img src="{{ asset('assets/images/logo3.png') }}" width=140 alt="f-logo">
                                </a>
                                <p>Ми створюємо продукти для наших нащадків</p>
                                @if(isset($contacts))
                                <div class="footer_info">
                                    <p><i class="fa fa-phone-square"></i>телефонуйте: +38 {{ $contacts[0]->phone }}</p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i>Email {{ $contacts[0]->email }}</p>
                                    <p><i class="fa fa-map-marker"></i>Офіс: {{ $contacts[0]->address }}</p>
                                </div>
                                @endif
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget news_widget wow fadeInLeft" data-wow-delay="500ms">
                                <div class="a_footer_title">
                                    <h2>Останні новини</h2>
                                </div>
                                <div class="news_post">
                                    <p>Розроблено проект для лісових господарств.</p> 
                                    <a href="#"><i class="fa fa-clock-o"></i>Листопад 22, 2017</a>
                                </div>
                                <div class="news_post">
                                    <p>Інтегровано системи електронного документообігу в Рогатині</p> 
                                    <a href="#"><i class="fa fa-clock-o"></i> Жовтень 7, 2017</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget ex_link_widget wow fadeInLeft" data-wow-delay="700ms">
                                <div class="a_footer_title">
                                    <h2>Інші сторінки</h2>
                                </div>
                                <div class="row m0">
                                    <ul class="lists">
                                        <li><a href="#">Про нас</a></li>
                                        <li><a href="#">Проекти</a></li>
                                        <li><a href="#">Команди</a></li>
                                        
                                    </ul>
                                    <ul class="lists">
                                        <li><a href="#">Новини</a></li>
                                        <li><a href="#">Відгуки</a></li>
                                        <li><a href="#">Контакти</a></li>

                                    </ul>
                                </div>
                                <form class="mailchimp" method="post">
                                    <div class="input-group subscribe_form">
                                        <input type="text" class="form-control" placeholder="Subcribe" name="text">
                                        <button class="btn btn-default" type="submit"><i class="fa fa-envelope"></i></button>
                                    </div>
                                    <p class="mchimp-errmessage" style="display: none;"></p>
                                    <p class="mchimp-sucmessage" style="display: none;"></p>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget f_gallery wow fadeInLeft" data-wow-delay="900ms">
                                <div class="a_footer_title">
                                    <h2>Наші фото</h2>
                                </div>
                                <ul class="footer_gallery">
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/images/footer/instragram/1.jpg') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/images/footer/instragram/2.jpg') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/images/footer/instragram/3.jpg') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/images/footer/instragram/4.jpg') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/images/footer/instragram/5.jpg') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/images/footer/instragram/6.jpg') }}" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <h4 class="f-text">© <script>document.write(new Date().getFullYear());</script> УКРАЇНСЬКІ СИСТЕМИ ТА БЛОКЧЕЙН РІШЕННЯ. Powered By <a href="#">Wemes</a></h4>
                </div>
            </div>
        </footer>