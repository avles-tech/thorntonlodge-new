@extends('layout.admin')
@section('contitle')
    <title>{{$pagetitle}}</title>
    <!-- Datatables -->
    <link href="/Adminassets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/Adminassets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/Adminassets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/Adminassets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/Adminassets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <style>
        .form-help-text {
            font-size: 12px;
            color: #777;
            margin-top: 5px;
            display: block;
        }
        .badge-active {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 3px;
        }
        .badge-inactive {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            border-radius: 3px;
        }
    </style>
@endsection
@section('content')
    <!-- /page content -->
    <div class="right_col" role="main">
        <div class="">
            @include('inc.messages')
            <div class="page-title">
                <div class="title_left">
                    <h3>Staff Categories <small>(Team Section Management)</small></h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                @if(isset($tagscategory))
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Update Category <small></small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a href="/staff-category" class="btn btn-sm btn-primary">Back to List</a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="col-md-12 col-sm-12 col-xs-12 profile_left">
                                    {!! Form::open(['action' => 'StaffCategoryController@update', 'class' => 'form-horizontal form-label-left','role' => 'form', 'method' => 'POST']) !!}

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Category Name <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" name="title" value="{{ $tagscategory->name }}" required type="text">
                                            <small class="form-help-text">Internal category name (e.g., "Managing Director")</small>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="section_title">Section Title</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" name="section_title" value="{{ $tagscategory->section_title ?? $tagscategory->name }}" type="text">
                                            <small class="form-help-text">Display title on team page (leave empty to use category name)</small>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="parent_section">Parent Section</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" name="parent_section" value="{{ $tagscategory->parent_section }}" type="text" placeholder="e.g., Management Team">
                                            <small class="form-help-text">Group under a parent section (e.g., "Management Team"). Leave empty for standalone section.</small>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="display_type">Display Type <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" name="display_type" required>
                                                <option value="card-grid" {{ $tagscategory->display_type == 'card-grid' ? 'selected' : '' }}>Card Grid</option>
                                                <option value="individual-cards" {{ $tagscategory->display_type == 'individual-cards' ? 'selected' : '' }}>Individual Cards</option>
                                                <option value="name-list" {{ $tagscategory->display_type == 'name-list' ? 'selected' : '' }}>Name List</option>
                                            </select>
                                            <small class="form-help-text">
                                                <strong>Card Grid:</strong> Photo grid (default)<br>
                                                <strong>Individual Cards:</strong> Centered cards for management<br>
                                                <strong>Name List:</strong> Text-only list
                                            </small>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order">Display Order <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" name="order" value="{{ $tagscategory->order }}" required type="number" min="1">
                                            <small class="form-help-text">Lower numbers appear first (1, 2, 3...)</small>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Active Status</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="is_active" value="1" {{ $tagscategory->is_active ? 'checked' : '' }}> Show this section on team page
                                            </label>
                                            <small class="form-help-text">Uncheck to hide this section temporarily</small>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Section Description</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="form-control" name="description" rows="3">{{ $tagscategory->description }}</textarea>
                                            <small class="form-help-text">Optional description shown below section title</small>
                                        </div>
                                    </div>

                                    <input name="id" value="{{ $tagscategory->id }}" type="hidden">

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <a href="/staff-category" class="btn btn-default">
                                                <i class="fa fa-times"></i> Cancel
                                            </a>
                                            <button type="submit" class="btn btn-success">
                                                <i class="fa fa-check"></i> Save Changes
                                            </button>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add New Category</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="col-md-12 col-sm-12 col-xs-12 profile_left">
                                    {!! Form::open(['action' => 'StaffCategoryController@store', 'class' => 'form-horizontal form-label-left','role' => 'form', 'method' => 'POST']) !!}

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Category Name <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" name="title" placeholder="e.g., Nursing Team" required type="text">
                                            <small class="form-help-text">Internal category name</small>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="section_title">Section Title</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" name="section_title" placeholder="Leave empty to use category name" type="text">
                                            <small class="form-help-text">Display title on team page</small>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="parent_section">Parent Section</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" name="parent_section" placeholder="e.g., Management Team" type="text">
                                            <small class="form-help-text">Group under a parent section (optional)</small>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="display_type">Display Type <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" name="display_type" required>
                                                <option value="card-grid" selected>Card Grid (Default)</option>
                                                <option value="individual-cards">Individual Cards (Management)</option>
                                                <option value="name-list">Name List (Simple)</option>
                                            </select>
                                            <small class="form-help-text">Choose how staff will be displayed</small>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order">Display Order <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control" name="order" value="10" required type="number" min="1">
                                            <small class="form-help-text">Lower numbers appear first</small>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Active Status</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="is_active" value="1" checked> Show this section on team page
                                            </label>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Section Description</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="form-control" name="description" rows="3" placeholder="Optional description..."></textarea>
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="reset" class="btn btn-warning">
                                                <i class="fa fa-refresh"></i> Reset
                                            </button>
                                            <button type="submit" class="btn btn-success">
                                                <i class="fa fa-plus"></i> Add Category
                                            </button>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Staff Categories List</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="clearfix">
                                <a href="/staff-category" class="btn btn-space btn-info"><i class="fa fa-refresh"></i> Reload</a>
                                <a title="Delete" data-toggle="modal" data-target=".bs-deleteall-modal-sm" class="btn btn-space btn-danger" href="#">
                                    <i class="fa fa-trash-o"></i> Bulk Delete
                                </a>
                                <hr/>
                            </div>
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Order</th>
                                    <th>Title</th>
                                    <th>Parent Section</th>
                                    <th>Display Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($tags)>0)
                                    @foreach($tags as $tag)
                                        <tr>
                                            <td><strong>{{ $tag->order }}</strong></td>
                                            <td>
                                                <div><strong>{{ $tag->name }}</strong></div>
                                                @if($tag->section_title && $tag->section_title != $tag->name)
                                                    <small class="text-muted">Display as: {{ $tag->section_title }}</small>
                                                @endif
                                            </td>
                                            <td>
                                                @if($tag->parent_section)
                                                    <span class="label label-primary">{{ $tag->parent_section }}</span>
                                                @else
                                                    <span class="text-muted">-</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($tag->display_type == 'card-grid')
                                                    <span class="label label-info">Card Grid</span>
                                                @elseif($tag->display_type == 'individual-cards')
                                                    <span class="label label-success">Individual Cards</span>
                                                @elseif($tag->display_type == 'name-list')
                                                    <span class="label label-warning">Name List</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($tag->is_active)
                                                    <span class="badge-active">Active</span>
                                                @else
                                                    <span class="badge-inactive">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="action_button">
                                                    <a title="Edit" class="label label-success lbl_pad" href="/staff-category/edit/{{$tag->id}}">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a title="Delete" data-toggle="modal" onclick="delete_data('{{ $tag->id }}','{{ $tag->name }}')" data-target=".bs-delete-modal-sm" class="label label-danger lbl_pad" href="#">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6">
                                            <div class="alert alert-warning">
                                                <i class="fa fa-exclamation-triangle"></i> No staff categories found!
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>

                            <!-- Delete modal -->
                            <div class="modal fade bs-delete-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background: black">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title"><i class="fa fa-info-circle"></i> Confirm Delete</h4>
                                        </div>
                                        <div class="modal-body">
                                            <h5 id="tagid"></h5>
                                            <h5 id="tagtitle"></h5>
                                            <h4><strong>Are you sure want to delete?</strong></h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                                            <button type="button" class="btn btn-danger id-btn-delete" data-dismiss="modal">Yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Delete All modal -->
                            <div class="modal fade bs-deleteall-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background: black">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title"><i class="fa fa-info-circle"></i> Confirm Delete All</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure want to delete all records?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                                            <button type="button" class="btn btn-danger" onclick="delete_all_data()" data-dismiss="modal">Yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra_script')
    @include('inc.script')
    <!-- Datatables -->
    <script src="/Adminassets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/Adminassets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="/Adminassets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="/Adminassets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="/Adminassets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="/Adminassets/vendors/pdfmake/build/vfs_fonts.js"></script>

    <script type="text/javascript">
        function delete_data(id,title) {
            var getid='ID: '+id;
            var tagtitle='Title: '+title;
            document.getElementById("tagtitle").innerHTML = tagtitle;
            document.getElementById("tagid").innerHTML = getid;
            $( ".id-btn-delete" ).on('click', function(e) {
                location.href = '/staff-category/'+id+'/delete';
            });
        }
        function delete_all_data() {
            location.href = '/staff-category/delete/bulk-delete';
        }
    </script>
@endsection
