

        <div id="page-wrapper">

            <div class="container-fluid1">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Submit Proposal Pengabdian
                        </h1>
                        <ol class="breadcrumb">
                            
                            <li class="active">
                                <i class="fa fa-edit"></i> Submit proposal
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                    
                    
                    <section class="content">
                    <table class="table">
                        <col style='width:5%'>
                        <col style='width:45%'>
                        <col style='width:15%'>
                        <col style='width:15%'>
                        <col style='width:20%'> 
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Proposal</th>
                            <th>Instansi Mitra</th>
                            <th>Mitra Approval</th>
                            <!-- <th>Upload Surat Persetujuan</th> -->
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no = 1;
                        foreach($view as $v) { ?>
                        <?php if ($v->nip==$this->session->userdata('user_name')) : ?>
                        <?php if($v->status == NULL) : ?>
                        <tr>
                            <td><?= $no++?></td>
                            <td><?= $v->judul?></td>
                            <td><?= $v->nama_instansi ?></td>
                            <td><?= ($v->status_mitra==1) ? "Approved" :  "Unapproved" ?></td>
                            <!-- <td><?php if ($v->file_persetujuan==NULL && $v->status_mitra!=1) : ?>
                                <button type="button" class="btn-sm btn-default" data-toggle="modal" disabled>
                                    <span class="glyphicon glyphicon-upload"></span><?php if ($v->file_persetujuan==NULL) : ?> Upload <?php endif; ?>
                                        <?php if($v->file_persetujuan != NULL) : ?> Edit <?php endif; ?>
                                </button>
                                <?php elseif($v->file_persetujuan==NULL && $v->status_mitra==1) : ?>
                                <button type="button" class="btn-sm btn-info" data-toggle="modal" data-target="#updateSurat<?= $v->mitra_id?>">
                                    <span class="glyphicon glyphicon-upload"></span><?php if ($v->file_persetujuan==NULL) : ?> Upload <?php endif; ?>
                                        <?php if($v->file_persetujuan != NULL) : ?> Edit <?php endif; ?>
                                </button>
                            <?php endif; ?>
                            <?php if($v->file_persetujuan != NULL) : ?>
                                <i>UPLOADED</i>
                            <?php endif; ?>
                            </td> -->
                            <td>
                            <?php if(($v->status_mitra==0 || $v->file_persetujuan==NULL)&& $v->status==NULL ) : ?>
                                    <a href="<?=base_url('dosen/pengabdian/editproposal');?>/<?=$v->id?>"><button   class="btn-sm btn-success"> Edit </button></a>
                                    <a href="#" type="button"><button  class="btn-sm btn-default" disabled>Submit</button> </a>
                                    <a href="<?=base_url('dosen/pengabdian/hapusproposal');?>/<?=$v->id?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');"><button class="btn-sm btn-danger">Hapus</button>  </a>
                            <?php elseif($v->status_mitra == 1 && $v->file_persetujuan!=NULL && $v->status==NULL) : ?>
                                <!--  <form method='get' action=" -->
                                <!-- <?php echo site_url('dosen/pengabdian/submitproposal');?> -->
                                    <a href="<?=base_url('dosen/pengabdian/editproposal');?>/<?=$v->id?>" ><button  class="btn-sm btn-success"> Edit</button> </a>
                                    <a href="<?=base_url('dosen/pengabdian/finalSubmitProp');?>/<?=$v->id?>" onclick="return confirm('Apakah Anda Yakin Ingin Melakukan Submition?');" ><button  class="btn-sm btn-primary">Submit</button></a>
                                    <a href="<?=base_url('dosen/pengabdian/hapusproposal');?>/<?=$v->id?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');" ><button class="btn-sm btn-danger">Hapus</button> </a>
                                    
                                
                            <?php else: ?>
                                <h5><?= $v->status;?></h5>
                                
                                
                            <?php endif;?>
                            <?php endif;?>
                            
                            
                            </td>
                        </tr>
                        <?php endif;?>
                    
                            <!-- Modal -->
                    <div class="modal fade" id="updateSurat<?= $v->mitra_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <?php echo form_open_multipart('dosen/pengabdian/updateSurat') ?>
                            <div class="form-group">
                                <label>Upload Surat Mitra</label>
                                <input type="file" class="form-control" name="file_persetujuan"   >
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id" value=<?=$v->mitra_id?>  >
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        <?= form_close() ?>

                            
                        </div>
                        
                        </div>
                    </div>
                    </div>
                        <?php } ?>
                        </tbody>
                    </table>
                    </section>
                    

                    <!-- Modal isi form -->
                    
                    <?php 
                    foreach ($view as $v) :
                        $id=$v->mitra_id;
                     ?>

                    <!-- Modal -->
                    <div class="modal fade" id="updateSurat<?= $id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <?php echo form_open_multipart('dosen/pengabdian/updateSurat') ?>
                            <div class="form-group">
                                <label>Upload Surat Mitra</label>
                                <input type="file" class="form-control" name="file_persetujuan"   >
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id" value=<?=$id?>  >
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        <?= form_close() ?>

                            
                        </div>
                        
                        </div>
                    </div>
                    </div>

                    <?php endforeach;?>
                    

                        

                    </div>
                    
            

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="<?= base_url('assets/template/js/jquery-1.11.0.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url('assets/template/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/sweetalert/sweetalert2.all.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
      $(".add-more1").click(function(){ 
          var html = $(".copy1").html();
          $(".after-add-more1").after(html);
      });
      $("body").on("click",".remove1",function(){ 
          $(this).parents(".control-group1").remove();
      });
    });
    </script>

</body>

</html>
