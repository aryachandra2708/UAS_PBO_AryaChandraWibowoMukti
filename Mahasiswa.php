<?php

abstract class Mahasiswa {
    protected $id_mahasiswa, $nama_mahasiswa, $nim, $semester, $tarif_ukt_nominal;

    public function __construct($id, $nama, $nim, $sem, $tarif) {
        $this->id_mahasiswa = $id;
        $this->nama_mahasiswa = $nama;
        $this->nim = $nim;
        $this->semester = $sem;
        $this->tarif_ukt_nominal = $tarif;
    }

    public function getNamaMahasiswa() {
        return $this->nama_mahasiswa;
    }

    abstract public function hitungtagihansemester();
    abstract public function tampilkanspesifikasiakademik();
}