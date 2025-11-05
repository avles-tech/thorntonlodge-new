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
    <section class="about" style="margin-top: -380px;">
        <div class="container-2">
            <img src="/images/slider/staff.jpg" style="width: 100%; "/>
            <h3 class="bottom-left">Staff Training</h3>
        </div>
    </section>

    <section class="about py-lg-1 py-md-5 py-1">
        <div class="container">
            <div class="inner-sec-w3pvt py-lg-1 py-1">
                <!-- services -->
                <div class="fetured-info pt-lg-1">
                    <div class="row fetured-sec mt-lg-5 mt-3">
                        <div class="col-lg-4 p-4">
                            <div class="custom-circle">
                                <img style="border-radius: 50%" src="/images/img7.jpg" alt="philosopher" class="img-fluid image1">
                            </div>
                        </div>
                        <div class="col-lg-8 serv_bottom feature-grids">
                            <div class="featured-left text-left">
                                <div class="bottom-gd px-9 py-lg-0">
                                    <h5>Staff training</h5>
                                    <p>A calm, cheerful and relaxed family-like environment pervades throughout the Home. This is very much influenced by the staff who have been embraced by the philosophy of the home’s care by virtue of the time they have served, the training they have acquired and skills and knowledge gained.</p>
                                    <br/>
                                       
                                            <p>Ongoing staff trainings form part of the staff contract. The Home works in partnership with Red Crier Training Solutions who offer a comprehensive package of training to all of our Staff. The includes training such as; Safeguarding Adults, Health & Safety in the Workplace, Food Hygiene & Safety, etc. The Home also works in partnership with local health teams, CCG’s, Immedicare and the NHS to offer our staff with tailored training, such as our most recent implementation of Restore 2 vital signs training.</p>
                                        
                                    
                                    <br/>


                                    <h5>Key Worker System</h5>
                                    <p>This Home operates a Key Worker System which means that, although all staff work together to meet the broad concept of care, the designated Key Worker is expected to develop an all round knowledge of individual service users.</p><br/>

                                    <p>The single and most important role of the Key Worker is to develop a very good relationship with the service users to the extent that they have a better and more comprehensive knowledge on their likes and dislikes, to meet their physical needs, social interactions and provide psychological help. This is reflected in the service users Care Plan</p><br/>

                                    <p>To develop a healthy relationship, the Key Workers have been taught some elements of social interactive skills which are - ability to communicate well, show empathy and kindness and indeed to always be prepared to listen to what the resident has to say.</p><br/>
                                    <br/><br/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- //services -->
    </section>
    <!-- //ab -->
@endsection
@section('extra_script')
@endsection