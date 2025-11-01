<!-- ##### Single Widget Area ##### -->
<!--
<div class="single-widget-area">
    <div class="search-form">
        <form action="#" method="get">
            <input type="search" name="search" placeholder="Search Here">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>
</div> -->
<!-- ##### Single Widget Area ##### -->

<div class="single-widget-area">
    <!-- Title -->
    <div class="widget-title">
        <h6 style="font-size: 18px;"><i class="fa fa-tags" aria-hidden="true"></i> Albums/<span style="font-size: 11px;">ஆல்பங்கள்</span></h6>
        <hr style="margin-top:-15px;"/>
    </div>
    <!-- Tags -->
    <ol class="popular-tags d-flex flex-wrap">
        @if(count($tags)>0)
            @foreach($tags as $tag)
                <li><a href="/gallery/{{$tag->slug}}" style="line-height: 1.5"><i class="fa fa-angle-right" aria-hidden="true" style="color:darkred; font-size:19px;"></i> {{ $tag->title }}</a></li>
            @endforeach
        @else
            <p class="noresult"><i class="fas fa-info-circle"></i> No Results found<br/>முடிவுகள் எதுவும் இல்லை</p>
        @endif
    </ol>
</div>

<div class="single-widget-area">
    <!-- Title -->
    <div class="widget-title">
        <h6 style="font-size: 18px;"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Recent Post/<span style="font-size: 11px;">சமீபத்திய பதிவுகள்</span></h6>
        <hr style="margin-top:-15px;"/>
    </div>

    @if(count($recent_posts)>0)
        @foreach($recent_posts as $post)
            <div class="single-latest-post">
                <?php $getcategory=DB::table('categories')->where('id',$post->category_id)->first(); ?>
                <a href="/tag-{{ strtolower($getcategory->slug) }}/{{$post->slug}}" class="post-title">
                    <h6 style="font-size:11px;"><i class="fa fa-arrow-circle-o-right" style="color:darkred;" aria-hidden="true"></i> {{ $post->title }}</h6>
                </a>
                <p class="post-date">
                    <?php
                    $updateDate=$post->created_at;
                    echo date_format(new DateTime($updateDate),"M d, Y ");
                    ?>
                </p>
            </div>
        @endforeach
    @else
        <p class="noresult"><i class="fas fa-info-circle"></i> No Results found<br/>முடிவுகள் எதுவும் இல்லை</p>
    @endif
</div>

<!-- ##### Single Widget Area ##### -->
<!--
<div class="single-widget-area">
    <div class="widget-title">
        <h6>Archives</h6>
    </div>
    <ol class="crose-archives">
        <li><a href="#">July 2015</a></li>
        <li><a href="#">March 2015</a></li>
    </ol>
</div> -->

<!-- ##### Single Widget Area ##### -->
<div class="single-widget-area">
    <!-- Title -->
    <div class="widget-title">
        <h6 style="font-size: 18px;"><i class="fa fa-text-width" aria-hidden="true"></i> Tamil Language/<span style="font-size: 11px;">தமிழ் மொழி</span></h6>
        <hr style="margin-top:-15px;"/>
    </div>
    <ol class="crose-catagories">
        @if(count($tamil_posts)>0)
            @foreach($tamil_posts as $post)
                <?php $getcategory=DB::table('categories')->where('id',$post->category_id)->first(); ?>
                <li><a style="font-size:13px;" href="/tag-{{ strtolower($getcategory->slug) }}/{{$post->slug}}"><i class="fa fa-angle-right" style="font-size:19px;" aria-hidden="true"></i> {{ $post->title }}</a></li>
            @endforeach
        @else
            <p class="noresult"><i class="fas fa-info-circle"></i> No Results found<br/>முடிவுகள் எதுவும் இல்லை</p>
        @endif
    </ol>
</div>


