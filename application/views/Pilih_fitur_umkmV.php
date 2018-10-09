<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
     <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url()?>assets/images/icon/-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url()?>assets/images/icon/-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>assets/images/icon/-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/images/icon/-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>assets/images/icon/-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url()?>assets/images/icon/-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url()?>assets/images/icon/-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url()?>assets/images/icon/-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url()?>assets/images/icon/-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url()?>assets/images/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url()?>assets/images/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/images/icon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url()?>assets/images/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Pilih Fitur UMKM - Arnawa</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

</head>

<body>
    <div class="logo">
        <span class="db"><img src="<?php echo base_url()?>assets/images/Arnawa_Apps Logo.png" alt="logo" style="width: 20%;" /></span><br><br>
        <h2 class="font-medium m-b-10" style="color: #4798e8;">Pilih Fitur UMKM</h2>
    </div>
    <?php
    $data=$this->session->flashdata('sukses');
    if($data!=""){ 
        ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            <h3 class="text-success"><i class="fa fa-check-circle"></i> Sukses!</h3> <?=$data;?>
        </div>
        <?php 
    } 
    ?>
    <?php 
    $data2=$this->session->flashdata('error');
    if($data2!=""){ 
        ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            <h3 class="text-danger"><i class="fa fa-check-circle"></i> Gagal!</h3> <?=$data2;?>
        </div>
        <?php 
    } 
    ?>
    <?php echo validation_errors(); ?>
    <form class="form p-t-20" action="<?php echo base_url('KoperasiC/input_fitur')?>" method="post" onSubmit="return validate()">
        <div class="row">
            <input type="hidden" class="form-control form-control-lg" placeholder="Nama Koperasi" name="id" id="id"  value="<?php echo $dataDiri['id']?>">
            <div class="col-md-6">
                <input type="checkbox" name="fitur[]" id="shopping" class="checkbox-input" value="shopping" />
                <label for="shopping" class="checkbox-label">
                    <div class="checkbox-text">
                        <p class="checkbox-text--title">Shopping</p>
                        <p class="checkbox-text--description">Klik untuk <span class="un">Tidak</span> Memilih ini!</p>
                    </div>
                </label>

                <input type="checkbox" name="fitur[]" id="ppob" class="checkbox-input" value="ppob" />
                <label for="ppob" class="checkbox-label">
                    <div class="checkbox-text">
                        <p class="checkbox-text--title">PPOB</p>
                        <p class="checkbox-text--description">Klik untuk <span class="un">Tidak</span> Memilih ini!</p>
                    </div>
                </label>
                <input type="checkbox" name="fitur[]" id="travel" class="checkbox-input" value="travel" />
                <label for="travel" class="checkbox-label">
                    <div class="checkbox-text">
                        <p class="checkbox-text--title">Travel</p>
                        <p class="checkbox-text--description">Klik untuk <span class="un">Tidak</span> Memilih ini!</p>
                    </div>
                </label>
            </div>
            <div class="col-md-6">
                <input type="checkbox" name="fitur[]" id="forum" class="checkbox-input" value="forum" />
                <label for="forum" class="checkbox-label">
                    <div class="checkbox-text">
                        <p class="checkbox-text--title">Forum</p>
                        <p class="checkbox-text--description">Klik untuk <span class="un">Tidak</span> Memilih ini!</p>
                    </div>
                </label>

                <input type="checkbox" name="fitur[]" id="event" class="checkbox-input" value="event" />
                <label for="event" class="checkbox-label">
                    <div class="checkbox-text">
                        <p class="checkbox-text--title">Event</p>
                        <p class="checkbox-text--description">Klik untuk <span class="un">Tidak</span> Memilih ini!</p>
                    </div>
                </label>

                <input type="checkbox" name="fitur[]" id="pos" class="checkbox-input" value="pos" />
                <label for="pos" class="checkbox-label">
                    <div class="checkbox-text">
                        <p class="checkbox-text--title">Point of Sales</p>
                        <p class="checkbox-text--description">Klik untuk <span class="un">Tidak</span> Memilih ini!</p>
                    </div>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <input type="checkbox" name="fitur[]" id="news" class="checkbox-input" value="news" />
                <label for="news" class="checkbox-label">
                    <div class="checkbox-text">
                        <p class="checkbox-text--title">News</p>
                        <p class="checkbox-text--description">Klik untuk <span class="un">Tidak</span> Memilih ini!</p>
                    </div>
                </label>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row m-t-20">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <input type="submit" class="btn btn-lg btn-default btn-block" name="submit" id="simpan" value="Simpan">
            </div>
            <div class="col-md-4"></div>
        </div>
    </form>

    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">SELAMAT !</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <p>Anda Berhasil Mendaftarkan Koperasi Anda.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url()?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>
    <script src="<?php echo base_url()?>assets/dist/js/app.init.horizontal-fullwidth.js"></script>
    <script src="<?php echo base_url()?>assets/dist/js/app-style-switcher.horizontal.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url()?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url()?>assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url()?>assets/dist/js/custom.min.js"></script>
    <script src="<?php echo base_url()?>assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $('[data-toggle="tooltip "]').tooltip();
        $(".preloader ").fadeOut();
    </script>

    <script type="text/javascript">
     function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    $(function () {
      $("#simpan").click(function () {
       var password = $("#password").val();
       var confirmPassword = $("#confirmpass").val();
       var pass_length = password.length;
       if (password != confirmPassword) {
        alert("Kata sandi tidak sama.");
                    // document.getElementById("demo").innerHTML = "Kata sandi tidak sama.";
                    return false;
                }else{
                	if(pass_length < 6){
                		alert("Panjang Kata sandi minimal 6 karakter");
                		return false;
                	}else{
                		if(pass_length > 50){
                			alert("Panjang Kata sandi maksimal 50 karakter");
                			return false;
                		}else{
                			return true;
                		}
                	}
                }
            });
  });
