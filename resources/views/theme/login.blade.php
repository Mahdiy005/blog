@extends('theme.master')
@section('page-title', 'login')
@section('site-main')
    @include('theme.partials.sm-hero-banner', ['title' => 'Login'])
    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-6">
                    <form action="{{ route('login') }}" class="form-contact contact_form" method="POST" id="contactForm"
                        novalidate="novalidate">
                        @csrf 
                        <div class="form-group">
                            <x-input-text name="email" type="email" id="email" plc="Your Email" />
                            <x-error-input record="email" />
                        </div>
                        <div class="form-group">
                            <x-input-text name="password" type="password" id="password" plc="Your Email" />
                            <x-error-input record="password" />
                        </div>
                        <div class="mt-3 text-center form-group text-md-right">
                            <a href="{{ route('theme.register') }}" style="text-decoration: underline" class="mx-3">I
                                don't have account</a>
                            <button type="submit" class="button button--active button-contactForm">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
