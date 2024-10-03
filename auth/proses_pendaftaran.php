<?php include "../koneksi/conn.php" ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $wa = $_POST['wa'];  // Pastikan form input memiliki field 'wa'
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];    
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];  // Pastikan form input memiliki field 'sekolah_asal'
    $password = hash('sha256', $_POST['password']);

    if(!$nama || !$alamat || !$wa || !$email || !$jenis_kelamin || !$password || !$agama || !$sekolah_asal) {
        echo "<script>alert('Woops! Tolong IsI yang benar')</script>";
    }

    if($wa > 11) {
        echo "<script>alert('Woops! Nomer whatsapp anda melebihi 11 nomer')</script>";
    } 
    if($nama || $email) {
        $sql = "SELECT * FROM db_mahasiswa WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO db_mahasiswa (nama, email, password, jenis_kelamin, wa, alamat, sekolah_asal, agama)
                    VALUES ('$nama', '$email', '$password', '$jenis_kelamin', '$wa', '$alamat', '$sekolah_asal', '$agama')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $nama = "";
                $email = "";
                $_POST['password'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
    }
}
?>