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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<br><br><br><br>
<div class="container">
        <form class="checkout-meta donate-page" method="post" action="">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Billing details</h3>
                        <div class="col-lg-12">
                            <label style="margin-left:10px">First Name</label>
                            <input type="text" class="input-text " name="firstname" value="{{ $customer ->firstname}}" disabled>
                            <label style="margin-left:10px">Last Name</label>
                            <input type="text" class="input-text " name="lastname" value="{{ $customer ->lastname}}" disabled>
                            <label style="margin-left:10px">Email</label>
                            <input type="email" class="input-text " name="email" value="{{ $customer ->email}}" disabled>
                            <label style="margin-left:10px">Phone</label>
                            <input type="text" class="input-text " name="phone"  value="{{ $customer ->phone}}" disabled> 
                            <label style="margin-left:10px">Policy Name</label>
                            <input type="text" class="input-text " name="phone"  value="{{ $insurance->policy->name}}" disabled>
                            <label style="margin-left:10px">Insurance Name</label>
                            <input type="text" class="input-text " name="phone"  value="{{ $insurance->policy->name}}" disabled>
                            <label style="margin-left:10px">Due Date</label>
                            <input type="text" class="input-text " name="duedate"  value="{{ date('d/m/Y', strtotime($contract->enddate)) }}" disabled>
                </div>
                </div>
            </div>
            <div class="row mt-lg-5">
                <div class="col-lg-6">
                        <div class="cart_totals cart-Total">
                            <h4>Total</h4>
                            <table class="shop_table_responsive">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Value:</th>
                                        <td>
                                            <span class="woocommerce-Price-amount">
                                            <bdi>
                                                <span class="woocommerce-Price-currencySymbol">$</span>{{ $insurance->value }}
                                            </bdi>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="Shipping">
                                        <th>Rate:</th>
                                        <td>
                                            <span class="woocommerce-Price-amount amount">
                                                {{ $insurance->rate }}
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
                                                <span>$</span>{{ $insurance -> price }}
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