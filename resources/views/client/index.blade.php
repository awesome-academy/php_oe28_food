@extends('client.layouts.app')

@section('title', 'Home')

@section('content')

<!-- How to work section start here -->
<div class="hwork">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_hwork">
                    <ul>
                        <li class="order">
                            <div class="title"><img src="images\h_img1.png" alt="{{ __('messages.order_your_food') }}"></div>
                        </li>
                        <li class="deliver_L">
                            <div class="title"><img src="images\h_img2.png" alt="{{ __('messages.delivery_location') }}"></div>
                        </li>
                        <li class="deliver_pick">
                            <div class="title"> <img src="images\h_img3.png" alt="{{ __('messages.delivery') }}"> </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- How to work section start here -->

<!-- popular our food start here -->
<section>
    <div class="popular">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main_popular">
                        <div class="p_card">
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- popular our food start here -->

@endsection
