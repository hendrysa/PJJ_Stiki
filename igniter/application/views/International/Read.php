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
                                <span class="panel-title">Daftar International</span>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST">
                                    <table class="table table-hover table-bordered table-striped">
                                        <!-- Table Header -->
                                        <tr>
                                            <th class="text-center">id</th>
                                            <th class="text-center">Institution Name</th>
                                            <th class="text-center">MHS Surname</th>
                                            <th class="text-center">MHS Givenname</th>
                                            <th class="text-center">MHS Middlename</th>
                                            <th class="text-center">Action</th>
                                        </tr>

                                        <!-- Table Content -->
                                        <tr>
                                            <?php
                                                foreach($data as $i)
                                                {
                                                    $id = $i->id;
                                                    $inst_name = $i->Institution_Name;
                                                    $surname = $i->Surname;
                                                    $givenname = $i->Givenname;
                                                    $middlename = $i->Middlename;

                                                    echo "<tr>";

                                                    echo "<td class='text-center'>$id</td>";
                                                    echo "<td class='text-center'>$inst_name</td>";
                                                    echo "<td class='text-center'>$surname</td>";
                                                    echo "<td class='text-center'>$givenname</td>";
                                                    echo "<td class='text-center'>$middlename</td>";
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