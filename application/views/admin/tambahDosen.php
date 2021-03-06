


        <div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Tambah Dosen
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Tambah Dosen
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="form-row profile-row">
    
    <div class="col-lg-12">
        
        
        <hr>
        <form method='POST' action="<?= base_url('admin/dashboard/addDosenToDb');?>" >
        <div class="form-group"><label>NIDN</label><input class="form-control" type="text" name="nip" value="" ></div>
        <div class="form-group"><label>NIP</label><input class="form-control" type="text" name="nomor_induk" value="" ></div>
        <div class="form-group"><label>Nama</label><input class="form-control" type="text" name="nama" value="" ></div>
        <div class="form-group"><label>Jabatan</label><input class="form-control" type="text" name="jabatan" value="" ></div>
        <div class="form-group"><label>Pendidikan</label><input class="form-control" type="text" name="pendidikan" value=""  ></div>
        <div class="form-group"><label>Status Kepegawaian</label><input class="form-control" type="text" name="status_kepegawaian" value="" ></div>
        <div class="form-group"><label>Departemen / Prodi</label><input class="form-control" type="text" name="program_studi" value="" ></div>
        <button type="submit">Submit</button>
                    </form>
        <hr>
        
        
        
        
    </div>
</div>

   
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Morris Charts JavaScript -->
<script src="<?= base_url('assets/template/js/plugins/morris/raphael.min.js');?>"></script>
<script src="<?= base_url('assets/template/js/plugins/morris/morris.min.js');?>"></script>
<script src="<?= base_url('assets/template/js/plugins/morris/morris-data.js');?>"></script>

