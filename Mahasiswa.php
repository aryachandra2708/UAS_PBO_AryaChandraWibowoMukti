<?php

abstract class Mahasiswa {
    // 2. Properti dengan enkapsulasi 'protected'
    protected $id_mahasiswa;
    protected $nama_mahasiswa;
    protected $nim;
    protected $semester;
    protected $tarif_ukt_nominal;

    // Constructor
    public function __construct($id, $nama, $nim, $sem, $tarif) {
        $this->id_mahasiswa = $id;
        $this->nama_mahasiswa = $nama;
        $this->nim = $nim;
        $this->semester = $sem;
        $this->tarif_ukt_nominal = $tarif;
    }

    // 3. Metode Abstrak (Wajib diimplementasikan di subclass)
    abstract public function hitungtagihansemester();
    abstract public function tampilkanspesifikasiakademik();
    
    public function getNama() {
        return $this->nama_mahasiswa;
    }
}
?>