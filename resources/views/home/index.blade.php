@extends('layout.home')

@section('content')
<!-- Hero Slider -->
<section class="hero-wrap text-center relative">
    <div id="owl-hero" class="owl-carousel owl-theme light-arrows slider-animated">
        <div class="hero-slide overlay" style="background-image:url(/front/img/hero/1.jpg)">
            <div class="container">
                <div class="hero-holder">
                    <div class="hero-message">
                        <h1 class="hero-title nocaps">Great Fashion 2017</h1>
                        <h2 class="hero-subtitle lines">New Arrivals Collection</h2>
                        <div class="buttons-holder">
                            <a href="/front/#" class="btn btn-lg btn-transparent"><span>Shop Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slide overlay" style="background-image:url(/front/img/hero/2.jpg)">
            <div class="container">
                <div class="hero-holder">
                    <div class="hero-message">
                        <h1 class="hero-title nocaps">Exclusive Products</h1>
                        <h2 class="hero-subtitle lines">Get awesome items only in Zenna online shop</h2>
                        <div class="buttons-holder">
                            <a href="/front/#" class="btn btn-lg btn-color"><span>Buy it Now</span></a>
                            <a href="/front/#" class="btn btn-lg btn-transparent"><span>Learn
                                    More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slide overlay" style="background-image:url(/front/img/hero/3.jpg)">
            <div class="container">
                <div class="hero-holder">
                    <div class="hero-message">
                        <h1 class="hero-title nocaps">Enjoy Online Shopping</h1>
                        <h2 class="hero-subtitle lines">Zenna is perfectly responsive theme</h2>
                        <div class="buttons-holder">
                            <a href="/front/#" class="btn btn-lg btn-transparent"><span>Shop Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- end hero slider -->

<!-- Promo Banners -->
<section class="section-wrap promo-banners pb-30">
    <div class="container">
        <div class="row">

            <div class="col-xs-4 col-xxs-12 mb-30 promo-banner">
                <a href="/front/#">
                    <img src="/front/img/shop/collection_1.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="promo-inner valign">
                        <h2>for her</h2>
                        <span>Best Selling Deals</span>
                    </div>
                </a>
            </div>

            <div class="col-xs-4 col-xxs-12 mb-30 promo-banner">
                <a href="/front/#">
                    <img src="/front/img/shop/collection_2.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="promo-inner valign">
                        <h2>accessories</h2>
                        <span>Hot Trends</span>
                    </div>
                </a>
            </div>

            <div class="col-xs-4 col-xxs-12 mb-30 promo-banner">
                <a href="/front/#">
                    <img src="/front/img/shop/collection_3.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="promo-inner valign">
                        <h2>for him</h2>
                        <span>New Collection</span>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section> <!-- end promo banners -->


