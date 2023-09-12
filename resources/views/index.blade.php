@extends('layouts.app')

@section('banner')
<div class="bg_banner">
    <h1 class="banner_header">Welcome to <br>
        MasterRob Business Consult
    </h1>
    <p class="banner_text">We deliver affordable and convenient services.</p>
</div>
{{-- <img src="/images/pg-banner.jpg" class="bg_banner" alt="This is a banner image"> --}}
@endsection

@section('content')
<article class="article article_bg">
    <h2>We give you value for money</h2>
    <hr>
</article>

<div class="container">
    <div class="row mt-3">
        <h2 class="comp_service">what we do</h2>
        <div class="col-sm-12 col-md-4 mb-3">
            <div class="card">
                <img src="/images/it-service.jpg" class="card-img-top" alt="Image for I.T services">
                <div class="card-body">
                    <h5 class="card-title">I.C.T SERVICES</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">LEARN MORE</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 mb-3">
            <div class="card">
                <img src="/images/bus-reg.jpg" class="card-img-top" alt="Image of Business Compliance">
                <div class="card-body">
                    <h5 class="card-title">BUSINESS REGISTRATION</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">LEARN MORE</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 mb-3">
            <div class="card">
                <img src="/images/acc-service.jpg" class="card-img-top" alt="Image of Accounting service">
                <div class="card-body">
                    <h5 class="card-title">BOOK-KEEPING SERVICE</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">LEARN MORE</a>
                </div>
            </div>
        </div>

    </div>
</div>

<section class="article article_secondary">
    <h4>Lorem ih4sum dolor, sit amet consectetur adipisicing elit. Ipsa mollitia ipsam, perspiciatis alias eligendi, sunt temporibus dig</h4>
    <hr>
</section>
@endsection