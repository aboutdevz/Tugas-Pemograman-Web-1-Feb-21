<?php namespace App\Database\Seeds;


class SiswaSeed extends \Codeigniter\Database\Seeder
{
    private $siswa = 'tab_siswa';

    public function run()
    {
        
        $faker = \Faker\Factory::create();

        $data_siswa       = [
            'nis'                       =>      $faker->numerify('######'),
            'nama_lengkap'              =>      $faker->name,
            'kelas'                     =>      'AK',
            'jurusan'                   =>      'AK',
            'tempat_lahir'              =>      $faker->city,
            'tanggal_lahir'             =>      $faker->date,
            'alamat'                    =>      $faker->address,
            'email'                     =>      $faker->email,
            'no_telp'                   =>      $faker->phoneNumber,
        ];
        $this->db->table($this->siswa)->insert($data_siswa);
    }
}

