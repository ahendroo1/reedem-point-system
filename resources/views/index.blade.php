@extends('base_index')
@section('index')
<div class="p-body-main p-body-main--withSidebar ">

    <div class="p-body-content">
        
        <div class="p-body-pageContent">

            <div class="row">
                <div class="col-lg-4 pt-4">
                    <div class="card" style="width: 100%;">
                            {{-- <img src="https://t3.ftcdn.net/jpg/01/80/78/68/240_F_180786890_9s9PytnxuXLiouwBgIF5qBzezKsgjF0j.jpg"  width="100%" alt=""> --}}
                            <img src="https://t3.ftcdn.net/jpg/02/91/29/96/240_F_291299600_v18pw1RMpwnzK5u7l1pAbe0DDDY09UNv.jpg" width="100%" alt="">
                            {{-- <img src="https://t4.ftcdn.net/jpg/01/71/13/25/240_F_171132502_LHSAGGBMvJ0LuaqKQwIsmDolEtWqr3u2.jpg"  width="100%" alt=""> --}}
                        <div class="card-body text-center pt-2 pb-5">
                            
                            <h5 class="card-title">Name</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Bronze</h6>
                            <a href="#" class="card-link"><i class="fa fa-trophy"></i>
                                12 Point</a>
                            <a href="#" class="card-link"><i class="fa fa-star-half-alt"></i>
                                123 Score</a>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-8 pt-4">
    
                    <div class="modal fade bd-example-modal-lg" id="detail-coupon" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="_145I_9Cr">
                                    <div class="css-1ymlql">
                                        <img src="" class="NgqaIVvp" id="coupon-banner" alt="Produk Top Up" width="100%">
                                        
                                        <div class="modal-body pt-2">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{-- <button type="button" class="btn btn-primary btn-block btn-lg mt-5">Gunakan </button> --}}
                                            {{-- <div class="css-1ba9y97"><div class="css-4a7qeg">Produk Top Up</div><div class="css-1jko6h3"><div class="css-z8bb4s">Syarat &amp; Ketentuan</div><div class="css-5xjrq2"><ol><li>Dapatkan cashback sebesar 3% hingga Rp15.000 ke OVO Points.</li><li>Tanpa minimum transaksi.</li><li>Hanya berlaku untuk 1 (satu) kali untuk pembelian saldo Uang Elektronik.</li><li>Kupon ini hanya berlaku untuk Pengguna Baru yang belum pernah melakukan top up Uang Elektronik di Tokopedia.</li><li>1 (satu) Kupon hanya berlaku untuk 1 (satu) kali transaksi.</li><li>Kupon tidak berlaku untuk pembayaran dengan OVO points.</li><li>Cashback akan diterima maksimal 1 x 24 jam setelah transaksi berhasil serta sesuai dengan Syarat dan Ketentuan yang berlaku.&nbsp;</li><li>Tidak bisa digabung dengan Kupon/Promo lain.</li><li>Satu pengguna Tokopedia hanya boleh menggunakan 1 (satu) akun Tokopedia untuk menggunakan Kupon ini.</li><li>Pengguna diharapkan untuk memperhatikan masa berlaku masing-masing Promo. Promo tidak berlaku apabila sudah melewati batas waktu yang telah ditentukan oleh Tokopedia.</li><li>Tokopedia berhak melakukan tindakan yang diperlukan apabila diduga terjadi tindakan kecurangan dari pengguna yang merugikan pihak Tokopedia.</li><li>Dengan menggunakan Kupon ini, pengguna dianggap mengerti dan menyetujui semua syarat &amp; ketentuan yang berlaku.</li></ol></div></div><div class="css-ow7tq6"><div class="css-z8bb4s">Cara Pakai</div><div class="css-5xjrq2"><div><ol><li>Cek halaman “Kupon Saya” untuk melihat Kupon yang telah didapat.</li><li>Gunakan Kupon pada saat checkout.</li><li>Dapatkan notifikasi Kupon jika sudah berhasil digunakan.</li></ol></div></div></div></div>
                                            <div class="css-86dzfg">Detail Kupon</div><div class="css-1rxwvrv"><img src="https://ecs7.tokopedia.net/assets-tokopoints-frontend/master/img/time-0dad969e1e7b71ff43a6fd80df9b730e.svg" class="_2S1Wo2BA" width="24px" alt="masa berlaku"><span class="css-s5r243">Berlaku hingga</span><span class="css-1lp36uo"><strong>31 Mar 2020</strong></span></div><div class="css-1rxwvrv" style="margin-top: 16px;"><img src="https://ecs7.tokopedia.net/assets-tokopoints-frontend/master/img/icon-transaction-8abec073213b612b840d1bca7e566855.svg" class="_2S1Wo2BA" width="24px" alt="transaction"><span class="css-s5r243">Tanpa minimum transaksi</span><span class="css-1lp36uo"></span></div>
                                             --}}

                                             <div id="coupon-description">
                                                 
                                             </div>
                                             <div id="coupon-expired"></div>
                                            <button type="button" class="btn btn-primary btn-block btn-lg mt-5">Reedem </button>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <style>
                        .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
                            background-color:transparent;
                            color: #2577b1;
                            border: 1px solid #2577b1;
                            text-decoration: bold;
                        }
                        .nav-link{
                            color: black;
                        }
                        .card{
                            border-radius:6px;
                        }
                        .card img{
                            border-radius:5px;
                        }
                    </style>

                    @foreach ($category as $item)

                        <button class="btn btn-outline-primary" onclick="categoryget({{$item->coupon_category_id}})" >
                            <img src="{{asset('images/upload/'.$item->category_icon)}}" width="20px" alt="">
                            {{$item->coupon_category_name}}
                        </button>

                    @endforeach

                    <div class="row pt-4" id="pills-tabContent">
                        {{-- <div class="col-lg-4 pt-2">
                            <div class="card shadow-lg" style="width: 100%;border-radius:5px;" onclick="viewtcoupon(12)" >
                                <img src="https://ecs7.tokopedia.net/img/blog/promo/2020/01/Uang-Elektronik_15k_Catalog-Banner-Lite-576x192-1.jpg" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Card title</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link" onclick="viewtcoupon(12)" ><b>Coupon Name</b></a>
                                </div> 
                            </div>
                        </div>--}}
                    </div>

                </div>
            </div>

            <!-- Large modal -->
            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> --}}
            
            
        </div>
            
        
    </div>

