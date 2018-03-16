        <!--video tour-->
        <section id="video" class="bg-video">
            <div class="container text-center">
                @if(isset($sections))
                <h2 class="section-title">{{ $sections[5]->title }}</h2>
                @endif
                <a href="#" class="video-link" data-toggle="modal" data-target="#video-popup"><i class="ion-ios-play-outline"></i></a>
            </div>
            <div class="video-bg-wrapper">
                <video class="video-bg" data-video="{{ asset('assets/images/testimonials.mp4') }}" autoplay="" muted="" loop="" poster="{{ asset('assets/images/testimonials.jpg') }}" style="background-image:url( {{ asset('assets/images/testimonials.jpg') }} );">
                    <source type="video/mp4" src="{{ asset('assets/images/testimonials.mp4') }}"><source type="video/webm" src="{{ asset('assets/images/testimonials.webm') }}"></video>
            </div>
        </section>
        <!--end vide tour-->