@extends('layout.home')

@section('title', 'Product')

@section('content')

<!-- Single Product -->
<section class="section-wrap pb-40 single-product">
    <div class="container-fluid semi-fluid">
        <div class="row">

            <div class="col-md-6 col-xs-12 product-slider mb-60">

                <div class="flickity flickity-slider-wrap mfp-hover" id="gallery-main">

                    <div class="gallery-cell">
                        <a href="img/shop/item_lg_1.jpg" class="lightbox-img">
                            <img src="/front/img/shop/item_lg_1.jpg" alt="" />
                            <i class="ui-zoom zoom-icon"></i>
                        </a>
                    </div>
                    <div class="gallery-cell">
                        <a href="img/shop/item_lg_2.jpg" class="lightbox-img">
                            <img src="/front/img/shop/item_lg_2.jpg" alt="" />
                            <i class="ui-zoom zoom-icon"></i>
                        </a>
                    </div>
                    <div class="gallery-cell">
                        <a href="img/shop/item_lg_3.jpg" class="lightbox-img">
                            <img src="/front/img/shop/item_lg_3.jpg" alt="" />
                            <i class="ui-zoom zoom-icon"></i>
                        </a>
                    </div>
                    <div class="gallery-cell">
                        <a href="img/shop/item_lg_4.jpg" class="lightbox-img">
                            <img src="/front/img/shop/item_lg_4.jpg" alt="" />
                            <i class="ui-zoom zoom-icon"></i>
                        </a>
                    </div>
                    <div class="gallery-cell">
                        <a href="img/shop/item_lg_5.jpg" class="lightbox-img">
                            <img src="/front/img/shop/item_lg_5.jpg" alt="" />
                            <i class="ui-zoom zoom-icon"></i>
                        </a>
                    </div>
                </div> <!-- end gallery main -->

                <div class="gallery-thumbs">
                    <div class="gallery-cell">
                        <img src="/front/img/shop/item_thumb_1.jpg" alt="" />
                    </div>
                    <div class="gallery-cell">
                        <img src="/front/img/shop/item_thumb_2.jpg" alt="" />
                    </div>
                    <div class="gallery-cell">
                        <img src="/front/img/shop/item_thumb_3.jpg" alt="" />
                    </div>
                    <div class="gallery-cell">
                        <img src="/front/img/shop/item_thumb_4.jpg" alt="" />
                    </div>
                    <div class="gallery-cell">
                        <img src="/front/img/shop/item_thumb_5.jpg" alt="" />
                    </div>
                </div> <!-- end gallery thumbs -->

            </div> <!-- end col img slider -->

            <div class="col-md-6 col-xs-12 product-description-wrap">
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="index.html">Shop</a>
                    </li>
                    <li class="active">
                        Catalog
                    </li>
                </ol>
                <h1 class="product-title">Sport T-Shirt</h1>
                <span class="price">
                    <del>
                        <span>$1550.00</span>
                    </del>
                    <ins>
                        <span class="amount">$1250.00</span>
                    </ins>
                </span>
                <span class="rating">
                    <a href="#">3 Reviews</a>
                </span>
                <p class="short-description">Our Shop is a very slick and clean e-Our Theme is a very slick and clean
                    e-commerce template with endless possibilities. Creating an awesome website with this Theme is easy
                    than you can imagine. Our Theme is a very slick and clean e-commerce template with endless
                    possibilities.</p>

                <div class="color-swatches clearfix">
                    <span>Color:</span>
                    <a href="#" class="swatch-violet"></a>
                    <a href="#" class="swatch-black"></a>
                    <a href="#" class="swatch-cream"></a>
                </div>

                <div class="size-options clearfix">
                    <span>Size:</span>
                    <a href="#" class="size-xs selected">XS</a>
                    <a href="#" class="size-s">S</a>
                    <a href="#" class="size-m">M</a>
                    <a href="#" class="size-l">L</a>
                    <a href="#" class="size-xl">XL</a>
                </div>

                <div class="product-actions">
                    <span>Qty:</span>

                    <div class="quantity buttons_added">
                        <input type="number" step="1" min="0" value="1" title="Qty" class="input-text qty text" />
                        <div class="quantity-adjust">
                            <a href="#" class="plus">
                                <i class="fa fa-angle-up"></i>
                            </a>
                            <a href="#" class="minus">
                                <i class="fa fa-angle-down"></i>
                            </a>
                        </div>
                    </div>

                    <a href="#" class="btn btn-dark btn-lg add-to-cart"><span>Add to Cart</span></a>

                    <a href="#" class="product-add-to-wishlist"><i class="fa fa-heart"></i></a>
                </div>


                <div class="product_meta">
                    <span class="sku">SKU: <a href="#">111763</a></span>
                    <span class="brand_as">Category: <a href="#">Men T-shirt</a></span>
                    <span class="posted_in">Tags: <a href="#">Sport, T-shirt, Blue</a></span>
                </div>

                <!-- Accordion -->
                <div class="panel-group accordion mb-50" id="accordion">
                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                class="minus">Description<span>&nbsp;</span>
                            </a>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Zenna Theme is a very slick and clean e-commerce template with endless possibilities.
                                Creating an awesome website. Amadea Theme is a very slick and clean e-commerce template
                                with endless possibilities. Creating an awesome website. I would now like to introduce
                                you to your second mind, the hidden and mysterious subconscious.
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                class="plus">Information<span>&nbsp;</span>
                            </a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table shop_attributes">
                                    <tbody>
                                        <tr>
                                            <th>Size:</th>
                                            <td>EU 41 (US 8), EU 42 (US 9), EU 43 (US 10), EU 45 (US 12)</td>
                                        </tr>
                                        <tr>
                                            <th>Colors:</th>
                                            <td>Violet, Black, Blue</td>
                                        </tr>
                                        <tr>
                                            <th>Fabric:</th>
                                            <td>Cotton (100%)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                class="plus">Reviews<span>&nbsp;</span>
                            </a>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="reviews">
                                    <ul class="reviews-list">
                                        <li>
                                            <div class="review-body">
                                                <div class="review-content">
                                                    <p class="review-author"><strong>Alexander Samokhin</strong> - May
                                                        6, 2014 at 12:48 pm</p>
                                                    <div class="rating">
                                                        <a href="#"></a>
                                                    </div>
                                                    <p>This template is so awesome. I didn’t expect so many features
                                                        inside. E-commerce pages are very useful, you can launch your
                                                        online store in few seconds. I will rate 5 stars.</p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="review-body">
                                                <div class="review-content">
                                                    <p class="review-author"><strong>Christopher Robins</strong> - May
                                                        6, 2014 at 12:48 pm</p>
                                                    <div class="rating">
                                                        <a href="#"></a>
                                                    </div>
                                                    <p>This template is so awesome. I didn’t expect so many features
                                                        inside. E-commerce pages are very useful, you can launch your
                                                        online store in few seconds. I will rate 5 stars.</p>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div> <!--  end reviews -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="socials-share clearfix">
                    <span>Share:</span>
                    <div class="social-icons nobase">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-google"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div> <!-- end col product description -->
        </div> <!-- end row -->

    </div> <!-- end container -->
