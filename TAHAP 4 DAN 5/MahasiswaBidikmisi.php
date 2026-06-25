<?php
class MahasiswaBidikmisi extends Mahasiswa {
    protected $nomorKipKuliah, $danaSakuSubsidi;

    public function __construct($id, $nama, $nim, $sem, $tarif, $kip, $dana) {
        parent::__construct($id, $nama, $nim, $sem, $tarif);
        $this->nomorKipKuliah = $kip;
        $this->danaSakuSubsidi = $dana;
    }

    // Overriding: Logika khusus Bidikmisi
    public function hitungtagihansemester() {
        return 0;
    }

    public function tampilkanspesifikasiakademik() {
        return "Bidikmisi | No KIP: {$this->nomorKipKuliah} | Subsidi: Rp " . number_format($this->danaSakuSubsidi);
    }
}