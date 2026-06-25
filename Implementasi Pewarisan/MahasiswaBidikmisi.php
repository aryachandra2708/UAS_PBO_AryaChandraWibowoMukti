<?php

class MahasiswaBidikmisi extends Mahasiswa {
    protected $nomorKipKuliah;
    protected $danaSakuSubsidi;

    public function __construct($id, $nama, $nim, $sem, $tarif, $kip, $dana) {
        parent::__construct($id, $nama, $nim, $sem, $tarif);
        $this->nomorKipKuliah = $kip;
        $this->danaSakuSubsidi = $dana;
    }

    public function hitungtagihansemester() {
        return "Mahasiswa Bidikmisi {$this->nama_mahasiswa} gratis UKT. Dana Saku: Rp " . number_format($this->danaSakuSubsidi);
    }

    public function tampilkanspesifikasiakademik() {
        echo "Nama: {$this->nama_mahasiswa} | No KIP: {$this->nomorKipKuliah}";
    }
}
