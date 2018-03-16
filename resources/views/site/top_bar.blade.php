       <!--  navbar -->
		<div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 hidden-sm-down">
                        @if(isset($contacts))
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#"><i class="ion-ios-telephone"></i> +38 {{ $contacts[0]->phone }}</a></li>
                            <li class="list-inline-item"><a href="#"><i class="ion-ios-email"></i> {{ $contacts[0]->email }}</a></li>
                        </ul>
                        @endif
                    </div><!--top left col end-->
                    <div class="col-md-6 text-right hidden-xs-down">
                        <ul class="list-inline top-socials">
                            <li class="list-inline-item"><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ion-social-instagram"></i></a></li>
                        </ul>
                    </div><!--top social col end-->
                </div><!--row-->
            </div><!--container-->
        </div>