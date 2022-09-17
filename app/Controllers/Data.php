<?php

namespace App\Controllers;

use App\Models\DataModel;
use CodeIgniter\Config\Config;

class Data extends BaseController
{

    protected $DataModel;
    public function __construct()
    {
        $this->DataModel = new dataModel();
    }
    public function index()
    {
        // $datam = $this->DataModel->findAll();
        $data = [
            'title' => 'Data',
            'set' => 'data',
            'data' => $this->DataModel->getData()
        ];

        // cara koneksi db tanpa model
        // $db = \Config\Database::connect();
        // $Datask = $db->query("Select * From data_sirkulasi");
        // foreach ($Datask->getResultArray() as $row) {
        //     dd($row);
        // }

        // koneksi database dengan model
        // datamodel = new \App\Models\datamodel();

        return view('/data/index', $data);
    }
    public function detail($nim)
    {
        $data = [
            'title' => 'Detail Data',
            'datam' => $this->DataModel->getData($nim),
            'set' => 'data'
        ];
        return view('data/detail', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Tambah Data',
            'set' => 'data'
        ];
        return view('data/create', $data);
    }
}
