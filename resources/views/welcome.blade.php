@extends('layouts.app')

@section('header')
    <header class="header header-inverse h-fullscreen pb-80" style="background-image: url(assets/img/bg-cup.jpg);" data-overlay="8">
        <div class="container text-center">

            <div class="row h-full">
                <div class="col-12 col-lg-8 offset-lg-2 align-self-center">

                    <h1 class="display-4 hidden-sm-down">BAHDCASTS</h1>
                    <h1 class="hidden-md-up">THE BEST WEB DEVELOPMENT SCREENCASTS ON THE INTERNET</h1>
                    <br>
                    <p class="lead text-white fs-20 hidden-sm-down"><span class="fw-400">Bahdcasts</span> is an awesome web development learning subscription based SaaS application powered with Vuejs and <span class="mark-border">Laravel 5.5</span>.</p>

                    <br><br><br>

                    <a class="btn btn-lg btn-round w-200 btn-primary mr-16" href="#" data-scrollto="section-intro">Demos</a>
                    <a class="btn btn-lg btn-round w-200 btn-outline btn-white hidden-sm-down" href="#" data-scrollto="section-intro">Features</a>

                </div>

                <div class="col-12 align-self-end text-center">
                    <a class="scroll-down-1 scroll-down-inverse" href="#" data-scrollto="section-intro"><span></span></a>
                </div>

            </div>

        </div>
    </header>
    @endsection

@section('content')
    <section class="section" id="section-intro">
        <div class="container">
            <header class="section-header">
                <small>Headers</small>
                <h2>More Headers</h2>
                <hr>
                <p class="lead">TheSaaS includes several header examples which can be use just by copy and paste the code</p>
            </header>


            <div class="row gap-y">

            </div>

        </div>
    </section>


    @stop