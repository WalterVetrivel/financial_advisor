@extends('layouts.master')
@section('content')
{{-- Landing --}}
<header id="landing" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mt-5">Hello, I'm Selvakumar, your Financial Advisor</h1>
                <hr class="light my-5">
                <h3 class="mb-5 text-white">I provide free professional advisory services for your family's financial security & financial health</h3>
                <a href="#planning" class="btn btn-primary btn-lg">Learn more</a>
            </div>
        </div>
    </div>
</header>
{{-- End Landing --}}

{{-- Financial Planning --}}
<section id="planning" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-5">Why do you need financial planning?</h2>
                <p class="mb-5 main">
                    About 5 million families in India are said to fall below the poverty line because of a single hospitalisation of the main bread winner or a family member. Have you secured your family's financial health?
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <p>There is great need for financial planning today. Many people lose a lot of money due to poor financial planning. Don't take that risk. Invest today for a better tomorrow.</p>
                <p class="mb-4">India's economic growth rate is 8% and the inflation rate is 6%, giving a total of 14%. This means that if your savings do not fetch a minimum yield of 14%, your purchasing power is diminishing.</p>
                <h3 class="mb-4">Reasons to save/insure</h3>
                <ul class="reason-list">
                    <div class="row">
                        <div class="col-md-6">
                            <li>
                                <i class="fa fa-check mr-2"></i>Children's Education
                            </li>
                            <li>
                                <i class="fa fa-check mr-2"></i>Children's Wedding
                            </li>
                            <li>
                                <i class="fa fa-check mr-2"></i>House Construction
                            </li>
                            <li>
                                <i class="fa fa-check mr-2"></i>Vehicle Purchase/Replacement
                            </li>
                        </div>
                        <div class="col-md-6">
                            <li>
                                <i class="fa fa-check mr-2"></i>Retirement Planning
                            </li>
                            <li>
                                <i class="fa fa-check mr-2"></i>Contingency Health Care
                            </li>
                            <li>
                                <i class="fa fa-check mr-2"></i>Incapacitation/Loss of Bread Winner
                            </li>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="col-md-5">
                <img src="{{ URL::asset('img/finance.jpg') }}" alt="Financial planning" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>
{{-- End Financial Planning --}}

{{-- Filler 1 --}}
<section id="filler-1" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white mb-5">
                    Save a little but start early.<br>
                    Reap a bountiful harvest!<br>
                    Invest today, enjoy tomorrow!
                </h2>
                <h4 class="text-white">
                    For investment advice,
                </h4>
                <a href="#contact" class="btn btn-primary btn-lg">Contact me</a>
            </div>
        </div>
    </div>
</section>
{{-- End Filler 1 --}}

{{-- Services --}}
<section id="services" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-5">What I offer</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="main mb-5">As a professional financial advisor, I provide advice to ensure your financial health and financial security. My services cover mutual fund investments and insurance.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 order-md-2">
                <h3 class="mb-3">Advisory Services</h3>
                <div class="row">
                    <div class="col-md-6">
                        <p><b>I provide financial planning advice for</b></p>
                        <ul class="service-list">
                            <li>
                                <i class="fa fa-money mr-2"></i>Children's education
                            </li>
                            <li>
                                <i class="fa fa-money mr-2"></i>Children's wedding
                            </li>
                            <li>
                                <i class="fa fa-money mr-2"></i>House construction
                            </li>
                            <li>
                                <i class="fa fa-money mr-2"></i>Vehicle purchase / replacement
                            </li>
                            <li>
                                <i class="fa fa-money mr-2"></i>Tax planning
                            </li>
                            <li>
                                <i class="fa fa-money mr-2"></i>Retirement planning
                            </li>
                            <li class="text-primary">And more</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p><b>I provide insurance advice for</b></p>
                        <ul class="service-list">
                            <li>
                                <i class="fa fa-money mr-2"></i>Life insurance
                            </li>
                            <li>
                                <i class="fa fa-money mr-2"></i>Health insurance
                            </li>
                            <li class="text-primary">And more</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{URL::asset('img/advice.jpg')}}" alt="Advice" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>
{{-- End Services --}}

{{-- Filler 2 --}}
<section id="filler-2" class="py-5">
    <div class="container">
        <h2 class="text-secondary">Professional advice based on 40 years experience & expertise in investment planning & management</h2>
    </div>
</section>
{{-- End Filler 2 --}}

{{-- Clients --}}
<section id="clients" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-5">My clients</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4 col-sm-6 p-5 client">
                <i class="fa fa-user-md fa-3x mb-3"></i>
                <p>Doctors</p>
            </div>
            <div class="col-md-4 col-sm-6 p-5 client">
                <i class="fa fa-wrench fa-3x mb-3"></i>
                <p>Engineers</p>
            </div>
            <div class="col-md-4 col-sm-6 p-5 client">
                <i class="fa fa-laptop fa-3x mb-3"></i>
                <p>Software Professionals</p>
            </div>
            <div class="col-md-4 col-sm-6 p-5 client">
                <i class="fa fa-graduation-cap fa-3x mb-3"></i>
                <p>Professors</p>
            </div>
            <div class="col-md-4 col-sm-6 p-5 client">
                <i class="fa fa-briefcase fa-3x mb-3"></i>
                <p>Businessmen</p>
            </div>
            <div class="col-md-4 col-sm-6 d-flex align-items-center justify-content-center p-5 client">
                <p>And more</p>
            </div>
        </div>
    </div>
</section>
{{-- End Clients --}}

{{-- About --}}
<section id="about" class="py-5">
    <div class="container">
        <h2 class="mb-5">Know your advisor</h2>
        <div class="row justify-content-center">
            <div class="col-md-4 description">
                <p>My name is R. Selvakumar. I am a certified  financial advisor based in Salem. I have more than 40 years of experience and an MBA degree.</p>
                <p>My clients include several doctors, engineers, software professionals, professors and businessmen.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ URL::asset('img/photo.jpg') }}" alt="Photo" class="photo img-fluid rounded-circle">
            </div>
        </div>
    </div>
</section>
{{-- End About --}}

@endsection