<!-- Trendy Products -->
<section class="section-wrap-sm new-arrivals pb-50">
    <div class="container">

        <div class="row heading-row">
            <div class="col-md-12 text-center">
                <span class="subheading">Hot items of this year</span>
                <h2 class="heading bottom-line">
                    trendy products
                </h2>
            </div>
        </div>

        <div class="row items-grid">

            <div class="col-md-3 col-xs-6">
                <div class="product-item hover-trigger">
                    <div class="product-img">
                        <a href="/front/shop-single.html">
                            <img src="/front/img/shop/shop_item_1.jpg" alt="">
                        </a>
                        <div class="product-label">
                            <span class="sale">sale</span>
                        </div>
                        <div class="hover-overlay">
                            <div class="product-actions">
                                <a href="/front/#" class="product-add-to-wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <div class="product-details valign">
                                <span class="category">
                                    <a href="/front/catalogue-grid.html">Women</a>
                                </span>
                                <h3 class="product-title">
                                    <a href="/front/shop-single.html">Drawstring Dress</a>
                                </h3>
                                <span class="price">
                                    <del>
                                        <span>$730.00</span>
                                    </del>
                                    <ins>
                                        <span class="amount">$399.99</span>
                                    </ins>
                                </span>
                                <div class="btn-quickview">
                                    <a href="/front/#" class="btn btn-md btn-color">
                                        <span>Quickview</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="product-item hover-trigger">
                    <div class="product-img">
                        <a href="/front/shop-single.html">
                            <img src="/front/img/shop/shop_item_2.jpg" alt="">
                        </a>
                        <div class="hover-overlay">
                            <div class="product-actions">
                                <a href="/front/#" class="product-add-to-wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <div class="product-details valign">
                                <span class="category">
                                    <a href="/front/catalogue-grid.html">Accessories</a>
                                </span>
                                <h3 class="product-title">
                                    <a href="/front/shop-single.html">Mesh Sandal</a>
                                </h3>
                                <span class="price">
                                    <ins>
                                        <span class="amount">$190.00</span>
                                    </ins>
                                </span>
                                <div class="btn-quickview">
                                    <a href="/front/#" class="btn btn-md btn-color">
                                        <span>Quickview</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="product-item hover-trigger">
                    <div class="product-img">
                        <a href="/front/shop-single.html">
                            <img src="/front/img/shop/shop_item_3.jpg" alt="">
                        </a>
                        <div class="hover-overlay">
                            <div class="product-actions">
                                <a href="/front/#" class="product-add-to-wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <div class="product-details valign">
                                <span class="category">
                                    <a href="/front/catalogue-grid.html">Women</a>
                                </span>
                                <h3 class="product-title">
                                    <a href="/front/shop-single.html">Tribal Grey Blazer</a>
                                </h3>
                                <span class="price">
                                    <ins>
                                        <span class="amount">$330.00</span>
                                    </ins>
                                </span>
                                <div class="btn-quickview">
                                    <a href="/front/#" class="btn btn-md btn-color">
                                        <span>Quickview</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="product-item hover-trigger">
                    <div class="product-img">
                        <a href="/front/shop-single.html">
                            <img src="/front/img/shop/shop_item_4.jpg" alt="">
                        </a>
                        <div class="hover-overlay">
                            <div class="product-actions">
                                <a href="/front/#" class="product-add-to-wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <div class="product-details valign">
                                <span class="category">
                                    <a href="/front/catalogue-grid.html">Men</a>
                                </span>
                                <h3 class="product-title">
                                    <a href="/front/shop-single.html">Sweater w/ Colar</a>
                                </h3>
                                <span class="price">
                                    <ins>
                                        <span class="amount">$299.00</span>
                                    </ins>
                                </span>
                                <div class="btn-quickview">
                                    <a href="/front/#" class="btn btn-md btn-color">
                                        <span>Quickview</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="product-item hover-trigger">
                    <div class="product-img">
                        <a href="/front/shop-single.html">
                            <img src="/front/img/shop/shop_item_5.jpg" alt="">
                        </a>
                        <div class="hover-overlay">
                            <div class="product-actions">
                                <a href="/front/#" class="product-add-to-wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <div class="product-details valign">
                                <span class="category">
                                    <a href="/front/catalogue-grid.html">Women</a>
                                </span>
                                <h3 class="product-title">
                                    <a href="/front/shop-single.html">Lola May Crop Blazer</a>
                                </h3>
                                <span class="price">
                                    <ins>
                                        <span class="amount">$42.00</span>
                                    </ins>
                                </span>
                                <div class="btn-quickview">
                                    <a href="/front/#" class="btn btn-md btn-color">
                                        <span>Quickview</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="product-item hover-trigger">
                    <div class="product-img">
                        <a href="/front/shop-single.html">
                            <img src="/front/img/shop/shop_item_6.jpg" alt="">
                        </a>
                        <div class="product-label">
                            <span class="sale">sale</span>
                        </div>
                        <div class="hover-overlay">
                            <div class="product-actions">
                                <a href="/front/#" class="product-add-to-wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <div class="product-details valign">
                                <span class="category">
                                    <a href="/front/catalogue-grid.html">Men</a>
                                </span>
                                <h3 class="product-title">
                                    <a href="/front/shop-single.html">Faux Suits</a>
                                </h3>
                                <span class="price">
                                    <del>
                                        <span>$500.00</span>
                                    </del>
                                    <ins>
                                        <span class="amount">$233.00</span>
                                    </ins>
                                </span>
                                <div class="btn-quickview">
                                    <a href="/front/#" class="btn btn-md btn-color">
                                        <span>Quickview</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="product-item hover-trigger">
                    <div class="product-img">
                        <a href="/front/shop-single.html">
                            <img src="/front/img/shop/shop_item_7.jpg" alt="">
                        </a>
                        <div class="hover-overlay">
                            <div class="product-actions">
                                <a href="/front/#" class="product-add-to-wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <div class="product-details valign">
                                <span class="category">
                                    <a href="/front/catalogue-grid.html">Accessories</a>
                                </span>
                                <h3 class="product-title">
                                    <a href="/front/shop-single.html">Crew Watch</a>
                                </h3>
                                <span class="price">
                                    <ins>
                                        <span class="amount">$280.00</span>
                                    </ins>
                                </span>
                                <div class="btn-quickview">
                                    <a href="/front/#" class="btn btn-md btn-color">
                                        <span>Quickview</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="product-item hover-trigger">
                    <div class="product-img">
                        <a href="/front/shop-single.html">
                            <img src="/front/img/shop/shop_item_8.jpg" alt="">
                        </a>
                        <div class="hover-overlay">
                            <div class="product-actions">
                                <a href="/front/#" class="product-add-to-wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <div class="product-details valign">
                                <span class="category">
                                    <a href="/front/catalogue-grid.html">Women</a>
                                </span>
                                <h3 class="product-title">
                                    <a href="/front/shop-single.html">Jersey Stylish</a>
                                </h3>
                                <span class="price">
                                    <ins>
                                        <span class="amount">$289.00</span>
                                    </ins>
                                </span>
                                <div class="btn-quickview">
                                    <a href="/front/#" class="btn btn-md btn-color">
                                        <span>Quickview</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
    </div>
