         <section class="menu_area_middle">
            
            <!--  navbar -->
            <nav id="affix" class="navbar navbar-toggleable-sm  navbar-default navbar-light bg-faded">
                <div class="container">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/images/logo1.png') }}" alt="logo"></a>

                    @if(isset($menu))
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            @foreach($menu as $item) 

                            <li class="nav-item"><a data-scroll href="#{{ $item['alias'] }}" class="nav-link">{{ $item['title'] }}</a></li>
                            
                        
                            @endforeach
                          <!--  <li class="dropdown nav-item">
                                <span class="dropdown-toggle menu-drop-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More</span>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="blog-standard.html">Blog Standard</a></li>
                                    <li><a class="dropdown-item" href="blog-masonry.html">Blog Masonry</a></li>
                                    <li><a class="dropdown-item" href="blog-single.html">blog-post</a></li>
                                    <li><a class="dropdown-item" href="typography.html">Typography</a></li>
                                </ul>
                            </li>-->
                        </ul>

                    </div>
                    @endif
                </div>
            </nav>
        </section>