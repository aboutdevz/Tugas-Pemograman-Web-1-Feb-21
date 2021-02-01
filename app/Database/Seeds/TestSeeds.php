<?php namespace App\Database\Seeds;


class TestSeeds extends \Codeigniter\Database\Seeder
{
    private $user = 'tab_user';
    private $guru = 'tab_guru';
    private $pelajaran = 'tab_pelajaran';
    private $nilai_siswa = 'tab_nilai_siswa';
    private $siswa = 'tab_siswa';

    public function run()
    {
        

        
        for ($i=1;$i<=30;$i++)
        {
            $faker = \Faker\Factory::create();

            $data_guru              = [
                'nik'                       =>      $faker->numerify('################'),
                'nama_guru'                 =>      $faker->name,
                'pendidikan_terakhir'       =>      'SMK',
                'jurusan'                   =>      'RPL',
                'asal_sekolah'              =>      'SMKN 2 Jakarta',
                'alamat'                    =>      $faker->address,
                'email'                     =>      $faker->email,
                'no_telp'                   =>      $faker->phoneNumber
            ];

            $data_nilai_siswa       = [
                'id_siswa'                  =>      $faker->randomDigit(),
                'id_matapelajaran'          =>      $faker->randomDigit($max=5),
                'nilai_uh'                  =>      $faker->randomFloat($nbMaxDecimals = 2 ,$min = 30.00,$max = 95.00),
                'nilai_uts'                 =>      $faker->randomFloat($nbMaxDecimals = 2 ,$min = 30.00,$max = 95.00),
                'nilai_uas'                 =>      $faker->randomFloat($nbMaxDecimals = 2 ,$min = 30.00,$max = 95.00),
                'rata_rata'                 =>      $faker->randomFloat($nbMaxDecimals = 2 ,$min = 30.00,$max = 95.00),
                'predikat'                  =>      'A'
            ];

            
            

            $this->db->table($this->guru)->insert($data_guru);

            $this->db->table($this->nilai_siswa)->insert($data_nilai_siswa);
            
        }
            $data_pelajaran = [
                'mata_pelajaran'            =>      'P web',
                'jurusan'                   =>      'RPL',
                'kelas'                     =>      'XII RPL 2'
            ];
            $this->db->table($this->pelajaran)->insert($data_pelajaran);

            $data_pelajaran = [
                'mata_pelajaran'            =>      'Animasi 3D',
                'jurusan'                   =>      'MM',
                'kelas'                     =>      'XII MM 1'
            ];
            $this->db->table($this->pelajaran)->insert($data_pelajaran);

            $data_pelajaran = [
                'mata_pelajaran'            =>      'Buku Besar',
                'jurusan'                   =>      'AK',
                'kelas'                     =>      'XII AK'
            ];
            $this->db->table($this->pelajaran)->insert($data_pelajaran);

            $data_pelajaran = [
                'mata_pelajaran'            =>      'Administrasi Kantor',
                'jurusan'                   =>      'OTKP',
                'kelas'                     =>      'XII OTKP 2'
            ];
            $this->db->table($this->pelajaran)->insert($data_pelajaran);

            $data_pelajaran = [
                'mata_pelajaran'            =>      'Multi Level Marketing',
                'jurusan'                   =>      'BDP',
                'kelas'                     =>      'XII BDP'
            ];
            $this->db->table($this->pelajaran)->insert($data_pelajaran);


            $data_user = [
                'username'                  =>      'admin',
                'password'                  =>      'admin'
            ];
            $this->db->table($this->user)->insert($data_user);

            $data_siswa       = [
                'nis'                       =>      $faker->numerify('######'),
                'nama_lengkap'              =>      $faker->name,
                'kelas'                     =>      'XII RPL 2',
                'jurusan'                   =>      'RPL',
                'tempat_lahir'              =>      $faker->city,
                'tanggal_lahir'             =>      $faker->date,
                'alamat'                    =>      $faker->address,
                'email'                     =>      $faker->email,
                'no_telp'                   =>      $faker->phoneNumber,
            ];
            $this->db->table($this->siswa)->insert($data_siswa);
    }
}

