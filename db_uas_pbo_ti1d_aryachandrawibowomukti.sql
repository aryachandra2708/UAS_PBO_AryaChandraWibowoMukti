-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 25 Jun 2026 pada 06.35
-- Versi server: 8.0.30
-- Versi PHP: 8.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Basis data: `db_uas_pbo_ti1d_aryachandrawibowomukti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `id_mahasiswa` int NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `semester` int NOT NULL,
  `tarif_ukt_nominal` decimal(15,2) DEFAULT NULL,
  `jenis_pembayaran` enum('Mandiri','Bidikmisi','Prestasi') NOT NULL,
  `golongan_ukt` varchar(10) DEFAULT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `nomer_kip_kuliah` varchar(50) DEFAULT NULL,
  `dana_saku_subsidi` decimal(15,2) DEFAULT NULL,
  `nama_instansi_beasiswa` varchar(100) DEFAULT NULL,
  `minimal_ipk_syarat` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `nim`, `semester`, `tarif_ukt_nominal`, `jenis_pembayaran`, `golongan_ukt`, `nama_wali`, `nomer_kip_kuliah`, `dana_saku_subsidi`, `nama_instansi_beasiswa`, `minimal_ipk_syarat`) VALUES
(1, 'Budi', '001', 3, 5000000.00, 'Mandiri', '5', 'Sugeng', NULL, 0.00, NULL, NULL),
(2, 'Ani', '002', 3, 4000000.00, 'Mandiri', '4', 'Sri', NULL, 0.00, NULL, NULL),
(3, 'Caca', '003', 2, 6000000.00, 'Mandiri', '6', 'Joko', NULL, 0.00, NULL, NULL),
(4, 'Dedi', '004', 4, 3000000.00, 'Mandiri', '3', 'Ahmad', NULL, 0.00, NULL, NULL),
(5, 'Eka', '005', 1, 5000000.00, 'Mandiri', '5', 'Siti', NULL, 0.00, NULL, NULL),
(6, 'Fani', '006', 2, 4000000.00, 'Mandiri', '4', 'Bambang', NULL, 0.00, NULL, NULL),
(7, 'Gani', '007', 5, 5000000.00, 'Mandiri', '5', 'Dewi', NULL, 0.00, NULL, NULL),
(8, 'Hani', '008', 1, 0.00, 'Bidikmisi', '1', 'Rahmat', 'KIP-01', 1500000.00, 'Kemendikbud', 2.75),
(9, 'Indah', '009', 1, 0.00, 'Bidikmisi', '1', 'Ratna', 'KIP-02', 1500000.00, 'Kemendikbud', 2.75),
(10, 'Joko', '010', 2, 0.00, 'Bidikmisi', '1', 'Hasan', 'KIP-03', 1500000.00, 'Kemendikbud', 2.75),
(11, 'Kiki', '011', 2, 0.00, 'Bidikmisi', '1', 'Aminah', 'KIP-04', 1500000.00, 'Kemendikbud', 2.75),
(12, 'Lala', '012', 3, 0.00, 'Bidikmisi', '1', 'Ujang', 'KIP-05', 1500000.00, 'Kemendikbud', 2.75),
(13, 'Mimi', '013', 3, 0.00, 'Bidikmisi', '1', 'Yanti', 'KIP-06', 1500000.00, 'Kemendikbud', 2.75),
(14, 'Nana', '014', 4, 0.00, 'Bidikmisi', '1', 'Tono', 'KIP-07', 1500000.00, 'Kemendikbud', 2.75),
(15, 'Opa', '015', 2, 2000000.00, 'Prestasi', '2', 'Lestari', NULL, 1000000.00, 'Djarum', 3.25),
(16, 'Popi', '016', 4, 2000000.00, 'Prestasi', '2', 'Budiman', NULL, 1200000.00, 'Tanoto', 3.50),
(17, 'Qori', '017', 5, 2000000.00, 'Prestasi', '2', 'Mega', NULL, 1000000.00, 'Djarum', 3.25),
(18, 'Riri', '018', 2, 2000000.00, 'Prestasi', '2', 'Rusli', NULL, 1200000.00, 'Tanoto', 3.50),
(19, 'Sasa', '019', 1, 2000000.00, 'Prestasi', '2', 'Indah', NULL, 1000000.00, 'Djarum', 3.25),
(20, 'Tata', '020', 3, 2000000.00, 'Prestasi', '2', 'Fajar', NULL, 1200000.00, 'Tanoto', 3.50),
(21, 'Umi', '021', 6, 2000000.00, 'Prestasi', '2', 'Maya', NULL, 1000000.00, 'Djarum', 3.25);

--
-- Indeks untuk tabel yang dibuang
--

--
-- Indeks untuk tabel `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  MODIFY `id_mahasiswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
