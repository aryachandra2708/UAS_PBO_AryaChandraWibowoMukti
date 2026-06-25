<?php
class MahasiswaMandiri extends Mahasiswa {
    // ... constructor tetap sama ...

    public function hitungtagihansemester() {
        $total = $this->tarif_ukt_nominal + 100000;
        return "Tagihan {$this->nama_mahasiswa} (Mandiri): Rp " . number_format($total);
    }
}