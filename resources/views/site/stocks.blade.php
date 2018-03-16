        <!--=============== Start stocks Area =================-->
        <section class="stocks_area">
            <div class="container">
               <!-- <div class="row stocks_row wow fadeInUp" data-wow-delay="400ms">
                    <div class="col-md-4 stocks_item">
                        <img src="images/agncy-img.png" alt="img">
                    </div>
                    <div class="col-md-4 stocks_item">
                        <img src="images/agncy-img2.jpg" alt="img">
                    </div>
                    <div class="col-md-4 stocks_item">
                        <img src="images/agncy-img3.jpg" alt="img">
                    </div>
                </div>-->
                @if(isset($sections))
                <div class="stocks_content wow fadeInUp" data-wow-delay="600ms">
                    <h2>{{ $sections[1]->title }}</h2>
                    <p>{{ $sections[1]->description }}</p>
                </div>
                @endif
            </div>
        </section>
        <div class="space-80"></div>
        <!--================End stocks Area =================-->