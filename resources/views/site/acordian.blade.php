<!--===========accordian_area_r============-->
        <section class="accordian_area_r agency_bg" id="faq">
            <div class="container">
                @if(isset($sections))
                <div class="main-title margin-b-60 wow fadeInDown" data-wow-delay="400ms">
                    <h2 data-line="Маєте питання? Дозвольте вам допомогти">{{ $sections[4]->title }}</h2>
                    <h3>{{ $sections[4]->description }}</h3>
                </div>
                @endif
                <div class="row">
                @if(isset($tabs))
                    
                    <div class="col-lg-6 accordian_tab wow fadeInLeft" data-wow-delay="600ms">
                        <ul class="nav nav-tabs tab_menu" role="tablist">
                            <li role="presentation" class="nav-item"><a class="nav-link active" aria-controls="design" role="tab" data-toggle="tab" aria-expanded="true" href="#design">{{ $tabs[0]->name }}</a></li>
                            <li role="presentation" class="nav-item"><a class="nav-link" href="#art" aria-controls="art" role="tab" data-toggle="tab">{{ $tabs[1]->name }}</a></li>
                            <li role="presentation" class="nav-item"><a class="nav-link" href="#br" aria-controls="br" role="tab" data-toggle="tab">{{ $tabs[2]->name }}</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active fade show active" id="design">
                                
                                <div class="row m0">
                                    <div class="tab_img">
                                        {{ Html::image('assets/images/'.$tabs[0]->image_1) }}
                                    </div>
                                    <div class="tab_img">
                                        {{ Html::image('assets/images/'.$tabs[0]->image_2) }}
                                    </div>
                                    <div class="tab_img">
                                        {{ Html::image('assets/images/'.$tabs[0]->image_3) }}
                                    </div>
                                </div>
                                <p>{{ $tabs[0]->text_1 }}</p>
                                <p>{{ $tabs[0]->text_2 }}</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="art">
                                <div class="row m0">
                                    <div class="tab_img">
                                        {{ Html::image('assets/images/'.$tabs[1]->image_1) }}
                                    </div>
                                    <div class="tab_img">
                                        {{ Html::image('assets/images/'.$tabs[1]->image_2) }}
                                    </div>
                                    <div class="tab_img">
                                        {{ Html::image('assets/images/'.$tabs[1]->image_3) }}
                                    </div>
                                </div>
                                <p>{{ $tabs[1]->text_1 }}</p>
                                <p>{{ $tabs[1]->text_2 }}</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="br">
                                <div class="row m0">
                                    <div class="tab_img">
                                        {{ Html::image('assets/images/'.$tabs[2]->image_1) }}
                                    </div>
                                    <div class="tab_img">
                                        {{ Html::image('assets/images/'.$tabs[2]->image_2) }}
                                    </div>
                                    <div class="tab_img">
                                        {{ Html::image('assets/images/'.$tabs[2]->image_3) }}
                                    </div>
                                </div>
                                <p>{{ $tabs[2]->text_1 }}</p>
                                <p>{{ $tabs[2]->text_2 }}</p>
                            </div>
                        </div>
                    </div>
                    
                    @endif

                    @if(isset($faqs))
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="800ms">
                        <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group faq-inner-accordion">
                            <div class="card">
                                <div class="card-header" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="btn-accordion" aria-expanded="true" role="button" aria-controls="collapse1">{{ $faqs[0]->question }}<i class="ion-ios-arrow-up"></i><i class="ion-ios-arrow-down"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="collapse show" aria-expanded="true" role="tabpanel">
                                    <div class="card-block panel-body">
                                        {{ $faqs[0]->answer }}
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="btn-accordion collapsed" aria-expanded="false" aria-controls="collapse2">
                                            {{ $faqs[1]->question }}<i class="ion-ios-arrow-up"></i><i class="ion-ios-arrow-down"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse" aria-expanded="false" role="tabpanel">
                                    <div class="panel-body">{{ $faqs[1]->answer }}</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="btn-accordion collapsed" aria-expanded="false">
                                            {{ $faqs[2]->question }}<i class="ion-ios-arrow-up"></i><i class="ion-ios-arrow-down"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse" aria-expanded="false" role="tabpanel">
                                    <div class="panel-body">{{ $faqs[2]->answer }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </section>