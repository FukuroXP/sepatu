<header id="header">
    <div class="header-banner">
    </div>

    <nav class="header-nav">
        <div class="container-fluid">
            <div class="user-info-block dropdown js-dropdown">
                <button class="btn btn-primary" data-toggle="dropdown">Setting <i class="fas fa-chevron-down"></i></button>
                <ul class="dropdown-menu">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>


    <div class="header-top">
        <div class="container-fluid">
            <div class="row">
                <div class="header_logo col col-lg-3 col-md-12 col-xs-12">
                    <a href="index.html">
                        <img class="logo img-responsive" src="{{ asset('img/pos-sneaker-logo-1517381864.jpg') }}" alt="Hemat Bergaya">
                    </a>
                </div>
                <div class="col col-xs-12 col-lg-9 col-md-12 display_top">
                    <div class="blockcart cart-preview" data-refresh-url="//demo.posthemes.com/pos_sneaker/en/module/ps_shoppingcart/ajax" data-cartitems="0">
                        <div class="header">
                        </div>
                        <div class="body">


                        </div>
                    </div>

                    <!-- pos search module TOP -->
                    <div id="pos_search_top" class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <form method="get" action="#" id="searchbox" class="form-inline form_search"  data-search-controller-url="/pos_sneaker/modules/possearchproducts/SearchProducts.php">
                            <label for="pos_query_top"><!-- image on background --></label>
                            <input type="hidden" name="controller" value="search">
                            <div class="pos_search form-group">
                                <select class="bootstrap-select" name="poscats">
                                    <option value="0">All categories</option>
                                    <option value="12">For men</option>
                                    <option value="13">For women</option>
                                </select>

                            </div>
                            <input type="text" name="s" value="" placeholder="Enter your search key ... " id="pos_query_top" class="search_query form-control ac_input" >
                            <button type="submit" class="btn btn-default search_submit">
                                <span>Search</span>
                            </button>
                        </form>
                    </div>

                    <!-- /pos search module TOP -->

                    <div class="social_follow">
                        <h2 class="social_title">Follow us:</h2>
                        <ul>
                            <li><a href="https://www.facebook.com/posthemes" target="_blank"><h2 class="fab fa-facebook-f"></h2></a></li>
                            <li><a href="https://twitter.com/posthemes" target="_blank"><h2 class="fab fa-twitter"></h2></a></li>
                            <li><a href="https://www.youtube.com/user/posthemes" target="_blank"><h2 class="fab fa-youtube"></h2></a></li>
                            <li><a href="https://plus.google.com/100616268634541521861/posts" target="_blank"><h2 class="fab fa-googleplus"></h2></a></li>
                            <li><a href="https://www.instagram.com/posthemes9234/" target="_blank"><h2 class="fab fa-instagram"></h2></a></li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="megamenu">
            <div class="container-fluid">
                <!-- Block categories module -->
                <div class="ma-nav-mobile-container hidden-lg-up">
                    <div class="pt_custommenu_mobile">
                        <div class="navbar">
                            <div id="navbar-inner" class="navbar-inner navbar-inactive">
                                <a class="btn-navbar">Category</a>
                                <ul id="pt_custommenu_itemmobile" class="tree dhtml  mobilemenu nav-collapse collapse">
                                    <li><a href="/formen">For men </a></li>
                                    <li><a href="13-for-women.html">For women </a></li>
                                    <li><a href="14-for-kids.html">For kids </a></li>
                                    <li><a href="15-categories.html">Categories </a></li>
                                    <li><a href="16-new-arrivals.html">New arrivals </a></li>
                                    <li><a href="17-lookbook.html">Lookbook </a></li>
                                    <li><a href="18-featured.html">Featured </a></li>
                                    <li><a href="19-news.html">News </a></li>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Block categories module -->
                <div class="nav-container hidden-md-down">
                    <div class="nav-inner">
                        <div id="pt_custommenu" class="pt_custommenu">
                            <div id="pt_menu_home" class="pt_menu act">
                                <div class="parentMenu">
                                    <a class="fontcustom2" href="http://demo.posthemes.com/pos_sneaker/"><span>Home</span></a>
                                </div>
                            </div>
                            <div id="pt_menu12" class="pt_menu nav-1 pt_menu_no_child">
                                <div class="parentMenu">
                                    <a href="/men" class="fontcustom2"><span>For men</span></a>
                                </div>
                            </div>
                            <div id="pt_menu13" class="pt_menu nav-2 pt_menu_no_child">
                                <div class="parentMenu">
                                    <a href="13-for-women.html" class="fontcustom2"><span>For women</span></a>
                                </div>
                            </div>
                            <div id="pt_menu14" class="pt_menu nav-3 pt_menu_no_child">
                                <div class="parentMenu">
                                    <a href="14-for-kids.html" class="fontcustom2"><span>For kids</span></a>
                                </div>
                            </div>
                            <div id="pt_menu15" class="pt_menu nav-4 pt_menu_no_child">
                                <div class="parentMenu">
                                    <a href="15-categories.html" class="fontcustom2"><span>Categories</span></a>
                                </div>
                            </div>
                            <div id="pt_menu16" class="pt_menu nav-5 pt_menu_no_child">
                                <div class="parentMenu">
                                    <a href="16-new-arrivals.html" class="fontcustom2"><span>New arrivals</span></a>
                                </div>
                            </div>
                            <div id="pt_menu17" class="pt_menu nav-6 pt_menu_no_child">
                                <div class="parentMenu">
                                    <a href="17-lookbook.html" class="fontcustom2"><span>Lookbook</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    //<![CDATA[
                    var CUSTOMMENU_POPUP_EFFECT = 0;
                    var CUSTOMMENU_POPUP_TOP_OFFSET = 60;
                    //]]>
                </script>
            </div>
        </div>
    </div>

</header>
