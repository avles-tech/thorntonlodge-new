@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <!-- Additional Css -->
    <style type="text/css">
        body {
        }
        #cont {
            position: relative;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

            background: #f3f3f3;

            margin: -20px 30px 0px 30px;
            padding: 20px;
        }

        a:link,
        a:visited {
        }

        a:hover {
            color: #666;
        }
        ul {
            margin: 0px;

            padding: 0px;
            list-style: none;
        }
        li {
            margin: 0px;
        }
        li ul {
            margin-left: 20px;
        }

        .lhead {
            background: #ddd;
            padding: 10px;
            margin: 10px 0px;
        }

        .lcount {
            padding: 0px 10px;
        }

        .lpage {
            border-bottom: #ddd 1px solid;
            padding: 5px;
        }
        .last-page {
            border: none;
        }
    </style>
@endsection
@section('content')
    <section class="about py-lg-5 py-md-5 py-5">
        <img src="/images/slider/thorntonlodgeb5.jpg" style="width: 100%"/>
    </section>

    <div id="cont">
        <h4>Thornton Lodge - Sitemap</h4>
        <ul class="level-0">
            <li class="lhead">/  <span class="lcount">18 pages</span></li>
            <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/" title="Thornton Lodge">Thornton Lodge</a></li>
            <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/about" title="About Us &amp;gt; Thornton Lodge">About Us &gt; Thornton Lodge</a></li>
            <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/testimonial" title="Testimonial &amp;gt; Thornton Lodge">Testimonial &gt; Thornton Lodge</a></li>
            <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/team" title="Team &amp;gt; Thornton Lodge">Team &gt; Thornton Lodge</a></li>
            <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/accommodation" title="Accommodation &amp;gt; Thornton Lodge">Accommodation &gt; Thornton Lodge</a></li>
            <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/admission-criteria" title="Admission &amp;gt; Thornton Lodge">Admission &gt; Thornton Lodge</a></li>
            <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/facilities" title="Facilities &amp;gt; Thornton Lodge">Facilities &gt; Thornton Lodge</a></li>
            <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/activities-and-events" title="Activities &amp;gt; Thornton Lodge">Activities &gt; Thornton Lodge</a></li>
            <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/principal-of-care" title="Principal &amp;gt; Thornton Lodge">Principal &gt; Thornton Lodge</a></li>
            <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/staff-training" title="Staff Training &amp;gt; Thornton Lodge">Staff Training &gt; Thornton Lodge</a></li>
            <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/bed-vacancies" title="Bed Vacancies &amp;gt; Thornton Lodge">Bed Vacancies &gt; Thornton Lodge</a></li>
            <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/gallery" title="Gallery &amp;gt; Thornton Lodge">Gallery &gt; Thornton Lodge</a></li>
            <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/news" title="Blog &amp;gt; Thornton Lodge">Blog &gt; Thornton Lodge</a></li>
            <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/contact" title="Thornton Lodge &amp;gt; Contact">Thornton Lodge &gt; Contact</a></li>
            <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/privacy-policy" title="Thornton Lodge &amp;gt; Privacy Policy">Thornton Lodge &gt; Privacy Policy</a></li>
            <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/sitemap" title="Thornton Lodge &amp;gt; Sitemap">Thornton Lodge &gt; Sitemap</a></li>
            <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/category-news" title="News &amp;gt; Blog &amp;gt; Thornton Lodge">News &gt; Blog &gt; Thornton Lodge</a></li>
            <li class="lpage last-page"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/category-events" title="Events &amp;gt; Blog &amp;gt; Thornton Lodge">Events &gt; Blog &gt; Thornton Lodge</a></li><li><ul class="level-1">

                    <li class="lhead">gallery/  <span class="lcount">2 pages</span></li>

                    <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/gallery/annual-event" title="Annual Event Gallery Albums &amp;gt; Thornton Lodge">Annual Event Gallery Albums &gt; Thornton Lodge</a></li>
                    <li class="lpage last-page"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/gallery/strip-foundation" title="Strip Foundation Gallery Albums &amp;gt; Thornton Lodge">Strip Foundation Gallery Albums &gt; Thornton Lodge</a></li>
                </ul><ul class="level-1">

                    <li class="lhead">tag-news/  <span class="lcount">2 pages</span></li>

                    <li class="lpage"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/tag-news/get-to-know-laylocks" title="Get to know Laylocks &amp;gt; Thornton Lodge">Get to know Laylocks &gt; Thornton Lodge</a></li>
                    <li class="lpage last-page"><a href="http://thorntonlodge.digitalmarketingagencies.co.uk/tag-news/the-golden-old-days" title="The Golden Old Days &amp;gt; Thornton Lodge">The Golden Old Days &gt; Thornton Lodge</a></li>
                </ul></li>
        </ul>
    </div>
    <br><br>

@endsection