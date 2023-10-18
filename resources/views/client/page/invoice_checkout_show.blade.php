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
        <form class="checkout-meta donate-page">
                    
 <a href="{{route('home')}}"> <button class="button" type="button">Back</button></a>
                     
@if (empty($contract))
    <strong>You don't have any invoices.</strong>
@else
<br><br>
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
                            <label style="margin-left:10px">Provider</label>
                            <input type="text" class="input-text " name="provider_id"  value="{{ $insurance->provider->name}}" disabled>
                            <label style="margin-left:10px">Insurance Name</label>
                            <input type="text" class="input-text " name="policy_id"  value="{{ $insurance->policy->name}}" disabled>
                            <label style="margin-left:10px">Due Date</label>
                            <input type="text" class="input-text " name="duedate"  value="{{ date('d/m/Y', strtotime($invoice->duedate)) }}" disabled>
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
            </div>
@endif
        </form>
    </div>
@endsection