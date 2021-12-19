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
                        <form class="form-horizontal" role="form" method="POST">
                            <div class="panel">

                            <div class="panel-heading">
                                <span class="panel-title">Application Form (International Student Enrollment)</span>
                            </div>
                                <div class="panel-body">
                                    <!-- Panel content-->

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">TODO : PHOTO</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <!-- TODO:Photo -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Academic Year</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <input type="text" name="app_form[year]" class="form-control"  placeholder="Type Here...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Field of Study</label>
                                        <div class="col-lg-8">
                                            <div class="bs-component">
                                                <input type="text" name="app_form[fos]" class="form-control"  placeholder="Type Here...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-heading">
                                        <span class="panel-title">Sending Institution</span>
                                    </div>
                                    <div class="panel-body">
                                        <!-- Panel content-->

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Name</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="institution[name]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Full Address</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <label class="control-label">Address</label>
                                                    <input type="text" name="institution[address]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">City</label>
                                                    <input type="text" name="institution[city]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Zip Code</label>
                                                    <input type="text" name="institution[zip]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Province</label>
                                                    <input type="text" name="institution[province]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Country</label>
                                                    <input type="text" name="institution[country]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Department Coordinator</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" name="institution[dpt][name]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Telephone</label>
                                                    <input type="text" name="institution[dpt][telephone]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Fax</label>
                                                    <input type="text" name="institution[dpt][fax]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Email</label>
                                                    <input type="text" name="institution[dpt][email]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Institution Coordinator</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" name="institution[inst][name]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Telephone</label>
                                                    <input type="text" name="institution[inst][telephone]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Fax</label>
                                                    <input type="text" name="institution[inst][fax]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Email</label>
                                                    <input type="text" name="institution[inst][email]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-heading">
                                        <span class="panel-title">Student's Personal Data</span>
                                    </div>
                                    <div class="panel-body">
                                        <!-- Panel content-->

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Name</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <label class="control-label">Surname</label>
                                                    <input type="text" name="student[surname]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Given Name</label>
                                                    <input type="text" name="student[givenname]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Middle Name</label>
                                                    <input type="text" name="student[midname]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Sex</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <select id="kegiatan" name="student[sex]" class="form-control">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Nationality</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="student[nation]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Place of Birth (Country, City)</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="student[birth_place]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Date of Birth</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="student[dob]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Passport Number</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="student[passport]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Full Address</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <label class="control-label">Address</label>
                                                    <input type="text" name="student[address]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">City</label>
                                                    <input type="text" name="student[city]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">State</label>
                                                    <input type="text" name="student[state]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Country</label>
                                                    <input type="text" name="student[country]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Zip Code</label>
                                                    <input type="text" name="student[zip]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Mobile Number</label>
                                                    <input type="text" name="student[telephone]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Email Address</label>
                                                    <input type="text" name="student[email]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Religion / Believe</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="student[religion]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Blood Group</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="student[blood_group]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-heading">
                                        <span class="panel-title">Parent's Information</span>
                                    </div>
                                    <div class="panel-body">
                                        <!-- Panel content-->

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Father</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" name="parents[father][name]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Occupation</label>
                                                    <input type="text" name="parents[father][occupation]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Mobile Number</label>
                                                    <input type="text" name="parents[father][telephone]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Email Address</label>
                                                    <input type="text" name="parents[father][email]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Mother</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" name="parents[mother][name]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Occupation</label>
                                                    <input type="text" name="parents[mother][occupation]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Mobile Number</label>
                                                    <input type="text" name="parents[mother][telephone]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Email Address</label>
                                                    <input type="text" name="parents[mother][email]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Parent's Address</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <label class="control-label">Address</label>
                                                    <input type="text" name="parents[address]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">City</label>
                                                    <input type="text" name="parents[city]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">State</label>
                                                    <input type="text" name="parents[state]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Country</label>
                                                    <input type="text" name="parents[country]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Zip Code</label>
                                                    <input type="text" name="parents[zip]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-heading">
                                        <span class="panel-title">Emergency Contact</span>
                                    </div>
                                    <div class="panel-body">
                                        <!-- Panel content-->

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Name</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="econtact[name]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Relationship to Applicant</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="econtact[relation]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Address</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <label class="control-label">Address</label>
                                                    <input type="text" name="econtact[address]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">City</label>
                                                    <input type="text" name="econtact[city]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">State</label>
                                                    <input type="text" name="econtact[state]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Country</label>
                                                    <input type="text" name="econtact[country]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Zip Code</label>
                                                    <input type="text" name="econtact[zip]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Email Address</label>
                                                    <input type="text" name="econtact[email]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Phone Number</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <label class="control-label">Home</label>
                                                    <input type="text" name="econtact[tele_home]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">Mobile</label>
                                                    <input type="text" name="econtact[tele_mobile]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-heading">
                                        <span class="panel-title">Period of Study</span>
                                    </div>
                                    <div class="panel-body">
                                        <!-- Panel content-->

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Period of Study</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <label class="control-label">From</label>
                                                    <input type="text" name="pos[from]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">To</label>
                                                    <input type="text" name="pos[to]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Duration of Stay (Months)</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="pos[duration]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">No of expected ECTS Credits</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="pos[ects]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-heading">
                                        <span class="panel-title">Language Competence</span>
                                    </div>
                                    <div class="panel-body">
                                        <!-- Panel content-->

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Mother Tongue</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="lang[mother]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Language of Instruction at home institution (if different)</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="lang[inst]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Other Languages (mention)</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <label class="control-label">I am currently studying this language</label>
                                                    <select id="" name="lang[other][1]" class="form-control">
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>

                                                    <label class="control-label">I have sufficient knowledge to follow lectures</label>
                                                    <select id="" name="lang[other][2]" class="form-control">
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>

                                                    <label class="control-label">I would have sufficient knowledge to follow lectures if I had some extra preparation</label>
                                                    <select id="" name="lang[other][3]" class="form-control">
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">English Competency Score</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <select id="com" name="lang[competency]" class="form-control">
                                                        <option>TOEFL</option>
                                                        <option>IELTS</option>
                                                        <option>Equivalent English Test</option>
                                                    </select>

                                                    <input id="com_field" type="hidden" name="lang[competency]" class="form-control" disabled placeholder="Type Here...">

                                                    <label class="control-label">Score</label>
                                                    <input type="text" name="lang[score]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-heading">
                                        <span class="panel-title">Educational Background</span>
                                    </div>
                                    <div class="panel-body">
                                        <!-- Panel content-->

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Senior High School Origin</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="shs[origin]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Senior High School Address</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="shs[address]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Date of Attendance</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <label class="control-label">From</label>
                                                    <input type="text" name="shs[from]" class="form-control"  placeholder="Type Here...">

                                                    <label class="control-label">To</label>
                                                    <input type="text" name="shs[to]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Major</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="shs[major]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-heading">
                                        <span class="panel-title">Current Study</span>
                                    </div>
                                    <div class="panel-body">
                                        <!-- Panel content-->

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Home Institution</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="current[inst]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Degree</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="current[degree]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Department/Study Program</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="current[dpt]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Currently Enrolled School Year (Grade Level)</label>
                                            <div class="col-lg-8">
                                                <div class="bs-component">
                                                    <input type="text" name="current[grade]" class="form-control"  placeholder="Type Here...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="form-group">
                                        <label class="col-md-8 control-label">Motivation to Apply STIKI's International Program: (Clear and Brief Explanation)</label>
                                        <div class="col-md">
                                            <div class="bs-component">
                                                <textarea class="form-control" name="app_form[stiki]" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-8 control-label">Motivation to study in Indonesia: (Clear and Brief Explanation)</label>
                                        <div class="col-md">
                                            <div class="bs-component">
                                                <textarea class="form-control" name="app_form[indonesia]" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="row text-center">
                                            <button class="btn btn-primary" type="submit" name="submit" value="True">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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

            $("#com").change(function() {
    			if($(this).find("option:selected").text() == "Equivalent English Test")
    			{
    				$('input[id=com_field]').prop('type', "text");
    				$('input[id=com_field]').prop('disabled', false);
    			}
    			else
    			{
    				$('input[id=com_field]').prop('type', "hidden");
    				$('input[id=com_field]').prop('disabled', true);
    			}

			});

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