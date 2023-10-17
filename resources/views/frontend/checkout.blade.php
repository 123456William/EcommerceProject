@include('frontend.header')
    <!--main area-->
    <main id="main" class="main-site">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>login</span></li>
                </ul>
            </div>
            <div class=" main-content-area">
                <div class="wrap-address-billing">
                    <h3 class="box-title">Billing Address</h3>
                    <form action="{{route('order.store')}}" method="POST" name="frm-billing">
                        @csrf

                        <p class="row-in-form">
                            <label for="phone">Phone<span>*</span></label>
                            <input id="phone" type="number" name="phone" value="" placeholder="10 digits format">

                            {{-- <input id="phone" type="hidden" name="userID" value="" placeholder="10 digits format"> --}}

                            <input id="phone" type="hidden" name="productID" value="{{$product->id}}" placeholder="10 digits format">       

                        </p>
                        <p class="row-in-form">
                            <label for="add">Zip:</label>
                            <input id="add" type="number" name="zip" value="" placeholder="postal">
                        </p>
                        <p class="row-in-form">
                            <label for="country">Country<span>*</span></label>
                            <input id="country" type="text" name="country" value="" placeholder="United States">
                        </p>
                        <p class="row-in-form">
                            <label for="city">City</label>
                            <input id="city" type="text" name="city" value="" placeholder="city">
                        </p>


                        
                        <p class="row-in-form fill-wife">
                            <label class="checkbox-field">
                                <input name="create-account" id="create-account" value="forever" type="checkbox">
                              <button type="subimt" class="btn btn-danger">Order</button>
                            </label>
                            
                        </p>
                        
                    </form>
                </div>
                
                <div class="summary summary-checkout">
                    <div class="summary-item payment-method">
                        <h4 class="title-box">Payment Method</h4>
                        <p class="summary-info"><span class="title">Check / Money order</span></p>
                        <p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
                        <div class="choose-payment-methods">
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-bank" value="bank" type="radio">
                                <span>Direct Bank Transder</span>
                                <span class="payment-desc">But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</span>
                            </label>
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-visa" value="visa" type="radio">
                                <span>visa</span>
                                <span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
                            </label>
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
                                <span>Paypal</span>
                                <span class="payment-desc">You can pay with your credit</span>
                                <span class="payment-desc">card if you don't have a paypal account</span>
                            </label>
                        </div>
                        <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">$100.00</span></p>
                        <a href="thankyou.html" class="btn btn-medium">Place order now</a>
                    </div>
                    <div class="summary-item shipping-method">
                        <h4 class="title-box f-title">Shipping method</h4>
                        <p class="summary-info"><span class="title">Flat Rate</span></p>
                        <p class="summary-info"><span class="title">Fixed $50.00</span></p>
                        <h4 class="title-box">Discount Codes</h4>
                        <p class="row-in-form">
                            <label for="coupon-code">Enter Your Coupon code:</label>
                            <input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">
                        </p>
                        <a href="#" class="btn btn-small">Apply</a>
                    </div>
                </div> 

              

            </div><!--end main content area-->
        </div><!--end container-->

    </main>
    <!--main area-->

  @include('frontend.footer')