</section> <!-- end trendy products -->

<!-- Testimonials -->
<section class="section-wrap relative testimonials bg-parallax overlay"
    style="background-image:url(/front/img/testimonials/testimonial_bg.jpg);">
    <div class="container relative">

        <div class="row heading-row mb-20">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="heading white bottom-line">Happy Clients</h2>
            </div>
        </div>

        <div id="owl-testimonials" class="owl-carousel owl-theme text-center">

            <div class="item">
                <div class="testimonial">
                    <p class="testimonial-text">I’am amazed, I should say thank you so much for your awesome
                        template. Design is so good and neat, every detail has been taken care these team
                        are realy amazing and talented! I will work only with this agency.</p>
                    <span>Donald Trump / CEO of Trump organization</span>
                </div>
            </div>

            <div class="item">
                <div class="testimonial">
                    <p class="testimonial-text">This is the excellent theme. It has many useful features
                        that can be use for any kind of business. The support is just amazing and design</p>
                    <span>John C. Marshall / Art Director</span>
                </div>
            </div>

            <div class="item">
                <div class="testimonial">
                    <p class="testimonial-text">Needless to say, beautifully designed theme that serves many
                        purpose. Even more sutomers support is the best! Highly recommend this theme to
                        anyone who enjoys a fine product.</p>
                    <span>Matthew Whilson / PR Agent</span>
                </div>
            </div>
        </div>
    </div>

</section> <!-- end testimonials -->


