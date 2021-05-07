<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'	=>[
				'type'		 	=>'INT',
				'constraint' 	=> 5,
			],
			'userid'	=>[
				'type'			=>'INT',
				'constraint'	=>5,
			],
			'title'		=>[
				'type'			=>'TEXT',
			],
			'body'	=>[
				'type'			=>"TEXT",
			],
			'gambar'	=>[
				'type'			=>'TEXT'
			],
		]);
		$this->forge->addKey('id');
		$this->forge->createTable('Table_post');
	}

	public function down()
	{
		$this->forge->dropTable('Table_post');
	}
}
