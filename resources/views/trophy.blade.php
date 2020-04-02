
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
						
						<li><a href="https://traderhub.id/admin.php?setup/">Trophy <i class="fa fa-trophy"></i> </a></li>
						
						{{-- <li><a href="https://traderhub.id/admin.php?setup/">Coupon <i class="fa fa-trophy"></i> </a></li> --}}
						
					</ul>
				
				
					<div class="p-main-header">
							<div class="p-title ">
							
									<h1 class="p-title-value">
										Trophy Point System
									</h1>
								
									<div class="p-title-pageAction">
                                        <a href="#" class="button button--icon "  data-toggle="modal" data-target="#exampleModal">
                                            <span class="button-text">Create Trophy</span>
                                        </a>
                                    </div>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Create Trophy </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{url('create-tier')}}" method="post" enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <label for="inputEmail3" class="col-form-label">Tier name</label>
                                                                <input type="text" name="trophy_tier" class="form-control" placeholder="" id="inputEmail3">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-6">
                                                                <label for="inputEmail3" class="col-form-label">Start point Tier </label>
                                                                <input type="number" name="point_start" class="form-control" placeholder="0" id="inputEmail3">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label for="inputEmail3" class="col-form-label">Finish point Tier </label>
                                                                <input type="number" name="point_finish" class="form-control" placeholder="0" id="inputEmail3">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-10">
                                                                <label for="inputEmail3" class="col-form-label">Icon Tier</label>
                                                                <br>
                                                                <input type="file" name="trophy_icon"  id="inputEmail3">
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

                
				<table class="table table-hover">
					<thead>
						<tr>
						<th scope="col" class="text-center">Tier</th>
						<th scope="col"  class="text-center">Point required</th>
						<th scope="col"  class="text-right">Tools</th>
						</tr>
					</thead>
					<tbody>
						
						@foreach ($tier as $item)
							
						<tr>
							<td class="text-center" width="20%">
								<img src="{{asset('images/upload/'.$item->trophy_icon)}}" width="50px" alt="">
								<p> {{$item->trophy_tier}} </p>
							</td>
							<td width="20%" class="text-center">
								<p> {{$item->point_start}} - {{$item->point_finish}} </p>
							</td>
							<td class="text-right">
								<div class="btn-group">
									<a href="#"  onclick="edittier([{{$item->coupon_tier_id}}, '{{$item->trophy_tier}}', '{{$item->point_start}}','{{$item->point_finish}}', '{{asset('images/upload/'.$item->trophy_icon)}}'  ])" class="btn btn-outline-primary btn-sm">
										<i class="fa fa-pen"></i>
									</a>
									<a href="#" onclick="deletetier([{{$item->coupon_tier_id}}, '{{$item->trophy_tier}}', '{{$item->point_start}}','{{$item->point_finish}}', '{{asset('images/upload/'.$item->trophy_icon)}}'  ])" class="btn btn-outline-danger btn-sm">
										<i class="fa fa-trash"></i>
									</a>
								</div>
							</td>
						</tr>
						@endforeach

						
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
		
				</div>
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

<script>
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
</script>

@endsection

