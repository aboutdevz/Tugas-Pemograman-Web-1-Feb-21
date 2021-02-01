<?= $this->extend('App\Modules\Siswa\Views\Templates\SiswaTemplate');?>
<?= $this->section('Content');?>



<div class="row d-flex justify-content-center align-items-center">
  <div class="col-12 col-md-8 bg-white rounded pl-5 pr-5 pb-5 mb-4">
    <h1 class="text-center pt-4 pb-5">Input Nilai Siswa</h1>
    <form class="form-horizontal" action="<?=base_url('Siswa/insertNilaiSiswa')?>" method="POST">

    <div class="form-group row">
        <label for="siswa" class="col-sm-2 col-form-label"> <b>Siswa</b> </label>
        <div class="col-sm-10">
          <select class="form-control" placeholder="select Siswa" name="id_siswa" maxlenght="3" required>
            <?php foreach ($siswa as $s):?>

                <?='<option value="'.$s->id.'">'.$s->nama_lengkap.'</option>'?>
            <?php endforeach;?>

          </select>
        </div>
      </div>

    <div class="form-group row">
        <label for="mata_pelajaran" class="col-sm-2 col-form-label"> <b>Mata Pelajaran</b> </label>
        <div class="col-sm-10">
          <select class="form-control" placeholder="select Mata Pelajaran" name="id_matapelajaran" maxlenght="3" required>
            <?php foreach ($pelajaran as $j):?>
                <?='<option value="'.$j->id.'">'.$j->mata_pelajaran.'</option>'?>
            <?php endforeach;?>
          </select>
        </div>
      </div>


      <div class="form-group row">
        <label for="nilai_uh" class="col-sm-2 col-form-label"> <b>Nilai UH</b> </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Insert Nilai UH" name="nilai_uh" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="nilai_uts" class="col-sm-2 col-form-label"> <b>Nilai UTS</b> </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Insert Nilai UTS" name="nilai_uts" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="nilai_uas" class="col-sm-2 col-form-label"> <b>Nilai UAS</b> </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Insert Nomor Telpon" name="nilai_uas" required>
        </div>
      </div>


      <button type="submit" class="btn btn-primary float-right" name="btn_submit">Submit</button>
    </form>
  </div>
</div>


<?= $this->endSection();?>