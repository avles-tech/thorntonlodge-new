@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <!-- Additional Css -->
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
                    <h3 class="tittle text-center mb-lg-5 mb-3 inner-tittle"> Recent {{ $tag_info->name }} Posts</h3>
                    <div class="row mt-lg-5 mt-4">
                        <div class="col-lg-8 blog-left-content">
                            @if(count($posts))
                                @foreach($posts as $post)
                                    <?php $getcategory=App\category::where('id',$post->category_id)->first(); ?>
                                    <div class="card my-lg-5" data-aos="fade-up">
                                        <a href="/tag-{{ strtolower($getcategory->slug) }}/{{$post->slug}}">  <img height="422px;" class="card-img-top" src="/Uploads/post_cover_images/{{ $post->image }}" alt="{{ $post->title }}"></a>
                                        <div class="card-body">
                                            <h6 class="date"><span>By: {{ $post->author }}</span> <?php
                                                $updateDate=$post->created_at;
                                                echo date_format(new DateTime($updateDate),"M d, Y ");
                                                ?>
                                            </h6>
                                            <h5 class="card-title"><a class="b-post text-dark" href="/tag-{{ strtolower($getcategory->slug) }}/{{$post->slug}}">{{ $post->title }}</a></h5>
                                            <p class="card-text ptext">{{ $post->excerpt }}</p>
                                            <a class="btn contact my-3" href="/tag-{{ strtolower($getcategory->slug) }}/{{$post->slug}}">Read More</a>
                                        </div>
                                        <div class="card-footer">
                                            <small>Tag: </small><a href="/category-{{ $getcategory->slug }}"><small class="text-muted">{{ $getcategory->name }}</small></a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="noresult"><i class="fa fa-info-circle"></i> No Blog results found</p>
                            @endif
                            <div class="col-12" data-aos="fade-up">
                                <div class="text-center">
                                    <div class="pagination">
                                        {{ $posts->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <aside class="col-lg-4 blog-sldebar-right">

                            <div class="single-gd">
                                <h4>TAGS</h4>
                                <ul class="list-group">
                                    @if(count($tags)>0)
                                        @foreach($tags as $k=>$tag)
                                            <a href="/category-{{$tag->slug}}">
                                                <li class="list-group-item <?php if($k==0){ echo 'active'; } ?>">{{ $tag->name }}
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