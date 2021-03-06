<!-- input-forms -->
<style>
label    {color: black; font-size:15px;}
</style>
<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2><center>Form Pengisian</center></h2>
					</div>
					<div class="panel panel-widget forms-panel">
                        <div class="col-lg-6" style="float:none;margin:auto;">
                        <div class="form">
								<div class="form-body">
									<form action="<?= base_url('dosen/penelitian/addformproposal');?>" method="post" enctype="multipart/form-data"> 
                                    <div class="form-group">
                                    <label>Jenis Penelitian</label>
                                    <select class="form-control" name="jenis" id="jenis">
                                        <option value="">Please Select</option>
                                        <?php
                                        foreach ($jenispenelitian as $jp) {
                                            ?>
                                            <option value="<?php echo $jp->id; ?>"><?php echo $jp->jenis; ?> - <?php echo $jp->tgl; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                        <div class="form-group"> 
											<label>Judul Penelitian</label> 
											<input name="judul" class="form-control" id="judul"> 
                                            <span id="judul_result" style='color:red'></span>
										</div> 
										<div class="form-group"> 
											<label>Abstrak</label> 
											<textarea name="abstrak" rows="4" class="form-control"> </textarea>
										</div> 
										<div class="form-group"> 
											<label">Lokasi</label> 
											<input name="lokasi" class="form-control" placeholder="Kelurahan, Kota, Provinsi"> 
										</div> 
										<div class="form-group"> 
											<label>Mitra</label> 
											<input name="mitra" class="form-control"> 
                                        </div> 
                                        <div class="form-group"> 
											<label>Lama Penelitian</label> 
											<div class="form-group input-group">
                                            <input type="text" class="form-control" name="bulan">
                                            <span class="input-group-addon">bulan</span>
                                        </div> 
										
                                        <div class="form-group">
                                    <label>Biaya</label>
                                    <div class="form-group input-group">
                                    <span class="input-group-addon">Rp.</span>
                                    <input type="text" class="form-control currency" name="biaya">
                                    <span class="input-group-addon">,00</span>
                                </div>
                                </div>

                                <div class="form-group">
                                    <label>Pendanaan</label>
                                    <select class="form-control" name="sumberdana" id="sumberdana">
                                        <option value="">Please Select</option>
                                        <?php
                                        foreach ($sumberdana as $sd) {
                                            ?>
                                            <option value="<?php echo $sd->id; ?>"><?php echo $sd->sumberdana; ?> - <?php echo $sd->tgl; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Luaran</label>
                                    <div class="input-group control-group after-add-more2">
                                    <select class="form-control" id="selectpicker2"  data-live-search="true">
                                        <option value="">Please Select</option>
                                        <?php
                                        foreach ($luaran as $l) {
                                            ?>
                                            <option value="<?php echo $l->id; ?>"><?php echo $l->luaran; ?> - <?php echo $l->tgl; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <div class="input-group-btn"> 
                                    <button class="btn btn-success add-more2" id="btnadd2" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                </div>
                                </div></br>

                                <div class="form-group">
                                <label>Anggota Dosen</label>
                                <div class="input-group control-group after-add-more">
                               <select class="form-control" id="selectpicker1" name="dosen[]" data-live-search="true">
                                    <option value="">Please Select</option>
                                    <?php
                                    foreach ($dosen as $ds) {
                                        ?>
                                        <option value ="<?php echo $ds->nip; ?>"><?php echo $ds->nama ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                 <div class="input-group-btn"> 
                                    <button class="btn btn-success add-more" id="btnadd" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                </div>
                                </div>

                                <div class="form-group">
                                <label><br>Anggota Mahasiswa (NIM)</label>
                                <div class="input-group-btn"> 
                                    <button class="btn btn-success add-more1" type="button"><i class="fa fa-plus"></i> Add</button>
                                </div>
                                <div class="input-group control-group1 after-add-more1" style="margin-top:10px">
                                <input class="form-control" name="nim_mahasiswa[]" placeholder="NIM Mahasiswa" >
                                <input class="form-control" name="nama_mahasiswa[]" placeholder="Nama Mahasiswa" >
                               <!-- <select class="form-control" name="mahasiswa[]">
                                    <option value="">Please Select</option>
                                    <?php
                                    foreach ($mahasiswa as $mhs) {
                                        ?>
                                        <option value ="<?php echo $mhs->nim; ?>"><?php echo $mhs->nama ?></option>
                                        <?php
                                    }
                                    ?> -->
                                <!-- </select> -->
                                 
                                </div>

                                
                            </div>

                            <div class="copy2 hide">
                                <div class="control-group input-group" style="margin-top:10px">
                                <input class="form-control id-luaran" name="luaran[]" hidden >
                                <input class="form-control nama-luaran"  readonly>
                                
                                    <div class="input-group-btn"> 
                                    <button class="btn btn-danger remove2" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                    </div>
                                </div>
                            </div>

                            <div class="copy hide">
                                <div class="control-group input-group" style="margin-top:10px">
                                <input class="form-control id-dosen" name="dosen[]" hidden >
                                <input class="form-control nama-dosen"  readonly>
                                
                                    <div class="input-group-btn"> 
                                    <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="copy hide">
                                <div class="control-group input-group" style="margin-top:10px">
                                <select class="form-control" name="dosen[]">
                                    <option value="">Please Select</option>
                                    <?php
                                    foreach ($dosen as $ds) {
                                        ?>
                                        <option value ="<?php echo $ds->nip; ?>"><?php echo $ds->nama ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                    <div class="input-group-btn"> 
                                    <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                    </div>
                                </div>
                            </div> -->

                            <div class="copy1 hide">
                                <div class="control-group1 input-group" style="margin-top:10px">
                                <input class="form-control" name="nim_mahasiswa[]" placeholder="NIM Mahasiswa" >
                                <input class="form-control" name="nama_mahasiswa[]" placeholder="Nama Mahasiswa" >
                                <!-- <select class="form-control" name="mahasiswa[]">
                                    <option value="">Please select</option>
                                    <?php
                                    foreach ($mahasiswa as $mhs) {
                                        ?>
                                        <option value ="<?php echo $mhs->nim; ?>"><?php echo $mhs->nama ?></option>
                                        <?php
                                    }
                                    ?>
                                </select> -->
                                    <div class="input-group-btn"> 
                                    <button class="btn-sm btn-danger remove1" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group"> 
											<label for="exampleInputFile">File Proposal</label><br> 
											<input type="file" name="file_prop"> <br>
                                            <label style="color:red; font-size:12px;">.pdf maks 10mb</label>
                                        </div> 

										<button type="submit"  id="submit" class="btn btn-success w3ls-button">Submit</button> 
									</form> 
								</div>
							</div>
						</div>
                    </div>
                                </div>
</div>


<script src="<?= base_url('assets/template/js/jquery-1.11.0.js');?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#selectpicker1').selectpicker();
        $('#btnadd').prop('disabled', true);
        $('#selectpicker2').selectpicker();
        $('#btnadd2').prop('disabled', true);
        $( '.currency' ).keyup(function(event) {
            // skip for arrow keys
            if(event.which >= 37 && event.which <= 40) return;

            // format number
            $(this).val(function(index, value) {
            return value
            .replace(/\D/g, "")
            .replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            ;
            });
            });
                    // $('#selectpicker2').selectpicker();
    });
    </script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#selectpicker2').on('change', function(){
            $('#btnadd2').prop('disabled', false);
            
      $("body").on("click",".remove2",function(){ 
          $(this).parents(".control-group").remove();
      });
    });

    $("#btnadd2").on('click',function(){ 
                var temp = $(".copy2.hide").clone(true); 
                $('.nama-luaran', temp).val($('#selectpicker2 option:selected').text());
                $('.id-luaran', temp).val($('#selectpicker2').val());
                $(temp).removeClass("hide");
          $(".after-add-more2").after(temp);
          $('#selectpicker2').val("").selectpicker('refresh');


      });


        })
      
    </script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#selectpicker1').on('change', function(){
            $('#btnadd').prop('disabled', false);
            
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });

    $("#btnadd").on('click',function(){ 
                var temp = $(".copy.hide").clone(true); 
                $('.nama-dosen', temp).val($('#selectpicker1 option:selected').text());
                $('.id-dosen', temp).val($('#selectpicker1').val());
                $(temp).removeClass("hide");
          $(".after-add-more").after(temp);
          $('#selectpicker1').val("").selectpicker('refresh');


      });


        })
      
    </script>

