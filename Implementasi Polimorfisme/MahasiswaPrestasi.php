<?php
class MahasiswaPrestasi extends Mahasiswa {
    // ... constructor tetap sama ...

    public function hitungtagihansemester() {
        $total = $this->tarif_ukt_nominal * 0.25;
        return "Tagihan {$this->nama_mahasiswa} (Prestasi): Rp " . number_format($total) . " (Diskon 75%)";
    }
}