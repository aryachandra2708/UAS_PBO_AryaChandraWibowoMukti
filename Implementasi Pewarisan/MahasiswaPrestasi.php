<?php

class MahasiswaPrestasi extends Mahasiswa {
    protected $namaInstansiBeasiswa;
    protected $minimalIpkSyarat;

    public function __construct($id, $nama, $nim, $sem, $tarif, $instansi, $ipk) {
        parent::__construct($id, $nama, $nim, $sem, $tarif);
        $this->namaInstansiBeasiswa = $instansi;
        $this->minimalIpkSyarat = $ipk;
    }

    public function hitungtagihansemester() {
        return "Mahasiswa Prestasi {$this->nama_mahasiswa} dibiayai oleh {$this->namaInstansiBeasiswa}";
    }

    public function tampilkanspesifikasiakademik() {
        echo "Nama: {$this->nama_mahasiswa} | Instansi: {$this->namaInstansiBeasiswa} | Min IPK: {$this->minimalIpkSyarat}";
    }
}