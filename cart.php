<?php
include "header.php";
?>


<div class="breadcrumb-area pt-10 pb-10 border-bottom mb-40">
    <div class="container">
        <div class="row">

        </div>
    </div>
</div>

<!--====================  End of breadcrumb area  ====================-->

<!--==================== page content ====================-->

<div class="page-section pb-40">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <!--=======  cart table  =======-->

                    <div class="cart-table table-responsive mb-40">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pro-thumbnail"><a href="single-product.html"><img width="600"
                                                height="600" src="assets/img/products/small1-1.webp" class="img-fluid"
                                                alt="Product"></a></td>
                                    <td class="pro-title"><a href="single-product.html">Cillum dolore tortor nisl
                                            fermentum</a></td>
                                    <td class="pro-price"><span>₹ 29.00</span></td>
                                    <td class="pro-quantity">
                                        <div class="pro-qty"><input type="text" value="1"></div>
                                    </td>
                                    <td class="pro-subtotal"><span>₹ 29.00</span></td>
                                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <!--=======  End of cart table  =======-->


                </form>

                <div class="row">

                    <div class="col-lg-6 col-12">
                        <!--=======  Calculate Shipping  =======-->



                        <!--=======  Discount Coupon  =======-->

                        <div class="discount-coupon">
                            <h4>Discount Coupon Code</h4>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-25">
                                        <input type="text" placeholder="Coupon Code">
                                    </div>
                                    <div class="col-md-6 col-12 mb-25">
                                        <input type="submit" value="Apply Code">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!--=======  End of Discount Coupon  =======-->

                    </div>


                    <div class="col-lg-6 col-12 d-flex">
                        <!--=======  Cart summery  =======-->

                        <div class="cart-summary">
                            <div class="cart-summary-wrap">
                                <h4>Cart Summary</h4>
                                <p>Sub Total <span>₹ 1250.00</span></p>
                                <p>Discount <span>₹ 00.00</span></p>
                                <h2>Grand Total <span>₹ 1250.00</span></h2>
                            </div>
                            <div class="cart-summary-button">
                                <button class="checkout-btn">Checkout</button>

                            </div>
                        </div>

                        <!--=======  End of Cart summery  =======-->

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!--====================  End of page content  ====================-->

<?php
        include "footer.php";
    ?>

</body>


<!-- Mirrored from htmldemo.net/alula/alula/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Feb 2023 07:10:49 GMT -->

</html>