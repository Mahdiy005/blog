@extends('theme.master')
@section('page-title', 'Register')
@section('site-main')
    @include('theme.partials.sm-hero-banner', ['title' => 'Register'])
    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('auth.register') }}" class="form-contact contact_form" method="post"
                        id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <x-input-text name="name" type="name" id="name" value="{{ old('name') }}" plc="Enter your name" />
                                    <x-error-input record="name" />
                                </div>
                                <div class="form-group">
                                    <x-input-text name="email" type="email" id="email" value="{{ old('email') }}" plc="Enter email address" />
                                    <x-error-input record="email" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <x-input-text name="password" type="password" id="password" value="{{ old('password') }}" plc="Enter your password" />
                                    <x-error-input record="password" />
                                </div>
                                <div class="form-group">
                                    <x-input-text name="password_confirmation" type="password" id="password_c" value="{{ old('password_confirmation') }}" plc="Enter your password confirmation" />
                                    <x-error-input record="password" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center text-md-right mt-3">
                            <a href="{{ route('auth.login') }}" style="text-decoration: underline" class="mx-3">Already Have Account</a>
                            <button type="submit" class="button button--active button-contactForm">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
