<?php
require_once 'Mahasiswa.php';
require_once 'TAHAP 4 DAN 5/MahasiswaMandiri.php';
require_once 'TAHAP 4 DAN 5/MahasiswaBidikmisi.php';
require_once 'TAHAP 4 DAN 5/MahasiswaPrestasi.php';

$conn = new mysqli("localhost", "root", "", "db_uas_pbo_ti1d_aryachandrawibowomukti");
$result = $conn->query("SELECT * FROM tabel_mahasiswa"); // Sesuaikan nama tabel di sini!

$daftarMahasiswa = [];
while ($row = $result->fetch_assoc()) {
    if ($row['jenis_pembayaran'] == 'Mandiri') 
        $daftarMahasiswa[] = new MahasiswaMandiri(db_uas_pbo_ti1d_aryachandrawibowomukti);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// 4. Ambil data
$query = "SELECT * FROM tabel_mahasiswa";
$result = $conn->query($query);

// 5. Inisialisasi array untuk menampung objek
$daftarMahasiswa = [];

while ($row = $result->fetch_assoc()) {
    // Factory: Membuat objek berdasarkan jenis pembayaran
    switch ($row['jenis_pembayaran']) {
        case 'Mandiri':
            $daftarMahasiswa[] = new MahasiswaMandiri($row['id_mahasiswa'], $row['nama_mahasiswa'], $row['nim'], $row['semester'], $row['tarif_ukt_nominal'], $row['golongan_ukt'], $row['nama_wali']);
            break;
        case 'Bidikmisi':
            $daftarMahasiswa[] = new MahasiswaBidikmisi($row['id_mahasiswa'], $row['nama_mahasiswa'], $row['nim'], $row['semester'], $row['tarif_ukt_nominal'], $row['nomer_kip_kuliah'], $row['dana_saku_subsidi']);
            break;
        case 'Prestasi':
            $daftarMahasiswa[] = new MahasiswaPrestasi($row['id_mahasiswa'], $row['nama_mahasiswa'], $row['nim'], $row['semester'], $row['tarif_ukt_nominal'], $row['nama_instansi_beasiswa'], $row['minimal_ipk_syarat']);
            break;
    }
}
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Registrasi Mahasiswa</title>
</head>
<body>
    <h1>Laporan Registrasi Pembayaran Kuliah</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>Spesifikasi Akademik</th>
                <th>Tagihan Akhir (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($daftarMahasiswa as $mhs): ?>
                <tr>
                    <td><?php echo $mhs->getNamaMahasiswa(); ?></td>
                    <td><?php echo $mhs->tampilkanspesifikasiakademik(); ?></td>
                    <td><?php echo number_format($mhs->hitungtagihansemester()); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>