</div>
@endsection

@section('jquery_index')

{{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}

<script>

        function categoryget(id){
    
            jQuery.ajax({
                url: "{{url('getcouponbycategoryid')}}"+ '/' + id,
                context: document.body
            }).done(function(data) {
                var card = '';
                for (var i = 0; i < data.length; i++) {
                    let img = "{{asset('images/upload/')}}" +'/'+ data[i].coupon_banner ;
                    card += '   <div class="col-lg-4 pt-2">  <div class="card shadow-lg" style="width: 100%;border-radius:5px;" onclick="viewtcoupon('+data[i].coupon_id+')" > <img src="'+img +'" alt=""> </div> </div>'
                   
                } 
                jQuery('#pills-tabContent').html(card)
            });
        };

        function viewtcoupon(id){
            jQuery.noConflict();
            
            jQuery.ajax({
                url: "{{url('getcouponid')}}"+ '/' + id,
                context: document.body
            }).done(function(data) {
                
                $('#coupon-expired').text("Expired : " + data[0].coupon_expired)
                $('#coupon-description').html( data[0].coupon_description)
                $('#coupon-banner').attr('src' , "{{asset('images/upload/')}}"+'/' + data[0].coupon_banner);
                $('#detail-coupon').modal('show')
            });
           
        }

        jQuery.noConflict();
        $( document ).ready(function() {
            var first_id = {{$coupon_first->coupon_category_id}}
            categoryget(first_id)
        });

</script>

@endsection