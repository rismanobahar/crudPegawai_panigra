 
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="nama_pegawai">Nama<label></td>
                <td><input type = "text" name="nama_pegawai"></td>
            </tr>
            <tr>
                <td><label for="no_ktp">No KTP</label></td>
                <td><input type = "text" name="no_ktp"></td>
            </tr>
            <tr>
                <td><label for="nuptk">NUPTK</label></td>
                <td><input type = "text" name="nuptk"></td>
            </tr>
            <tr>
                <td><label for="nip">NIP</label></td>
                <td><input type = "text" name="nip"></td>
            </tr>
             <tr>
                <td><label for="tempat_lahir">Kota Tempat Lahir</label></td>
                <td><input type = "text" name="tempat_lahir"></td>
            </tr>
            <tr>
                <td><label for="jk">Jenis Kelamin(PRIA/WANITA)</label></td>
                <td><input type = "text" name="jk"></td>
            </tr>
            <tr>
                <td><label for="alamat">alamat</label></td>
                <td><input type = "text" name="alamat"></td>
            </tr>
            <tr>
                <td><label for="keterangan">Keterangan(AKTIF/TIDAK AKTIF)</label></td>
                <td><input type = "text" name="keterangan"></td>
            </tr>
            <tr>
                <td><label for="jabatan">Jabatan</label></td>
                <td><input type = "text" name="jabatan"></td>
            </tr>
            <tr>
                <td><label for="tgl_lahir">Tanggal Lahir</label></td>
                <td><input type = "date" name="tgl_lahir"></td>
            </tr>
            <tr>
                <td><label for="sg">Status Guru(PNS/BUKAN PNS)</label></td>
                <td><input type = "text" name="sg"></td>
            </tr>
            <tr>
                <td><label for="pendidikan">Pendidikan</label></td>
                <td><input type = "text" name="pendidikan"></td>
            </tr>
            <tr>
                <td><label for="thn_lulus">Tahun Lulus</label></td>
                <td><input type = "text" name="thn_lulus"></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td><input type = "text" name="jurusan"></td>
            </tr>
            <tr>
                <td><label for="npsn">NPSN</label></td>
                <td><input type = "text" name="npsn"></td>
            </tr>
            <tr>
                <td><label for="nama_sekolah">Nama Sekolah</label></td>
                <td><input type = "text" name="nama_sekolah"></td>
            </tr>
            <tr>
                <td><label for="status_sekolah">Status Sekolah(NEGERI/SWASTA)</label></td>
                <td><input type = "text" name="status_sekolah"></td>
            </tr>
            <tr>
                <td><label for="kec_sekolah">Kecamatan Sekolah</label></td>
                <td><input type = "text" name="kec_sekolah"></td>
            </tr>
            <tr>
                <td><label>Tahun Sertifikasi</label></td>
                <td><input type = "text" name="sertifikasi_tahun"></td>
            </tr>
            <tr>
                <td><label>Nomor Sertifikasi</label></td>
                <td><input type = "text" name="sertifikasi_nomor"></td>
            </tr>
            <tr>
                <td><label>NRG Sertifikasi</label></td>
                <td><input type = "text" name="sertifikasi_nrg"></td>
            </tr>
            <tr>
                <td><label>No Peserta Sertifikasi</label></td>
                <td><input type = "text" name="sertifikasi_nopeserta"></td>
            </tr>
            <tr>
                <td><label>Bidang Studi Sertifikasi</label></td>
                <td><input type = "text" name="sertifikasi_bidangstudi"></td>
            </tr>
            <tr> 
                <td><input type="submit" value="Submit" name="create"></td>
                <td><a href="index.php" style="margin: 2px; padding: 3px; background-color:blue; color:white; text-decoration:none; border-radius:5px;">Cancel</a></td>
            </tr>
        </table>
    </form>
    
    <?php
        include 'config.php';
        if($_POST){
        $sql = "INSERT INTO data_npsn (npsn, nama_sekolah, status_sekolah, kec_sekolah) VALUES ('{$_POST['npsn']}', '{$_POST['nama_sekolah']}', '{$_POST['status_sekolah']}', '{$_POST['kec_sekolah']}')";
            $query = mysqli_query($link, $sql);

            $sql = "SELECT max(id_npsn) AS last_id FROM data_npsn LIMIT 1";
            $query = mysqli_query($link, $sql);

            $data = mysqli_fetch_array($query);
            $last_id = $data['last_id'];

            $sql = "INSERT INTO data_pegawai (
                id_npsn, 
                nama_pegawai, 
                no_ktp, 
                nip, 
                nuptk, 
                keterangan, 
                tempat_lahir, 
                jenis_kelamin, 
                alamat, 
                jabatan, 
                tgl_lahir, 
                status_guru, 
                pendidikan, 
                thn_lulus, 
                jurusan,
                sertifikasi_tahun,
                sertifikasi_nomor,
                sertifikasi_nrg,
                sertifikasi_nopeserta,
                sertifikasi_bidangstudi) VALUES (
                    '$last_id', 
                    '{$_POST['nama_pegawai']}', 
                    '{$_POST['no_ktp']}', 
                    '{$_POST['nip']}', 
                    '{$_POST['nuptk']}', 
                    '{$_POST['keterangan']}', 
                    '{$_POST['tempat_lahir']}', 
                    '{$_POST['jk']}', 
                    '{$_POST['alamat']}', 
                    '{$_POST['jabatan']}', 
                    '{$_POST['tgl_lahir']}', 
                    '{$_POST['sg']}', 
                    '{$_POST['pendidikan']}', 
                    '{$_POST['thn_lulus']}',
                    '{$_POST['jurusan']}',
                    '{$_POST['sertifikasi_tahun']}',
                    '{$_POST['sertifikasi_nomor']}',
                    '{$_POST['sertifikasi_nrg']}',
                    '{$_POST['sertifikasi_nopeserta']}',
                    '{$_POST['sertifikasi_bidangstudi']}')";
            $query = mysqli_query($link, $sql);
            if($query){
                echo "<script>alert('Data berhasil dibuat');
                document.location='index.php'</script>";
            } else {
                echo "Data gagal dibuat :" .mysqli_error();
            }
           
        }
    ?>

<!-- include "config.php";
    if(isset($_POST['create'])){
        mysqli_query($link, "INSERT INTO data_pegawai SET
        nama_pegawai = '$_POST[nama]',
        no_ktp = '$_POST[no_ktp]',
        nip = '$_POST[nip]',
        nuptk = '$_POST[nuptk]',
        keterangan = '$_POST[keterangan]'") or die(mysqli_error($link));
        echo "<script>alert('Data telah tersimpan')</script>";
    } 
     if(isset($_POST['create'])){
        mysqli_query($link, "INSERT INTO data_npsn SET
        npsn = '$_POST[npsn]'") or die(mysqli_error($link));
        echo "<script>alert('Data telah tersimpan')</script>";
    }
    
 

 if (isset($_POST['create'])) {
            $sql = "INSERT INTO data_pegawai (id_npsn, nama_pegawai, no_ktp, nip, nuptk, keterangan) VALUES ('{$_POST['id_npsn']}', '{$_POST['nama_pegawai']}', 
            '{$_POST['no_ktp']}', '{$_POST['nip']}', '{$_POST['nuptk']}', '{$_POST['keterangan']}')";
            $query = mysqli_query($link, $sql);

            if ($query) {
                echo "<script>alert('Data berhasil disimpan')</script>";
                header ('Location: create2.php');
            } else {
                echo "Data gagal disimpan".mysqli_error();
            }
        }-->