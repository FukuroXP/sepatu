<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
@include('layouts.head')

<body id="authentication" class="lang-en country-us currency-eur layout-full-width page-authentication tax-display-disabled page-customer-account">
<main>
    @include('layouts.header')


    <aside id="notifications">
        <div class="container">
        </div>
    </aside>
    <div class="breadcrumb_container">
        <div class="container-fluid">
            <nav data-depth="1" class="breadcrumb hidden-sm-down">
                <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="index.html">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>

                </ol>
            </nav>
        </div>
    </div>

    <section id="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div id="content-wrapper" class="col-xs-12">
                    <div id="main">
                        <header class="page-header">
                            <h1>
                                Halaman Login
                            </h1>
                        </header>

                        @yield('content')

                        <footer class="page-footer">

                            <!-- Footer content -->

                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="footer-container">
            @include('layouts.footer')
        </div>
    </footer>

</main>


<script type="text/javascript" src="../themes/theme_sneaker1/assets/cache/bottom-3d5d7a.js" ></script>







<div class="back-top"><a href= "#" ><h1 class="fas fa-arrow-alt-square-up"></h1> </a></div>
</body>


<!-- Mirrored from demo.posthemes.com/pos_sneaker/en/login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jan 2021 06:41:34 GMT -->
</html>
