<?php
class MahasiswaMandiri extends Mahasiswa {
    protected $golonganUkt;
    protected $namaWali;

    public function __construct($id, $nama, $nim, $sem, $tarif, $gol, $wali) {
        parent::__construct($id, $nama, $nim, $sem, $tarif);
        $this->golonganUkt = $gol;
        $this->namaWali = $wali;
    }

    public function hitungtagihansemester() {
        return "Mahasiswa Mandiri {$this->nama_mahasiswa} membayar penuh: Rp " . number_format($this->tarif_ukt_nominal);
    }

    public function tampilkanspesifikasiakademik() {
        echo "Nama: {$this->nama_mahasiswa} | Golongan: {$this->golonganUkt} | Wali: {$this->namaWali}";
    }
}