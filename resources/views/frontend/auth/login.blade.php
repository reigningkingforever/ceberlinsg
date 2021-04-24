@extends('frontend.layouts.app')

@section('main')
<section class="wrapper wrap-content">
    <div class="site-content row">
        <div id="primary" class="content-area ">
            <main id="main" class="site-main" role="main">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </main><!-- #main -->
        </div><!-- #primary -->
        
        <aside id="secondary" class="widget-area" role="complementary">
            <section id="text-2" class="widget widget_text">
                <h2 class="widget-title">Find Us</h2>			
                <div class="textwidget">
                    <p><strong>Address</strong><br />
                        123 Main Street<br />
                        New York, NY 10001
                    </p>
                    <p><strong>Hours</strong><br />
                        Monday&mdash;Friday: 9:00AM&ndash;5:00PM<br />
                        Saturday &amp; Sunday: 11:00AM&ndash;3:00PM
                    </p>
                </div>
            </section>
            <section id="search-3" class="widget widget_search">
                <h2 class="widget-title">Search</h2>
                <form role="search" method="get" class="search-form" action="https://demo.evisionthemes.com/chrimbo/">
                    <label>
                        <span class="screen-reader-text">Search for:</span>
                        <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
                    </label>
                    <input type="submit" class="search-submit" value="Search" />
                </form>
            </section>
            <section id="text-3" class="widget widget_text">
                <h2 class="widget-title">Send Santa Gifts</h2>			
                <div class="textwidget">
                    <p>This may be a good place to introduce yourself and your site or include some credits.</p>
                </div>
            </section>
            <section id="media_image-3" class="widget widget_media_image">
                <h2 class="widget-title">Coffee Christmas</h2>
                <a href="http://evisionthemes.com">
                    <img width="300" height="180" src="https://demo.evisionthemes.com/chrimbo/wp-content/uploads/2017/12/coffee-300x180.jpg" class="image wp-image-7  attachment-medium size-medium" alt="" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://demo.evisionthemes.com/chrimbo/wp-content/uploads/2017/12/coffee-300x180.jpg 300w, https://demo.evisionthemes.com/chrimbo/wp-content/uploads/2017/12/coffee-768x461.jpg 768w, https://demo.evisionthemes.com/chrimbo/wp-content/uploads/2017/12/coffee-1024x614.jpg 1024w, https://demo.evisionthemes.com/chrimbo/wp-content/uploads/2017/12/coffee.jpg 2000w" sizes="(max-width: 300px) 100vw, 300px" />
                </a>
            </section>
        </aside><!-- #secondary -->
    </div>
</section>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
        </div>
    </div>
</div> --}}
@endsection
