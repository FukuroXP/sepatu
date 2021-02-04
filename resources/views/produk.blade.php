@extends("layouts.main")
@section('content')

    <aside id="notifications">
        <div class="container">
        </div>
    </aside>
    <div class="breadcrumb_container">
        <div class="container-fluid">
            <nav data-depth="2" class="breadcrumb hidden-sm-down">
                <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="../index.html">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="12-84-nike-zoom-kdx-ep.html">
                            <span itemprop="name">Nike Zoom KDX EP</span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>

                </ol>
            </nav>
        </div>
    </div>
    <section id="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div id="content-wrapper" class="col-xs-12">
                    <section id="main" itemscope itemtype="https://schema.org/Product">
                        <meta itemprop="url" content="http://demo.posthemes.com/pos_sneaker/en/home/12-84-nike-zoom-kdx-ep.html#/1-size-s/16-color-yellow">
                        <div class="primary_block">
                            <div class="row">
                                <div class="col-md-5">
                                    <section class="page-content" id="content">
                                        <ul class="product-flags">
                                            <li class="discount"><span>Reduced price</span></li>
                                            <li class="new"><span>New</span></li>
                                        </ul>
                                        <div class="images-container">
                                            <div class="product-cover">
                                                <img class="js-qv-product-cover" src="{{ asset('images/161-medium_default/nike-zoom-kdx-ep.jpg') }}" alt="" title="" style="width:100%;" itemprop="image">
                                                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                                    <i class="material-icons zoom-in">&#xE8FF;</i>
                                                </div>
                                            </div>
                                            <div class="js-qv-mask mask pos_content">
                                                <div class="product-images js-qv-product-images  owl-carousel">
                                                    <div class="thumb-container">
                                                        <img class="thumb js-thumb "
                                                            data-image-medium-src="{{ asset('images/160-medium_default/nike-zoom-kdx-ep.jpg') }}"
                                                            data-image-large-src="{{ asset('images/160-medium_default/nike-zoom-kdx-ep.jpg') }}"
                                                            src="{{ asset('images/160-medium_default/nike-zoom-kdx-ep.jpg') }}"
                                                            alt=""
                                                            title=""
                                                            width="100"
                                                            itemprop="image">
                                                    </div>
                                                    <div class="thumb-container">
                                                        <img class="thumb js-thumb  selected "
                                                            data-image-medium-src="{{ asset('images/161-medium_default/nike-zoom-kdx-ep.jpg') }}"
                                                            data-image-large-src="{{ asset('images/161-medium_default/nike-zoom-kdx-ep.jpg') }}"
                                                            src="{{ asset('images/161-medium_default/nike-zoom-kdx-ep.jpg') }}"
                                                            alt=""
                                                            title=""
                                                            width="100"
                                                            itemprop="image">
                                                    </div>
                                                    <div class="thumb-container">
                                                        <img class="thumb js-thumb "
                                                            data-image-medium-src="{{ asset('images/162-medium_default/nike-zoom-kdx-ep.jpg') }}"
                                                            data-image-large-src="{{ asset('images/162-medium_default/nike-zoom-kdx-ep.jpg') }}"
                                                            src="{{ asset('images/162-medium_default/nike-zoom-kdx-ep.jpg') }}"
                                                            alt=""
                                                            title=""
                                                            width="100"
                                                            itemprop="image">
                                                    </div>
                                                    <div class="thumb-container">
                                                        <img class="thumb js-thumb "
                                                            data-image-medium-src="{{ asset('images/163-medium_default/nike-zoom-kdx-ep.jpg') }}"
                                                            data-image-large-src="{{ asset('images/163-medium_default/nike-zoom-kdx-ep.jpg') }}"
                                                            src="{{ asset('images/163-medium_default/nike-zoom-kdx-ep.jpg') }}"
                                                            alt=""
                                                            title=""
                                                            width="100"
                                                            itemprop="image">
                                                    </div>
                                                    <div class="thumb-container">
                                                        <img class="thumb js-thumb "
                                                            data-image-medium-src="{{ asset('images/164-medium_default/nike-zoom-kdx-ep.jpg') }}"
                                                            data-image-large-src="{{ asset('images/164-medium_default/nike-zoom-kdx-ep.jpg') }}"
                                                            src="{{ asset('images/164-medium_default/nike-zoom-kdx-ep.jpg') }}"
                                                            alt=""
                                                            title=""
                                                            width="100"
                                                            itemprop="image">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                var owl = $("#product .images-container .product-images");
                                                owl.owlCarousel({
                                                    autoPlay : false ,
                                                    smartSpeed: 1000,
                                                    autoplayHoverPause: true,
                                                    nav: true,
                                                    dots : false,
                                                    responsive:{
                                                        0:{
                                                            items:2,
                                                        },
                                                        480:{
                                                            items:3,
                                                        },
                                                        768:{
                                                            items:2,
                                                            nav:false,
                                                        },
                                                        992:{
                                                            items:3,
                                                        },
                                                        1200:{
                                                            items:3,
                                                        }
                                                    }
                                                });
                                                var owl = $(".quickview .images-container .product-images");
                                                owl.owlCarousel({
                                                    autoPlay : false ,
                                                    smartSpeed: 1000,
                                                    autoplayHoverPause: true,
                                                    nav: true,
                                                    dots : false,
                                                    responsive:{
                                                        0:{
                                                            items:2,
                                                        },
                                                        480:{
                                                            items:3,
                                                        },
                                                        768:{
                                                            items:2,
                                                            nav:false,
                                                        },
                                                        992:{
                                                            items:3,
                                                        },
                                                        1200:{
                                                            items:3,
                                                        }
                                                    }
                                                });
                                            });
                                        </script>
                                        <div class="scroll-box-arrows">
                                            <i class="material-icons left">&#xE314;</i>
                                            <i class="material-icons right">&#xE315;</i>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-md-7">
                                    <h1 class="h1 namne_details" itemprop="name">Nike Zoom KDX EP</h1>
                                    <div id="product_comments_block_extra" class="no-print" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                                        <div class="comments_note clearfix">
                                            <div class="star_content clearfix">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-prices">
                                        <div class="product-discount">
                                            <span class="regular-price">€300.00</span>
                                        </div>
                                        <div class="product-price h5 has-discount"
                                            itemprop="offers"
                                            itemscope
                                            itemtype="https://schema.org/Offer">
                                            <link itemprop="availability" href="https://schema.org/InStock"/>
                                            <meta itemprop="priceCurrency" content="EUR">
                                            <div class="current-price">
                                                <span itemprop="price" content="270">€270.00</span>

                                                <span class="discount discount-percentage">Save 10%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-information">
                                        <div id="product-description-short-12" class="product-desc" itemprop="description"><p>Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p></div>
                                        <div class="product-actions">
                                            <form action="http://demo.posthemes.com/pos_sneaker/en/cart" method="post" id="add-to-cart-or-refresh">
                                                <input type="hidden" name="token" value="d92c68d73a8b4ce2baab9a587fa3d8f8">
                                                <input type="hidden" name="id_product" value="12" id="product_page_product_id">
                                                <input type="hidden" name="id_customization" value="0" id="product_customization_id">
                                                <div class="product-variants">
                                                    <div class="clearfix product-variants-item">
                                                        <span class="control-label">Size</span>

                                                        <div class="btn btn-outline-primary">38</div>
                                                        <div class="btn btn-outline-primary">39</div>
                                                        <div class="btn btn-outline-primary">34</div>
                                                    </div>

                                                <div class="product-add-to-cart">
                                                    <div class="add">
                                                        <a class="btn btn-outline-danger mb-2 p-0" href="">
                                                            <img src="{{ asset('logo/shopee.jpg') }}" width="200px">
                                                        </a>
                                                        <a class="btn btn-outline-success mb-2 p-0" href="">
                                                            <img src="{{ asset('logo/tokopedia.jpg') }}" width="200px">
                                                        </a>
                                                    </div>
                                                    <span id="product-availability">
                                                        <i class="material-icons product-available">&#xE5CA;</i>In stock
                                                    </span>
                                                    <p class="product-minimal-quantity"></p>
                                                </div>
                                                <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="Refresh">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tabs">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#description">Description</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="tab-content">
                                        <div class="tab-pane fade in active" id="description">
                                            <div class="product-description"><p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="categoryproducts">
                            <div class="pos_title">
                                <h2>
                                    <span>Rekomendasi :</span>
                                </h2>
                            </div>
                            <div class="block-content">
                                <div class="row pos_content">
                                    <div class="product_categoryslide owl-carousel">

                                        @for($i = 0; $i <= 5; $i++)

                                        <article class="js-product-miniature" data-id-product="6" data-id-product-attribute="31" itemscope itemtype="http://schema.org/Product">
                                            <div class="img_block">
                                                <a href="#" class="thumbnail product-thumbnail">
                                                    <img src = "{{ asset('images/161-home_default/nike-zoom-kdx-ep.jpg') }}"
                                                        alt = "Printed Summer Dress"
                                                        data-full-size-image-url = "{{ asset('images/161-home_default/copy-of-summer-dress.jpg') }}">
                                                    <img class="img-responsive second-image animation1"
                                                         src="{{ asset('images/161-home_default/nike-zoom-kdx-ep.jpg') }}"
                                                         alt="" itemprop="image"  />
                                                </a>
                                                <ul class="product-flag">
                                                    <li class=" new">Nouveau</li>
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
                                                            <span class="nb-comments"><span itemprop="reviewCount">2</span> Commentaire(s)</span>
                                                        </div>
                                                    </div>
                                                    <h4><a href="http://demo.posthemes.com/pos_sneaker/fr/accueil/6-31-printed-summer-dress.html#/1-taille-s/16-couleur-jaune" title="Printed Summer Dress" itemprop="name" class="product_name">Printed Summer Dress</a></h4>
                                                    <div class="manufacturer"><a href="http://demo.posthemes.com/pos_sneaker/fr/1_fashion-manufacturer">Fashion Manufacturer</a></div>
                                                    <div class="product-price-and-shipping">
                                                        <span itemprop="price" class="price ">320,00 $US</span>
                                                        <span class="sr-only">Prix</span>
                                                    </div>
                                                    <div class="product-desc" itemprop="description"><p>Sleeveless knee-length chiffon dress. V-neckline with elastic under the bust lining.</p></div>
                                                    <div class="variant-links">
                                                        <a href="http://demo.posthemes.com/pos_sneaker/fr/accueil/6-40-printed-summer-dress.html#/1-taille-s/8-couleur-blanc"
                                                           class="color"
                                                           title="Blanc"
                                                           style="background-color: #ffffff"           ><span class="sr-only">Blanc</span></a>
                                                        <a href="http://demo.posthemes.com/pos_sneaker/fr/accueil/6-31-printed-summer-dress.html#/1-taille-s/16-couleur-jaune"
                                                           class="color"
                                                           title="Jaune"
                                                           style="background-color: #F1C40F"           ><span class="sr-only">Jaune</span></a>
                                                        <span class="js-count count"></span>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <ul class="add-to-links">
                                                        <li class="cart">
                                                            <div class="product-add-to-cart">
                                                                <form action="http://demo.posthemes.com/pos_sneaker/fr/panier" method="post" class="add-to-cart-or-refresh">
                                                                    <input type="hidden" name="token" value="d92c68d73a8b4ce2baab9a587fa3d8f8">
                                                                    <input type="hidden" name="id_product" value="6" class="product_page_product_id">
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

                                        @endfor

                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="modal fade js-product-images-modal" id="product-modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <figure>
                                            <img class="js-modal-product-cover product-cover-modal" width="600" src="../../161-large_default/nike-zoom-kdx-ep.jpg" alt="" title="" itemprop="image">
                                            <figcaption class="image-caption">

                                                <div id="product-description-short" itemprop="description"><p>Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p></div>

                                            </figcaption>
                                        </figure>
                                        <aside id="thumbnails" class="thumbnails js-thumbnails text-sm-center">

                                            <div class="js-modal-mask mask  nomargin ">
                                                <ul class="product-images js-modal-product-images">
                                                    <li class="thumb-container">
                                                        <img data-image-large-src="http://demo.posthemes.com/pos_sneaker/160-large_default/nike-zoom-kdx-ep.jpg" class="thumb js-modal-thumb" src="../../160-home_default/nike-zoom-kdx-ep.jpg" alt="" title="" width="350" itemprop="image">
                                                    </li>
                                                    <li class="thumb-container">
                                                        <img data-image-large-src="http://demo.posthemes.com/pos_sneaker/161-large_default/nike-zoom-kdx-ep.jpg" class="thumb js-modal-thumb" src="../../161-home_default/nike-zoom-kdx-ep.jpg" alt="" title="" width="350" itemprop="image">
                                                    </li>
                                                    <li class="thumb-container">
                                                        <img data-image-large-src="http://demo.posthemes.com/pos_sneaker/162-large_default/nike-zoom-kdx-ep.jpg" class="thumb js-modal-thumb" src="../../162-home_default/nike-zoom-kdx-ep.jpg" alt="" title="" width="350" itemprop="image">
                                                    </li>
                                                    <li class="thumb-container">
                                                        <img data-image-large-src="http://demo.posthemes.com/pos_sneaker/163-large_default/nike-zoom-kdx-ep.jpg" class="thumb js-modal-thumb" src="../../163-home_default/nike-zoom-kdx-ep.jpg" alt="" title="" width="350" itemprop="image">
                                                    </li>
                                                    <li class="thumb-container">
                                                        <img data-image-large-src="http://demo.posthemes.com/pos_sneaker/164-large_default/nike-zoom-kdx-ep.jpg" class="thumb js-modal-thumb" src="../../164-home_default/nike-zoom-kdx-ep.jpg" alt="" title="" width="350" itemprop="image">
                                                    </li>
                                                </ul>
                                            </div>

                                        </aside>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <footer class="page-footer">
                        </footer>
                        <script>
                            // productcomments
                            $(document).on('click','#product_comments_block_extra ul.comments_advices a', function(e){
                                $('*[class^="tab-pane"]').removeClass('active');
                                $('*[class^="tab-pane"]').removeClass('in');
                                $('div#idTab5').addClass('active');
                                $('div#idTab5').addClass('in');

                                $('ul.nav-tabs a[href^="#"]').removeClass('active');
                                $('a[href="#idTab5"]').addClass('active');
                            });
                            (function(){
                                $(window).on("load",function(){

                                    /* Page Scroll to id fn call */
                                    $("#product_comments_block_extra ul.comments_advices a.reviews ").mPageScroll2id({
                                        highlightSelector:"#product_comments_block_extra ul.comments_advices a.reviews ",
                                        offset:100,
                                    });
                                });
                            })(jQuery);
                        </script>

@endsection
