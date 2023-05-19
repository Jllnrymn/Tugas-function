<?php
function penjumlahan($angka1, $angka2) {
    $hasil = $angka1 + $angka2;
    return $hasil;
}

$hasilPenjumlahan = penjumlahan(6, 5);

echo "Hasil penjumlahan adalah: ". $hasilPenjumlahan ."</br>";

//latihan 2
function hitungLuasLingkaran($jariJari) {
    $luas = 3.14 * ($jariJari * 2);
    return $luas;
}

// tanda
$jariJari = 2;
$luasLingkaran = hitungLuasLingkaran($jariJari);

echo "Luas lingkaran dengan jari-jari $jariJari adalah:". $luasLingkaran."</br>";

//latihan 3
function hitungRataRata($array) {
    $jumlah = count($array);
    $total = array_sum($array);
    $rataRata = $total / $jumlah;
    return $rataRata;
}

// tanda
$angka = [1, 2, 3, 4, 5];
$rataRata = hitungRataRata($angka);
echo "Rata-rata: " . $rataRata."</br>";

//Latihan 4
function balikKalimat($kalimat) {
    // Memisahkan 
    $kata = explode(" ", $kalimat);
    
    // Membalikkan 
    $kataTerbalik = array_reverse($kata);
    
    // Menggabungkan kata-kata 
    $kalimatTerbalik = implode(" ", $kataTerbalik);
    
    // Mengembalikan kalimat terbalik
    return $kalimatTerbalik;
}

// Contoh 
$kalimatAwal = "saya suka makan nasi";
$kalimatTerbalik = balikKalimat($kalimatAwal);
echo $kalimatTerbalik."</br>";

//Latihan 5
function cariNamaTerpanjang($arrayNama) {
    $namaTerpanjang = '';
    $jumlahHurufTerpanjang = 0;
    
    foreach ($arrayNama as $nama) {
        $jumlahHuruf = strlen($nama);
        if ($jumlahHuruf > $jumlahHurufTerpanjang) {
            $jumlahHurufTerpanjang = $jumlahHuruf;
            $namaTerpanjang = $nama;
        }
    }
    
    return $namaTerpanjang;
}
$daftarNama = array("agil pake nanya", "arie satoru", "zaki waduh", "hisyam slebeww");
$namaTerpanjang = cariNamaTerpanjang($daftarNama);
echo "Nama orang pertama dengan jumlah huruf terbanyak: " . $namaTerpanjang."</br>";

//Latihan 6
function hitungJumlahVokal($kata) {
    $jumlahVokal = 0;
    
    $kata = strtolower($kata); 
    
    // Melakukan iterasi 
    for ($i = 0; $i < strlen($kata); $i++) {
        $karakter = $kata[$i];
        
        // Mengecek 
        if ($karakter == 'a' || $karakter == 'i' || $karakter == 'u' || $karakter == 'e' || $karakter == 'o') {
            $jumlahVokal++;
        }
    }
    
    return $jumlahVokal;
}
$kata = "hello";
$jumlahVokal = hitungJumlahVokal($kata);
echo "Jumlah huruf vokal dalam kata '$kata' adalah: " . $jumlahVokal;