<?= $this->extend('App\Modules\Home\Views\Templates\HomeTemplate');?>
<?= $this->section('Content');?>

<div class="card rounded shadow h-100">
    <ul class="nav nav-tabs" id="dashboard_tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="data_guru" data-toggle="tab" href="#Data_guru" role="tab"
                aria-controls="data_guru" aria-selected="true">Data Guru</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="data_pelajaran" data-toggle="tab" href="#Data_pelajaran" role="tab"
                aria-controls="profile" aria-selected="false">Data Pelajaran</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="nilai_siswa" data-toggle="tab" href="#Nilai_siswa" role="tab"
                aria-controls="contact" aria-selected="false">Nilai Siswa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="data_siswa" data-toggle="tab" href="#Data_siswa" role="tab"
                aria-controls="contact" aria-selected="false">Data Siswa</a>
        </li>
    </ul>
    <div class="tab-content " id="dashboard_tabContent">
        <div class="tab-pane fade show p-3 active" id="Data_guru" role="tabpanel" aria-labelledby="data_guru">
            <br>
            <h4><b>Data Guru</b> </h4>
            <div class="table_contain table-responsive">
            <table class="table  bg-white table-hover table-striped   table_guru w-100">
                <thead class="bg-primary">
                    <tr class="text-white">
                        <th>No</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Pendidikan</th>
                        <th>Jurusan</th>
                        <th>Asal Sekolah</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>No Hp</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Pendidikan</th>
                        <th>Jurusan</th>
                        <th>Asal Sekolah</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>No Hp</th>
                        <th>Options</th>
                    </tr>
                </tfoot>
            </table>
            </div>
        </div>
        <div class="tab-pane fade p-3" id="Data_pelajaran" role="tabpanel" aria-labelledby="data_pelajaran">
            <br>
            <h4><b>Data Pelajaran</b> </h4>
            <div class="table_contain table-responsive">
                <table class="table  bg-white table-hover table-striped   table_pelajaran w-100">
                    <thead class="bg-primary">
                        <tr>
                            <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th>Jurusan</th>
                            <th>Kelas</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                    </tbody>
                    <tfoot>
                    <tr>
                    <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th>Jurusan</th>
                            <th>Kelas</th>
                            <th>Options</th>
                    </tr>
                </tfoot>
                </table>
            </div>
        </div>
        <div class="tab-pane fade p-3" id="Nilai_siswa" role="tabpanel" aria-labelledby="nilai_siswa">
            <br>
            <h4><b>Nilai Siswa</b> </h4>
            <div class=" table_contain table-responsive">
                <table class="table  bg-white table-hover table-striped   table_nilai_siswa w-100">
                    <thead class="bg-primary">
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Nilai UH</th>
                            <th>Nilai UTS</th>
                            <th>Nilai UAS</th>
                            <th>Rata-Rata</th>
                            <th>Perdikat</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                    </tbody>
                    <tfoot>
                    <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Nilai UH</th>
                            <th>Nilai UTS</th>
                            <th>Nilai UAS</th>
                            <th>Rata-Rata</th>
                            <th>Perdikat</th>
                            <th>Options</th>
                    </tr>
                </tfoot>
                </table>
            </div>
        </div>


        <div class="tab-pane fade p-3" id="Data_siswa" role="tabpanel" aria-labelledby="data_siswa">
            <br>
            <h4><b>Data Siswa</b> </h4>
            <div class="table_contain table-responsive">
                <table id="table_siswa" class="table  bg-white table-hover table-striped  table_siswa w-100">
                    <thead class="bg-primary">
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No Telp</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No</th>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No Telp</th>
                            <th>Options</th>
                    </tr>
                </tfoot>
                </table>
            </div>
        </div>
    </div>

    <?= $this->endSection();?>