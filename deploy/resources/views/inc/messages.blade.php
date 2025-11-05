@if(count($errors)>0)
    @foreach($errors->all() as $error)
		<div class="col-sm-12 col-md-12">
			<div class="alert alert-danger messages">
				<button type="button" class="close" style="color:white;" data-dismiss="alert" aria-hidden="true">
					×</button>
				<i class="ace-icon fa fa-info-circle white"></i> <strong>Error!</strong> {!!$error !!}
			</div>
		</div>
    @endforeach
@endif

@if(session('success'))
	<div class="col-sm-12 col-md-12">
		<div class="alert alert-success messages">
			<button type="button" class="close" style="color:white;" data-dismiss="alert" aria-hidden="true">
				×</button>
			<i class="ace-icon fa fa-check-square-o white"></i> <strong>Success!</strong> {!!   session('success') !!}
		</div>
	</div>
@endif

@if(session('error'))
	<div class="col-sm-12 col-md-12">
		<div class="alert alert-danger messages">
			<button type="button" class="close" style="color:white;" data-dismiss="alert" aria-hidden="true">
				×</button>
			<i class="ace-icon fa fa-info-circle white"></i> <strong>Error!</strong> {!!   session('error') !!}
		</div>
	</div>
@endif

<script>
    setTimeout(function () {
        $(".messages").fadeOut("slow");
    }, 13900);

    var close = document.getElementsByClassName("close");
    var i;

    for (i = 0; i < close.length; i++) {
        close[i].onclick = function(){
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function(){ div.style.display = "none"; }, 600);
        }
    }
</script>