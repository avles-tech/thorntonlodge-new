@extends('layout.admin')
@section('contitle')
    <title>Menu</title>
@endsection
@section('extra_css')
<style>
    .menu-container {
        text-align: center;
    }

    .menu-link {
        display: inline-block;
        font-size: 16px;
        color: #6ecfe9;
        text-decoration: none;
        border: 2px solid #6ecfe9;
        padding: 10px 15px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .menu-link span {
        font-weight: bold;
    }

    .menu-link:hover {
        background-color: #6ecfe9;
        color: #fff;
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
                    <h3>Menu</h3>
                </div>
                
            </div>
            <div class="clearfix"></div>
            <div class="menu-container">
                <a href="javascript:void(0);" onclick="window.open('/Uploads/menu_of_the_year/MenuOfTheYear.pdf', '_blank', 'width=1000,height=600');" class="menu-link">Click here to see <span>Menu of the year</span></a>
            </div>

           
                {!! Form::open(['action' => ['UploadController@store'], 'class' => 'form-horizontal form-label-left','role' => 'form', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
               
                <input type="file" name="pdfFile" accept="application/pdf">
                <br>
                <button type="submit" class="btn btn-success">
                    <i class="ace-icon fa fa-check icon-on-right"></i>
                   Upload new Menu
                </button>
                {!! Form::close() !!}
           
            
            
            
            
        </div>
    </div>

    <!-- /page content -->
    <hr/>
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
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>-->
    <script type="text/javascript">
        function delete_data(id,title) {
            var getid='ID: '+id;
            var tagtitle='Title: '+title;
            //:set the element values
            document.getElementById("tagtitle").innerHTML = tagtitle;
            document.getElementById("tagid").innerHTML = getid;
            //:Delete item
            $( ".id-btn-delete" ).on('click', function(e) {
                location.href = '/staff-category/'+id+'/delete';
            });
        }
        function delete_all_data() {
            location.href = '/staff-category/delete/bulk-delete';
        }

    </script>
@endsection


