<?php
class MahasiswaPrestasi extends Mahasiswa {
    protected $namaInstansiBeasiswa, $minimalIpkSyarat;

    public function __construct($id, $nama, $nim, $sem, $tarif, $instansi, $ipk) {
        parent::__construct($id, $nama, $nim, $sem, $tarif);
        $this->namaInstansiBeasiswa = $instansi;
        $this->minimalIpkSyarat = $ipk;
    }

    // Overriding: Logika khusus Prestasi
    public function hitungtagihansemester() {
        return $this->tarif_ukt_nominal * 0.25;
    }

    public function tampilkanspesifikasiakademik() {
        return "Prestasi | Instansi: {$this->namaInstansiBeasiswa} | Min IPK: {$this->minimalIpkSyarat}";
    }
}