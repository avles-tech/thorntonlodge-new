@extends('layout.main')
@section('con_title')
<title>{{$page_title}}</title>
<meta name="description" content="{{$description}}">
<meta name="keywords" content="{{$keywords}}" />
<meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
@endsection
@section('content')
<div class="container-2" style="position: relative;">
    <img src="/images/slider/testimonial.jpg" style="width: 100%;"/>
    <h3 class="bottom-left" style="position: absolute; bottom: 10px; left: 10px;">Testimonial</h3>
</div>


    <!-- testimonials -->
    <div class="testimonials py-md-1 py-0" style="margin-top: -60px;">
        <div class="container py-xl-1 py-lg-1">
            <h3 class="tittle  text-center mb-lg-5 mb-3">&nbsp;</h3>
            <div class="">
                <div class="row">
                    @if(count($testimonials)>0)
                        @foreach($testimonials as $testimonial)
                            <div class="col-9 col-lg-offset-1" style="margin-bottom: 30px;">
                                <p class="sub-test"><span class="fa fa-quote-left" aria-hidden="true"></span>{{ $testimonial->comment }}</p>
                            </div>
                        @endforeach
                    @else
                        <p class="noresult"><i class="fa fa-info-circle"></i> No testimonial results found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonials -->
@endsection
@section('extra_script')

@endsection