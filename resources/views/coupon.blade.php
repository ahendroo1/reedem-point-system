@extends('admin.base')
@section('content')

        
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
						
						<li><a href="https://traderhub.id/admin.php?setup/">Coupon <i class="fa fa-id-card"></i> </a></li>
						
						{{-- <li><a href="https://traderhub.id/admin.php?setup/">Coupon <i class="fa fa-trophy"></i> </a></li> --}}
						
					</ul>
				
				
					<div class="p-main-header">
					
						
							<div class="p-title ">
							
									<h1 class="p-title-value">
										Coupon Point System
									</h1>
								
								
									<div class="p-title-pageAction">
                                        <a href="#" class="button button--icon "  data-toggle="modal" data-target="#exampleModal">
                                            <span class="button-text">Create Category </span>
                                        </a>
                                    </div>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Create Category </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{url('create-category')}}" method="post" enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                                        <div class="form-group row">
                                                            <div class="col-sm-10">
                                                                <label for="inputEmail3" class="col-form-label">Category name</label>
                                                                <input type="text" name="coupon_category_name" class="form-control" id="inputEmail3">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-10">
                                                                <label for="inputEmail3" class="col-form-label">Icon</label>
                                                                <br>
                                                                <input type="file" name="category_icon"  id="inputEmail3">
                                                            </div>
                                                        </div>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="button button--icon   btn-sm">Create</button>
                                                </div>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
							</div>
					
					</div>
				
				<div class="p-content" id="content">
					
			<form action="/admin.php?advertising/toggle" method="post" class="block"
				 data-xf-init="ajax-submit"
			>
				
		<div class="block-outer">
			
        
            <div class="block-outer-opposite quickFilter u-jsOnly" data-xf-init="filter" data-key="advertising" data-ajax="">
                <div class="inputGroup inputGroup--inline inputGroup--joined">
                    <input type="text" class="input js-filterInput" placeholder="Filter..." data-xf-key="f" />
                
                </div>
            </div>

		</div>
		<div class="block-container">
			<div class="block-body">
				
			<div class="dataList ">

                <table class="dataList-table table-responsive">
                        
                    <tbody class="dataList-rowGroup">
                                            
                        <tr class="dataList-row dataList-row--noHover dataList-row--subSection">
                            <td class="dataList-cell dataList-cell--main" colspan="3">
                                <div class="dataList-mainRow">Coupon Category </div>
                                {{-- <div class="dataList-subRow">Inside the page container, directly below the bottom breadcrumb on every page.</div> --}}
                            </td>
                        </tr>

                        @foreach ($coupon_category as $item)
                                
                            <tr class="dataList-row">
                                <td class="dataList-cell dataList-cell--iconic dataList-cell--alt dataList-cell--action">
                                    <img src="{{asset('images/upload/'.$item->category_icon)}}" class="pl-2" width="50px" alt="">
                                </td>
                                <td class="dataList-cell dataList-cell--link dataList-cell--main">
                                    <a href="#" >
                                        <div class="dataList-mainRow"> {{$item->coupon_category_name}} </div>
                                    </a>
                                </td>
                                <td class="dataList-cell dataList-cell--iconic dataList-cell--alt dataList-cell--action">
                                    <a href="#"  onclick="editcategory(['{{$item->coupon_category_id}}', '{{$item->coupon_category_name}}', '{{asset('images/upload/'.$item->category_icon)}}'])"  class="iconic iconic--delete " data-xf-init="tooltip" title="Edit" >
                                        <i class="fa fa-pen"></i>
                                    </a>
                                </td>
                                <td class="dataList-cell dataList-cell--iconic dataList-cell--alt dataList-cell--action">
                                    <a href="#"  onclick="deletecategory(['{{$item->coupon_category_id}}', '{{$item->coupon_category_name}}', '{{asset('images/upload/'.$item->category_icon)}}'])" class="iconic iconic--delete " data-xf-init="tooltip" title="Hapus" >
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            
                        @endforeach

                        <!-- Modal -->
                        <div class="modal fade" id="delete-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Delete Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Category name : <b class="cname"></b> </p> 
                                        <img src="" alt="" class="cicon" width="60px">
                                    </div>
                                    <div class="modal-footer">
                                        <a  class="btn btn-outline-danger btn-sm modal-delete-category" >Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </tbody>
                
                </table>
			</div>
                {{-- 		
				<div class="block-footer">
					<span class="block-footer-counter"><span class="js-displayTotals" data-count="1" data-total="1" data-xf-init="tooltip" title="There are 1 items in total">Showing all items</span></span>
				</div> --}}
			</div>
		</div>
	
				<input type="hidden" name="_xfToken" value="1585630502,5960bd220dbeb2462c52dc5596743cdc" />
				
            </form>
                        <a href="#" class="button button--icon float-right mt-5 mb-2"  data-toggle="modal" data-target="#create-coupon">
                            <span class="button-text">Create Coupon</span>
                        </a>
  
                        
                    <!-- Modal -->
                    <div class="modal fade" id="create-coupon" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Create Coupon</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{url('create-coupon')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="inputEmail3" class="col-form-label">Tier</label>
                                                <select name="coupon_tier_id" class="form-control" id="">
                                                    <option value="">- Select Tier -</option>
                                                    @foreach ($tier as $item)
                                                        <option value="{{$item->coupon_tier_id}}">{{$item->trophy_tier}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="inputEmail3" class="col-form-label">Category</label>
                                                <select name="coupon_category_id" class="form-control" id="">
                                                        <option value="">- Select Category -</option>
                                                    @foreach ($coupon_category as $item)

                                                        <option value="{{$item->coupon_category_id}}"> {{$item->coupon_category_name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="inputEmail3" class="col-form-label">Coupon Name</label>
                                                <input type="text" name="coupon_name" placeholder="Name" class="form-control" id="inputEmail3" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="inputEmail3" class="col-form-label">Expired</label>
                                                <input type="date" name="coupon_expired" class="form-control" id="inputEmail3" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <label for="inputEmail3" class="col-form-label">Banner Coupon</label>
                                                <br>
                                                <input type="file" name="coupon_banner"  id="inputEmail3"  required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="inputEmail3" class="col-form-label">Coupon Description</label>
                                                <textarea rows="14" cols="50" rows="10" placeholder="Coupon Description" class="form-control" name="coupon_description" id="editor" ></textarea>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                    <button type="submit" class="button button-icon btn-sm">Create</button>
                                </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                            
                        <table class="table table-hover  mb-5">
                            <thead>
                                <tr>
                                    <th scope="col">Tier</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Coupon</th>
                                    <th class="text-center">Point</th>
                                    <th class="text-center">Coupon expired</th>
                                    <th scope="col">Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupon as $item)
                                    
                                <tr>
                                    <td>
                                        <img src="{{asset('images/upload/'.$item->trophy_icon)}}" width="50px" alt="">
                                        {{$item->trophy_tier}}
                                    </td>
                                    <td>
                                        
                                        <img src="{{asset('images/upload/'.$item->category_icon)}}" width="50px" alt="">
                                        {{$item->coupon_category_name}}
                                    </td>
                                    <td>
                                        <img src="{{asset('images/upload/'.$item->coupon_banner)}}" width="50px" alt="">
                                        {{$item->coupon_name}}
                                        
                                    </td>
                                    <td class="text-center">{{$item->point_start}} - {{$item->point_finish}}</td>
                                    <td class="text-center">   {{$item->coupon_expired}}</td>
                                    <td>
                                        <div class="btn-group">
                                            {{-- <a href="#" class="btn btn-outline-primary btn-sm">
                                                <i class="fa fa-link"></i>
                                            </a> --}}

                                            <a href="{{url('edit-coupon/'.$item->coupon_id)}}" class="btn btn-outline-primary btn-sm">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <button type="button" onclick="deletecoupon([ {{$item->coupon_id}}, '{{$item->coupon_name}}'])" class="btn btn-outline-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                                                    <!-- Button trigger modal -->
                            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                Launch demo modal
                            </button> --}}
                            
                            <!-- Modal -->
                            <div class="modal fade" id="delete-coupon" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Delete Coupon</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body modal-body-delete-coupon">
                                            Delete Coupon <b class="text-danger" ></b> ?
                                        </div>
                                        <div class="modal-footer">
                                            {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                            <a  class="btn btn-outline-danger btn-sm btn-delete-coupon">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="modal fade" id="edit-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Category</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body modal-body-delete-coupon">
                                            <form action="" method="post" enctype="multipart/form-data" id="edit-category-form">
                                                {{ csrf_field() }}
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <label for="inputEmail3" class="col-form-label">Category name</label>
                                                        <input type="text" name="coupon_category_name" class="form-control" id="edit-category-name">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <label for="inputEmail3" class="col-form-label">Icon</label>
                                                        <br>
                                                        <input type="file" name="category_icon"  id="inputEmail3">
                                                        <img src="" id="edit-icon-category" class="pt-2" alt="">
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                                <button  class="btn btn-outline-success btn-sm btn-delete-coupon">Update</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                    </div>
		
				</div>
			</main>
		</div>
	</div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>
    
<script>tinymce.init({selector:'textarea'});</script>
<script>

    function editcoupon(data){
        
        $('#edit-coupon').modal('show')

        // $('#edit-coupon-tier').val(data[1])

        $('#edit-coupon-form').attr('action', "{{url('update-coupon')}}"+'/'+data[0])
    }
    

    function editcategory(data){
        $('#edit-category').modal('show')

        $('#edit-category-name').val(data[1])
        $('#edit-icon-category').attr('src', data[2])
        $('#edit-category-form').attr('action', "{{url('update-category')}}"+'/'+data[0])
    }


    function deletecoupon(data){
        $('#delete-coupon').modal('show')

        $('.modal-body-delete-coupon b').text(data[1])
        $('.btn-delete-coupon').attr("href", "{{url('delete-coupon')}}"+'/'+ data[0])
    }
    function deletecoupon(data){
        $('#delete-coupon').modal('show')

        $('.modal-body-delete-coupon b').text(data[1])
        $('.btn-delete-coupon').attr("href", "{{url('delete-coupon')}}"+'/'+ data[0])
    }

     ClassicEditor.create(

document.querySelector( '#editor2' ), {
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
@endsection