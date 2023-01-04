@extends('layout.home')

@section('title', 'List Products')

@section('content')
<!-- Catalogue -->
<section class="section-wrap pt-80 pb-40 catalogue">
    <div class="container relative">

        <!-- Filter -->
        <div class="shop-filter">
            <div class="view-mode hidden-xs">
                <span>View:</span>
                <a class="grid grid-active" id="grid"></a>
                <a class="list" id="list"></a>
            </div>
            <div class="filter-show hidden-xs">
                <span>Show:</span>
                <a href="#" class="active">12</a>
                <a href="#">24</a>
                <a href="#">all</a>
            </div>
            <form class="ecommerce-ordering">
                <select>
                    <option value="default-sorting">Default Sorting</option>
                    <option value="price-low-to-high">Price: high to low</option>
                    <option value="price-high-to-low">Price: low to high</option>
                    <option value="by-popularity">By Popularity</option>
                    <option value="date">By Newness</option>
                    <option value="rating">By Rating</option>
                </select>
            </form>
        </div>

        <div class="row">
            <div class="col-md-12 catalogue-col right mb-50">
                <div class="shop-catalogue grid-view">

                    <div class="row items-grid">

                        <div class="col-md-4 col-xs-6 product product-grid">
                            <div class="product-item clearfix">
                                <div class="product-img hover-trigger">
                                    <a href="/product/1">
                                        <img src="/front/img/shop/shop_item_1.jpg" alt="">
                                        <img src="/front/img/shop/shop_item_back_1.jpg" alt="" class="back-img">
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
                                    <a href="/product/1" class="product-quickview">Quick View</a>
                                </div>

                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="/product/1">Drawstring Dress</a>
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
                                        <span class="amount">$159.99</span>
                                    </ins>
                                </span>

                                <div class="product-description">
                                    <h3 class="product-title">
                                        <a href="/product/1">Drawstring Dress</a>
                                    </h3>
                                    <span class="price">
                                        <del>
                                            <span>$730.00</span>
                                        </del>
                                        <ins>
                                            <span class="amount">$159.99</span>
                                        </ins>
                                    </span>
                                    <span class="rating">
                                        <a href="#">3 Reviews</a>
                                    </span>
                                    <div class="clear"></div>
                                    <p>Zenna Shop is a very slick and clean e-commerce template with endless
                                        possibilities. Creating an awesome clothes store with this Theme is easy than
                                        you can imagine. Grab this theme now.</p>
                                    <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                                    <div class="product-add-to-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end product -->


                        <div class="col-md-4 col-xs-6 product product-grid">
                            <div class="product-item clearfix">
                                <div class="product-img hover-trigger">
                                    <a href="/product/1">
                                        <img src="/front/img/shop/shop_item_2.jpg" alt="">
                                        <img src="/front/img/shop/shop_item_back_2.jpg" alt="" class="back-img">
                                    </a>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="/product/1" class="product-quickview">Quick View</a>
                                </div>

                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="/product/1">Mesh Brown Sandal</a>
                                    </h3>
                                    <span class="category">
                                        <a href="catalogue-grid.html">Accessories</a>
                                    </span>
                                </div>

                                <span class="price">
                                    <ins>
                                        <span class="amount">$190.00</span>
                                    </ins>
                                </span>

                                <div class="product-description">
                                    <h3 class="product-title">
                                        <a href="/product/1">Mesh Brown Sandal</a>
                                    </h3>
                                    <span class="price">
                                        <ins>
                                            <span class="amount">$190.00</span>
                                        </ins>
                                    </span>
                                    <span class="rating">
                                        <a href="#">3 Reviews</a>
                                    </span>
                                    <div class="clear"></div>
                                    <p>Zenna Shop is a very slick and clean e-commerce template with endless
                                        possibilities. Creating an awesome clothes store with this Theme is easy than
                                        you can imagine. Grab this theme now.</p>
                                    <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                                    <div class="product-add-to-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end product -->


                        <div class="col-md-4 col-xs-6 product product-grid">
                            <div class="product-item clearfix">
                                <div class="product-img hover-trigger">
                                    <a href="/product/1">
                                        <img src="/front/img/shop/shop_item_3.jpg" alt="">
                                        <img src="/front/img/shop/shop_item_back_3.jpg" alt="" class="back-img">
                                    </a>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="/product/1" class="product-quickview">Quick View</a>
                                </div>

                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="/product/1">Tribal Grey Blazer</a>
                                    </h3>
                                    <span class="category">
                                        <a href="catalogue-grid.html">Women</a>
                                    </span>
                                </div>

                                <span class="price">
                                    <ins>
                                        <span class="amount">$330.00</span>
                                    </ins>
                                </span>

                                <div class="product-description">
                                    <h3 class="product-title">
                                        <a href="/product/1">Tribal Grey Blazer</a>
                                    </h3>
                                    <span class="price">
                                        <ins>
                                            <span class="amount">$330.00</span>
                                        </ins>
                                    </span>
                                    <span class="rating">
                                        <a href="#">3 Reviews</a>
                                    </span>
                                    <div class="clear"></div>
                                    <p>Zenna Shop is a very slick and clean e-commerce template with endless
                                        possibilities. Creating an awesome clothes store with this Theme is easy than
                                        you can imagine. Grab this theme now.</p>
                                    <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                                    <div class="product-add-to-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end product -->


                        <div class="col-md-4 col-xs-6 product product-grid">
                            <div class="product-item clearfix">
                                <div class="product-img hover-trigger">
                                    <a href="/product/1">
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
                                    <a href="/product/1" class="product-quickview">Quick View</a>
                                </div>

                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="/product/1">Sweater w/ Colar</a>
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

                                <div class="product-description">
                                    <h3 class="product-title">
                                        <a href="/product/1">Sweater w/ Colar</a>
                                    </h3>
                                    <span class="price">
                                        <ins>
                                            <span class="amount">$299.00</span>
                                        </ins>
                                    </span>
                                    <span class="rating">
                                        <a href="#">3 Reviews</a>
                                    </span>
                                    <div class="clear"></div>
                                    <p>Zenna Shop is a very slick and clean e-commerce template with endless
                                        possibilities. Creating an awesome clothes store with this Theme is easy than
                                        you can imagine. Grab this theme now.</p>
                                    <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                                    <div class="product-add-to-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end product -->


                        <div class="col-md-4 col-xs-6 product product-grid">
                            <div class="product-item clearfix">
                                <div class="product-img hover-trigger">
                                    <a href="/product/1">
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
                                    <a href="/product/1" class="product-quickview">Quick View</a>
                                </div>

                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="/product/1">Lola May Crop Blazer</a>
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

                                <div class="product-description">
                                    <h3 class="product-title">
                                        <a href="/product/1">Lola May Crop Blazer</a>
                                    </h3>
                                    <span class="price">
                                        <ins>
                                            <span class="amount">$42.00</span>
                                        </ins>
                                    </span>
                                    <span class="rating">
                                        <a href="#">3 Reviews</a>
                                    </span>
                                    <div class="clear"></div>
                                    <p>Zenna Shop is a very slick and clean e-commerce template with endless
                                        possibilities. Creating an awesome clothes store with this Theme is easy than
                                        you can imagine. Grab this theme now.</p>
                                    <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                                    <div class="product-add-to-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end product -->


                        <div class="col-md-4 col-xs-6 product product-grid">
                            <div class="product-item clearfix">
                                <div class="product-img hover-trigger">
                                    <a href="/product/1">
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
                                    <a href="/product/1" class="product-quickview">Quick View</a>
                                </div>

                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="/product/1">Faux Suits</a>
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

                                <div class="product-description">
                                    <h3 class="product-title">
                                        <a href="/product/1">Faux Suits</a>
                                    </h3>
                                    <span class="price">
                                        <del>
                                            <span>$500.00</span>
                                        </del>
                                        <ins>
                                            <span class="amount">$233.00</span>
                                        </ins>
                                    </span>
                                    <span class="rating">
                                        <a href="#">3 Reviews</a>
                                    </span>
                                    <div class="clear"></div>
                                    <p>Zenna Shop is a very slick and clean e-commerce template with endless
                                        possibilities. Creating an awesome clothes store with this Theme is easy than
                                        you can imagine. Grab this theme now.</p>
                                    <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                                    <div class="product-add-to-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end product -->


                        <div class="col-md-4 col-xs-6 product product-grid">
                            <div class="product-item clearfix">
                                <div class="product-img hover-trigger">
                                    <a href="/product/1">
                                        <img src="/front/img/shop/shop_item_7.jpg" alt="">
                                        <img src="/front/img/shop/shop_item_back_7.jpg" alt="" class="back-img">
                                    </a>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="/product/1" class="product-quickview">Quick View</a>
                                </div>

                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="/product/1">Crew Watch</a>
                                    </h3>
                                    <span class="category">
                                        <a href="catalogue-grid.html">Accessories</a>
                                    </span>
                                </div>

                                <span class="price">
                                    <ins>
                                        <span class="amount">$280.00</span>
                                    </ins>
                                </span>

                                <div class="product-description">
                                    <h3 class="product-title">
                                        <a href="/product/1">Crew Watch</a>
                                    </h3>
                                    <span class="price">
                                        <ins>
                                            <span class="amount">$280.00</span>
                                        </ins>
                                    </span>
                                    <span class="rating">
                                        <a href="#">3 Reviews</a>
                                    </span>
                                    <div class="clear"></div>
                                    <p>Zenna Shop is a very slick and clean e-commerce template with endless
                                        possibilities. Creating an awesome clothes store with this Theme is easy than
                                        you can imagine. Grab this theme now.</p>
                                    <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                                    <div class="product-add-to-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end product -->


                        <div class="col-md-4 col-xs-6 product product-grid">
                            <div class="product-item clearfix">
                                <div class="product-img hover-trigger">
                                    <a href="/product/1">
                                        <img src="/front/img/shop/shop_item_8.jpg" alt="">
                                        <img src="/front/img/shop/shop_item_back_8.jpg" alt="" class="back-img">
                                    </a>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="/product/1" class="product-quickview">Quick View</a>
                                </div>

                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="/product/1">Jersey Stylish</a>
                                    </h3>
                                    <span class="category">
                                        <a href="catalogue-grid.html">Women</a>
                                    </span>
                                </div>

                                <span class="price">
                                    <ins>
                                        <span class="amount">$298.00</span>
                                    </ins>
                                </span>

                                <div class="product-description">
                                    <h3 class="product-title">
                                        <a href="/product/1">Jersey Stylish</a>
                                    </h3>
                                    <span class="price">
                                        <ins>
                                            <span class="amount">$298.00</span>
                                        </ins>
                                    </span>
                                    <span class="rating">
                                        <a href="#">3 Reviews</a>
                                    </span>
                                    <div class="clear"></div>
                                    <p>Zenna Shop is a very slick and clean e-commerce template with endless
                                        possibilities. Creating an awesome clothes store with this Theme is easy than
                                        you can imagine. Grab this theme now.</p>
                                    <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                                    <div class="product-add-to-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end product -->


                        <div class="col-md-4 col-xs-6 product product-grid">
                            <div class="product-item clearfix">
                                <div class="product-img hover-trigger">
                                    <a href="/product/1">
                                        <img src="/front/img/shop/shop_item_9.jpg" alt="">
                                        <img src="/front/img/shop/shop_item_back_9.jpg" alt="" class="back-img">
                                    </a>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="/product/1" class="product-quickview">Quick View</a>
                                </div>

                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="/product/1">Camo Belt</a>
                                    </h3>
                                    <span class="category">
                                        <a href="catalogue-grid.html">Accessories</a>
                                    </span>
                                </div>

                                <span class="price">
                                    <ins>
                                        <span class="amount">$33.00</span>
                                    </ins>
                                </span>

                                <div class="product-description">
                                    <h3 class="product-title">
                                        <a href="/product/1">Camo Belt</a>
                                    </h3>
                                    <span class="price">
                                        <ins>
                                            <span class="amount">$33.00</span>
                                        </ins>
                                    </span>
                                    <span class="rating">
                                        <a href="#">3 Reviews</a>
                                    </span>
                                    <div class="clear"></div>
                                    <p>Zenna Shop is a very slick and clean e-commerce template with endless
                                        possibilities. Creating an awesome clothes store with this Theme is easy than
                                        you can imagine. Grab this theme now.</p>
                                    <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                                    <div class="product-add-to-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end product -->


                        <div class="col-md-4 col-xs-6 product product-grid">
                            <div class="product-item clearfix">
                                <div class="product-img hover-trigger">
                                    <a href="/product/1">
                                        <img src="/front/img/shop/shop_item_10.jpg" alt="">
                                        <img src="/front/img/shop/shop_item_back_10.jpg" alt="" class="back-img">
                                    </a>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="/product/1" class="product-quickview">Quick View</a>
                                </div>

                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="/product/1">Heathered Scarf</a>
                                    </h3>
                                    <span class="category">
                                        <a href="catalogue-grid.html">Accessories</a>
                                    </span>
                                </div>

                                <span class="price">
                                    <ins>
                                        <span class="amount">$180.00</span>
                                    </ins>
                                </span>

                                <div class="product-description">
                                    <h3 class="product-title">
                                        <a href="/product/1">Heathered Scarf</a>
                                    </h3>
                                    <span class="price">
                                        <ins>
                                            <span class="amount">$180.00</span>
                                        </ins>
                                    </span>
                                    <span class="rating">
                                        <a href="#">3 Reviews</a>
                                    </span>
                                    <div class="clear"></div>
                                    <p>Zenna Shop is a very slick and clean e-commerce template with endless
                                        possibilities. Creating an awesome clothes store with this Theme is easy than
                                        you can imagine. Grab this theme now.</p>
                                    <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                                    <div class="product-add-to-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end product -->


                        <div class="col-md-4 col-xs-6 product product-grid">
                            <div class="product-item clearfix">
                                <div class="product-img hover-trigger">
                                    <a href="/product/1">
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
                                    <a href="/product/1" class="product-quickview">Quick View</a>
                                </div>

                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="/product/1">Mantle Brown Bag</a>
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

                                <div class="product-description">
                                    <h3 class="product-title">
                                        <a href="/product/1">Mantle Brown Bag</a>
                                    </h3>
                                    <span class="price">
                                        <ins>
                                            <span class="amount">$150.00</span>
                                        </ins>
                                    </span>
                                    <span class="rating">
                                        <a href="#">3 Reviews</a>
                                    </span>
                                    <div class="clear"></div>
                                    <p>Zenna Shop is a very slick and clean e-commerce template with endless
                                        possibilities. Creating an awesome clothes store with this Theme is easy than
                                        you can imagine. Grab this theme now.</p>
                                    <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                                    <div class="product-add-to-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end product -->


                        <div class="col-md-4 col-xs-6 product product-grid">
                            <div class="product-item clearfix">
                                <div class="product-img hover-trigger">
                                    <a href="/product/1">
                                        <img src="/front/img/shop/shop_item_12.jpg" alt="">
                                        <img src="/front/img/shop/shop_item_back_12.jpg" alt="" class="back-img">
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
                                    <a href="/product/1" class="product-quickview">Quick View</a>
                                </div>

                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="/product/1">Sport T-shirt</a>
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
                                        <span class="amount">$230.00</span>
                                    </ins>
                                </span>

                                <div class="product-description">
                                    <h3 class="product-title">
                                        <a href="/product/1">Sport T-shirt</a>
                                    </h3>
                                    <span class="price">
                                        <del>
                                            <span>$500.00</span>
                                        </del>
                                        <ins>
                                            <span class="amount">$230.00</span>
                                        </ins>
                                    </span>
                                    <span class="rating">
                                        <a href="#">3 Reviews</a>
                                    </span>
                                    <div class="clear"></div>
                                    <p>Zenna Shop is a very slick and clean e-commerce template with endless
                                        possibilities. Creating an awesome clothes store with this Theme is easy than
                                        you can imagine. Grab this theme now.</p>
                                    <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                                    <div class="product-add-to-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end product -->

                    </div> <!-- end row -->
                </div> <!-- end grid mode -->

                <!-- Pagination -->
                <div class="pagination-wrap clearfix">
                    <p class="result-count">Showing: 12 of 80 results</p>
                    <nav class="pagination right clearfix">
                        <a href="#"><i class="fa fa-angle-left"></i></a>
                        <span class="page-numbers current">1</span>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </nav>
                </div>

            </div> <!-- end col -->

        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end catalog -->
@endsection
