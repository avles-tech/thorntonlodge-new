@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <style>
        
        .box-design{
            border: 2px solid grey;
            border-radius: 10px;
            padding: 5px;
            height: 155px;
        }

        .avatar_image{
            width:200px;
            height:200px;
            position: relative;
            object-fit: cover;
        }
        .move-aling-right{
            text-align: right;
        }
        .move-aling-left{
            text-align: left;
        }
        @media only screen and (max-width: 767px) {
            .move-aling-right, .move-aling-right-img{
                text-align: center !important;
                margin-left:25%;
            }
            .move-aling-right h3, .move-aling-left h3, .move-aling-text h3{
                font-size:13px;
            }
            
            .move-aling-left, .move-aling-left-img{
                text-align: center !important;
                margin-left:25%;
            }
            .move-aling-right-img{
                padding-right: 0 !important;
  		padding-left: 0 !important;
            }
            .move-aling-left-img{
                width:100% !important;
                padding-right: 0 !important;
  		padding-left: 0 !important;
  		margin-top:25px;
            }
        }
        .modal-header {
            border-bottom: none !important;
        }
    </style>
@endsection
@section('content')
    <section class="about" style="margin-top: -380px;">
        <div class="container-2">
            <img src="/images/slider/our_team.jpg" style="width: 100%; "/>
            <h3 class="bottom-left">Our Team</h3>
        </div>
    </section>

    <!--//team -->
    <section class="banner-bottom py-lg-2 py-2">
        <div class="container">
            <div class="inner-sec-w3pvt speak">
                <h3 class="tittle text-center my-lg-5 my-3">We are a team of professionals</h3>
                <div class="row mt-lg-12 mt-12">

                <?php
                $orderedStaffs = $staffs->sortBy(function ($staff) {
                    if ($staff->category == 'Managing Director') return 1;
                    if ($staff->category == 'Deputy Managing Director') return 2;
                    if ($staff->category == 'Home Manager') return 3;
                    return 4;
                });
                ?>

                <div class="col-md-12 team-gd">
                    <div class="row">
                        @foreach($orderedStaffs As $k => $staff)
                        @if(in_array($staff->category, ['Managing Director', 'Deputy Managing Director' , 'Home Manager']))
                            <div class="col-md-3 team-info text-center">
                                <div class="team-img">
                                    <a data-toggle="modal" data-target="#myModal{{ $k }}">
                                        <img class="square_image_inner" src="{{ asset('Uploads/staff_images/'.$staff->image) }}" alt="{{ $staff->name }} profile picture">
                                    </a>
                                    
                                </div>
                                <div>
                                    <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">{{ $staff->category }}</span> {{ $staff->name }} <a data-toggle="modal" data-target="#myModal{{ $k }}" >
                                        ℹ️
                                    </a></h3>
                                    
                                </div>
                                
                                <p class="sub-tittle-team-p"> {{ $staff->qualification }}</p>
                                

                                <div class="modal fade" id="myModal{{ $k }}" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                       
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="team-img">
                                        <div class="modal-body">
                                            <img src="{{ asset('Uploads/staff_images/'.$staff->image) }}" class="img-fluid avatar_image" alt="{{ $staff->name }} profile picture">
                                            <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">{{ $staff->category }}</span> {{ $staff->name }} </h3>
                                            <p> {{ $staff->qualification }}</p>
                                            <blockquote style="font-style: italic; border-left: 5px solid #ccc; padding-left: 15px;">
                                                <p>{!! nl2br(e($staff->bio)) !!}</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                        @endif
                        @endforeach
                    </div>
                </div>
                    <!-- <div class="col-md-12 team-gd">
                        <div class="row">
                            @foreach($staffs As $k => $staff)
                                @if($staff->category == 'Deputy Managing Director')
                                    <div class="col-6 team-info text-center">
                                        <div class="team-img">
                                            <img src="{{ asset('Uploads/staff_images/'.$staff->image) }}"  class="img-fluid avatar_image" alt="{{ $staff->name }} profile picture">
                                        </div>
                                        <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">{{ $staff->category }}</span> {{ $staff->name }}</h3>
                                        <p class="sub-tittle-team-p"> {{ $staff->qualification }}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div> -->
                    <!-- <div class="col-md-12 team-gd">
                        <div class="row">
                            @foreach($staffs As $k => $staff)
                                @if($staff->category == 'Home Manager')
                                    <div class="col-12 team-info text-center">
                                        <div class="team-img">
                                            <img src="{{ asset('Uploads/staff_images/'.$staff->image) }}"  class="img-fluid avatar_image" alt="{{ $staff->name }} profile picture">
                                        </div>
                                        <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">{{ $staff->category }}</span> {{ $staff->name }}</h3>
                                        <p class="sub-tittle-team-p"> {{ $staff->qualification }}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>  -->
                    <div class="col-md-12 team-gd">
                        <div class="row">
                            @foreach($staffs As $k => $staff)
                                @if($staff->category == 'Assistant Manager')
                                    <div class="col-12 team-info text-center">
                                        <div class="team-img">
                                            <img src="{{ asset('Uploads/staff_images/'.$staff->image) }}"  class="img-fluid avatar_image" alt="{{ $staff->name }} profile picture">
                                        </div>
                                        <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">{{ $staff->category }}</span> {{ $staff->name }}</h3>
                                        <p class="sub-tittle-team-p"> {{ $staff->qualification }}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 team-gd">
                        <div class="row">
                            <div class="col-md-12 team-info text-center">
                                <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">Administrative Team</span></h3>
                                <div class="row justify-content-center">
                                    @php
                                        $c = 0;
                                    @endphp
                                    @foreach($orderedStaffs As $k => $staff)
                                    @if($staff->category == 'Administrative Team')
                                    @php
                                        $c++;
                                    @endphp
                                    <div class="col-md-3 team-info text-center">
                                        <div class="team-img">
                                            <a data-toggle="modal" data-target="#myModal{{ $k }}">
                                                <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}" class="img-fluid avatar_image" alt="{{ $staff->name }} profile picture">
                                            </a>
                                           
                                        </div>
                                        <h3 class="mt-md-4 mt-3">{{ $staff->name }} <a data-toggle="modal" data-target="#myModal{{ $k }}" >
                                            ℹ️
                                        </a></h3>
                                        <p class="sub-tittle-team-p"> {{ $staff->qualification }}</p>
                                        
                                        <div class="modal fade" id="myModal{{ $k }}" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="team-img">
                                                        <div class="modal-body">
                                                            <img src="{{ asset('Uploads/staff_images/'.$staff->image) }}" class="img-fluid avatar_image" alt="{{ $staff->name }} profile picture" onerror="this.src='{{ asset('Uploads/staff_images/default-user.png') }}'">
                                                            <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">{{ $staff->category }}</span> {{ $staff->name }}</h3>
                                                            <p> {{ $staff->qualification }}</p>
                                                            <blockquote style="font-style: italic; border-left: 5px solid #ccc; padding-left: 15px;">
                                                                <p>{!! nl2br(e($staff->bio)) !!}</p>
                                                            </blockquote>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if($c % 4 == 0 && $c != count($orderedStaffs))
                                        </div><div class="row justify-content-center">
                                    @endif
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 team-gd">
                        <div class="row" style="margin-top:-45px;">
                            <div class="col-12 team-info text-center">
                                <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">Senior Care Assistants</span></h3>
                                <div class="team-img-staff">
                                    <a data-toggle="modal" data-target="#myModal{{ $k }}">
                                        <img src="{{ asset('Uploads/staff_images/staff1.jpg')  }}" class="img-fluid avatar_image large-image" alt="{{ $staff->name }} profile picture">
                                    </a>
                                </div>
                                <div class="row" style="margin-top:-15px;">
                                    <div class="col-12 text-center">
                                        <div class="row">
                                            @php
                                                $c = 1;
                                            @endphp
                                            @foreach($staffs As $k => $staff)
                                                @if($staff->category == 'Senior Care Assistants')
                                                @php
                                                    $c++;
                                                @endphp
                                                    <div class="modal fade" id="myModal{{ $k }}" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <div class="team-img">
                                                                    <div class="modal-body">
                                                                        <img src="{{ asset('Uploads/staff_images/'.$staff->image) }}" class="img-fluid avatar_image" alt="{{ $staff->name }} profile picture" onerror="this.src='{{ asset('Uploads/staff_images/default-user.png') }}'">
                                                                        <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">{{ $staff->category }}</span> {{ $staff->name }}</h3>
                                                                        <p> {{ $staff->qualification }}</p>
                                                                        <blockquote style="font-style: italic; border-left: 5px solid #ccc; padding-left: 15px;">
                                                                            <p>{!! nl2br(e($staff->bio)) !!}</p>
                                                                        </blockquote>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if($c % 2)
                                                        <div class="col-6 move-aling-left">
                                                            <h3>{{ $staff->name }} <a data-toggle="modal" data-target="#myModal{{ $k }}" >
                                                                ℹ️
                                                            </a></h3>
                                                        </div>
                                                    @else
                                                        <div class="col-6 move-aling-right">
                                                            <h3>{{ $staff->name }} <a data-toggle="modal" data-target="#myModal{{ $k }}" >
                                                                ℹ️
                                                            </a></h3>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 team-gd">
                        <div class="row">
                            <div class="col-md-12 team-info text-center">
                                <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">Maintenance Team</span></h3>
                                <div class="row justify-content-center">
                                    @php
                                        $c = 0;
                                    @endphp
                                    @foreach($orderedStaffs As $k => $staff)
                                    @if($staff->category == 'Maintenance Team')
                                    @php
                                        $c++;
                                    @endphp
                                    <div class="col-md-3 team-info text-center">
                                        <div class="team-img">
                                            <a data-toggle="modal" data-target="#myModal{{ $k }}">
                                                <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}" class="img-fluid avatar_image" alt="{{ $staff->name }} profile picture">
                                            </a>
                                           
                                        </div>
                                        <h3 class="mt-md-4 mt-3">{{ $staff->name }} </h3>
                                        <p class="sub-tittle-team-p"> {{ $staff->qualification }}</p>
                                        
                                    </div>
                                    @if($c % 4 == 0 && $c != count($orderedStaffs))
                                        </div><div class="row justify-content-center">
                                    @endif
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 team-gd">
                        <div class="row" style="margin-top:-45px;">
                            <div class="col-12 team-info text-center">
                                <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">Primary Senior Care</span></h3>
                                <div class="row" style="margin-top:-15px;">
                                    <div class="col-12 text-center">
                                        <div class="row justify-content-center">
                                            @php
                                                $c = 1;
                                            @endphp
                                            @foreach($staffs As $k => $staff)
                                                @if($staff->category == 'Primary Senior Care')
                                                @php
                                                    $c++;
                                                @endphp
                                                    <div class="col-md-4 team-info text-center">
                                                        <div class="team-img">
                                                            <a data-toggle="modal" data-target="#myModal{{ $k }}">
                                                                <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}" class="img-fluid avatar_image" alt="{{ $staff->name }} profile picture">
                                                            </a>
                                                           
                                                        </div>
                                                        <h3 class="mt-md-4 mt-3">{{ $staff->name }} </h3>
                                                        <p class="sub-tittle-team-p"> {{ $staff->qualification }}</p>
                                                        
                                                    </div>
                                                    @if($c % 4 == 0 && $c != count($orderedStaffs))
                                                        </div><div class="row justify-content-center">
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    {{-- <div class="col-md-12 team-gd">
                        <div class="row">
                            <div class="col-md-12 team-info text-center">
                                <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">Care Assistants</span></h3>
                                <div class="row justify-content-center">
                                    @php
                                        $c = 0;
                                    @endphp
                                    @foreach($staffs As $k => $staff)
                                    @if($staff->category == 'Care Assistants')
                                    @php
                                        $c++;
                                    @endphp
                                        <div class="col-md-3 team-info text-center">
                                            <div class="team-img">
                                                <a data-toggle="modal" data-target="#myModal{{ $k }}">
                                                    <img src="{{ asset('Uploads/staff_images/'.$staff->image) }}" class="img-fluid avatar_image" alt="{{ $staff->name }} profile picture" onerror="this.src='{{ asset('Uploads/staff_images/default-user.png') }}'">
                                                </a>
                                            </div>
                                            <h3 class="mt-md-4 mt-3"> {{ $staff->name }}</h3>
                                            <p class="sub-tittle-team-p"> {{ $staff->qualification }}</p>
                                            
                                            <div class="modal fade" id="myModal{{ $k }}" role="dialog">
                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        </div>
                                                                        <div class="team-img">
                                                                            <div class="modal-body">
                                                                                <img src="{{ asset('Uploads/staff_images/'.$staff->image) }}" class="img-fluid avatar_image" alt="{{ $staff->name }} profile picture" onerror="this.src='{{ asset('Uploads/staff_images/default-user.png') }}'">
                                                                                <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">{{ $staff->category }}</span> {{ $staff->name }}</h3>
                                                                                <p> {{ $staff->qualification }}</p>
                                                                                <blockquote style="font-style: italic; border-left: 5px solid #ccc; padding-left: 15px;">
                                                                                    <p>{!! nl2br(e($staff->bio)) !!}</p>
                                                                                </blockquote>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                            </div>
                                        </div>
                                    @if($c % 4 == 0 && $c != count($staffs))
                                        </div><div class="row justify-content-center">
                                    @endif
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    
                   
                    <div class="col-md-12 team-gd">
                        <div class="row">
                            <div class="col-md-12 team-info text-center">
                                <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">Cook</span></h3>
                                <div class="row justify-content-center">
                                    @php
                                        $c = 0;
                                    @endphp
                                    @foreach($orderedStaffs As $k => $staff)
                                    @if($staff->category == 'Cook')
                                    @php
                                        $c++;
                                    @endphp
                                    <div class="col-md-3 team-info text-center">
                                        <div class="team-img">
                                            <a data-toggle="modal" data-target="#myModal{{ $k }}">
                                                <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}" class="img-fluid avatar_image" alt="{{ $staff->name }} profile picture">
                                            </a>
                                           
                                        </div>
                                        <h3 class="mt-md-4 mt-3">{{ $staff->name }} <a data-toggle="modal" data-target="#myModal{{ $k }}" >
                                            ℹ️
                                        </a></h3>
                                        <p class="sub-tittle-team-p"> {{ $staff->qualification }}</p>
                                        
                                        <div class="modal fade" id="myModal{{ $k }}" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="team-img">
                                                        <div class="modal-body">
                                                            <img src="{{ asset('Uploads/staff_images/'.$staff->image) }}" class="img-fluid avatar_image" alt="{{ $staff->name }} profile picture" onerror="this.src='{{ asset('Uploads/staff_images/default-user.png') }}'">
                                                            <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">{{ $staff->category }}</span> {{ $staff->name }}</h3>
                                                            <p> {{ $staff->qualification }}</p>
                                                            <blockquote style="font-style: italic; border-left: 5px solid #ccc; padding-left: 15px;">
                                                                <p>{!! nl2br(e($staff->bio)) !!}</p>
                                                            </blockquote>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if($c % 4 == 0 && $c != count($orderedStaffs))
                                        </div><div class="row justify-content-center">
                                    @endif
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
            <div class="inner-sec-w3pvt speak text-center">
                <img class="img-responsive text-center" src="/images/Structure.jpg" alt="company structure" />
            </div>-->
        </div>
    </section>
    <!--//team -->
@endsection
@section('extra_script')
@endsection