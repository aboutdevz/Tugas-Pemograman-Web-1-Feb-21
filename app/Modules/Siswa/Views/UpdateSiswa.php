<?= $this->extend('App\Modules\Siswa\Views\Templates\SiswaTemplate');?>
<?= $this->section('Content');?>



<div class="row d-flex justify-content-center align-items-center">
  <div class="col-12 col-md-8 bg-white rounded pl-5 pr-5 pb-5 mb-4">
    <h1 class="text-center pt-4 pb-5">Update Siswa</h1>
    <form class="form-horizontal" action="<?=base_url('Siswa/updateSiswa/'.$field_data->id)?>" method="POST">

      <div class="form-group row">
        <label for="nis" class="col-sm-2 col-form-label"> <b>NIS</b> </label>
        <div class="col-sm-10">
          <input type="text" aria-describedby="nisHelp" class="form-control" value="<?=$field_data->nis?>"  maxlenght="6" name="nis"
            placeholder="Insert NIS" required>
          <small id="nisHelp" class="text-muted">
            Nis harus 6 angka
          </small>
        </div>
      </div>

      <div class="form-group row">
        <label for="nama_lengkap" class="col-sm-2 col-form-label"> <b>Nama Lengkap</b> </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="<?=$field_data->nama_lengkap?>" placeholder="Insert Nama Lengkap Siswa" name="nama_lengkap" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="kelas" class="col-sm-2 col-form-label"> <b>Pendidikan Terakhir</b> </label>
        <div class="col-sm-10">
          <select class="form-control" value="<?=$field_data->kelas?>" placeholder="select Kelas" name="kelas" maxlenght="3" required>
            <option>SD</option>
            <option>SMP</option>
            <option>SMA</option>
          </select>
        </div>
      </div>



      <div class="form-group row">
        <label for="jurusan" class="col-sm-2 col-form-label"> <b>Jurusan</b> </label>
        <div class="col-sm-10">
        <select class="form-control" value="<?=$field_data->jurusan?>" placeholder="select Jurusan" name="jurusan" maxlenght="3" required>
            <option>RPL</option>
            <option>OTKP</option>
            <option>BDP</option>
            <option>AK</option>
            <option>MM</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="tempat_lahir" class="col-sm-2 col-form-label"> <b>Tempat Lahir</b> </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="<?=$field_data->tempat_lahir?>" placeholder="Insert Tempat Lahir" name="tempat_lahir" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="tanggal_lahir" class="col-sm-2 col-form-label"> <b>Tanggal Lahir</b> </label>
        <div class="col-sm-10">
          <input type="date" class="form-control" value="<?=$field_data->tanggal_lahir?>" placeholder="Insert Tangal Lahir" name="tanggal_lahir" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="alamat" class="col-sm-2 col-form-label"> <b>Alamat</b> </label>
        <div class="col-sm-10">
          <textarea class="form-control" cols="30" rows="10" placeholder="Insert Alamat" name="alamat" required>
            <?=$field_data->alamat?>
          </textarea>
        </div>
      </div>

      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label"> <b>Email</b> </label>
        <div class="col-sm-10">
          <input type="email" class="form-control" value="<?=$field_data->email?>" placeholder="Insert Email" name="email" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="no_telp" class="col-sm-2 col-form-label"> <b>No Telpon</b> </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="<?=$field_data->no_telp?>" placeholder="Insert Nomor Telpon" name="no_telp" required>
        </div>
      </div>
      <button type="submit" class="btn btn-primary float-right" name="btn_submit">Submit</button>
    </form>
  </div>
</div>


<?= $this->endSection();?>