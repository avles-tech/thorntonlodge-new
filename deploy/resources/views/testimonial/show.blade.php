@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <!-- Additional Css -->
    <link rel="stylesheet" href="/ccss/style.css">
@endsection
@section('content')
    <section class="about py-lg-5 py-md-5 py-5">
        <div class="container">
            <div class="inner-sec-w3pvt py-lg-5 py-3">
                <!-- services -->
                <div class="fetured-info pt-lg-5">
                    <h3 class="tittle text-center my-lg-5 mb-3"><span class="sub-tittle">Our</span> {{  $tag_info->title }} Gallery</h3>
                    <div class="row mid-slide">
                        @if(count($galleries)>0)
                            @foreach($galleries as $gallery)
                                <div class="col-lg-3 featured-content">
                                    <img style=" width:100%; height:80%;" src="/Uploads/gallery_images/{{ $gallery->image }}" alt="{{ $gallery->title }}" class="img-fluid image1">
                                </div>
                            @endforeach
                        @else
                            <p class="noresult"><i class="fas fa-info-circle"></i> No Results found<br/></p>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        <!-- //services -->
    </section>

@endsection
@section('extra_script')
@endsection