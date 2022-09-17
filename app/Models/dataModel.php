<?php

namespace App\Models;

use CodeIgniter\Model;

class dataModel extends model
{
    protected $table = 'data_sirkulasi';
    protected $useTimestamps = true;

    public function getData($nim = false)
    {
        if ($nim == false) {
            return $this->findAll();
        }
        return $this->where(['nim' => $nim])->first();
    }
}
