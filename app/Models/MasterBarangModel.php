<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterBarangModel extends Model
{
    protected $table = 'master_barang';
    protected $primaryKey = 'id_barang';
    protected $returnType = 'array';
}
