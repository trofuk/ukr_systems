       <!--================Our Expert Team Area =================-->
        <section class="expert_team_area" id="team">
            <div class="space-100"></div>
            <div class="container">
                @if(isset($sections))
                <div class="main-title margin-b-60 wow fadeInDown" data-wow-delay="400ms">
                    <h2 data-line="Meet Our Expert Team">{{ $sections[6]->title }}</h2>
                    <h3>{{ $sections[6]->description }}</h3>
                </div>
                @endif
                @if(isset($teams))
                <div class="row expert_team_inner">
                    @foreach($teams as $k => $team)
                    <div class="col-lg-3 col-md-6">
                        <div class="expert_team_item wow fadeInLeft" data-wow-delay="{{ ($k+1)*200 }}ms">
                            <div class="e_team_image">
                                {{ Html::image('assets/images/'.$team->image) }}
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                </ul>
                            </div>
                            <a href="{{ $team->link }}"><h4>{{ $team->name }}</h4></a>
                            <p>{{ $team->description }}</p>
                        </div>
                    </div>
                    @endforeach
            
                </div>
                @endif
            </div>
            <div class="space-70"></div>
        </section>
        <!--================End Our Expert Team Area =================-->