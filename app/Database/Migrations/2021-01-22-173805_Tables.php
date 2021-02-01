<?php namespace App\Modules\Home\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tables extends Migration
{
	private $tab_guru = 'tab_guru';
	private $tab_pelajaran = 'tab_pelajaran';
	private $tab_user = 'tab_user';
	private $tab_nilai_siswa = 'tab_nilai_siswa';
	private $tab_siswa = 'tab_siswa';


	public function up()
	{
		/*
		|--------------------------------------------------------------------------
		| Table tab_guru
		|--------------------------------------------------------------------------
		|
		*/
		$field_tab_guru = [
			'id' =>[
				'type' 				=> 		'INT',
				'constraint' 		=> 		11,
				'auto_increment'	=>		true
				
			],
			'nik' =>[
				'type' 				=> 		'VARCHAR',
				'constraint' 		=> 		20
				
			],
			'nama_guru' =>[
				'type' 				=> 		'VARCHAR',
				'constraint' 		=> 		50
				
			],
			'pendidikan_terakhir' =>[
				'type' 				=> 		'VARCHAR',
				'constraint' 		=> 		3
				
			],
			'jurusan' =>[
				'type' 				=> 		'VARCHAR',
				'constraint' 		=> 		30
				
			],
			'asal_sekolah' =>[
				'type' 				=> 		'VARCHAR',
				'constraint' 		=> 		50
				
			],
			'alamat' =>[
				'type' 				=> 		'TEXT',
				
			],
			'email' =>[
				'type' 				=> 		'VARCHAR',
				'constraint' 		=> 		50
				
			],
			'no_telp' =>[
				'type' 				=> 		'VARCHAR',
				'constraint' 		=> 		15
				
			],
		];

		
		/*
		|--------------------------------------------------------------------------
		| Table tab_pelajaran
		|--------------------------------------------------------------------------
		|
		*/
		$field_tab_pelajaran = [
			'id' =>[
				'type' 				=> 		'INT',
				'constraint' 		=> 		11,
				'auto_increment'	=>		true,
			],
			'mata_pelajaran' =>[
				'type' 				=> 		'VARCHAR',
				'constraint' 		=> 		50,
				'default'			=>		NULL
			],
			'jurusan' =>[
				'type' 				=> 		'VARCHAR',
				'constraint' 		=> 		30,
				'default'			=>		NULL
			],
			'kelas' =>[
				'type' 				=> 		'VARCHAR',
				'constraint' 		=> 		3,
				'default'			=>		NULL
			]
		];


		/*
		|--------------------------------------------------------------------------
		| Table tab_user
		|--------------------------------------------------------------------------
		|
		*/
		$field_tab_user = [
			'id' =>[
				'type' 				=> 		'INT',
				'constraint' 		=> 		11,
				'auto_increment'	=>		true,
			],
			'username' =>[
				'type' 				=> 		'VARCHAR',
				'constraint' 		=> 		50,	
				'default'			=>		NULL
			],
			'password' =>[
				'type' 				=> 		'VARCHAR',
				'constraint' 		=> 		32,
				'default'			=>		NULL
			]
		];


		/*
		|--------------------------------------------------------------------------
		| Table tab_nilai_siswa
		|--------------------------------------------------------------------------
		|
		*/
		$field_tab_nilai_siswa = [
			'id' =>[
				'type' 				=> 		'INT',
				'constraint' 		=> 		11,
				'auto_increment'	=>		true
			],
			'id_siswa' =>[
				'type' 				=> 		'INT',
				'constraint' 		=> 		11
			],
			'id_matapelajaran' =>[
				'type' 				=> 		'INT',
				'constraint' 		=> 		11
			],
			'nilai_uh' =>[
				'type' 				=> 		'DECIMAL',
				'constraint' 		=> 		'10,2'
			],
			'nilai_uts' =>[
				'type' 				=> 		'DECIMAL',
				'constraint' 		=> 		'10,2'
			],
			'nilai_uas' =>[
				'type' 				=> 		'DECIMAL',
				'constraint' 		=> 		'10,2'
			],
			'rata_rata' =>[
				'type' 				=> 		'DECIMAL',
				'constraint' 		=> 		'10,2'
			],
			'predikat' =>[
				'type' 				=> 		'varchar',
				'constraint' 		=> 		1
			]
		];


		/*
		|--------------------------------------------------------------------------
		| Table tab_siswa
		|--------------------------------------------------------------------------
		|
		*/
		$field_tab_siswa = [
			'id' =>[
				'type' 				=> 		'INT',
				'constraint' 		=> 		11,
				'auto_increment'	=>		true
			],
			'nis' =>[
				'type' 				=> 		'varchar',
				'constraint' 		=> 		15
			],
			'nama_lengkap' =>[
				'type' 				=> 		'varchar',
				'constraint' 		=> 		50
			],
			'kelas' =>[
				'type' 				=> 		'varchar',
				'constraint' 		=> 		3
			],
			'jurusan' =>[
				'type' 				=> 		'varchar',
				'constraint' 		=> 		30
			],
			'tempat_lahir' =>[
				'type' 				=> 		'varchar',
				'constraint' 		=> 		50
			],
			'tanggal_lahir' =>[
				'type' 				=> 		'date'
			],
			'alamat' =>[
				'type' 				=> 		'text'
			],
			'email' =>[
				'type' 				=> 		'varchar',
				'constraint' 		=> 		50
			],
			'no_telp' =>[
				'type' 				=> 		'varchar',
				'constraint' 		=> 		15
			],
		];

		$this->forge->addField($field_tab_guru);
		$this->forge->addKey('id');
		$this->forge->createTable($this->tab_guru);

		$this->forge->addField($field_tab_pelajaran);
		$this->forge->addKey('id');
		$this->forge->createTable($this->tab_pelajaran);

		$this->forge->addField($field_tab_user);
		$this->forge->addKey('id');
		$this->forge->createTable($this->tab_user);

		$this->forge->addField($field_tab_nilai_siswa);
		$this->forge->addKey('id');
		$this->forge->createTable($this->tab_nilai_siswa);

		$this->forge->addField($field_tab_siswa);
		$this->forge->addKey('id');
		$this->forge->createTable($this->tab_siswa);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->tab_guru);

		$this->forge->dropTable($this->tab_pelajaran);

		$this->forge->dropTable($this->tab_user);

		$this->forge->dropTable($this->tab_nilai_siswa);

		$this->forge->dropTable($this->tab_siswa);
	}
}