</section> <!-- end single product -->


<!-- Related Products -->
<section class="section-wrap pt-0 shop-items-slider">
    <div class="container">
        <div class="row heading-row">
            <div class="col-md-12 text-center">
                <h2 class="heading bottom-line">
                    Related Products
                </h2>
            </div>
        </div>

        <div class="row">

            <div id="owl-related-items" class="owl-carousel owl-theme">
                <div class="product">
                    <div class="product-item hover-trigger">
                        <div class="product-img">
                            <a href="shop-single.html">
                                <img src="/front/img/shop/shop_item_3.jpg" alt="">
                                <img src="/front/img/shop/shop_item_back_3.jpg" alt="" class="back-img">
                            </a>
                            <div class="product-label">
                                <span class="sale">sale</span>
                            </div>
                            <div class="hover-2">
                                <div class="product-actions">
                                    <a href="#" class="product-add-to-wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="product-quickview">Quick View</a>
                        </div>
                        <div class="product-details">
                            <h3 class="product-title">
                                <a href="shop-single.html">Tribal Grey Blazer</a>
                            </h3>
                            <span class="category">
                                <a href="catalogue-grid.html">Women</a>
                            </span>
                        </div>
                        <span class="price">
                            <del>
                                <span>$730.00</span>
                            </del>
                            <ins>
                                <span class="amount">$399.99</span>
                            </ins>
                        </span>
                    </div>
                </div>

                <div class="product">
                    <div class="product-item hover-trigger">
                        <div class="product-img">
                            <a href="shop-single.html">
                                <img src="/front/img/shop/shop_item_11.jpg" alt="">
                                <img src="/front/img/shop/shop_item_back_11.jpg" alt="" class="back-img">
                            </a>
                            <div class="hover-2">
                                <div class="product-actions">
                                    <a href="#" class="product-add-to-wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="product-quickview">Quick View</a>
                        </div>
                        <div class="product-details">
                            <h3 class="product-title">
                                <a href="shop-single.html">Mantle Brown Bag</a>
                            </h3>
                            <span class="category">
                                <a href="catalogue-grid.html">Accessories</a>
                            </span>
                        </div>
                        <span class="price">
                            <ins>
                                <span class="amount">$150.00</span>
                            </ins>
                        </span>
                    </div>
                </div>

                <div class="product">
                    <div class="product-item hover-trigger">
                        <div class="product-img">
                            <a href="shop-single.html">
                                <img src="/front/img/shop/shop_item_6.jpg" alt="">
                                <img src="/front/img/shop/shop_item_back_6.jpg" alt="" class="back-img">
                            </a>
                            <div class="hover-2">
                                <div class="product-actions">
                                    <a href="#" class="product-add-to-wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="product-quickview">Quick View</a>
                        </div>
                        <div class="product-details">
                            <h3 class="product-title">
                                <a href="shop-single.html">Faux Suits</a>
                            </h3>
                            <span class="category">
                                <a href="catalogue-grid.html">Men</a>
                            </span>
                        </div>
                        <span class="price">
                            <ins>
                                <span class="amount">$233.00</span>
                            </ins>
                        </span>
                    </div>
                </div>

                <div class="product">
                    <div class="product-item hover-trigger">
                        <div class="product-img">
                            <a href="shop-single.html">
                                <img src="/front/img/shop/shop_item_4.jpg" alt="">
                                <img src="/front/img/shop/shop_item_back_4.jpg" alt="" class="back-img">
                            </a>
                            <div class="hover-2">
                                <div class="product-actions">
                                    <a href="#" class="product-add-to-wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="product-quickview">Quick View</a>
                        </div>
                        <div class="product-details">
                            <h3 class="product-title">
                                <a href="shop-single.html">Sweater w/ Colar</a>
                            </h3>
                            <span class="category">
                                <a href="catalogue-grid.html">Men</a>
                            </span>
                        </div>
                        <span class="price">
                            <ins>
                                <span class="amount">$299.00</span>
                            </ins>
                        </span>
                    </div>
                </div>

                <div class="product">
                    <div class="product-item hover-trigger">
                        <div class="product-img">
                            <a href="shop-single.html">
                                <img src="/front/img/shop/shop_item_5.jpg" alt="">
                                <img src="/front/img/shop/shop_item_back_5.jpg" alt="" class="back-img">
                            </a>
                            <div class="hover-2">
                                <div class="product-actions">
                                    <a href="#" class="product-add-to-wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="product-quickview">Quick View</a>
                        </div>
                        <div class="product-details">
                            <h3 class="product-title">
                                <a href="shop-single.html">Lola May Crop Blazer</a>
                            </h3>
                            <span class="category">
                                <a href="catalogue-grid.html">Women</a>
                            </span>
                        </div>
                        <span class="price">
                            <ins>
                                <span class="amount">$42.00</span>
                            </ins>
                        </span>
                    </div>
                </div>

                <div class="product">
                    <div class="product-item hover-trigger">
                        <div class="product-img">
                            <a href="shop-single.html">
                                <img src="/front/img/shop/shop_item_6.jpg" alt="">
                                <img src="/front/img/shop/shop_item_back_6.jpg" alt="" class="back-img">
                            </a>
                            <div class="product-label">
                                <span class="sale">sale</span>
                            </div>
                            <div class="hover-2">
                                <div class="product-actions">
                                    <a href="#" class="product-add-to-wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="product-quickview">Quick View</a>
                        </div>
                        <div class="product-details">
                            <h3 class="product-title">
                                <a href="shop-single.html">Faux Suits</a>
                            </h3>
                            <span class="category">
                                <a href="catalogue-grid.html">Men</a>
                            </span>
                        </div>
                        <span class="price">
                            <del>
                                <span>$500.00</span>
                            </del>
                            <ins>
                                <span class="amount">$233.00</span>
                            </ins>
                        </span>
                    </div>
                </div>

            </div> <!-- end slider -->

        </div>
    </div>
</section> <!-- end related products -->

@endsection
