<?php
include "header.php";
?>


    <!--==================== page content ====================-->

    <div class="page-section pb-40">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Checkout Form s-->
                    <form action="#" class="checkout-form">
                        <div class="row row-40">

                            <div class="col-lg-7 mb-20">

                                <!-- Billing Address -->
                                <div id="billing-form" class="mb-40">
                                    <h4 class="checkout-title">Billing Address</h4>

                                    <div class="row">

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>First Name*</label>
                                            <input type="text" placeholder="First Name">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Last Name*</label>
                                            <input type="text" placeholder="Last Name">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Email Address*</label>
                                            <input type="email" placeholder="Email Address">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Phone no*</label>
                                            <input type="text" placeholder="Phone number">
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="Company Name">
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Address*</label>
                                            <input type="text" placeholder="Address line 1">
                                            <input type="text" placeholder="Address line 2">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Country*</label>
                                            <select class="nice-select">
                                                <option>Bangladesh</option>
                                                <option>China</option>
                                                <option>country</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Town/City*</label>
                                            <input type="text" placeholder="Town/City">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>State*</label>
                                            <input type="text" placeholder="State">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Zip Code*</label>
                                            <input type="text" placeholder="Zip Code">
                                        </div>

                                        <div class="col-12 mb-20">
                                            <div class="check-box mb-2">
                                                <input type="checkbox" id="create_account">
                                                <label for="create_account">Create an Acount?</label>
                                            </div>
                                            
                                        </div>

                                    </div>

                                </div>

                                <!-- Shipping Address -->
                                <div id="shipping-form" class="mb-40">
                                    <h4 class="checkout-title">Shipping Address</h4>

                                    <div class="row">

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>First Name*</label>
                                            <input type="text" placeholder="First Name">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Last Name*</label>
                                            <input type="text" placeholder="Last Name">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Email Address*</label>
                                            <input type="email" placeholder="Email Address">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Phone no*</label>
                                            <input type="text" placeholder="Phone number">
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="Company Name">
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Address*</label>
                                            <input type="text" placeholder="Address line 1">
                                            <input type="text" placeholder="Address line 2">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Country*</label>
                                            <select class="nice-select">
                                                <option>Bangladesh</option>
                                                <option>China</option>
                                                <option>country</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Town/City*</label>
                                            <input type="text" placeholder="Town/City">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>State*</label>
                                            <input type="text" placeholder="State">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Zip Code*</label>
                                            <input type="text" placeholder="Zip Code">
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-5">
                                <div class="row">

                                    <!-- Cart Total -->
                                    <div class="col-12 mb-60">

                                        <h4 class="checkout-title">Cart Total</h4>

                                        <div class="checkout-cart-total">

                                            <h4>Product <span>Total</span></h4>

                                            <ul>
                                                <li>Cillum dolore tortor nisl X 01 <span>₹ 25.00</span></li>
                                            </ul>

                                            <p>Sub Total <span>₹ 104.00</span></p>
                                            <p>Shipping Fee <span>₹ 00.00</span></p>
                                            <h4>Grand Total <span>₹ 104.00</span></h4>
                                        </div>
                                    </div>

                                    <!-- Payment Method -->
                                    <div class="col-12">
                                        <button class="place-order">Place order</button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!--====================  End of page content  ====================-->

<?php
include "footer.php";
?>

</html>