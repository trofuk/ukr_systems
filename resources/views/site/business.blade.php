<!--============business area==============-->
        <section class="business_area agency_bg">
            <div class="space-90"></div>
            <div class="container">
                @if(isset($sections))
                <div class="main-title margin-b-80 wow fadeInDown" data-wow-delay="400ms">
                    <h2 data-line="ASKEP.NET">{{ $sections[2]->title }}</h2>
                    <h3>{{ $sections[2]->description }}</h3>
                </div>
                @endif
                @if(isset($businesses))
                <div class="business_img">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 business_promo promo">
                            <i class="ion-network"></i>
                            <h2>{{ $businesses[0]->title }}</h2>
                            <div class="pulse-wrapper">
                                <div class="pulse-1">1</div>
                                <div class="pulse-2">2</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 business_promo promo1">
                            <i class="ion-social-chrome-outline"></i>
                            <h2>{{ $businesses[1]->title }}</h2>
                            <div class="pulse-wrapper">
                                <div class="pulse-1">1</div>
                                <div class="pulse-2">2</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 business_promo promo2">
                            <i class="ion-ios-flask"></i>
                            <h2>{{ $businesses[2]->title }}</h2>
                            <div class="pulse-wrapper">
                                <div class="pulse-1">1</div>
                                <div class="pulse-2">2</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 business_promo promo3">
                            <i class="ion-ios-partlysunny"></i>
                            <h2>{{ $businesses[3]->title }}</h2>
                            <div class="pulse-wrapper">
                                <div class="pulse-1">1</div>
                                <div class="pulse-2">2</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 business_promo promo4">
                            <i class="ion-ios-briefcase"></i>
                            <h2>{{ $businesses[4]->title }}</h2>
                            <div class="pulse-wrapper">
                                <div class="pulse-1">1</div>
                                <div class="pulse-2">2</div>
                            </div>
                        </div>
                    </div>
                    <div class="single-img left wow fadeInLeft" data-wow-delay="400ms">
                        {{ Html::image('assets/images/'.$businesses[2]->image) }}
                    </div>
                    <div class="single-img middle">
                        {{ Html::image('assets/images/'.$businesses[0]->image) }}
                    </div>
                    <div class="single-img right wow fadeInRight" data-wow-delay="400ms">
                        {{ Html::image('assets/images/'.$businesses[1]->image) }}
                    </div>
                </div>
                @endif
            </div>
        </section>
        <!--============business area==============-->