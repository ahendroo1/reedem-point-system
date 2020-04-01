
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
                                            <span class="button-text">Create Coupon</span>
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
                                <div class="dataList-mainRow">Trophy </div>
                                {{-- <div class="dataList-subRow">Inside the page container, directly below the bottom breadcrumb on every page.</div> --}}
                            </td>
                        </tr>

                        {{-- @foreach ($coupon_category as $item)
                                
                            <tr class="dataList-row">
                                <td class="dataList-cell dataList-cell--iconic dataList-cell--alt dataList-cell--action">
                                    <img src="{{asset('images/upload/'.$item->category_icon)}}" class="pl-2" width="50px" alt="">
                                </td>
                                <td class="dataList-cell dataList-cell--link dataList-cell--main">
                                    <a href="https://traderhub.id/admin.php?advertising/ads-before-footer.1/edit" >
                                        <div class="dataList-mainRow"> {{$item->coupon_category_name}} </div>
                                    </a>
                                </td>
                                <td class="dataList-cell dataList-cell--iconic dataList-cell--alt dataList-cell--action">
                                    <a href="{{url('coupon-id/'.$item->coupon_category_id)}}" class="iconic iconic--delete " data-xf-init="tooltip" title="Edit" >
                                        <i class="fa fa-id-card"></i>
                                    </a>
                                </td>
                                <td class="dataList-cell dataList-cell--iconic dataList-cell--alt dataList-cell--action">
                                    <a href="#" onclick="editcategory({{$item->coupon_category_id}})" class="iconic iconic--delete " data-xf-init="tooltip" title="Edit" data-xf-click="overlay">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                </td>
                                <td class="dataList-cell dataList-cell--iconic dataList-cell--alt dataList-cell--action">
                                    <a href="#"  onclick="hapuscategory({{$item->coupon_category_id}})" class="iconic iconic--delete " data-xf-init="tooltip" title="Hapus" data-xf-click="overlay">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            
                        @endforeach --}}
                        

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

@endsection