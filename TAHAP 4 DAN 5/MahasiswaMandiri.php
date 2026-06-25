<?php
class MahasiswaMandiri extends Mahasiswa {
    protected $golonganUkt, $namaWali;

    public function __construct($id, $nama, $nim, $sem, $tarif, $gol, $wali) {
        parent::__construct($id, $nama, $nim, $sem, $tarif);
        $this->golonganUkt = $gol;
        $this->namaWali = $wali;
    }

    // Overriding: Logika khusus Mandiri
    public function hitungtagihansemester() {
        return $this->tarif_ukt_nominal + 100000;
    }

    public function tampilkanspesifikasiakademik() {
        return "Mandiri | Golongan: {$this->golonganUkt} | Wali: {$this->namaWali}";
    }
}