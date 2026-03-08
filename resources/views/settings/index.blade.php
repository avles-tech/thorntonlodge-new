@extends('layout.admin')
@section('contitle')
    <title>{{$pagetitle}}</title>
    <style>
        .settings-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 30px;
            margin-bottom: 30px;
        }
        .upload-area {
            border: 2px dashed #7BA5C7;
            border-radius: 8px;
            padding: 40px;
            text-align: center;
            background: #f8f9fa;
            transition: all 0.3s ease;
        }
        .upload-area:hover {
            background: #e8f4f8;
            border-color: #5A8A9A;
        }
        .upload-icon {
            font-size: 48px;
            color: #7BA5C7;
            margin-bottom: 15px;
        }
        .current-file {
            background: #e8f4f8;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn-upload {
            background: linear-gradient(135deg, #7BA5C7 0%, #6B94B5 100%);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .btn-upload:hover {
            background: linear-gradient(135deg, #6B94B5 0%, #5A8A9A 100%);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(123, 165, 199, 0.3);
        }
    </style>
@endsection
@section('content')
    <div class="right_col" role="main">
        <div class="">
            @include('inc.messages')
            <div class="page-title">
                <div class="title_left">
                    <h3>Site Settings <small>Manage website content</small></h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Menu PDF Upload -->
                    <div class="settings-card">
                        <h2 style="margin-bottom: 20px; color: #2C3E50;">
                            <i class="fa fa-file-pdf-o"></i> Menu of the Year
                        </h2>
                        <p style="color: #666; margin-bottom: 30px;">
                            Upload the annual menu PDF file that will be displayed on the Cuisine page
                        </p>

                        {!! Form::open(['action' => 'SiteSettingController@updateMenuPdf', 'class' => 'form-horizontal', 'method' => 'POST', 'files' => true]) !!}

                        <div class="upload-area">
                            <div class="upload-icon">
                                <i class="fa fa-cloud-upload"></i>
                            </div>
                            <h4 style="margin-bottom: 10px; color: #2C3E50;">Choose a PDF file</h4>
                            <p style="color: #999; margin-bottom: 20px;">Maximum file size: 10MB</p>

                            <input type="file" name="menu_pdf" accept=".pdf" required
                                   style="display: block; margin: 0 auto; max-width: 400px;"
                                   class="form-control">
                        </div>

                        @php
                            $currentMenu = App\SiteSetting::get('menu_pdf_path', '/Uploads/menu_of_the_year/MenuOfTheYear.pdf');
                        @endphp

                        @if($currentMenu)
                        <div class="current-file">
                            <strong><i class="fa fa-file-pdf-o"></i> Current Menu File:</strong><br>
                            <code>{{ $currentMenu }}</code>
                            <a href="{{ $currentMenu }}" target="_blank" class="btn btn-sm btn-info" style="margin-left: 15px;">
                                <i class="fa fa-eye"></i> Preview
                            </a>
                        </div>
                        @endif

                        <div style="margin-top: 30px; text-align: center;">
                            <button type="submit" class="btn-upload">
                                <i class="fa fa-upload"></i> Upload New Menu PDF
                            </button>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

            <!-- Future Settings Section -->
            <div class="row">
                <div class="col-md-12">
                    <div class="settings-card">
                        <h3 style="color: #7BA5C7; margin-bottom: 15px;">
                            <i class="fa fa-info-circle"></i> How to Use
                        </h3>
                        <ul style="line-height: 2; color: #555;">
                            <li>Select a PDF file from your computer (max 10MB)</li>
                            <li>Click "Upload New Menu PDF" button</li>
                            <li>The menu will automatically appear on the Cuisine page</li>
                            <li>Click "Preview" to view the current menu PDF</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