</script>


<script language="javascript">
    function validate()
    {
        var chks = document.getElementsByName('fitur[]');
        var hasChecked = false;
        for (var i = 0; i < chks.length; i++)
        {
         if (chks[i].checked)
         {
             hasChecked = true;
             break;
         }
     }

     if (hasChecked == false)
     {
         alert("Silahkan pilih minimal satu fitur.");
         return false;
     }

     return true;
 }
 $(document).ready(function(){
        // City change
        $('#propinsi').change(function(){
            var propinsi = $(this).val(); //ambil value dr kode_unit
            // window.alert(unit);

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>KoperasiC/get_kabupaten_kota',
                method: 'post',
                data: {id_propinsi: propinsi}, // data post ke controller 
                dataType: 'json',
                success: function(response){
                    // Remove options
                    $('#kota').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(daftar,data){
                        $('#kota').append('<option value="'+data['id_kabupaten_kota']+'">'+data['nama_kabupaten_kota']+'</option>');
                    });
                }
            });
        });

        $('#kota').change(function(){
            var kota = $(this).val(); //ambil value dr kode_unit
            // window.alert(unit);

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>KoperasiC/get_kecamatan',
                method: 'post',
                data: {id_kabupaten_kota: kota}, // data post ke controller 
                dataType: 'json',
                success: function(response){
                    // Remove options
                    $('#kecamatan').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(daftar,data){
                        $('#kecamatan').append('<option value="'+data['id_kecamatan']+'">'+data['nama_kecamatan']+'</option>');
                    });
                }
            });
        });

        $('#kecamatan').change(function(){
            var kecamatan = $(this).val(); //ambil value dr kode_unit
            // window.alert(unit);

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>KoperasiC/get_kelurahan',
                method: 'post',
                data: {id_kecamatan : kecamatan}, // data post ke controller 
                dataType: 'json',
                success: function(response){
                    // Remove options
                    $('#kelurahan').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(daftar,data){
                        $('#kelurahan').append('<option value="'+data['id_kelurahan']+'">'+data['nama_kelurahan']+'</option>');
                    });
                }
            });
        });
    });
</script>


</body>

</html>