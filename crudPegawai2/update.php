
    <h2>Update Data Pegawai</h2>
    <?php
        include 'config.php';
        $sql = mysqli_query($link, "SELECT * FROM data_pegawai, data_npsn WHERE data_pegawai.id_npsn= data_npsn.id_npsn AND id_pegawai='$_GET[update]'");
        $data = mysqli_fetch_array($sql);
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="nama_pegawai">Nama<label></td>
                <td><input type = "text" name="nama_pegawai" value="<?php echo $data['nama_pegawai']?>"></td>
            </tr>
            <tr>
                <td><label for="no_ktp">No KTP</label></td>
                <td><input type = "text" name="no_ktp" value="<?php echo $data['no_ktp']?>"></td>
            </tr>
            <tr>
                <td><label for="nuptk">NUPTK</label></td>
                <td><input type = "text" name="nuptk" value="<?php echo $data['nuptk']?>"></td>
            </tr>
            <tr>
                <td><label for="nip">NIP</label></td>
                <td><input type = "text" name="nip" value="<?php echo $data['nip']?>"></td>
            </tr>
             <tr>
                <td><label for="tempat_lahir">Kota Tempat Lahir</label></td>
                <td><input type = "text" name="tempat_lahir" value="<?php echo $data['tempat_lahir']?>"></td>
            </tr>
            <tr>
                <td><label for="jenis_kelamin">Jenis Kelamin(PRIA/WANITA)</label></td>
                <td><input type = "text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">alamat</label></td>
                <td><input type = "text" name="alamat" value="<?php echo $data['alamat']?>"></td>
            </tr>
            <tr>
                <td><label for="keterangan">Keterangan(AKTIF/TIDAK AKTIF)</label></td>
                <td><input type = "text" name="keterangan" value="<?php echo $data['keterangan']?>"></td>
            </tr>
            <tr>
                <td><label for="jabatan">Jabatan</label></td>
                <td><input type = "text" name="jabatan" value="<?php echo $data['jabatan']?>"></td>
            </tr>
            <tr>
                <td><label for="tgl_lahir">Tanggal Lahir</label></td>
                <td><input type = "date" name="tgl_lahir" value="<?php echo $data['tgl_lahir']?>"></td>
            </tr>
            <tr>
                <td><label for="status_guru">Status Guru(PNS/Bukan)</label></td>
                <td><input type = "text" name="status_guru" value="<?php echo $data['status_guru']?>"></td>
            </tr>
            <tr>
                <td><label for="pendidikan">Pendidikan</label></td>
                <td><input type = "text" name="pendidikan" value="<?php echo $data['pendidikan']?>"></td>
            </tr>
            <tr>
                <td><label for="thn_lulus">Tahun Lulus</label></td>
                <td><input type = "text" name="thn_lulus" value="<?php echo $data['thn_lulus']?>"></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td><input type = "text" name="jurusan" value="<?php echo $data['jurusan']?>"></td>
            </tr>
            <tr>
                <td><label for="npsn">NPSN</label></td>
                <td><input type = "text" name="npsn" value="<?php echo $data['npsn']?>"></td>
            </tr>
            <tr>
                <td><label for="nama_sekolah">Nama Sekolah</label></td>
                <td><input type = "text" name="nama_sekolah" value="<?php echo $data['nama_sekolah']?>"></td>
            </tr>
            <tr>
                <td><label for="status_sekolah">Status Sekolah(NEGERI/SWASTA)</label></td>
                <td><input type = "text" name="status_sekolah" value="<?php echo $data['status_sekolah']?>"></td>
            </tr>
            <tr>
                <td><label for="kec_sekolah">Kecamatan Sekolah</label></td>
                <td><input type = "text" name="kec_sekolah" value="<?php echo $data['kec_sekolah']?>"></td>
            </tr>
            <tr>
                <td><label>Tahun Sertifikasi</label></td>
                <td><input type = "text" name="sertifikasi_tahun" value="<?php echo $data['sertifikasi_tahun']?>"></td>
            </tr>
            <tr>
                <td><label>Nomor Sertifikasi</label></td>
                <td><input type = "text" name="sertifikasi_nomor" value="<?php echo $data['sertifikasi_nomor']?>"></td>
            </tr>
            <tr>
                <td><label>NRG Sertifikasi</label></td>
                <td><input type = "text" name="sertifikasi_nrg" value="<?php echo $data['sertifikasi_nrg']?>"></td>
            </tr>
            <tr>
                <td><label>No Peserta Sertifikasi</label></td>
                <td><input type = "text" name="sertifikasi_nopeserta" value="<?php echo $data['sertifikasi_nopeserta']?>"></td>
            </tr>
            <tr>
                <td><label>Bidang Studi Sertifikasi</label></td>
                <td><input type = "text" name="sertifikasi_bidangstudi" value="<?php echo $data['sertifikasi_bidangstudi']?>"></td>
            </tr>
            <tr> 
                <td><input type="submit" value="Submit" name="create"></td>
                <td><a href="index.php" style="margin: 2px; padding: 3px; background-color:blue; color:white; text-decoration:none; border-radius:5px;">Cancel</a></td>
            </tr>
        </table>
    </form>

    <?php
        if($_POST){
            $sql2 = "UPDATE data_pegawai SET
            nama_pegawai = '$_POST[nama_pegawai]',
            no_ktp = '$_POST[no_ktp]',
            nuptk = '$_POST[nuptk]',
            nip = '$_POST[nip]',
            tempat_lahir = '$_POST[tempat_lahir]',
            jenis_kelamin = '$_POST[jenis_kelamin]',
            alamat = '$_POST[alamat]',
            keterangan = '$_POST[keterangan]',
            jabatan = '$_POST[jabatan]',
            tgl_lahir = '$_POST[tgl_lahir]',
            status_guru = '$_POST[status_guru]',
            pendidikan = '$_POST[pendidikan]',
            thn_lulus = '$_POST[thn_lulus]',
            jurusan = '$_POST[jurusan]',
            sertifikasi_tahun = '$_POST[sertifikasi_tahun]',
            sertifikasi_nomor = '$_POST[sertifikasi_nomor]',
            sertifikasi_nrg = '$_POST[sertifikasi_nrg]',
            sertifikasi_nopeserta = '$_POST[sertifikasi_nopeserta]',
            sertifikasi_bidangstudi = '$_POST[sertifikasi_bidangstudi]' WHERE id_pegawai=$_GET[update]";
            
            $query = mysqli_query($link, $sql2);

            $sql2 = "UPDATE data_npsn SET 
            npsn = '$_POST[npsn]',
            nama_sekolah = '$_POST[nama_sekolah]',
            status_sekolah = '$_POST[status_sekolah]',
            kec_sekolah = '$_POST[kec_sekolah]' where id_npsn=$_GET[update]";
            
            $query = mysqli_query($link, $sql2);
            
            if($query){
                echo "<script>alert('Data telah Terupdate');
            document.location='index.php'</script>";
             }else {
                echo "Data gagal diubah :".mysqli_error();
             }
            
    
    }
            
    ?>