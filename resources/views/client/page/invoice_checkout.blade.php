@extends('client.app')
@section('title','Home')
@push('css')
<link href="{{asset('client/www.cssscript.com/demo/sticky.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset('client/css/home-page.css')}}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/color.css') }}">
@endpush

@push('js')
    <script src="{{ asset('client/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/preloader.js') }}"></script>
@endpush

@section('content')
<br><br><br><br><br><br><br>
<div class="container">
        <form class="checkout-meta donate-page">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Billing details</h3>
                        <div class="col-lg-12">
                            <input type="text" class="input-text " name="billing_name" placeholder="Complete Name">
                            <input type="email" class="input-text " name="billing_email" placeholder="Email address">
                            <input type="text" class="input-text " name="billing_company"  placeholder="Company name">
                            <select name="billing_country" class="nice-select Advice country_to_state">
                                <option>Country</option>
                                <option>Select Topic 1</option>
                                <option>Select Topic 2</option>
                                <option>Select Topic 3</option>
                                <option>Select Topic 4</option>
                            </select>
                            <div class="row">
                            <div class="col-lg-6">
                                <select name="billing_country" class="nice-select Advice city">
                                    <option>City</option>
                                    <option>Select Topic 1</option>
                                    <option>Select Topic 2</option>
                                    <option>Select Topic 3</option>
                                    <option>Select Topic 4</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <select name="billing_country" class="nice-select Advice state province">
                                    <option>State / Province</option>
                                    <option>Select Topic 1</option>
                                    <option>Select Topic 2</option>
                                    <option>Select Topic 3</option>
                                    <option>Select Topic 4</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="Postal_Code" placeholder="Postal Code">
                            </div>
                            <div class="col-lg-6">
                                <input type="tel" class="input-text " name="billing_phone"  placeholder="Phone">
                            </div>
                            </div>
                            <input type="text" name="Address" placeholder="Address">
                </div>
            </div>
            <div class="row mt-lg-5">
                <div class="col-lg-6">
                        <div class="cart_totals cart-Total">
                            <h4>Cart Total</h4>
                            <table class="shop_table_responsive">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal:</th>
                                        <td>
                                            <span class="woocommerce-Price-amount">
                                            <bdi>
                                                <span class="woocommerce-Price-currencySymbol">$</span>358.00
                                            </bdi>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="Shipping">
                                        <th>Shipping:</th>
                                        <td>
                                            <span class="woocommerce-Price-amount amount">
                                                free
                                            </span>
                                         </td>
                                    </tr>
                                    <tr class="Total">
                                        <th>Total:</th>
                                        <td>
                                            <span class="woocommerce-Price-amount">
                                            <bdi>
                                                <span>$</span>358.00
                                            </bdi>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
                <div class="col-lg-6">
                    <div class="checkout-side">
                        <h3>Payment Method</h3>
                        <ul>
                            <li>
                                <input type="radio" id="Bank_Payment" name="Bank_Payment" value="Bank_Payment">
                                <label for="Bank_Payment">
                                        Bank Payment
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="Check_Payment" name="Bank_Payment" value="Check_Payment">
                                <label for="Check_Payment">
                                        Check Payment
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="PayPal" name="Bank_Payment" value="Check_Payment">
                                <label for="PayPal">
                                        PayPal
                                </label>
                            </li>
                        </ul>
                        <button type="submit" class="button">Place Order</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection