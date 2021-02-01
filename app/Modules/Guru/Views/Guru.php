<?= $this->extend('App\Modules\Guru\Views\Templates\GuruTemplate');?>
<?= $this->section('Content');?>



<div class="row d-flex justify-content-center align-items-center">
  <div class="col-12 col-md-8 bg-white rounded pl-5 pr-5 pb-5 mb-4">
    <h1 class="text-center pt-4 pb-5">Input Data Guru</h1>
    <form class="form-horizontal" action="<?=base_url('Guru/insertGuru')?>" method="post">

      <div class="form-group row">
        <label for="nik" class="col-sm-2 col-form-label"> <b>NIK</b> </label>
        <div class="col-sm-10">
          <input type="text" aria-describedby="nikHelp" class="form-control " maxlenght="16" name="nik"
            placeholder="Insert NIK" required>
          <small id="nikHelp" class="text-muted">
            Nik harus 16 angka
          </small>
        </div>
      </div>

      <div class="form-group row">
        <label for="nama_guru" class="col-sm-2 col-form-label"> <b>Nama</b> </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Insert Nama Guru" name="nama_guru" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="pendidikan_terakhir" class="col-sm-2 col-form-label"> <b>Pendidikan Terakhir</b> </label>
        <div class="col-sm-10">
          <select class="form-control" placeholder="select Pendidikan Terakhir" name="pendidikan_terakhir" maxlenght="3"
            required>
            <option>SD</option>
            <option>SMP</option>
            <option>SMA / SMK</option>
          </select>
        </div>
      </div>



      <div class="form-group row">
        <label for="jurusan" class="col-sm-2 col-form-label"> <b>Jurusan</b> </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Insert Jurusan" name="jurusan" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="asal_sekolah" class="col-sm-2 col-form-label"> <b>Asal Sekolah</b> </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Insert Asal Sekolah" name="asal_sekolah" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="alamat" class="col-sm-2 col-form-label"> <b>Alamat</b> </label>
        <div class="col-sm-10">
          <textarea class="form-control" cols="30" rows="10" placeholder="Insert Alamat" name="alamat"
            required></textarea>
        </div>
      </div>

      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label"> <b>Email</b> </label>
        <div class="col-sm-10">
          <input type="email" class="form-control" placeholder="Insert Email" name="email" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="no_telp" class="col-sm-2 col-form-label"> <b>No Telpon</b> </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Insert Nomor Telpon" name="no_telp" required>
        </div>
      </div>
      <button type="submit" class="btn btn-primary float-right" name="btn_submit">Submit</button>
    </form>
  </div>
</div>


<?= $this->endSection();?>