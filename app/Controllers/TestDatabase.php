<?php

namespace App\Controllers;

class TestDatabase extends BaseController
{
    public function index()
    {
        try {
            $db = \Config\Database::connect();
            $db->initialize();

            return $this->response->setJSON([
                'status'   => 'success',
                'message'  => 'Koneksi database PKLVERSE berhasil!',
                'database' => $db->getDatabase(),
            ]);
        } catch (\Throwable $e) {
            return $this->response
                ->setStatusCode(500)
                ->setJSON([
                    'status'  => 'error',
                    'message' => $e->getMessage(),
                ]);
        }
    }
}
