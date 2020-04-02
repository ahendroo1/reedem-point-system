
@extends('admin.base')
@section('content')
	
<!-- BODY -->
<style>
    .offCanvasMenu-closer::after{
        display: none;
    }
</style>


<div class="p-body-container">
	<div class="p-body">
		@include('admin.navbar')

		<div class="p-main">
			<main class="p-main-inner">

				<!--XF:EXTRA_OUTPUT-->

	            <noscript><div class="blockMessage blockMessage--important blockMessage--iconic u-noJsOnly">JavaScript is disabled. For a better experience, please enable JavaScript in your browser before proceeding.</div></noscript>


                <!--[if lt IE 9]><div class="blockMessage blockMessage&#45;&#45;important blockMessage&#45;&#45;iconic">You are using an out of date browser. It  may not display this or other websites correctly.<br />You should upgrade or use an <a href="https://www.google.com/chrome/browser/" target="_blank">alternative browser</a>.</div><![endif]-->
                <style>
                    .p-breadcrumbs li::after {
                        display: none;
                    }
                </style>
            
                <ul class="p-breadcrumbs">
                    
                    <li><a href="#">Edit Coupon <i class="fa fa-id-card"></i> </a></li>
                    {{-- <li><a href="https://traderhub.id/admin.php?setup/">Coupon <i class="fa fa-trophy"></i> </a></li> --}}
                    
                </ul>
                
                <form class=" mt-5" action="{{url('coupon-update/'.$coupon->coupon_id)}}" method="post"  enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Coupon Name</label>
                        <input type="text" name="coupon_name" class="form-control" id="inputEmail4" value="{{$coupon->coupon_name}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4"> Expired</label>
                        <input type="date" name="coupon_expired" class="form-control" id="inputPassword4" value="{{$coupon->coupon_expired}}">
                      </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Tier</label>
                            <select id="tier-select"  name="coupon_tier_id" class="form-control">
                                @foreach ($tier as $item)
                                    <option value="{{$item->coupon_tier_id}}" {{$item->coupon_tier_id === $coupon->coupon_tier_id ? "selected" : ""}} >{{$item->trophy_tier}}</option>
                                @endforeach
                            </select>
                            {{-- {{dd($coupon)}} --}}
                            {{-- <small class="text-success " id="tier-point">Point : <b>{{$coupon->point_start}} - {{$coupon->point_finish}}</b> </small> --}}
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputPassword4"> Category</label>
                            <select id="inputState" name="coupon_category_id" class="form-control">
                                @foreach ($coupon_category as $item)
                                    <option value="{{$item->coupon_category_id}}" {{$item->coupon_category_id === $coupon->coupon_category_id ? "selected" : ""}} >{{$item->coupon_category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Coupon Description</label>
                        <textarea name="coupon_description" class="form-control" id="editor" cols="30" rows="10">{{$coupon->coupon_description}}</textarea>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">File </label>
                        <input type="file" name="coupon_banner" class="form-control" id="filename1" title="Upload Foto" accept="image/*" onchange="imgpreview(this,'preview')" >

                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputZip">Banner</label>
                        <img id="preview" src="{{asset('images/upload').'/'.$coupon->coupon_banner}}" alt="" width="100%"/>
                      </div>
                      
                    </div>
                    <button type="submit" class="button button--icon  float-right">Update Coupon</button>
                
                </form>

			</main>
		</div>
	</div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="edit-tier" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalCenterTitle">Edit Tier</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body modal-body-edit-tier">
		  
			<form action="" method="post" enctype="multipart/form-data" id="edit-tier-form">
				{{ csrf_field() }}
				<div class="form-group row">
					<div class="col-sm-12">
						<label for="inputEmail3" class="col-form-label">Tier name</label>
						<input type="text" name="trophy_tier" class="form-control" id="edit-tier-name" placeholder="" >
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-6">
						<label for="inputEmail3" class="col-form-label">Start point Tier </label>
						<input type="number" name="point_start" class="form-control" placeholder="0" id="edit-tier-start-point">
					</div>
					<div class="col-sm-6">
						<label for="inputEmail3" class="col-form-label">Finish point Tier </label>
						<input type="number" name="point_finish" class="form-control" placeholder="0" id="edit-tier-finish-point">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-10">
						<label for="inputEmail3" class="col-form-label">Icon Tier</label>
						<br>
						<input type="file" name="trophy_icon"  id="">
						<img src="" id="edit-tier-icon" alt="" class="mt-2">
					</div>
				</div>
			
		</div>
		<div class="modal-footer">
		  {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
				<button type="submit" class="btn btn-outline-success btn-sm" id="btn-delete-tier" >Update</button>
			</form>
		</div>
	  </div>
	</div>
  </div>

  
  <!-- Modal -->
  <div class="modal fade" id="delete-tier" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalCenterTitle">Delete Tier</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body text-center modal-body-delete-tier">
		  <img src="" alt="" width="100%">
		  <h4></h4>
		  <b></b>
		</div>
		<div class="modal-footer">
		  {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
		  <a href="#" class="btn btn-outline-danger btn-sm" id="btn-delete-tier" >Delete</a>
		</div>
	  </div>
	</div>
  </div>





@endsection

@section('jquery')
  
<script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>
    
<script>tinymce.init({selector:'textarea'});</script>

<script>
    
    function imgpreview(gambar,idpreview){
        var gb = gambar.files;
                
        for (var i = 0; i < gb.length; i++){
            var gbPreview = gb[i];
            var imageType = /image.*/;
            var preview=document.getElementById(idpreview);            
            var reader = new FileReader();
                    
            if (gbPreview.type.match(imageType)) {
                    preview.file = gbPreview;

                        reader.onload = (function(element) { 
                            return function(e) { 
                                element.src = e.target.result; 
                            }; 
                        })(preview);

                    reader.readAsDataURL(gbPreview);
            }else{
                    alert("Type file tidak sesuai. Khusus image.");
            }
                
        }    
    }
	function deletetier(data){
		console.log(data)
		$('#delete-tier').modal('show')
		$('.modal-body-delete-tier img').attr('src', data[4])
		$('.modal-body-delete-tier h4').text( data[1])
		$('.modal-body-delete-tier b').text( data[2]+ ' - '+ data[3])
		$('#btn-delete-tier').attr("href", "{{url('delete-tier')}}/"+data[0]);
	}
	function edittier(data){
		console.log(data)
		$('#edit-tier').modal('show')
		$('#edit-tier-name').val(data[1])
		$('#edit-tier-start-point').val(data[2])
		$('#edit-tier-finish-point').val(data[3])	
		$('#edit-tier-icon').attr("src", data[4] )
		$('#edit-tier-form').attr("action", "{{url('update-tier')}}"+"/"+data[0])
		
	}


    
    ClassicEditor.create(

document.querySelector( '#editor' ), {
    image: {
        // You need to configure the image toolbar, too, so it uses the new style buttons.
        toolbar: [ 'imageTextAlternative', '|', 'imageStyle:alignLeft', 'imageStyle:full', 'imageStyle:alignRight' ],

        styles: [
            // This option is equal to a situation where no style is applied.
            'full',

            // This represents an image aligned to the left.
            'alignLeft',

            // This represents an image aligned to the right.
            'alignRight'
        ]
    }
} 


).catch( error => {

console.error( error );

});

</script>
    <script>

    </script>
@endsection

