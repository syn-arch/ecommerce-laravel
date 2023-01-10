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

                        @foreach ($products as $product)
                        <div class="col-md-4 col-xs-6 product product-grid">
                            <div class="product-item clearfix">
                                <div class="product-img hover-trigger">
                                    <a href="/product/{{$product->id}}">
                                        <img src="/uploads/{{$product->gambar}}" alt="">
                                        <img src="/uploads/{{$product->gambar}}" alt="" class="back-img">
                                    </a>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="/product/{{$product->id}}" class="product-quickview">More</a>
                                </div>

                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="/product/{{$product->id}}">{{$product->nama_barang}}</a>
                                    </h3>
                                    <span class="category">
                                        <a
                                            href="/products/{{$product->id_subkategori}}">{{$product->subcategory->nama_subkategori}}</a>
                                    </span>
                                </div>

                                <span class="price">
                                    <ins>
                                        <span class="amount">Rp. {{number_format($product->harga)}}</span>
                                    </ins>
                                </span>
                            </div>
                        </div> <!-- end product -->
                        @endforeach
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
