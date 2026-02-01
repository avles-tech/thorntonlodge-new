@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$post->meta_description}}">
    <meta name="keywords" content="{{$post->keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <style>
        .card {
            overflow: hidden;
        }

        .card-img-top {
            width: 100%;
            height: 422px;
            object-fit: cover;
        }
    </style>
@endsection
@section('content')
    <section class="about">
        <img src="/images/slider/thorntonlodgeb10.jpg" style="width: 100%; "/>
        <h3 class="tittle banner-title">NEWS</h3>
    </section>
    <!-- //main-content -->
    <section class="ab-info-main py-md-2 py-4">
        <div class="container">
            <div class="inner-sec-w3pvt py-lg-2">
                <div class="blog-sec">
                    <h3 class="tittle text-center mb-lg-5 mb-3 inner-tittle"></h3>
                    <div class="row mt-lg-5 mt-4">
                        <div class="col-lg-8 blog-left-content">
                            <div class="card" data-aos="fade-up">
                                <img class="card-img-top" src="/Uploads/post_cover_images/{{ $post->image }}" alt="{{ $post->title }}">
                                <div class="card-body">
                                    <h6 class="date"><span>
                                            <p class="date col-lg-12 col-md-12 col-6"><a href="#"></a> <span class="lnr lnr-calendar-full"></span></p>
                                     By: {{ $post->author }}</span>
                                        <?php
                                        $updateDate=$post->created_at;
                                        echo date_format(new DateTime($updateDate),"M d, Y ");
                                        ?></h6>
                                    <h5 class="card-title"><a class="b-post text-dark" href="">{{ $post->title }}</a></h5>
                                    <p class="card-text">{!! $post->body !!}</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Tag: {{ $tag_info->name }}</small>
                                </div>
                            </div>
                            <br/>
                        </div>

                        <aside class="col-lg-4 blog-sldebar-right">
                            <div class="single-gd">
                                <h4>TAGS</h4>
                                <ul class="list-group">
                                    @if(count($tags)>0)
                                        @foreach($tags as $k=>$tag)
                                            <a href="/category-{{$tag->slug}}">
                                                <li class="list-group-item <?php if($tag_info->name==$tag->name){ echo 'active'; } ?>">{{ $tag->name }}
                                                    <?php $get_count=App\post::where('category_id',$tag->id)->get();?>
                                                    <span style="float: right;"> {{ count($get_count) }}</span>
                                                </li>
                                            </a>
                                        @endforeach
                                    @else
                                        <p class="noresult"><i class="fa fa-info-circle"></i> No Results found</p>
                                    @endif
                                </ul>
                            </div>

                            <div class="single-gd tech-btm" data-aos="fade-down">
                                <h4>Top stories of the week </h4>
                                @if(count($pop_post))
                                    @foreach($pop_post as $post)
                                        <?php $getcategory=App\category::where('id',$post->category_id)->first(); ?>
                                        <div class="blog-grids">
                                            <div class="blog-grid-left">
                                                <a href="single.html">
                                                    <img src="/Uploads/post_cover_images/{{ $post->image }}" class="img-fluid" alt="{{ $post->title }}">
                                                </a>
                                            </div>
                                            <div class="blog-grid-right">
                                                <h5>
                                                    <a href="/tag-{{ strtolower($getcategory->slug) }}/{{$post->slug}}">{{ $post->title }}</a>
                                                </h5>
                                                <p><?php
                                                    $updateDate=$post->created_at;
                                                    echo date_format(new DateTime($updateDate),"M d, Y ");
                                                    ?>
                                                </p>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    @endforeach
                                @else
                                    <p class="noresult"><i class="fa fa-info-circle"></i> No Blog results found</p>
                                @endif
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('extra_script')
@endsection