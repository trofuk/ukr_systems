
        <!--modal of video-->
        <div class="modal video-modal fade" id="video-popup" tabindex="-1" role="dialog" aria-labelledby="video-popup">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ion-close"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe id="vimeo-video" src="http://player.vimeo.com/video/83006493"></iframe>
                        </div>
                    </div><!--modal body-->
                </div><!--modal content-->
            </div><!--modal dialog-->
        </div>
        <!--end the modal of video-->
        
        <!-- form : "mfp-hide" Add this class before using -->
        <div id="popup-content" class="popup-content zoom-anim-dialog mfp-hide">
            <div class="pop-header">
                <i class="ion-email-unread"></i>
                <h2>Напишіть нам</h2>
            </div>
            <div class="pop-body sm-pd-30">
                <!-- form-block -->
                <div class="form-block">
                    <form action="contact_process.php" method="post" class="form-widget" id="contactForm">
                        <div class="form-group">
                            <input class="form-control" type="text" id="name1" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" id="email" name="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" id="phone" name="phone" placeholder="Enter your phone number">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" id="subject" name="subject" placeholder="Enter subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" placeholder="Add your message" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark-border btn-lg ag_btn"><i class="fa fa-envelope-o"></i>Contact us now!</button>
                    </form><!-- / form -->
                </div><!-- / form block -->
            </div>
        </div><!-- /#popup-content -->

        <!--back to top-->
        <a href="#" class="scrollToTop"><i class="ion-android-arrow-dropup-circle"></i></a>
        <!--back to top end-->
        
        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message">
            <div class="modal-dialog" role="dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2 class="modal-title" id="exampleModalLabel">Дякуємо</h2>
                        <p class="modal-subtitle">Ваше повідомлення успішно відправлене...</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modals error -->

        <div id="error" class="modal modal-message">
            <div class="modal-dialog" role="dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2 class="modal-title" id="exampleModalLabel">Вибачте</h2>
                        <p class="modal-subtitle"> щось пішло не так </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
