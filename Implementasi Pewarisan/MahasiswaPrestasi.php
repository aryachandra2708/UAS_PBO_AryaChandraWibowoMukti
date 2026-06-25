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

class MahasiswaPrestasi extends Mahasiswa {
    // ... constructor tetap sama ...

    public function hitungtagihansemester() {
        $total = $this->tarif_ukt_nominal * 0.25;
        return "Tagihan {$this->nama_mahasiswa} (Prestasi): Rp " . number_format($total) . " (Diskon 75%)";
    }
}