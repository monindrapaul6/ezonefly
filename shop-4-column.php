<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/alula/alula/shop-4-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Feb 2023 07:11:31 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alula - Multipurpose eCommerce Bootstrap5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.ico">

    <!--=============================================
    =            CSS  files       =
    =============================================-->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600;700&amp;family=Montserrat:wght@400;600;700&amp;display=swap"
        rel="stylesheet">
    <!-- Vendor CSS -->
    <link href="assets/css/vendors.css" rel="stylesheet">
    <!-- Main CSS -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!--====================  Header area ====================-->
    <?php 
    include "header.php";
    ?>
    <!--==================== page content ====================-->

    <div class="page-section pb-40">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-12 order-1">
                    <!--=======  shop banner  =======-->

                    <div class="shop-banner mb-30 text-center d-none">
                        <img width="825" height="220" src="assets/img/banners/shop-banner.webp" class="img-fluid"
                            alt="">
                    </div>

                    <!--=======  End of shop banner  =======-->

                    <!--=======  shop header  =======-->

                    <div class="shop-header mb-30">
                        <div class="shop-header__left">
                            <div class="grid-icons mr-20">
                                <button data-target="grid three-column" data-tippy="3" data-tippy-inertia="true"
                                    data-tippy-animation="fade" data-tippy-delay="50" data-tippy-arrow="true"
                                    data-tippy-theme="sharpborder" class="three-column"></button>
                                <button data-target="grid four-column" data-tippy="4" data-tippy-inertia="true"
                                    data-tippy-animation="fade" data-tippy-delay="50" data-tippy-arrow="true"
                                    data-tippy-theme="sharpborder"
                                    class="active four-column d-none d-lg-block"></button>
                                <button data-target="list" data-tippy="List" data-tippy-inertia="true"
                                    data-tippy-animation="fade" data-tippy-delay="50" data-tippy-arrow="true"
                                    data-tippy-theme="sharpborder" class="list-view"></button>
                            </div>

                            <div class="shop-header__left__message">
                                Showing 1 to 9 of 15 (2 Pages)
                            </div>
                        </div>

                        <div class="shop-header__right">

                            <div class="single-select-block d-inline-block mr-50 mr-lg-10 mr-md-10 mr-sm-10">
                                <span class="select-title">Show:</span>
                                <select>
                                    <option value="1">10</option>
                                    <option value="2">20</option>
                                    <option value="3">30</option>
                                    <option value="4">40</option>
                                </select>
                            </div>

                            <div class="single-select-block d-inline-block">
                                <span class="select-title">Sort By:</span>
                                <select>
                                    <option value="1">Default</option>
                                    <option value="2">Name (A-Z)</option>
                                    <option value="3">Price (min - max)</option>
                                    <option value="4">Color</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!--=======  End of shop header  =======-->

                    <!--=======  shop page content  =======-->

                    <div class="row shop-product-wrap grid four-column mb-10">
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium10.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"
                                                    href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-slider-product__content">
                                    <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem
                                            ipsum plant</a></p>
                                    <div class="rating">
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <p class="product-price"><span class="discounted-price">$50.00</span> <span
                                            class="main-price discounted">$120.00</span></p>

                                    <span class="cart-icon"><a href="javascript:void(0)"><i
                                                class="icon-shopping-cart"></i></a></span>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium10.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden
                                                lorem ipsum plant</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span
                                                class="main-price discounted">$120.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal-container"
                                                        href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium11.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-5%</span>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"
                                                    href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-slider-product__content">
                                    <p class="product-title"><a href="single-product.html">Cillum dolore ipsum plant</a>
                                    </p>
                                    <div class="rating">
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <p class="product-price"><span class="discounted-price">$40.00</span> <span
                                            class="main-price discounted">$100.00</span></p>

                                    <span class="cart-icon"><a href="javascript:void(0)"><i
                                                class="icon-shopping-cart"></i></a></span>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium11.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-5%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore ipsum
                                                plant</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$40.00</span> <span
                                                class="main-price discounted">$100.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal-container"
                                                        href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium12.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-2%</span>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"
                                                    href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-slider-product__content">
                                    <p class="product-title"><a href="single-product.html">lorem ipsum plant</a></p>
                                    <div class="rating">
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <p class="product-price"><span class="discounted-price">$40.00</span> <span
                                            class="main-price discounted">$120.00</span></p>

                                    <span class="cart-icon"><a href="javascript:void(0)"><i
                                                class="icon-shopping-cart"></i></a></span>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium12.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-2%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">lorem ipsum plant</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$40.00</span> <span
                                                class="main-price discounted">$120.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal-container"
                                                        href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium13.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"
                                                    href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-slider-product__content">
                                    <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem
                                            ipsum tools</a></p>
                                    <div class="rating">
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <p class="product-price"><span class="discounted-price">$50.00</span> <span
                                            class="main-price discounted">$120.00</span></p>

                                    <span class="cart-icon"><a href="javascript:void(0)"><i
                                                class="icon-shopping-cart"></i></a></span>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium13.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden
                                                lorem ipsum tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span
                                                class="main-price discounted">$120.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal-container"
                                                        href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium14.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"
                                                    href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-slider-product__content">
                                    <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem
                                            ipsum plant</a></p>
                                    <div class="rating">
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <p class="product-price"><span class="discounted-price">$50.00</span> <span
                                            class="main-price discounted">$120.00</span></p>

                                    <span class="cart-icon"><a href="javascript:void(0)"><i
                                                class="icon-shopping-cart"></i></a></span>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium14.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden
                                                lorem ipsum plant</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span
                                                class="main-price discounted">$120.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal-container"
                                                        href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium9.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"
                                                    href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-slider-product__content">
                                    <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem
                                            ipsum tools</a></p>
                                    <div class="rating">
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <p class="product-price"><span class="discounted-price">$50.00</span> <span
                                            class="main-price discounted">$120.00</span></p>

                                    <span class="cart-icon"><a href="javascript:void(0)"><i
                                                class="icon-shopping-cart"></i></a></span>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium9.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden
                                                lorem ipsum tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span
                                                class="main-price discounted">$120.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal-container"
                                                        href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium8.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"
                                                    href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-slider-product__content">
                                    <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem
                                            ipsum tools</a></p>
                                    <div class="rating">
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <p class="product-price"><span class="discounted-price">$50.00</span> <span
                                            class="main-price discounted">$120.00</span></p>

                                    <span class="cart-icon"><a href="javascript:void(0)"><i
                                                class="icon-shopping-cart"></i></a></span>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium8.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden
                                                lorem ipsum tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span
                                                class="main-price discounted">$120.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal-container"
                                                        href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium1.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"
                                                    href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-slider-product__content">
                                    <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem
                                            ipsum tools</a></p>
                                    <div class="rating">
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <p class="product-price"><span class="discounted-price">$50.00</span> <span
                                            class="main-price discounted">$120.00</span></p>

                                    <span class="cart-icon"><a href="javascript:void(0)"><i
                                                class="icon-shopping-cart"></i></a></span>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium1.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden
                                                lorem ipsum tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span
                                                class="main-price discounted">$120.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal-container"
                                                        href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium2.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"
                                                    href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-slider-product__content">
                                    <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem
                                            ipsum tools</a></p>
                                    <div class="rating">
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <p class="product-price"><span class="discounted-price">$50.00</span> <span
                                            class="main-price discounted">$120.00</span></p>

                                    <span class="cart-icon"><a href="javascript:void(0)"><i
                                                class="icon-shopping-cart"></i></a></span>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium2.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden
                                                lorem ipsum tools</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span
                                                class="main-price discounted">$120.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal-container"
                                                        href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium10.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"
                                                    href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-slider-product__content">
                                    <p class="product-title"><a href="single-product.html">Cillum dolore garden lorem
                                            ipsum plant</a></p>
                                    <div class="rating">
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <p class="product-price"><span class="discounted-price">$50.00</span> <span
                                            class="main-price discounted">$120.00</span></p>

                                    <span class="cart-icon"><a href="javascript:void(0)"><i
                                                class="icon-shopping-cart"></i></a></span>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium10.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-10%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore garden
                                                lorem ipsum plant</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$50.00</span> <span
                                                class="main-price discounted">$120.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal-container"
                                                        href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium11.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-5%</span>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"
                                                    href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-slider-product__content">
                                    <p class="product-title"><a href="single-product.html">Cillum dolore ipsum plant</a>
                                    </p>
                                    <div class="rating">
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <p class="product-price"><span class="discounted-price">$40.00</span> <span
                                            class="main-price discounted">$100.00</span></p>

                                    <span class="cart-icon"><a href="javascript:void(0)"><i
                                                class="icon-shopping-cart"></i></a></span>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium11.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-5%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">Cillum dolore ipsum
                                                plant</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$40.00</span> <span
                                                class="main-price discounted">$100.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal-container"
                                                        href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-20">
                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product grid-view-product">
                                <div class="single-slider-product__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium12.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-2%</span>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"
                                                    href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-slider-product__content">
                                    <p class="product-title"><a href="single-product.html">lorem ipsum plant</a></p>
                                    <div class="rating">
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <p class="product-price"><span class="discounted-price">$40.00</span> <span
                                            class="main-price discounted">$120.00</span></p>

                                    <span class="cart-icon"><a href="javascript:void(0)"><i
                                                class="icon-shopping-cart"></i></a></span>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  grid view product  =======-->

                            <div class="single-slider-product single-slider-product--list-view list-view-product">
                                <div class="single-slider-product__image single-slider-product--list-view__image">
                                    <a href="single-product.html">
                                        <img width="600" height="600" src="assets/img/products/medium12.webp"
                                            class="img-fluid" alt="">
                                    </a>

                                    <span class="discount-label discount-label--green">-2%</span>
                                </div>

                                <div class="single-slider-product__content  single-slider-product--list-view__content">
                                    <div class="single-slider-product--list-view__content__details">
                                        <p class="product-title"><a href="single-product.html">lorem ipsum plant</a></p>
                                        <div class="rating">
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star active"></i>
                                            <i class="ion-android-star"></i>
                                        </div>

                                        <p class="short-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Perspiciatis autem consequuntur tempora magnam possimus sunt.</p>
                                    </div>

                                    <div class="single-slider-product--list-view__content__actions">
                                        <div class="availability mb-10">
                                            <span class="availability-title">Availabe:</span>
                                            <span class="availability-value">Out of stock</span>
                                        </div>

                                        <p class="product-price"><span class="discounted-price">$40.00</span> <span
                                                class="main-price discounted">$120.00</span></p>

                                        <a href="#" class="theme-button list-cart-button mb-10">Add to Cart</a>

                                        <div class="hover-icons">
                                            <ul>
                                                <li><a data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal-container"
                                                        href="javascript:void(0)"><i class="icon-eye"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="icon-sliders"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--=======  End of grid view product  =======-->

                        </div>
                    </div>

                    <!--=======  End of shop page content  =======-->

                    <!--=======  pagination  =======-->

                    <div class="pagination-section mb-md-30 mb-sm-30">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">></a></li>
                            <li><a href="#">>|</a></li>
                        </ul>

                        <div class="pagination-text">
                            Showing 1 to 9 of 15 (2 Pages)
                        </div>
                    </div>

                    <!--=======  End of pagination  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of page content  ====================-->


    <!--====================  footer area ====================-->

    <div class="footer-area">
        <div class="container">
            <div class="row mb-40">
                <div class="col-lg-12">
                    <div class="footer-content-wrapper border-top pt-40">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <!--=======  single footer widget  =======-->

                                <div class="single-footer-widget">
                                    <div class="footer-logo mb-25">
                                        <img width="141" height="40" src="assets/img/logo-alula2.webp" class="img-fluid"
                                            alt="">
                                    </div>

                                    <div class="footer-text-block mb-10">
                                        <h5 class="footer-text-block__title">Address</h5>
                                        <p class="footer-text-block__content">4710-4890 Breckinridge St, UK Burlington,
                                            VT 05401</p>
                                    </div>

                                    <div class="footer-text-block mb-10">
                                        <h5 class="footer-text-block__title">Need Help?</h5>
                                        <p class="footer-text-block__content">Call: 1-800-345-6789</p>
                                    </div>

                                    <div class="footer-social-icon-block">
                                        <ul>
                                            <li><a class="facebook-icon" href="http://www.facebook.com/"><i
                                                        class="ion-social-facebook"></i></a></li>
                                            <li><a class="twitter-icon" href="http://www.twitter.com/"><i
                                                        class="ion-social-twitter"></i></a></li>
                                            <li><a class="googleplus-icon" href="http://plus.google.com/"><i
                                                        class="ion-social-googleplus"></i></a></li>
                                            <li><a class="instagram-icon" href="http://www.instagram.com/"><i
                                                        class="ion-social-instagram-outline"></i></a></li>
                                            <li><a class="youtube-icon" href="http://www.youtube.com/"><i
                                                        class="ion-social-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!--=======  End of single footer widget  =======-->
                            </div>

                            <div class="col-lg-4 col-md-6 mt-sm-30">
                                <!--=======  single footer widget  =======-->

                                <div class="single-footer-widget">
                                    <h4 class="footer-widget-title"><a href="#">Follow on instagram</a></h4>

                                    <div class="instagram-image-slider-wrapper">
                                        <div class="ht-slick-slider" data-slick-setting='{
                                            "slidesToShow": 4,
                                            "slidesToScroll": 1,
                                            "dots": false,
                                            "autoplay": false,
                                            "autoplaySpeed": 5000,
                                            "speed": 1000,
                                            "arrows": false,
                                            "rows": 2
                                        }' data-slick-responsive='[
                                            {"breakpoint":1501, "settings": {"slidesToShow": 4} },
                                            {"breakpoint":1199, "settings": {"slidesToShow": 4} },
                                            {"breakpoint":991, "settings": {"slidesToShow": 3} },
                                            {"breakpoint":767, "settings": {"slidesToShow": 4, "arrows": false} },
                                            {"breakpoint":575, "settings": {"slidesToShow": 4, "arrows": false} },
                                            {"breakpoint":479, "settings": {"slidesToShow": 2, "arrows": false} }
                                        ]'>
                                            <!--=======  single instagram image  =======-->

                                            <div class="single-instagram-image">
                                                <a href="#"><img width="320" height="320"
                                                        src="assets/img/instagram/a1.webp" class="img-fluid" alt=""></a>
                                            </div>

                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->

                                            <div class="single-instagram-image">
                                                <a href="#"><img width="320" height="320"
                                                        src="assets/img/instagram/a2.webp" class="img-fluid" alt=""></a>
                                            </div>

                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->

                                            <div class="single-instagram-image">
                                                <a href="#"><img width="320" height="320"
                                                        src="assets/img/instagram/a3.webp" class="img-fluid" alt=""></a>
                                            </div>

                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->

                                            <div class="single-instagram-image">
                                                <a href="#"><img width="320" height="320"
                                                        src="assets/img/instagram/a4.webp" class="img-fluid" alt=""></a>
                                            </div>

                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->

                                            <div class="single-instagram-image">
                                                <a href="#"><img width="320" height="320"
                                                        src="assets/img/instagram/a5.webp" class="img-fluid" alt=""></a>
                                            </div>

                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->

                                            <div class="single-instagram-image">
                                                <a href="#"><img width="320" height="320"
                                                        src="assets/img/instagram/a6.webp" class="img-fluid" alt=""></a>
                                            </div>

                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->

                                            <div class="single-instagram-image">
                                                <a href="#"><img width="320" height="320"
                                                        src="assets/img/instagram/a7.webp" class="img-fluid" alt=""></a>
                                            </div>

                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->

                                            <div class="single-instagram-image">
                                                <a href="#"><img width="320" height="320"
                                                        src="assets/img/instagram/a8.webp" class="img-fluid" alt=""></a>
                                            </div>

                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->

                                            <div class="single-instagram-image">
                                                <a href="#"><img width="320" height="320"
                                                        src="assets/img/instagram/a1.webp" class="img-fluid" alt=""></a>
                                            </div>

                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->

                                            <div class="single-instagram-image">
                                                <a href="#"><img width="320" height="320"
                                                        src="assets/img/instagram/a2.webp" class="img-fluid" alt=""></a>
                                            </div>

                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->

                                            <div class="single-instagram-image">
                                                <a href="#"><img width="320" height="320"
                                                        src="assets/img/instagram/a3.webp" class="img-fluid" alt=""></a>
                                            </div>

                                            <!--=======  End of single instagram image  =======-->
                                            <!--=======  single instagram image  =======-->

                                            <div class="single-instagram-image">
                                                <a href="#"><img width="320" height="320"
                                                        src="assets/img/instagram/a4.webp" class="img-fluid" alt=""></a>
                                            </div>

                                            <!--=======  End of single instagram image  =======-->
                                        </div>
                                    </div>
                                </div>

                                <!--=======  End of single footer widget  =======-->
                            </div>

                            <div class="col-lg-4 col-md-6 mt-md-30 mt-sm-30">
                                <!--=======  single footer widget  =======-->

                                <div class="single-footer-widget">
                                    <h5 class="montserrat-footer-widget-title">Information</h5>

                                    <div class="footer-navigation">
                                        <nav>
                                            <ul>
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                                <li><a href="#">Gift Certificates</a></li>
                                                <li><a href="#">Specials</a></li>
                                                <li><a href="#">Delivery Information</a></li>
                                                <li><a href="#">Terms & Conditions</a></li>
                                                <li><a href="#">Brands</a></li>
                                                <li><a href="#">Affiliate</a></li>
                                                <li><a href="#">Site Map</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                                <!--=======  End of single footer widget  =======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text-area">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-center text-md-start mb-sm-15">
                                <div class="copyright-text">
                                    <p>Copyright &copy; 2021 <a href="#">Alula</a>. All Right Reserved.</p>
                                </div>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="payment-logo">
                                    <img width="286" height="23" src="assets/img/icons/payment.webp" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of footer area  ====================-->
    <!-- scroll to top  -->
    <button class="scroll-top"></button>
    <!-- end of scroll to top -->


    <!--=============================================
	=            Quick view modal         =
	=============================================-->

    <div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-xl-12 col-lg-12">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6 col-md-6 mb-xxs-25 mb-xs-25 mb-sm-25">
                                <!--=======  big image slider  =======-->

                                <div class="big-image-slider-wrapper">
                                    <div class="ht-slick-slider big-image-slider" data-slick-setting='{
                                        "slidesToShow": 1,
                                        "slidesToScroll": 1,
                                        "dots": false,
                                        "autoplay": false,
                                        "autoplaySpeed": 5000,
                                        "speed": 1000
                                    }' data-slick-responsive='[
                                        {"breakpoint":1501, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":1199, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":991, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":767, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":479, "settings": {"slidesToShow": 1} }
                                    ]'>

                                        <!--=======  big image slider single item  =======-->

                                        <div class="big-image-slider-single-item">
                                            <img width="700" height="700" src="assets/img/products/big1-1.webp"
                                                class="img-fluid" alt="">
                                        </div>

                                        <!--=======  End of big image slider single item  =======-->

                                        <!--=======  big image slider single item  =======-->

                                        <div class="big-image-slider-single-item">
                                            <img width="700" height="700" src="assets/img/products/big1-2.webp"
                                                class="img-fluid" alt="">
                                        </div>

                                        <!--=======  End of big image slider single item  =======-->

                                        <!--=======  big image slider single item  =======-->

                                        <div class="big-image-slider-single-item">
                                            <img width="700" height="700" src="assets/img/products/big1-3.webp"
                                                class="img-fluid" alt="">
                                        </div>

                                        <!--=======  End of big image slider single item  =======-->

                                        <!--=======  big image slider single item  =======-->

                                        <div class="big-image-slider-single-item">
                                            <img width="700" height="700" src="assets/img/products/big1-4.webp"
                                                class="img-fluid" alt="">
                                        </div>

                                        <!--=======  End of big image slider single item  =======-->

                                        <!--=======  big image slider single item  =======-->

                                        <div class="big-image-slider-single-item">
                                            <img width="700" height="700" src="assets/img/products/big1-5.webp"
                                                class="img-fluid" alt="">
                                        </div>

                                        <!--=======  End of big image slider single item  =======-->

                                        <!--=======  big image slider single item  =======-->

                                        <div class="big-image-slider-single-item">
                                            <img width="700" height="700" src="assets/img/products/big1-6.webp"
                                                class="img-fluid" alt="">
                                        </div>

                                        <!--=======  End of big image slider single item  =======-->

                                    </div>
                                </div>

                                <!--=======  End of big image slider  =======-->

                                <!--=======  small image slider  =======-->

                                <div class="small-image-slider-wrapper small-image-slider-wrapper--quickview">
                                    <div class="ht-slick-slider small-image-slider" data-slick-setting='{
                                        "slidesToShow": 4,
                                        "slidesToScroll": 1,
                                        "dots": false,
                                        "autoplay": false,
                                        "autoplaySpeed": 5000,
                                        "speed": 1000,
                                        "asNavFor": ".big-image-slider",
                                        "focusOnSelect": true,
                                        "arrows": true,
                                        "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-ios-arrow-left" },
                                        "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-ios-arrow-right" }
                                    }' data-slick-responsive='[
                                        {"breakpoint":1501, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":1199, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":991, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":767, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":575, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":479, "settings": {"slidesToShow": 2} }
                                    ]'>

                                        <!--=======  small image slider single item  =======-->

                                        <div class="small-image-slider-single-item">
                                            <img width="600" height="600" src="assets/img/products/small1-1.webp"
                                                class="img-fluid" alt="">
                                        </div>

                                        <!--=======  End of small image slider single item  =======-->

                                        <!--=======  small image slider single item  =======-->

                                        <div class="small-image-slider-single-item">
                                            <img width="600" height="600" src="assets/img/products/small1-2.webp"
                                                class="img-fluid" alt="">
                                        </div>

                                        <!--=======  End of small image slider single item  =======-->

                                        <!--=======  small image slider single item  =======-->

                                        <div class="small-image-slider-single-item">
                                            <img width="600" height="600" src="assets/img/products/small1-3.webp"
                                                class="img-fluid" alt="">
                                        </div>

                                        <!--=======  End of small image slider single item  =======-->

                                        <!--=======  small image slider single item  =======-->

                                        <div class="small-image-slider-single-item">
                                            <img width="600" height="600" src="assets/img/products/small1-4.webp"
                                                class="img-fluid" alt="">
                                        </div>

                                        <!--=======  End of small image slider single item  =======-->

                                        <!--=======  small image slider single item  =======-->

                                        <div class="small-image-slider-single-item">
                                            <img width="600" height="600" src="assets/img/products/small1-5.webp"
                                                class="img-fluid" alt="">
                                        </div>

                                        <!--=======  End of small image slider single item  =======-->

                                        <!--=======  small image slider single item  =======-->

                                        <div class="small-image-slider-single-item">
                                            <img width="600" height="600" src="assets/img/products/small1-6.webp"
                                                class="img-fluid" alt="">
                                        </div>

                                        <!--=======  End of small image slider single item  =======-->

                                    </div>
                                </div>

                                <!--=======  End of small image slider  =======-->
                            </div>
                            <div class="col-xl-7 col-lg-6 col-md-6">
                                <!--=======  product detail content  =======-->

                                <div class="product-detail-content">
                                    <div class="tags mb-5">
                                        <span class="tag-title">Tags:</span>
                                        <ul class="tag-list">
                                            <li><a href="#">Plant</a>,</li>
                                            <li><a href="#">Garden</a></li>
                                        </ul>
                                    </div>

                                    <h3 class="product-details-title mb-15">Lorem ipsum indoor plants</h3>
                                    <div class="rating">
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star active"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <p class="product-price product-price--big mb-10"><span
                                            class="discounted-price">$100.00</span> <span
                                            class="main-price discounted">$120.00</span></p>

                                    <div class="product-info-block mb-30">
                                        <div class="single-info">
                                            <span class="title">Ex Tax:</span>
                                            <span class="value">$95.00</span>
                                        </div>
                                        <div class="single-info">
                                            <span class="title">Brand:</span>
                                            <span class="value"><a href="#">Brac</a></span>
                                        </div>
                                        <div class="single-info">
                                            <span class="title">Product Code:</span>
                                            <span class="value">abcd1234</span>
                                        </div>
                                        <div class="single-info">
                                            <span class="title">Availability:</span>
                                            <span class="value stock-red">In stock</span>
                                        </div>
                                    </div>

                                    <div class="product-short-desc mb-25">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas
                                            consectetur inventore voluptatem dignissimos nemo repellendus est, harum
                                            maiores veritatis quidem.</p>
                                    </div>

                                    <div class="quantity mb-20">
                                        <span class="quantity-title mr-20">Qty</span>
                                        <div class="pro-qty mr-15 mb-lg-20 mb-md-20 mb-sm-20">
                                            <input type="text" value="1">
                                        </div>
                                        <button class="theme-button product-cart-button">+ Add to Cart</button>
                                    </div>

                                    <div class="compare-button mb-15">
                                        <a href="#"><i class="icon-sliders"></i> Compare This Product</a>
                                    </div>

                                    <div class="wishlist-button">
                                        <a href="#"><i class="icon-heart"></i> Add to Wishlist</a>
                                    </div>
                                </div>

                                <!--=======  End of product detail content  =======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--=====  End of Quick view modal  ======-->
    <!--=============================================
    =            JS files        =
    =============================================-->

    <!-- Vendor JS -->
    <script src="assets/js/vendors.js"></script>

    <!-- Active JS -->
    <script src="assets/js/active.js"></script>

    <!--=====  End of JS files ======-->

</body>


<!-- Mirrored from htmldemo.net/alula/alula/shop-4-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Feb 2023 07:11:31 GMT -->

</html>