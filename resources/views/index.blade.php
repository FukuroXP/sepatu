@extends('layouts.main')

@section('content')


    <div class=" pos_bannerslide">
        <div class="slideshow_container">
            <div class="pos-slideshow">
                <div class="flexslider ma-nivoslider">
                    <div class="pos-loading"></div>
                    <div id="pos-slideshow-home" class="slides">
                        <a href="http://www.posthemes.com/" title="Sample 1" ><img style="display:none" src="{{ asset('modules/posslideshows/images/7fdd99e2c9a10135e3e61d816c927854530c31d6_slide_1.1.jpg') }}"  data-thumb="http://demo.posthemes.com/pos_sneaker/modules/posslideshows/images/7fdd99e2c9a10135e3e61d816c927854530c31d6_slide_1.1.jpg"  alt="" title="#htmlcaption1"  /> </a>
                        <a href="http://www.posthemes.com/" title="Sample 2" ><img style="display:none" src="{{ asset('modules/posslideshows/images/2c49347ca100331e8a7fe0f6d38be549f868be9c_slide_1.2.jpg') }}"  data-thumb="http://demo.posthemes.com/pos_sneaker/modules/posslideshows/images/2c49347ca100331e8a7fe0f6d38be549f868be9c_slide_1.2.jpg"  alt="" title="#htmlcaption2"  /> </a>
                        <a href="#" title="" ><img style="display:none" src="{{ asset('modules/posslideshows/images/7419ff6e1e45424c61a3c1642be5d97e2709d1cf_slide_1.3.jpg') }}"  data-thumb="http://demo.posthemes.com/pos_sneaker/modules/posslideshows/images/7419ff6e1e45424c61a3c1642be5d97e2709d1cf_slide_1.3.jpg"  alt="" title="#htmlcaption3"  /> </a>
                    </div>
                    <div id="htmlcaption1" class="pos-slideshow-caption nivo-html-caption nivo-caption">
                        <div class="timethai" style="
								position:absolute;
								top:0;
								left:0;
								z-index:8;
								background-color: rgba(49, 56, 72, 0.298);
								height:5px;
								-webkit-animation: myfirst 5000ms ease-in-out;
								-moz-animation: myfirst 5000ms ease-in-out;
								-ms-animation: myfirst 5000ms ease-in-out;
								animation: myfirst 5000ms ease-in-out;

							">
                        </div>
                        <div class="banner7-des"><div class="container"><div class="info desc1">
                                    <p class="title1 animated blurFadeInDown">Big sale up to 20% off</p>
                                    <p class="title2 animated blurFadeInDown"><span class="text">nike</span> Black</p>
                                    <p class="title3 animated blurFadeInDown">History Month Collection 2018</p>
                                    <p class="readmore animated blurFadeInDown"><a href="#"><span>Shopping now</span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="htmlcaption2" class="pos-slideshow-caption nivo-html-caption nivo-caption">
                        <div class="timethai" style="
								position:absolute;
								top:0;
								left:0;
								z-index:8;
								background-color: rgba(49, 56, 72, 0.298);
								height:5px;
								-webkit-animation: myfirst 5000ms ease-in-out;
								-moz-animation: myfirst 5000ms ease-in-out;
								-ms-animation: myfirst 5000ms ease-in-out;
								animation: myfirst 5000ms ease-in-out;

							">
                        </div>
                        <div class="banner7-des"><div class="container"><div class="info desc2">
                                    <p class="title1 animated blurFadeInDown">trending products 2018</p>
                                    <p class="title2 animated blurFadeInDown"><span class="text">new</span> lookbook</p>
                                    <p class="title3 animated blurFadeInDown">Sneaker Store | Clothing & Sport Equipment</p>
                                    <p class="readmore animated blurFadeInDown"><a href="#"><span>Shopping now</span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="htmlcaption3" class="pos-slideshow-caption nivo-html-caption nivo-caption">
                        <div class="timethai" style="
								position:absolute;
								top:0;
								left:0;
								z-index:8;
								background-color: rgba(49, 56, 72, 0.298);
								height:5px;
								-webkit-animation: myfirst 5000ms ease-in-out;
								-moz-animation: myfirst 5000ms ease-in-out;
								-ms-animation: myfirst 5000ms ease-in-out;
								animation: myfirst 5000ms ease-in-out;

							">
                        </div>
                        <div class="banner7-des"><div class="container"><div class="info desc1">
                                    <p class="title1 animated blurFadeInDown">top jacket of sneaker</p>
                                    <p class="title2 animated blurFadeInDown"><span class="text">new</span> jackets</p>
                                    <p class="title3 animated blurFadeInDown">Aurora Shell Jacket Is Ready For Any Adventure.</p>
                                    <p class="readmore animated blurFadeInDown"><a href="#"><span>Shopping now</span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                //Function to animate slider captions
                function doAnimations( elems ) {
                    //Cache the animationend event in a variable
                    var animEndEv = 'webkitAnimationEnd animationend';

                    elems.each(function () {
                        var $this = $(this),
                            $animationType = $this.data('animation');
                        $this.addClass($animationType).one(animEndEv, function () {
                            $this.removeClass($animationType);
                        });
                    });
                }
                //Variables on page load
                var $myCarousel = $('.ma-nivoslider'),
                    $firstAnimatingElems = $myCarousel.find('.nivo-caption').find("[data-animation ^= 'animated']");
                //Animate captions in first slide on page load
                doAnimations($firstAnimatingElems);

            });
        </script>

        <div class="container-fluid">
            <div class="banner-slide">
                <div class="col">
                    <div class="block-wrapper wrapper1">
                        <div class="text-des">
                            <h3>Free delivery</h3>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="block-wrapper wrapper2">
                        <div class="text-des">
                            <h3>Online Support 24/7</h3>
                            <p>Support online 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="block-wrapper wrapper3">
                        <div class="text-des">
                            <h3>Money Return</h3>
                            <p>Back guarantee under 7 days</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="block-wrapper wrapper4">
                        <div class="text-des">
                            <h3>Member Discount</h3>
                            <p>Onevery order over $130.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="block-wrapper wrapper5">
                        <div class="text-des">
                            <h3>SECURE PAYMENT</h3>
                            <p>All cards accepted</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
            <div class="banner-top">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-12 col">
                        <div class="banner-box"><a href="#"><img src="{{ asset('img/cms/cms_1.1.jpg') }}" alt="banner" class="img-responsive" /></a></div>
                        <div class="banner-box bottom"><a href="#"><img src="{{ asset('img/cms/cms_1.2.jpg') }}" alt="banner" class="img-responsive" /></a></div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 center">
                        <div class="banner-box"><a href="#"><img src="{{ asset('img/cms/cms_1.3.jpg') }}" alt="banner" class="img-responsive" /></a></div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col">
                        <div class="banner-box"><a href="#"><img src="{{ asset('img/cms/cms_1.4.jpg') }}" alt="banner" class="img-responsive" /></a></div>
                        <div class="banner-box bottom"><a href="#"><img src="{{ asset('img/cms/cms_1.5.jpg') }}" alt="banner" class="img-responsive" /></a></div>
                    </div>
                </div>
            </div>

            <div class="banner-top-bottom">
                <p class="desc">Today Offer: $20 OFF orders $300 or more with code <span class="text">“Sneaker-002"</span>+ Free shipping on orders over $60! <span class="text2">Offer Details</span></p>
            </div>
            <div class="product-tabs-container-slider product_block_container">
                <div class="tabs_slider">
                    <ul class="tabs_slider_inner">
                        <li class="new_product first_item item  active " rel="tab_new_product"  >
                            <span>New Arrival</span>
                        </li>
                        <li class="besseller_product  item " rel="tab_besseller_product"  >
                            <span>Bestseller</span>
                        </li>
                        <li class="feature_product last_item item " rel="tab_feature_product"  >
                            <span>Featured Products</span>
                        </li>
                    </ul>
                    <p class="desc-title">Our store is more than just another average online retailer. We sell not only top quality products, but give our customers a positive online shopping experience.</p>
                </div>
                <div class="row pos_content">
                    <div id="tab_new_product" class="tab_content">
                        <div class="productTabContent0 owl-carousel">
                            <div class="item-product">
                                <article class="js-product-miniature" data-id-product="12" data-id-product-attribute="84" itemscope itemtype="http://schema.org/Product">
                                    <div class="img_block">
                                        <a href="home/12-84-nike-zoom-kdx-ep.html#/1-size-s/16-color-yellow" class="thumbnail product-thumbnail">
                                            <img src = "{{ asset('images/161-home_default/nike-zoom-kdx-ep.jpg') }}" alt = "Nike Zoom KDX EP" data-full-size-image-url = "../images/161-large_default/nike-zoom-kdx-ep.jpg" >
                                            <img class="img-responsive second-image animation1" src="{{ asset('images/160-home_default/nike-zoom-kdx-ep.jpg') }}" alt="" itemprop="image"  />
                                        </a>
                                        <ul class="product-flag">
                                            <li class="discount-percentage">-10% off</li>
                                            <li class=" discount">Reduced price</li>
                                            <li class=" new">New</li>
                                        </ul>

                                    </div>
                                    <div class="product_desc">
                                        <div class="desc_info">
                                            <div class="hook-reviews">
                                                <div class="comments_note" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                                                    <div class="star_content clearfix">
                                                        <meta itemprop="worstRating" content = "0" />
                                                        <meta itemprop="ratingValue" content = "5" />
                                                        <meta itemprop="bestRating" content = "5" />
                                                    </div>
                                                    <span class="nb-comments"><span itemprop="reviewCount">1</span> Review(s)</span>
                                                </div>

                                            </div>

                                            <h4><a href="home/12-84-nike-zoom-kdx-ep.html#/1-size-s/16-color-yellow" title="Nike Zoom KDX EP" itemprop="name" class="product_name">Nike Zoom KDX EP</a></h4>
                                            <div class="manufacturer"><a href="1_fashion-manufacturer.html">Fashion Manufacturer</a></div>
                                            <div class="product-price-and-shipping">
                                                <span itemprop="price" class="price  price_sale ">$270.00</span>
                                                <span class="sr-only">Regular price</span>
                                                <span class="regular-price">$300.00</span>
                                                <span class="discount-percentage">-10%</span>
                                                <span class="sr-only">Price</span>
                                            </div>

                                            <div class="product-desc" itemprop="description">
                                                <p>Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                                            </div>
                                            <div class="variant-links">
                                                <a href="home/12-75-nike-zoom-kdx-ep.html#/1-size-s/11-color-black" class="color" title="Black" style="background-color: #434A54"> <span class="sr-only">Black</span></a>
                                                <a href="home/12-74-nike-zoom-kdx-ep.html#/1-size-s/13-color-orange" class="color" title="Orange" style="background-color: #F39C11"> <span class="sr-only">Orange</span></a>
                                                <a href="home/12-73-nike-zoom-kdx-ep.html#/1-size-s/14-color-blue" class="color" title="Blue" style="background-color: #5D9CEC"> <span class="sr-only">Blue</span></a>
                                                <a href="home/12-76-nike-zoom-kdx-ep.html#/2-size-m/16-color-yellow" class="color" title="Yellow" style="background-color: #F1C40F"> <span class="sr-only">Yellow</span></a>
                                                <span class="js-count count"></span>
                                            </div>
                                        </div>
                                        <div class="actions">
                                            <ul class="add-to-links">
                                                <li class="cart">
                                                    <div class="product-add-to-cart">
                                                        <form action="http://demo.posthemes.com/pos_sneaker/en/cart" method="post" class="add-to-cart-or-refresh">
                                                            <input type="hidden" name="token" value="d92c68d73a8b4ce2baab9a587fa3d8f8">
                                                            <input type="hidden" name="id_product" value="12" class="product_page_product_id">
                                                            <input type="hidden" name="qty" value="1">
                                                            <button class="btn btn-link" type="submit" >
                                                                <i class="fas fa-shopping-cart"></i> Add to cart
                                                            </button>
                                                        </form>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" data-link-action="quickview" title="Quick view"><h1 class="fas fa-external-link"></h1></a>
                                                </li>
                                                <li>
                                                    <a href="home/12-84-nike-zoom-kdx-ep.html#/1-size-s/16-color-yellow" title="Details"><h1 class="fas fa-clipboard-list"></h1></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="banner-home">
                    <div class="banner-box1"><a href="#"><img src="{{ asset('img/cms/cms_1.6.jpg') }}" alt="banner" class="img-responsive" /></a>
                    </div>
                </div>
                <div class="pos-special-products "
                     data-items="6"
                     data-speed="1000"
                     data-autoplay="0"
                     data-time="3000"
                     data-arrow="1"
                     data-pagination="0"
                     data-move="0"
                     data-pausehover="0"
                     data-lg="5"
                     data-md="4"
                     data-sm="3"
                     data-xs="2"
                     data-xxs="1">
                    <div class="pos_title">
                        <h2>
                            <span>Week Special Products</span>
                        </h2>
                    </div>
                    <div class="row">
                        <!-- <div class="col-lg-3 col-sm-12 col-md-4 col-xs-12">
                            <div class="banner-box">
                                <a href="#"><img class="img-responsive" src="http://demo.posthemes.com/pos_sneaker/modules/posspecialproducts/img/cms.jpg" alt="" title=""/></a>
                            </div>
                        </div>	 -->
                        <div class="special-products">
                            <div class="pos_content">
                                <div class="special-item owl-carousel">
                                    <div class="item-product">
                                        <article class="js-product-miniature" data-id-product="12" data-id-product-attribute="84" itemscope itemtype="http://schema.org/Product">
                                            <div class="img_block">
                                                <a href="home/12-84-nike-zoom-kdx-ep.html#/1-size-s/16-color-yellow" class="thumbnail product-thumbnail">
                                                    <img src = "{{ asset('images/161-home_default/nike-zoom-kdx-ep.jpg') }}" alt = "Nike Zoom KDX EP" data-full-size-image-url = "../images/161-large_default/nike-zoom-kdx-ep.jpg" >
                                                    <img class="img-responsive second-image animation1" src="{{ asset('images/160-home_default/nike-zoom-kdx-ep.jpg') }}" alt="" itemprop="image"  />
                                                </a>
                                                <ul class="product-flag">
                                                    <li class=" new">New</li>
                                                </ul>
                                                <div class="countdown" >
                                                    <div class='time_count_down'>
                                                        <span class="future_date_2_12 time_countdown"  data-date-y ='2028' data-date-m ='02' data-date-d='06' data-date-h = '00' data-date-mi = '00' data-date-s= '00' >  </span>
                                                    </div>
                                                    <span 	id="future_date_2_12" class="id_countdown"></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="product_desc">
                                                <div class="desc_info">
                                                    <div class="hook-reviews">
                                                        <div class="comments_note" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                                                            <div class="star_content clearfix">
                                                                <meta itemprop="worstRating" content = "0" />
                                                                <meta itemprop="ratingValue" content = "5" />
                                                                <meta itemprop="bestRating" content = "5" />
                                                            </div>
                                                            <span class="nb-comments"><span itemprop="reviewCount">1</span> Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <h4><a href="home/12-84-nike-zoom-kdx-ep.html#/1-size-s/16-color-yellow" title="Nike Zoom KDX EP" itemprop="name" class="product_name">Nike Zoom KDX EP</a></h4>
                                                    <div class="manufacturer"><a href="1_fashion-manufacturer.html">Fashion Manufacturer</a></div>
                                                    <div class="product-price-and-shipping">
                                                        <span itemprop="price" class="price  price_sale ">$270.00</span>
                                                        <span class="sr-only">Regular price</span>
                                                        <span class="regular-price">$300.00</span>
                                                        <span class="discount-percentage">-10%</span>
                                                        <span class="sr-only">Price</span>
                                                    </div>
                                                    <div class="product-desc" itemprop="description"><p>Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p></div>
                                                    <div class="variant-links">
                                                        <a href="home/12-75-nike-zoom-kdx-ep.html#/1-size-s/11-color-black"
                                                           class="color"
                                                           title="Black"

                                                           style="background-color: #434A54"><span class="sr-only">Black</span></a>
                                                        <a href="home/12-74-nike-zoom-kdx-ep.html#/1-size-s/13-color-orange"
                                                           class="color"
                                                           title="Orange"

                                                           style="background-color: #F39C11"><span class="sr-only">Orange</span></a>
                                                        <a href="home/12-73-nike-zoom-kdx-ep.html#/1-size-s/14-color-blue"
                                                           class="color"
                                                           title="Blue"

                                                           style="background-color: #5D9CEC"><span class="sr-only">Blue</span></a>
                                                        <a href="home/12-76-nike-zoom-kdx-ep.html#/2-size-m/16-color-yellow"
                                                           class="color"
                                                           title="Yellow"

                                                           style="background-color: #F1C40F"><span class="sr-only">Yellow</span></a>
                                                        <span class="js-count count"></span>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <ul class="add-to-links">
                                                        <li class="cart">
                                                            <div class="product-add-to-cart">
                                                                <form action="http://demo.posthemes.com/pos_sneaker/en/cart" method="post" class="add-to-cart-or-refresh">
                                                                    <input type="hidden" name="token" value="d92c68d73a8b4ce2baab9a587fa3d8f8">
                                                                    <input type="hidden" name="id_product" value="12" class="product_page_product_id">
                                                                    <input type="hidden" name="qty" value="1">
                                                                    <button class="btn btn-link" type="submit" >
                                                                       <i class="fas fa-shopping-cart"></i> Add to cart
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-link-action="quickview" title="Quick view"><h1 class="fas fa-external-link"></h1></a>
                                                        </li>
                                                        <li>
                                                            <a href="home/12-84-nike-zoom-kdx-ep.html#/1-size-s/16-color-yellow" title="Details"><h1 class="fas fa-clipboard-list"></h1></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="poslistcateproduct poslistcateproduct_0 product_container"
                     data-items="6"
                     data-speed="1000"
                     data-autoplay="0"
                     data-time="0"
                     data-arrow="1"
                     data-pagination="0"
                     data-move="0"
                     data-pausehover="0"
                     data-lg="4"
                     data-md="3"
                     data-sm="2"
                     data-xs="2"
                     data-xxs="1">
                    <div class="pos_title">
                        <div class="row">
                            <div class=" col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-3 col">
                                <h2>
                                    <!-- <img src="http://demo.posthemes.com/pos_sneaker/modules/poslistcateproduct/images/menu_thumb.png"/>
                                     -->
                                    <span>For men</span>
                                </h2>
                            </div>
                            <div class=" col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-9 col">
                                <ul class="subcategories-list hidden-md-down">
                                    <li><a href="12-for-men.html" target="_blank">For men</a></li>
                                    <li><a href="13-for-women.html" target="_blank">For women</a></li>
                                    <li><a href="14-for-kids.html" target="_blank">For kids</a></li>
                                </ul>
                                <div class="btn-group hidden-lg-up">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">list</i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="12-for-men.html" target="_blank">For men</a><li>
                                        <li><a href="13-for-women.html" target="_blank">For women</a><li>
                                        <li><a href="14-for-kids.html" target="_blank">For kids</a><li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="listcateproduct-products">
                        <div class="row pos-content">
                            <div class="listcateSlide owl-carousel">
                                <div class="item-product">
                                    <article class="js-product-miniature" data-id-product="12"data-id-product-attribute="84" itemscope itemtype="http://schema.org/Product">
                                        <div class="img_block">
                                            <a href="home/12-84-nike-zoom-kdx-ep.html#/1-size-s/16-color-yellow" class="thumbnail product-thumbnail">
                                                <img src = "{{ asset('images/161-home_default/nike-zoom-kdx-ep.jpg') }}" alt = "Nike Zoom KDX EP"data-full-size-image-url = "../images/161-large_default/nike-zoom-kdx-ep.jpg">
                                                <img class="img-responsive second-image animation1" src="{{ asset('images/160-home_default/nike-zoom-kdx-ep.jpg') }}" alt="" itemprop="image"  />
                                            </a>

                                            <ul class="product-flag">
                                                <li class="discount-percentage">-10% off</li>
                                                <li class=" discount">Reduced price</li>
                                                <li class=" new">New</li>
                                            </ul>
                                        </div>
                                        <div class="product_desc">
                                            <div class="desc_info">
                                                <div class="hook-reviews">
                                                    <div class="comments_note" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                                                        <div class="star_content clearfix">
                                                            <meta itemprop="worstRating" content = "0" />
                                                            <meta itemprop="ratingValue" content = "5" />
                                                            <meta itemprop="bestRating" content = "5" />
                                                        </div>
                                                        <span class="nb-comments"><span itemprop="reviewCount">1</span> Review(s)</span>
                                                    </div>

                                                </div>
                                                <h4><a href="home/12-84-nike-zoom-kdx-ep.html#/1-size-s/16-color-yellow" title="Nike Zoom KDX EP" itemprop="name" class="product_name">Nike Zoom KDX EP</a></h4>
                                                <div class="manufacturer"><a href="1_fashion-manufacturer.html">Fashion Manufacturer</a></div>
                                                <div class="product-price-and-shipping">
                                                    <span itemprop="price" class="price  price_sale ">$270.00</span>
                                                    <span class="sr-only">Regular price</span>
                                                    <span class="regular-price">$300.00</span>
                                                    <span class="discount-percentage">-10%</span>
                                                    <span class="sr-only">Price</span>
                                                </div>
                                                <div class="product-desc" itemprop="description"><p>Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p></div>
                                                <div class="variant-links">
                                                    <a href="home/12-75-nike-zoom-kdx-ep.html#/1-size-s/11-color-black" class="color" title="Black" style="background-color: #434A54" ><span class="sr-only">Black</span></a>
                                                    <a href="home/12-74-nike-zoom-kdx-ep.html#/1-size-s/13-color-orange" class="color" title="Orange" style="background-color: #F39C11" ><span class="sr-only">Orange</span></a>
                                                    <a href="home/12-73-nike-zoom-kdx-ep.html#/1-size-s/14-color-blue"class="color" title="Blue" style="background-color: #5D9CEC" ><span class="sr-only">Blue</span></a>
                                                    <a href="home/12-76-nike-zoom-kdx-ep.html#/2-size-m/16-color-yellow" class="color" title="Yellow" style="background-color: #F1C40F" ><span class="sr-only">Yellow</span></a>
                                                    <span class="js-count count"></span>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <ul class="add-to-links">
                                                    <li class="cart">
                                                        <div class="product-add-to-cart">
                                                            <form action="http://demo.posthemes.com/pos_sneaker/en/cart" method="post" class="add-to-cart-or-refresh">
                                                                <input type="hidden" name="token" value="d92c68d73a8b4ce2baab9a587fa3d8f8">
                                                                <input type="hidden" name="id_product" value="12" class="product_page_product_id">
                                                                <input type="hidden" name="qty" value="1">
                                                                <button class="btn btn-link" type="submit" >
                                                                    <i class="fas fa-shopping-cart"></i> Add to cart
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-link-action="quickview" title="Quick view"><h1 class="fas fa-external-link"></h1></a>
                                                    </li>
                                                    <li>
                                                        <a href="home/12-84-nike-zoom-kdx-ep.html#/1-size-s/16-color-yellow" title="Details"><h1 class="fas fa-clipboard-list"></h1></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="poslistcateproduct poslistcateproduct_1 product_container"
                     data-items="6"
                     data-speed="1000"
                     data-autoplay="0"
                     data-time="0"
                     data-arrow="1"
                     data-pagination="0"
                     data-move="0"
                     data-pausehover="0"
                     data-lg="4"
                     data-md="3"
                     data-sm="2"
                     data-xs="2"
                     data-xxs="1">
                    <div class="pos_title">
                        <div class="row">
                            <div class=" col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-3 col">
                                <h2>
                                    <!-- <img src="http://demo.posthemes.com/pos_sneaker/modules/poslistcateproduct/images/menu_thumb.png"/>
                                     -->
                                    <span>For women</span>

                                </h2>
                            </div>
                            <div class=" col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-9 col">
                                <ul class="subcategories-list hidden-md-down">
                                    <li><a href="15-categories.html" target="_blank">Categories</a></li>
                                    <li><a href="16-new-arrivals.html" target="_blank">New arrivals</a></li>
                                    <li><a href="17-lookbook.html" target="_blank">Lookbook</a></li>
                                </ul>
                                <div class="btn-group hidden-lg-up">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">list</i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="15-categories.html" target="_blank">Categories</a><li>
                                        <li><a href="16-new-arrivals.html" target="_blank">New arrivals</a><li>
                                        <li><a href="17-lookbook.html" target="_blank">Lookbook</a><li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="listcateproduct-products">
                        <div class="row pos-content">
                            <div class="listcateSlide owl-carousel">
                                <div class="item-product">
                                    <article class="js-product-miniature" data-id-product="12" data-id-product-attribute="84" itemscope itemtype="http://schema.org/Product">
                                        <div class="img_block">
                                            <a href="home/12-84-nike-zoom-kdx-ep.html#/1-size-s/16-color-yellow" class="thumbnail product-thumbnail">
                                                <img src = "{{ asset('images/161-home_default/nike-zoom-kdx-ep.jpg') }}" alt = "Nike Zoom KDX EP" data-full-size-image-url = "../161-large_default/nike-zoom-kdx-ep.jpg" >
                                                <img class="img-responsive second-image animation1" src="{{ asset('images/160-home_default/nike-zoom-kdx-ep.jpg') }}" alt="" itemprop="image" />
                                            </a>


                                            <ul class="product-flag">
                                                <li class="discount-percentage">-10% off</li>
                                                <li class=" discount">Reduced price</li>
                                                <li class=" new">New</li>
                                            </ul>
                                        </div>
                                        <div class="product_desc">
                                            <div class="desc_info">
                                                <div class="hook-reviews">
                                                    <div class="comments_note" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                                                        <div class="star_content clearfix">

                                                            <meta itemprop="worstRating" content = "0" />
                                                            <meta itemprop="ratingValue" content = "5" />
                                                            <meta itemprop="bestRating" content = "5" />
                                                        </div>
                                                        <span class="nb-comments"><span itemprop="reviewCount">1</span> Review(s)</span>
                                                    </div>
                                                </div>

                                                <h4><a href="home/12-84-nike-zoom-kdx-ep.html#/1-size-s/16-color-yellow" title="Nike Zoom KDX EP" itemprop="name" class="product_name">Nike Zoom KDX EP</a></h4>
                                                <div class="manufacturer"><a href="1_fashion-manufacturer.html">Fashion Manufacturer</a></div>
                                                <div class="product-price-and-shipping">
                                                    <span itemprop="price" class="price  price_sale ">$270.00</span>
                                                    <span class="sr-only">Regular price</span>
                                                    <span class="regular-price">$300.00</span>
                                                    <span class="discount-percentage">-10%</span>
                                                    <span class="sr-only">Price</span>
                                                </div>
                                                <div class="product-desc" itemprop="description"><p>Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                                                </div>
                                                <div class="variant-links">
                                                    <a href="home/12-75-nike-zoom-kdx-ep.html#/1-size-s/11-color-black" class="color" title="Black" style="background-color: #434A54"><span class="sr-only">Black</span></a>
                                                    <a href="home/12-74-nike-zoom-kdx-ep.html#/1-size-s/13-color-orange" class="color" title="Orange" style="background-color: #F39C11"><span class="sr-only">Orange</span></a>
                                                    <a href="home/12-73-nike-zoom-kdx-ep.html#/1-size-s/14-color-blue" class="color" title="Blue" style="background-color: #5D9CEC"><span class="sr-only">Blue</span></a>
                                                    <a href="home/12-76-nike-zoom-kdx-ep.html#/2-size-m/16-color-yellow" class="color"title="Yellow"style="background-color: #F1C40F"><span class="sr-only">Yellow</span></a>
                                                    <span class="js-count count"></span>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <ul class="add-to-links">
                                                    <li class="cart">
                                                        <div class="product-add-to-cart">
                                                            <form action="http://demo.posthemes.com/pos_sneaker/en/cart" method="post" class="add-to-cart-or-refresh">
                                                                <input type="hidden" name="token" value="d92c68d73a8b4ce2baab9a587fa3d8f8">
                                                                <input type="hidden" name="id_product" value="12" class="product_page_product_id">
                                                                <input type="hidden" name="qty" value="1">
                                                                <button class="btn btn-link" type="submit" >
                                                                    <i class="fas fa-shopping-cart"></i> Add to cart
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-link-action="quickview" title="Quick view"><h1 class="fas fa-external-link"></h1></a>
                                                    </li>
                                                    <li>
                                                        <a href="home/12-84-nike-zoom-kdx-ep.html#/1-size-s/16-color-yellow" title="Details"><h1 class="fas fa-clipboard-list"></h1></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="content-wrapper" class="col-xs-12">
                        <div id="main">
                            <div id="content" class="page-home">
                            </div>
                            <footer class="page-footer">

@endsection
