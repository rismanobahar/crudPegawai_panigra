<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>
<body>
<h1>Data Pegawai</h1>
<a href = "create.php" style="text-decoration: none; background-color: green; color: white; padding: 5px">Tambah Data</a>

<table border="3" >
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>No KTP</th>
        <th>NUPTK</th>
        <th>NIP</th>
        <th>Tempat Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Keterangan</th>
        <th>Jabatan</th>
        <th>Tanggal Lahir</th>
        <th>status guru</th>
        <th>Pendidikan</th>
        <th>Tahun Lulus Pendidikan</th>
        <th>Jurusan Pendidikan</th>
        <th>NPSN</th>
        <th>Nama Sekolah</th>
        <th>Status Sekolah</th>
        <th>Kecamatan Sekolah</th>
        <th>Tahun Sertifikasi</th>
        <th>Nomor Sertifikasi</th>
        <th>NRG Sertifikasi</th>
        <th>No Peserta Sertifikasi</th>
        <th>Bidang Studi Sertifikasi</th>
        <th>Pengaturan</th>
    </tr>
    <?php
    
    include "config.php";
    $no=1;
    $ambilData = mysqli_query($link, "SELECT * FROM data_pegawai, data_npsn
    WHERE data_pegawai.id_pegawai = data_npsn.id_npsn") or die (mysqli_error($link));   
    while($tampil = mysqli_fetch_array($ambilData)){
        echo"
        <tr>
            <td align='center'>$no</td>
            <td align='center'>$tampil[nama_pegawai]</td>
            <td align='center'>$tampil[no_ktp]</td>
            <td align='center'>$tampil[nuptk]</td>
            <td align='center'>$tampil[nip]</td>
            <td align='center'>$tampil[tempat_lahir]</td>
            <td align='center'>$tampil[jenis_kelamin]</td>
            <td align='center'>$tampil[alamat]</td>
            <td align='center'>$tampil[keterangan]</td>
            <td align='center'>$tampil[jabatan]</td>
            <td align='center'>$tampil[tgl_lahir]</td>
            <td align='center'>$tampil[status_guru]</td>
            <td align='center'>$tampil[pendidikan]</td>
            <td align='center'>$tampil[thn_lulus]</td>
            <td align='center'>$tampil[jurusan]</td>
            <td align='center'>$tampil[npsn]</td>
            <td align='center'>$tampil[nama_sekolah]</td>
            <td align='center'>$tampil[status_sekolah]</td>
            <td align='center'>$tampil[kec_sekolah]</td>
            <td align='center'>$tampil[sertifikasi_tahun]</td>
            <td align='center'>$tampil[sertifikasi_nomor]</td> 
            <td align='center'>$tampil[sertifikasi_nrg]</td> 
            <td align='center'>$tampil[sertifikasi_nopeserta]</td> 
            <td align='center'>$tampil[sertifikasi_bidangstudi]</td> 
            <td>
                <a href='update.php?update=$tampil[id_pegawai]'><input type='button' value='update'></a>
                <a href='?delete=$tampil[id_pegawai]' onCLick=\"return confirm('Yakin akan menghapus data?');\">
                    <input type='button' value='delete'>
                </a>
            </td>
        </tr>"; 
        $no++;
    }
    ?>
</table>
<?php
    if(isset($_GET['delete'])){
        mysqli_query($link, "DELETE FROM data_pegawai WHERE id_pegawai='$_GET[delete]'") or die (mysqli_error($link));
        echo "<p><b>Data berhasil dihapus</b></p>";
        echo "<meta http-equiv=refresh content=2; URL='index.php'>";
        echo "<script>document.location='index.php'</script>";
    }
?>
</body>
</html>

 <!--
//  <td>$no</td>
//             <td>$tampil[nama_pegawai]</td>
//             <td>$tampil[no_ktp]</td>
//             <td>$tampil[npsn]</td>
//             <td></td>  
            
//             // echo "<td>".$row['no_sertifikasi']."</td>";
//         // echo "<td>".$row['sertifikasi_tahun']."</td>";
//         // echo "<td>".$row['sertifikasi_nrg']."</td>";
//         // echo "<td>".$row['sertifikasi_noPeserta']."</td>";
//         // echo "<td>".$row['sertifikasi_bs']."</td>"; 
    
//         <th>Nomor Sertifikasi</th>
//      <th>Tahun Sertifikasi</th>
//      <th>NRG Sertifikasi</th>
//      <th>No Peserta Sertifikasi</th>
//      <th>Bidang Studi Sertifikasi</th> 

//         {
//        echo "<tr>";
//         echo "<td>$no</td>";
//         echo "<td>".$row['nama_pegawai']."</td>";
//         echo "<td>".$row['no_ktp']."</td>";
//         echo "<td>".$row['nip']."</td>";
//         echo "<td>".$row['nuptk']."</td>";
//         echo "<td>".$row['keterangan']."</td>";
//         echo "<td>".$row['tempat_lahir']."</td>";
//         echo "<td>".$row['tgl_lahir']."</td>";
//         echo "<td>".$row['jenis_kelamin']."</td>";
//         echo "<td>".$row['alamat']."</td>";
//         echo "<td>".$row['jabatan']."</td>";
//         echo "<td>".$row['status_guru']."</td>";
//         echo "<td>".$row['pendidikan']."</td>";
//         echo "<td>".$row['thn_lulus']."</td>";
//         echo "<td>".$row['jurusan']."</td>";
//         echo "<td>".$row['npsn']."</td>";
//         echo "<td>".$row['nama_sekolah']."</td>";
//         echo "<td>".$row['status_sekolah']."</td>";
//         echo "<td>".$row['kec_sekolah']."</td>";
       
//         echo "<td><a href= 'update.php?id=" .$row['id_pegawai']. "'>update</a>|<a href= 'read.php?id=" .$row['id_pegawai']. "'>read</a>|<a href= 'delete.php?id=" .$row['id_pegawai']. "'>delete</a></td>";
//        echo "</tr>";
//         $no++;   

        include 'config.php';
    $sql = "SELECT * FROM data_npsn INNER JOIN data_pegawai ON data_npsn.id_npsn = data_pegawai.id_pegawai";
    $query = mysqli_query($link, $sql);
//      
<tr>
        <td>< echo $data['nama_pegawai'] ?></td>
        <td>< echo $data['no_ktp'] ?><td>
        <td>< echo $data['nuptk'] ?></td>
        <td>< echo $data['nip'] ?></td>
        <td>< echo $data['tempat_lahir'] ?></td>
        <td>< echo $data['jenis_kelamin'] ?></td>
        <td>< echo $data['alamat'] ?></td>
        <td>< echo $data['keterangan'] ?></td>
        <td>< echo $data['jabatan'] ?></td>
        <td>< echo $data['tgl_lahir'] ?></td>
        <td>< echo $data['status_guru'] ?></td>
        <td>< echo $data['pendidikan'] ?></td>
        <td>< echo $data['thn_lulus'] ?></td>
        <td>< echo $data['jurusan'] ?></td>
        <td>< echo $data['npsn'] ?></td>
        <td>< echo $data['nama_sekolah'] ?></td>
        <td>< echo $data['status_sekolah'] ?></td>
        <td>< echo $data['kec_sekolah'] ?></td>
        <td><a href="#">Edit</a> | <a href="#">Hapus</a></td>
    </tr>


-->  

