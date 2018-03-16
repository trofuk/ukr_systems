        <!--=========Start cons testimonial area==========-->
        <section class="testimonial_area_two agency_bg">
            <div class="container">
                @if(isset($testimonials))
                <div class="testimonial_slider_two owl-carousel">
                    
                    @foreach($testimonials as $k => $testimonial)
                    <div class="item">
                        <div class="img wow fadeInDown" data-wow-delay="400ms">
                            {{ Html::image('assets/images/'.$testimonial->image, 'test') }}
                        </div>
                        <h2>{{ $testimonial->name }}<span> {{ $testimonial->position }}</span></h2>
                        <p>{{ $testimonial->text }}</p>
                    </div>
                    @endforeach
          
                </div>
                @endif
            </div>
        </section>
        <!--=========End cons testimonial area==========-->