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
                    <div class="topbar-right">
                        <div class="ib topbar-dropdown">
                            <label for="topbar-multiple" class="control-label pr10 fs11 text-muted">Reporting Period</label>
                            <select id="topbar-multiple" class="hidden">
                                <optgroup label="Filter By:">
                                    <option value="1-1">Last 30 Days</option>
                                    <option value="1-2" selected="selected">Last 60 Days</option>
                                    <option value="1-3">Last Year</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="ml15 ib va-m" id="toggle_sidemenu_r">
                            <a href="#" class="pl5">
                                <i class="fa fa-sign-in fs22 text-primary"></i>
                                <span class="badge badge-danger badge-hero">3</span>
                            </a>
                        </div>
                    </div>
                </header>
                <!-- End: Topbar -->

                <!-- Begin: Content -->
                <section id="content" class="animated fadeIn">
                    <div class="row">

                        <div class="col-md">

                        <!-- Input Fields -->
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Entri Data Rekanan</span>
                            </div>
                            <div class="panel-body">

                                <form class="form-horizontal" role="form">

                                    <div class="form-group">
                                        <label for="id_rekanan" class="col-lg-3 control-label">ID Rekanan</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <input type="text" id="id_rekanan" class="form-control" placeholder="Type Here...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama_rekanan" class="col-lg-3 control-label">Nama Rekanan</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <input type="text" id="nama_rekanan" class="form-control" placeholder="Type Here...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama_pic" class="col-lg-3 control-label">Nama Person In Carge (PIC)</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <input type="text" id="nama_pic" class="form-control" placeholder="Type Here...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="jenis_rekanan" class="col-lg-3 control-label">Jenis Rekanan</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <div class="checkbox-custom checkbox-primary mb5">
                                                    <input type="checkbox" checked="false" id="chk_perguruan">
                                                    <label for="chk_perguruan">Perguruan Tinggi</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary mb5">
                                                    <input type="checkbox" checked="false" id="chk_asosiasi">
                                                    <label for="chk_asosiasi">Asosiasi</label>
                                                </div>
                                                <input type="text" id="jenis_rekanan" class="form-control" placeholder="Lainnya....">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="lingkup" class="col-lg-3 control-label">Lingkup</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <select class="form-control">
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
                                                <input type="tel" id="nomor_telepon" minlength=10 maxlength=12 class="form-control" pattern="[0-9]{12}" required placeholder="08xxxxxxxxxx">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="col-lg-3 control-label">Email</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <input type="tel" id="email" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat" class="col-lg-3 control-label">Alamat</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <input type="text" id="alamat" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_mou" class="col-lg-3 control-label">No. MOU</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <input type="text" id="no_mou" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal_mou" class="col-lg-3 control-label">Tanggal MOU</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <input type="date" id="tanggal_mou" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="kegiatan" class="col-lg-3 control-label">Kegiatan yang disepakati</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <div class="checkbox-custom checkbox-primary mb5">
                                                    <input type="checkbox" checked="false" id="chk_kegiatan1">
                                                    <label for="chk_kegiatan1">Pertukaran pelajar</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary mb5">
                                                    <input type="checkbox" checked="false" id="chk_kegiatan2">
                                                    <label for="chk_kegiatan2">Magang Kerja</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary mb5">
                                                    <input type="checkbox" checked="false" id="chk_kegiatan3">
                                                    <label for="chk_kegiatan3">Studi Independent</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary mb5">
                                                    <input type="checkbox" checked="false" id="chk_kegiatan4">
                                                    <label for="chk_kegiatan4">Penelitian dan pengabdian</label>
                                                </div>
                                                <input type="text" id="chk_kegiatan5" class="form-control" placeholder="Lainnya....">
                                            </div>
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

            // Init Widget Demo JS
            // demoHighCharts.init();

            // Because we are using Admin Panels we use the OnFinish 
            // callback to activate the demoWidgets. It's smoother if
            // we let the panels be moved and organized before 
            // filling them with content from various plugins

            // Init plugins used on this page
            // HighCharts, JvectorMap, Admin Panels

            // Init Admin Panels on widgets inside the ".admin-panels" container
            $('.admin-panels').adminpanel({
            grid: '.admin-grid',
            draggable: true,
            preserveGrid: true,
            mobile: false,
            onStart: function() {
                // Do something before AdminPanels runs
            },
            onFinish: function() {
                $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

                // Init the rest of the plugins now that the panels
                // have had a chance to be moved and organized.
                // It's less taxing to organize empty panels
                demoHighCharts.init();
                runVectorMaps(); // function below
            },
            onSave: function() {
                $(window).trigger('resize');
            }
            });

            // Widget VectorMap
            function runVectorMaps() {

            // Jvector Map Plugin
            var runJvectorMap = function() {
                // Data set
                var mapData = [900, 700, 350, 500];
                // Init Jvector Map
                $('#WidgetMap').vectorMap({
                map: 'us_lcc_en',
                //regionsSelectable: true,
                backgroundColor: 'transparent',
                series: {
                    markers: [{
                    attribute: 'r',
                    scale: [3, 7],
                    values: mapData
                    }]
                },
                regionStyle: {
                    initial: {
                    fill: '#E5E5E5'
                    },
                    hover: {
                    "fill-opacity": 0.3
                    }
                },
                markers: [{
                    latLng: [37.78, -122.41],
                    name: 'San Francisco,CA'
                }, {
                    latLng: [36.73, -103.98],
                    name: 'Texas,TX'
                }, {
                    latLng: [38.62, -90.19],
                    name: 'St. Louis,MO'
                }, {
                    latLng: [40.67, -73.94],
                    name: 'New York City,NY'
                }],
                markerStyle: {
                    initial: {
                    fill: '#a288d5',
                    stroke: '#b49ae0',
                    "fill-opacity": 1,
                    "stroke-width": 10,
                    "stroke-opacity": 0.3,
                    r: 3
                    },
                    hover: {
                    stroke: 'black',
                    "stroke-width": 2
                    },
                    selected: {
                    fill: 'blue'
                    },
                    selectedHover: {}
                },
                });
                // Manual code to alter the Vector map plugin to 
                // allow for individual coloring of countries
                var states = ['US-CA', 'US-TX', 'US-MO',
                'US-NY'
                ];
                var colors = [bgWarningLr, bgPrimaryLr, bgInfoLr, bgAlertLr];
                var colors2 = [bgWarning, bgPrimary, bgInfo, bgAlert];
                $.each(states, function(i, e) {
                $("#WidgetMap path[data-code=" + e + "]").css({
                    fill: colors[i]
                });
                });
                $('#WidgetMap').find('.jvectormap-marker')
                .each(function(i, e) {
                    $(e).css({
                    fill: colors2[i],
                    stroke: colors2[i]
                    });
                });
            }

            if ($('#WidgetMap').length) {
                runJvectorMap();
            }
            }
        });
        </script>

        <!-- END: PAGE SCRIPTS -->
    </body>
</html>