<script type="text/javascript"> 
        $(document).ready(function(){
            $('#submit').prop('disabled',true);
            $('#judul').change(function(){
            var judul = $('#judul').val();
            if(judul != ''){
                $.ajax({
                    url:"<?php echo base_url('dosen/penelitian/checkJudul');?>",
                    method:"post",
                    data:{judul:judul},
                    dataType: 'json',
                    success:function(data){
                        if(data=="Judul belum diajukan"){
                            $('#submit').prop('disabled',false);
                            $('#judul_result').hide();
                        }else{
                            $('#submit').prop('disabled', true);
                            $('#judul_result').show();
                            $('#judul_result').html(data);
                        }
                        //console.log(data);
                    }
                });
            }
            });
            });
    </script>



    <script type="text/javascript">
    $(document).ready(function() {
      $(".add-more1").click(function(){ 
          var html = $(".copy1").html();
          $(".after-add-more1").after(html);
        //   $('.selectpicker2').selectpicker();
          
      });
      $("body").on("click",".remove1",function(){ 
          $(this).parents(".control-group1").remove();
      });
    });
    </script>
    <script type="text/javascript"> 
        $(document).ready(function(){
            $('#submit').prop('disabled',true);
            $('#username').change(function(){
            var username = $('#username').val();
            if(username != ''){
                $.ajax({
                    url:"<?php echo base_url('dosen/Pengabdian/checkUsername');?>",
                    method:"post",
                    data:{username:username},
                    dataType: 'json',
                    success:function(data){
                        if(data=="Username tersedia"){
                            $('#submit').prop('disabled',false);
                            $('#username_result').hide();
                        }else{
                            $('#submit').prop('disabled', true);
                            $('#username_result').show();
                            $('#username_result').html(data);
                        }
                        //console.log(data);
                    }
                });
            }
            });
            });
    </script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url('assets/template/js/bootstrap.min.js');?>"></script>

<!-- Morris Charts JavaScript -->
<script src="<?= base_url('assets/template/js/plugins/morris/raphael.min.js');?>"></script>
<script src="<?= base_url('assets/template/js/plugins/morris/morris.min.js');?>"></script>
<script src="<?= base_url('assets/template/js/plugins/morris/morris-data.js');?>"></script>