<!-- Product Widgets List -->
<section class="section-wrap products-list">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 products-widget">
                <h3 class="widget-title bottom-line full-grey">Special Offer</h3>
                <ul class="product-list-widget">
                    <li class="clearfix">
                        <a href="/front/shop-single-product.html">
                            <img src="/front/img/shop/shop_item_1.jpg" alt="">
                            <span class="product-title">Skinny Dress</span>
                        </a>
                        <span class="price">
                            <del>
                                <span>$388.00</span>
                            </del>
                            <ins>
                                <span class="amount">$159.99</span>
                            </ins>
                        </span>
                    </li>
                    <li class="clearfix">
                        <a href="/front/shop-single-product.html">
                            <img src="/front/img/shop/shop_item_2.jpg" alt="">
                            <span class="product-title">Mesh Brown Sandal</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">$190.00</span>
                            </ins>
                        </span>
                    </li>
                    <li class="clearfix">
                        <a href="/front/shop-single-product.html">
                            <img src="/front/img/shop/shop_item_3.jpg" alt="">
                            <span class="product-title">Tribal Grey Blazer</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">$330.00</span>
                            </ins>
                        </span>
                    </li>
                </ul>
            </div> <!-- end special offer -->

            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 products-widget">
                <h3 class="widget-title bottom-line full-grey">Bestsellers</h3>
                <ul class="product-list-widget">
                    <li class="clearfix">
                        <a href="/front/shop-single-product.html">
                            <img src="/front/img/shop/shop_item_9.jpg" alt="">
                            <span class="product-title">Camo Belt</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">$33.00</span>
                            </ins>
                        </span>
                    </li>
                    <li class="clearfix">
                        <a href="/front/shop-single-product.html">
                            <img src="/front/img/shop/shop_item_10.jpg" alt="">
                            <span class="product-title">Heathered Scarf</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">$180.00</span>
                            </ins>
                        </span>
                    </li>
                    <li class="clearfix">
                        <a href="/front/shop-single-product.html">
                            <img src="/front/img/shop/shop_item_11.jpg" alt="">
                            <span class="product-title">Mattle Brown Bag</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">$150.00</span>
                            </ins>
                        </span>
                    </li>
                </ul>
            </div> <!-- end bestsellers -->

            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 products-widget">
                <h3 class="widget-title bottom-line full-grey">Accessories</h3>
                <ul class="product-list-widget">
                    <li class="clearfix">
                        <a href="/front/shop-single-product.html">
                            <img src="/front/img/shop/shop_item_5.jpg" alt="">
                            <span class="product-title">Lola May Crop Blazer</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">$42.00</span>
                            </ins>
                        </span>
                    </li>
                    <li class="clearfix">
                        <a href="/front/shop-single-product.html">
                            <img src="/front/img/shop/shop_item_7.jpg" alt="">
                            <span class="product-title">Watch</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">$280.00</span>
                            </ins>
                        </span>
                    </li>
                    <li class="clearfix">
                        <a href="/front/shop-single-product.html">
                            <img src="/front/img/shop/shop_item_8.jpg" alt="">
                            <span class="product-title">Jersey Stylish</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">$289.00</span>
                            </ins>
                        </span>
                    </li>
                </ul>
            </div> <!-- end top rated -->

            <div class="col-md-3 col-sm-6 col-xs-12 products-widget last">
                <h3 class="widget-title bottom-line full-grey">top rated</h3>
                <ul class="product-list-widget">
                    <li class="clearfix">
                        <a href="/front/shop-single-product.html">
                            <img src="/front/img/shop/shop_item_4.jpg" alt="">
                            <span class="product-title">Sweater w/ Colar</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">$299.00</span>
                            </ins>
                        </span>
                    </li>
                    <li class="clearfix">
                        <a href="/front/shop-single-product.html">
                            <img src="/front/img/shop/shop_item_6.jpg" alt="">
                            <span class="product-title">Faux Suits</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">$233.00</span>
                            </ins>
                        </span>
                    </li>
                    <li class="clearfix">
                        <a href="/front/shop-single-product.html">
                            <img src="/front/img/shop/shop_item_12.jpg" alt="">
                            <span class="product-title">Sport T-Shirt</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">$230.00</span>
                            </ins>
                        </span>
                    </li>
                </ul>
            </div> <!-- end sales -->

        </div> <!-- end row -->
    </div>
</section> <!-- end product widgets -->
@endsection
