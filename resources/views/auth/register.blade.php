@extends('layouts.login')
@section('content')


    <section id="content" class="page-content card card-block">
        <section class="login-form">
            <form id="login-form" action="http://demo.posthemes.com/pos_sneaker/en/login" method="post">
                <section>
                    <input type="hidden" name="back" value="">

                    <div class="form-group row ">
                        <label class="col-md-3 form-control-label required">
                            Nama
                        </label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="col-md-3 form-control-comment">
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label class="col-md-3 form-control-label required">
                            Email
                        </label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        </div>
                        <div class="col-md-3 form-control-comment">
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label class="col-md-3 form-control-label required">
                            Password
                        </label>
                        <div class="col-md-6">
                            <div class="input-group js-parent-focus">
                                <input id="password" class="form-control js-child-focus js-visible-password" name="password" type="password" value="" pattern=".{5,}" required            >
                                <span class="input-group-btn">
              <button class="btn" type="button" data-action="show-password" data-text-show="Show" data-text-hide="Hide" >
                Show
              </button>
            </span>
                            </div>
                        </div>

                        <div class="col-md-3 form-control-comment">
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label class="col-md-3 form-control-label required">
                            Confirm Password
                        </label>
                        <div class="col-md-6">
                            <div class="input-group js-parent-focus">
                                <input id="password-confirm" class="form-control js-child-focus js-visible-password" name="password" type="password" value="" pattern=".{5,}" required            >
                                <span class="input-group-btn">
              <button class="btn" type="button" data-action="show-password" data-text-show="Show" data-text-hide="Hide" >
                Show
              </button>
            </span>
                            </div>
                        </div>

                        <div class="col-md-3 form-control-comment">
                        </div>
                    </div>
                </section>

                <footer class="form-footer text-sm-center clearfix">
                    <input type="hidden" name="submitLogin" value="1">
                    <button class="btn btn-primary" data-link-action="sign-in" type="submit" class="form-control-submit">
                        Masuk
                    </button>
                </footer>
            </form>
        </section>

        <hr/>
        <div class="no-account">
            <a href="/login" data-link-action="display-register-form">
                Sudah Punya Akun? Login
            </a>
        </div>
    </section>


@endsection
