<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
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
                                <a href="DaftarRekanan">Daftar Rekanan</a>
                            </li>
                            <li class="crumb-icon">
                                <a href=".">
                                    <span class="glyphicon glyphicon-home"></span>
                                </a>
                            </li>
                            <li class="crumb-link">
                                <a href=".">Setting Data Master</a>
                            </li>
                            <li class="crumb-trail">Daftar Rekanan</li>
                        </ol>
                    </div>
                </header>
                <!-- End: Topbar -->

                <!-- Begin: Content -->
                <section id="content" class="animated fadeIn">
                    <div class="row">

                        <div class="col-fluid">
                        <!-- Input Fields -->
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Daftar Rekanan</span>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST">
                                    <table class="table table-hover table-bordered table-striped">
                                        <!-- Table Header -->
                                        <tr>
                                            <th class="text-center">id</th>
                                            <th class="text-center">id rekanan</th>
                                            <th class="text-center">Nama Rekanan</th>
                                            <th class="text-center">Nama PIC</th>
                                            <th class="text-center">Jenis Rekanan</th>
                                            <th class="text-center">Lingkup</th>
                                            <th class="text-center">Nomor Telepon</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">No MOU</th>
                                            <th class="text-center">Tanggal MOU</th>
                                            <th class="text-center">Kegiatan</th>
                                            <th class="text-center">Action</th>
                                        </tr>

                                        <!-- Table Content -->
                                        <tr>
                                            <?php
                                                foreach($data as $i)
                                                {
                                                    $id = $i->id;
                                                    $id_rekanan = $i->ID_Rekanan;
                                                    $nama_rekanan = $i->Nama_Rekanan;
                                                    $pic = $i->Nama_PIC;
                                                    $jenis = $i->Jenis_Rekanan;
                                                    $lingkup = $i->Lingkup;
                                                    $tlpn = $i->Nomor_Telepon;
                                                    $email = $i->Email;
                                                    $alamat = $i->Alamat;
                                                    $no_mou = $i->No_MOU;
                                                    $tgl_mou = $i->Tanggal_MOU;
                                                    $kegiatan = $i->Kegiatan;

                                                    echo "<tr>";

                                                    echo "<td class='text-center'>$id</td>";
                                                    echo "<td class='text-center'>$id_rekanan</td>";
                                                    echo "<td class='text-center'>$nama_rekanan</td>";
                                                    echo "<td class='text-center'>$pic</td>";
                                                    echo "<td class='text-center'>$jenis</td>";
                                                    echo "<td class='text-center'>$lingkup</td>";
                                                    echo "<td class='text-center'>$tlpn</td>";
                                                    echo "<td class='text-center'>$email</td>";
                                                    echo "<td class='text-center'>$alamat</td>";
                                                    echo "<td class='text-center'>$no_mou</td>";
                                                    echo "<td class='text-center'>$tgl_mou</td>";
                                                    echo "<td class='text-center'>$kegiatan</td>";
                                                    echo "<td class='text-center'>";
                                                        echo "<button class='btn btn-primary' type='submit' name='update' value=$id>Update</button>";
                                                        echo "&nbsp";
                                                        echo "<button class='btn btn-danger' type='submit' name='delete' value=$id>Delete</button>";
                                                    echo "</td>";

                                                    echo "</tr>";
                                                }
                                            ?>
                                        </tr>
                                    </table>
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