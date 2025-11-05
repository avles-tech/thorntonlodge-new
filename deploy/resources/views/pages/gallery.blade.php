@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <!-- Additional Css -->
    <link href='/css/lightbox/lightgallery.css' rel='stylesheet' type='text/css'>
    <link href='/js/lightbox/jquery.min.js' rel='stylesheet' type='text/css'>
@endsection
@section('content')
    <section class="about" style="margin-top: -378px;">
        <div class="container-2">
            <img src="/images/slider/THORNTON LODGE_6425.jpg" style="width: 100%; "/>
            <h3 class="bottom-left">Gallery</h3>
        </div>
    </section>

    <section class="about py-lg-5 py-md-5 py-5">
        <div class="container">
            <div class="gallery">
                <div class="row mid-slide">
                @if(count($galleries)>0)
                    <div class="demo-gallery">
                        <ul class="lightgallery list-unstyled row">
                        @foreach($galleries as $gallery)
                                <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="Uploads/gallery_images/{{ $gallery->image }} 375, Uploads/gallery_images/{{ $gallery->image }} 480, Uploads/gallery_images/{{ $gallery->image }} 800" data-src="/Uploads/gallery_images/{{ $gallery->image }}" data-sub-html="<p>{{ $gallery->title }}</p>">
                                    <a href="">
                                        <img class="img-responsive" src="/Uploads/gallery_images/{{ $gallery->image }}" style="height: 250px;">
                                    </a>
                                    <h6>{{ $gallery->title }}</h6>
                                </li>
                        @endforeach
                        </ul>
                    </div>
                @else
                    <p class="noresult"><i class="fa fa-info-circle"></i> No Results found<br/></p>
                @endif
                </div>
            </div>
        </div>
    </section>

@endsection
@section('extra_script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.lightgallery').lightGallery();
        });
    </script>
    <script src="/js/lightbox/picturefill.min.js"></script>
    <script src="/js/lightbox/lightgallery-all.min.js"></script>
    <script src="/lib/jquery.mousewheel.min.js"></script>


@endsection