@extends('app')

@section('title', 'Swell Surf Lodge')

@section('sidebar')
    @include('layouts.nav')
@endsection

@section('content')
    <div class="banner">
        <div class="container">
            <div class="row" style="padding-top: 160px">
                <div class="col-lg-6">
                    <h1 class="banner-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit 
                    </h1>
                    <a href="">
                        <button class="button-primary">BOOK NOW</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-section">
        <div class="container" style="padding-top: 40px; padding-bottom: 40px;">
            <div class="row">
                <div class="col-lg-6 min-padding" style="padding-top: 40px;">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                    <img class="divider" src="{{ asset('img/bar_teal.png') }}">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla laoreet nisi interdum ex egestas eleifend. Proin laoreet, nisl at semper malesuada, tortor neque fermentum nisl, non laoreet augue mi id augue.</p>
                </div>
                <div class="col-lg-6 min-padding">
                    <img class="img-fluid" src="{{ asset('img/img1.png') }}" style="width: 400px; margin:auto; display:block;">
                </div>
            </div>
        </div>

        <div class="container" style="padding-top: 40px; padding-bottom: 40px;">
            <div class="row">
                <div class="col-12 text-lg-justify activity-header">
                    <h3 id="activities" class="text-center">ACTIVITIES</h3>
                    <img class="divider" src="{{ asset('img/bar_blue.png') }}" style="margin: 15px auto; display: block;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla laoreet nisi interdum ex egestas eleifend. Proin laoreet, nisl at semper malesuada, tortor neque fermentum nisl, non laoreet augue mi id augue. Morbi augue augue, ultricies et tempor in, facilisis non nibh. Mauris feugiat risus nec purus porttitor, varius accumsan sem tincidunt.</p>
                </div>
            </div>

            <div class="row" style="margin-top: 40px;">
                <div class="col-lg-4">
                    <img class="activity-img" src="{{ asset('img/activity1.png') }}">
                    <p class="activity-desc">
                        <span class="font-weight-bold">Lorem ipsum dolor sit amet,</span><br> consectetur adipiscing elit. Nulla laoreet nisi interdum ex egestas eleifend. Proin laoreet, nisl at semper malesuada, tortor neque fermentum nisl, non laoreet augue mi id augue
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="activity-img" src="{{ asset('img/activity2.png') }}">
                    <p class="activity-desc">
                        <span class="font-weight-bold">Lorem ipsum dolor sit amet,</span><br> consectetur adipiscing elit. Nulla laoreet nisi interdum ex egestas eleifend. Proin laoreet, nisl at semper malesuada, tortor neque fermentum nisl, non laoreet augue mi id augue
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="activity-img" src="{{ asset('img/activity3.png') }}">
                    <p class="activity-desc">
                        <span class="font-weight-bold">Lorem ipsum dolor sit amet,</span><br> consectetur adipiscing elit. Nulla laoreet nisi interdum ex egestas eleifend. Proin laoreet, nisl at semper malesuada, tortor neque fermentum nisl, non laoreet augue mi id augue
                    </p>
                </div>
            </div>

            <div class="row" style="margin-top: 40px;">
                <div class="col-lg-4">
                    <img class="activity-img" src="{{ asset('img/activity4.png') }}">
                    <p class="activity-desc">
                        <span class="font-weight-bold">Lorem ipsum dolor sit amet,</span><br> consectetur adipiscing elit. Nulla laoreet nisi interdum ex egestas eleifend. Proin laoreet, nisl at semper malesuada, tortor neque fermentum nisl, non laoreet augue mi id augue
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="activity-img" src="{{ asset('img/activity5.png') }}">
                    <p class="activity-desc">
                        <span class="font-weight-bold">Lorem ipsum dolor sit amet,</span><br> consectetur adipiscing elit. Nulla laoreet nisi interdum ex egestas eleifend. Proin laoreet, nisl at semper malesuada, tortor neque fermentum nisl, non laoreet augue mi id augue
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="activity-img" src="{{ asset('img/activity6.png') }}">
                    <p class="activity-desc">
                        <span class="font-weight-bold">Lorem ipsum dolor sit amet,</span><br> consectetur adipiscing elit. Nulla laoreet nisi interdum ex egestas eleifend. Proin laoreet, nisl at semper malesuada, tortor neque fermentum nisl, non laoreet augue mi id augue
                    </p>
                </div>
            </div>
        </div>

        <div class="container" style="padding-top: 40px;">
            <div class="row">
                <div class="col-12 text-lg-justify activity-header">
                    <h3 id="rooms" class="text-center">OUR ROOMS</h3>
                    <img class="divider" src="{{ asset('img/bar_yellow.png') }}" style="margin: 15px auto; display: block;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla laoreet nisi interdum ex egestas eleifend. Proin laoreet, nisl at semper malesuada, tortor neque fermentum nisl, non laoreet augue mi id augue.</p>
                </div>
            </div>

            <div class="row" style="margin-top: 40px;">
                <div class="col-lg-4">
                    <div class="rooms">
                        <img src="{{ asset('img/rooms.jpg') }}">
                        <div class="room-desc">
                            <h4>ROOM 1</h4>
                            <p>Features:</p>
                            <ul>
                                <li>Feature 1</li>
                                <li>Feature 2</li>
                                <li>Feature 3</li>
                                <li>Feature 4</li>
                                <li>Feature 5</li>
                            </ul>
                            <h4 class="text-center">PRICE <span>&#8369;</span>2000/NIGHT</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="rooms">
                        <img src="{{ asset('img/rooms.jpg') }}">
                        <div class="room-desc">
                            <h4>ROOM 2</h4>
                            <p>Features:</p>
                            <ul>
                                <li>Feature 1</li>
                                <li>Feature 2</li>
                                <li>Feature 3</li>
                                <li>Feature 4</li>
                                <li>Feature 5</li>
                            </ul>
                            <h4 class="text-center">PRICE <span>&#8369;</span>2000/NIGHT</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="rooms">
                        <img src="{{ asset('img/rooms.jpg') }}">
                        <div class="room-desc">
                            <h4>ROOM 3</h4>
                            <p>Features:</p>
                            <ul>
                                <li>Feature 1</li>
                                <li>Feature 2</li>
                                <li>Feature 3</li>
                                <li>Feature 4</li>
                                <li>Feature 5</li>
                            </ul>
                            <h4 class="text-center">PRICE <span>&#8369;</span>2000/NIGHT</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-section">
        <div class="container" style="padding-top: 60px; padding-bottom: 100px;">
            <div class="row">
                <div class="col-12 text-lg-justify activity-header">
                    <h3 id="contact" class="text-center">CONTACT US</h3>
                    <img class="divider" src="{{ asset('img/bar_blue.png') }}" style="margin: 15px auto; display: block;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla laoreet nisi interdum ex egestas eleifend. Proin laoreet, nisl at semper malesuada, tortor neque fermentum nisl, non laoreet augue mi id augue.</p>
                </div>
            </div>

            <div class="row" style="margin-top: 40px;">
                <div class="col-lg-6 contact-details">
                    <ul class="contact-list">
                        <li>
                            <i class="contact-icon fas fa-map-marker-alt fa-lg" style="padding-right: 20px;"></i>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla laoreet nisi interdum ex egestas eleifend
                        </li>
                        <li>
                            <i class="contact-icon fas fa-phone fa-lg" style="padding-right: 15px;"></i>
                            09174539678
                        </li>
                        <li>
                            <i class="contact-icon fas fa-mobile-alt fa-lg" style="padding-right: 25px;"></i>
                            02 6523260
                        </li>
                        <li>
                            <i class="contact-icon fas fa-envelope fa-lg" style="padding-right: 18px;"></i>
                            inquiries@swellsurf.com
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d963.233528467829!2d120.0584205!3d15.0517601!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3395d3e23b2c9d9d%3A0x2ee0376cf118fc82!2sSwell%20Surf%20Lodge!5e0!3m2!1sen!2sph!4v1583490711746!5m2!1sen!2sph" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection