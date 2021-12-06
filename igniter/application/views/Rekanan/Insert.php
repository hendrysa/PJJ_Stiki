<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
    </head>
    <body class="sb-l-o sb-r-c">
        <div id='main'>
            <?php
                $this->load->view('template/header');
                $this->load->view('template/navbar');
            ?>
            <!-- Start: Content-Wrapper -->
            <section id="content_wrapper">
                <?php
                    $this->load->view('template/dropmenu');
                ?>

                <!-- Begin: Content -->
                <section id="content" class="animated fadeIn">
                    <div class="row">

                        <div class="col-fluid">
                        <!-- Input Fields -->
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Entri Data Rekanan</span>
                            </div>
                            <div class="panel-body">

                                <form class="form-horizontal" role="form" method="POST">

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
                    $this->load->view('template/footer');
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