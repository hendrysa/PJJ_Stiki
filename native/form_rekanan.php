<!DOCTYPE html>
<html>
    <head>
        <?php
            include 'style/style.php';
        ?>
        <script src="assets/js/main.js"></script>
    </head>
    <body class="sb-l-o sb-r-c">
        <?php
            include 'style/theme.php';
        ?>
        <div id='main'>
            <?php
                include 'style/header.php';
                include 'style/navbar.php';
            ?>
            <!-- Start: Content-Wrapper -->
            <section id="content_wrapper">
                <?php
                    include 'style/dropmenu.php';
                ?>
                <!-- Start: Topbar -->
                <header id="topbar">
                    <div class="topbar-left">
                        <ol class="breadcrumb">
                            <li class="crumb-active">
                                <a href="form_rekanan.php">Form Rekanan</a>
                            </li>
                            <li class="crumb-icon">
                                <a href=".">
                                    <span class="glyphicon glyphicon-home"></span>
                                </a>
                            </li>
                            <li class="crumb-link">
                                <a href=".">Setting Data Master</a>
                            </li>
                            <li class="crumb-trail">Form Rekanan</li>
                        </ol>
                    </div>
                </header>
                <!-- End: Topbar -->

                <!-- Begin: Content -->
                <section id="content" class="animated fadeIn">
                    <div class="row">

                        <div class="col-fluid">
                        <?php
                            if(isset($_POST['submit']))
                            {
                                include_once 'db.php';
                                $id_rekanan = $_POST['id_rekanan'];
                                $nama_rekanan = $_POST['nama_rekanan'];
                                $nama_pic = $_POST['pic'];
                                if(!empty($_POST['jenis_field'])) {$jenis_rekanan = $_POST['jenis_field'];}
                                else {$jenis_rekanan = $_POST['jenis'];}
                                $lingkup = $_POST['lingkup'];
                                $nomor_telepon = $_POST['no_tlpn'];
                                $email = $_POST['email'];
                                $alamat = $_POST['alamat'];
                                $no_mou = $_POST['no_mou'];
                                $tanggal_mou = $_POST['tgl_mou'];
                                if(!empty($_POST['kegiatan_field'])) {$kegiatan = $_POST['kegiatan_field'];}
                                else {$kegiatan = $_POST['kegiatan'];}
                                $value = "NULL, '$id_rekanan', '$nama_rekanan', '$nama_pic', '$jenis_rekanan', '$lingkup' , '$nomor_telepon', '$email', '$alamat', '$no_mou', '$tanggal_mou', '$kegiatan'";
                                mysqli_query($mysqli, "INSERT INTO Data_Rekanan Values($value)");
                                echo('<div class="alert alert-primary animated fadeOut">Data berhasil di simpan!</div>');
                            }
                        ?>
                        <!-- Input Fields -->
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Entri Data Rekanan</span>
                            </div>
                            <div class="panel-body">

                                <form class="form-horizontal" role="form" action="form_rekanan.php" method="POST">

                                    <div class="form-group">
                                        <label for="id_rekanan" class="col-lg-3 control-label">ID Rekanan</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <input type="text" name="id_rekanan" class="form-control required" placeholder="Type Here...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama_rekanan" class="col-lg-3 control-label">Nama Rekanan</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <input type="text" name="nama_rekanan" class="form-control" required placeholder="Type Here...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama_pic" class="col-lg-3 control-label">Nama Person In Carge (PIC)</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <input type="text" name="pic" class="form-control" required placeholder="Type Here...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="jenis_rekanan" class="col-lg-3 control-label">Jenis Rekanan</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <div class="checkbox-custom checkbox-primary mb5">
                                                    <input name="jenis" type="checkbox" id="chk_perguruan" checked="false" value="Perguruan Tinggi">
                                                    <label for="chk_perguruan">Perguruan Tinggi</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary mb5">
                                                    <input name="jenis" type="checkbox" id="chk_asosiasi" checked="false" value="Asosiasi">
                                                    <label for="chk_asosiasi">Asosiasi</label>
                                                </div>
                                                <input type="text" name="jenis_field" class="form-control" placeholder="Lainnya....">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="lingkup" class="col-lg-3 control-label">Lingkup</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <select name="lingkup" class="form-control">
                                                    <option>Nasional</option>
                                                    <option>Internasional</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nomor_telepon" class="col-lg-3 control-label">Nomor Telepon</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <input type="tel" name="no_tlpn" minlength=10 maxlength=12 class="form-control" pattern="[0-9]{12}" required placeholder="08xxxxxxxxxx">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="col-lg-3 control-label">Email</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <input type="email" name="email" required class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat" class="col-lg-3 control-label">Alamat</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <input type="text" name="alamat" required class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_mou" class="col-lg-3 control-label">No. MOU</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <input type="text" name="no_mou" required class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal_mou" class="col-lg-3 control-label">Tanggal MOU</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <input type="date" name="tgl_mou" required class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="kegiatan" class="col-lg-3 control-label">Kegiatan yang disepakati</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <div class="checkbox-custom checkbox-primary mb5">
                                                    <input type="checkbox" name="kegiatan" checked="false" id="chk_kegiatan1" value="Pertukaran Pelajar">
                                                    <label for="chk_kegiatan1">Pertukaran Pelajar</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary mb5">
                                                    <input type="checkbox" name="kegiatan" checked="false" id="chk_kegiatan2" value="Magang Kerja">
                                                    <label for="chk_kegiatan2">Magang Kerja</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary mb5">
                                                    <input type="checkbox" name="kegiatan" checked="false" id="chk_kegiatan3" value="Studi Independent">
                                                    <label for="chk_kegiatan3">Studi Independent</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary mb5">
                                                    <input type="checkbox" name="kegiatan" checked="false" id="chk_kegiatan4" value="Pertukaran Pelajar">
                                                    <label for="chk_kegiatan4">Penelitian dan pengabdian</label>
                                                </div>
                                                <input type="text" name="kegiatan_field" id="chk_kegiatan5" class="form-control" placeholder="Lainnya....">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row text-center">
                                            <button class="btn btn-primary" type="submit" name="submit" value="True">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End: Content -->
                <?php
                    include 'style/footer.php';
                ?>
            </section>
            <!-- End: Content-Wrapper -->
        </div>

        <!-- Start: PAGE SCRIPTS -->
        <script type="text/javascript">
        jQuery(document).ready(function() {

            $('input[type=checkbox]').prop('checked', false);

            "use strict";

            // Init Theme Core      
            Core.init();

            // Init Demo JS
            Demo.init();
        });
        </script>

        <!-- END: PAGE SCRIPTS -->
    </body>
</html>