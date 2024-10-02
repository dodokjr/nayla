<?php include "conn.php"?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $wa = $_POST['wa'];  // Pastikan form input memiliki field 'wa'
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];    
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];  // Pastikan form input memiliki field 'sekolah_asal'

    // Query untuk memasukkan data ke dalam tabel
    $sql = "INSERT INTO pendaftaran_mahasiswa (nama, alamat, wa, email, jenis_kelamin, agama, sekolah_asal)
    VALUES ('$nama', '$alamat', '$wa', '$email', '$jenis_kelamin', '$agama', '$sekolah_asal')";

    // Menjalankan query dan memeriksa apakah berhasil
    if (($result = $conn->query($sql)) !== FALSE)
{
    echo "query success";

    while($row = $result->fetch_assoc())
    {
        echo "ID: " . $row["ID"]. " - Name: " . $row["name"]. "<br>";
    }
}
else
{
    echo "query failure";
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

// Menutup koneksi 
$conn->close();
?>