<?= $this->extend('App\Modules\Pelajaran\Views\Templates\PelajaranTemplate');?>
<?= $this->section('Content');?>

<div class="row d-flex justify-content-center align-items-center">
  <div class="col-12 col-md-8 bg-white rounded pl-5 pr-5 pb-5">
    <h1 class="text-center pt-4 pb-5">Update Data Pelajaran</h1>

    <form class="form-horizontal" action="<?=base_url('Pelajaran/updatePelajaran/'.$field_data->id)?>" method="post">

      <div class="form-group row">
        <label for="mata_pelajaran" class="col-sm-2 col-form-label"> <b>Mata Pelajaran</b> </label>
        <div class="col-sm-10">
          <input type="text" class="form-control " value="<?=$field_data->mata_pelajaran?>" placeholder="Insert Mata Pelajaran" name="mata_pelajaran" required>

        </div>
      </div>
      
      <div class="form-group row">
        <label for="jurusan" class="col-sm-2 col-form-label"> <b>Jurusan</b> </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="<?=$field_data->jurusan?>" placeholder="Insert jurusan" name="jurusan" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="kelas" class="col-sm-2 col-form-label"> <b>Kelas</b> </label>
        <div class="col-sm-10">
          <select class="form-control" value="<?=$field_data->kelas?>" placeholder="select Kelas" maxlenght="3" name="kelas" required>
            <option>X</option>
            <option>XI</option>
            <option>XII</option>
          </select>
        </div>
      </div>


      <button type="submit" class="btn btn-primary float-right" name="btn_submit">Submit</button>
    </form>
  </div>
</div>

<?= $this->endSection();?>