        <!--start services-->
        <section id="services" class="agency_services_area">
            <div class="space-90"></div>
            <div class="container">
                @if(isset($sections))
                <div class="main-title margin-b-80 wow fadeInDown" data-wow-delay="400ms">
                    <h2 data-line="Наші напрямки">{{ $sections[3]->title }}</h2>
                    <h3>{{ $sections[3]->description }}</h3>
                </div>
                @endif
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-12">
                        
                        @if(isset($services))
                        <ul class="row list-unstyled services-list">
                            
                            @foreach($services as $k => $service)
                            @if($k%2 == 0)
                            <li class="col-md-6 clearfix wow fadeInLeft" data-wow-delay="200ms">
                                <i class="ion-ios-briefcase-outline"></i>
                                <div class="content">
                                    <h4>{{ $service->name }}</h4>
                                    <p>
                                        {{ $service->text }}
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                            @endif
                            @if($k%2 == 1)
                            <li class="col-md-6 clearfix wow fadeInRight" data-wow-delay="400ms">
                                <i class="fa fa-line-chart"></i>
                                <div class="content">
                                    <h4>{{ $service->name }}</h4>
                                    <p>
                                        {{ $service->text }}
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                            @endif
                            @endforeach
                            
                        </ul><!--service list end-->
                        @endif
                    </div>
                </div><!--row end-->
                <hr>
                <div class="space-60"></div>
                <div class="text-center wow fadeInUp" data-wow-delay="400ms">
                    <a href="#" class="btn btn-dark-border btn-lg ag_btn">Інші послуги</a>
                </div>
            </div>
            <div class="space-100"></div>
        </section>
        <!--end services-->