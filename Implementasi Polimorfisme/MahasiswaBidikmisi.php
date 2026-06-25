<?php
class MahasiswaBidikmisi extends Mahasiswa {
    // ... constructor tetap sama ...

    public function hitungtagihansemester() {
        $total = 0;
        return "Tagihan {$this->nama_mahasiswa} (Bidikmisi): Rp " . number_format($total) . " (Ditanggung KIP)";
    }
}