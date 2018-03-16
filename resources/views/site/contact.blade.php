        <!--start get touch area-->
        <section class="contact-area" id="contact">
            <div class="container-fluid">
                <div class="row"> 
                    <div class="col-lg-6 contact-info p0">
                        <div class="contact-inner wow fadeInLeft" data-wow-delay="400ms">
                            @if(isset($contacts))
                            <div class="content">
                                @if(isset($sections))
                                <h2 class="title">{{ $sections[8]->title }}</h2>
                                <h5>{{ $sections[8]->description }}</h5>
                                @endif
                                <hr class="light">
                                <h3>Центральний офіс :</h3>
                                <p>{{ $contacts[0]->address }}</p>

                                <hr class="light">

                                <h3>телефон :</h3>
                                <p>{{ $contacts[0]->phone }},<br>{{ $contacts[0]->phone }}</p>

                                <hr class="light">
                                <div class="margin-b-50"></div>
                                <a href="#popup-content" class="btn btn-dark-border btn-lg ag_btn mf-popup">Напишіть нам</a>
                            </div>
                            @endif
                        </div>
                    </div> 
                    <div class="col-lg-6 promo-img p0 pull-right wow fadeInRight" data-wow-delay="400ms">
                        <img src="{{ asset('assets/images/contact-bg.jpg') }}" alt="">
                    </div> 
                </div>
            </div>
        </section>
        <!--end get touch area-->