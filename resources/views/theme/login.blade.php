@extends('theme.master')
@section('page-title', 'login')
@section('site-main')
    @include('theme.partials.sm-hero-banner', ['title'=>'Login'])
    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-6">
                    <form action="#/" class="form-contact contact_form" action="contact_process.php" method="post"
                        id="contactForm" novalidate="novalidate">
                        <div class="form-group">
                            <input class="border form-control" name="email" id="email" type="email"
                                placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input class="border form-control" name="password" id="name" type="password"
                                placeholder="Enter your password">
                        </div>
                        <div class="mt-3 text-center form-group text-md-right">
                            <a href="{{ route('theme.register') }}" style="text-decoration: underline" class="mx-3">I don't have account</a>
                            <button type="submit" class="button button--active button-contactForm">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
