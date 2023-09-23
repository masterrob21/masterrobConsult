@extends('layouts.app')

@section('banner')
<div class="bg_banner">
    <h1 class="banner_header animate__animated animate__bounceInLeft animate__slower ">Welcome to <br>
        MasterRob Business Consult
    </h1>
    <p class="banner_text animate__animated animate__backInUp animate__delay-2s">We deliver affordable and convenient services.</p>
</div>
{{-- <img src="/images/pg-banner.jpg" class="bg_banner" alt="This is a banner image"> --}}
@endsection

@section('content')
<article class="article article_bg">
    <h2>We give you value for money</h2>
    <hr class="hr_divider">
</article>

<div class="container">
    <div class="row mt-3">
        <h2 class="comp_service">what we do</h2>
        <div class="col-sm-12 col-lg-4 mb-3">
            <div class="card">
                <img src="/images/it-service.jpg" class="card-img-top" alt="Image for I.T services">
                <div class="card-body">
                    <h5 class="card-title">I.C.T SERVICES</h5>
                    <p class="card-text">I.T. services encompass a range of offerings focused on managing and optimizing technology resources within organizations. These services include infrastructure management, software development and support, network and security services, cloud computing, cybersecurity solutions, and more. Their primary goal is to ensure efficient technology utilization, enhance data security, and align technology with business objectives for improved operational effectiveness.</p>
                    <a href="#" class="btn btn-primary link_arrow">LEARN MORE</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-4 mb-3">
            <div class="card">
                <img src="/images/bus-reg.jpg" class="card-img-top" alt="Image of Business Compliance">
                <div class="card-body">
                    <h5 class="card-title">COMPANY FORMATION</h5>
                    <p class="card-text">Company formation involves the process of legally establishing a new business entity, such as a corporation, limited liability company (LLC), partnership, or sole proprietorship. This process typically includes registering the company with the appropriate government authorities, defining its structure, ownership, governance, and other essential details, depending on the legal and regulatory requirements of the jurisdiction in which it operates. The ultimate aim is to create a distinct and recognized legal entity that can engage in business activities and comply with applicable laws and regulations.</p>
                    <a href="#" class="btn btn-primary link_arrow">LEARN MORE</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-4 mb-3">
            <div class="card">
                <img src="/images/acc-service.jpg" class="card-img-top" alt="Image of Accounting service">
                <div class="card-body">
                    <h5 class="card-title">BOOK-KEEPING SERVICE</h5>
                    <p class="card-text">Accounting services encompass a suite of financial management solutions offered by professionals to individuals, businesses, or organizations. These services include bookkeeping, financial reporting, tax preparation, auditing, and financial analysis, aiming to ensure accurate financial records and compliance with relevant laws and regulations. The goal is to provide a clear financial picture, facilitate informed decision-making, and maintain financial transparency for stakeholders.</p>
                    <a href="#" class="btn btn-primary link_arrow">LEARN MORE</a>
                </div>
            </div>
        </div>

    </div>
</div>

<section class="article article_secondary">
    <h4>Lorem ih4sum dolor, sit amet consectetur adipisicing elit. Ipsa mollitia ipsam, perspiciatis alias eligendi, sunt temporibus dig</h4>
    <hr class="hr_divider">
</section>
@endsection