<!DOCTYPE html>
<html>
    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <title>AdminDesigns - A Responsive HTML5 Admin UI Framework</title>
        <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
        <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
        <meta name="author" content="AdminDesigns">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php

        	function base_url($a)
        	{
        		$base = 'http://192.168.1.102/web/pjj/igniter/';
        		$url = $base . $a;
        		return $url;
        	}

	        echo"<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>";

	        echo'<link rel="stylesheet" type="text/css" href="'.base_url('assets/skin/default_skin/css/theme.css').'">';

	        echo'<link rel="stylesheet" type="text/css" href="'.base_url('assets/admin-tools/admin-forms/css/admin-forms.css').'">';

	        echo'<link rel="shortcut icon" href="'.base_url('assets/img/favicon.ico').'">';

	        echo'<script src="'.base_url('vendor/jquery/jquery-1.11.1.min.js').'"></script>';
	        echo'<script src="'.base_url('vendor/jquery/jquery_ui/jquery-ui.min.js').'"></script>';

	        echo'<script src="'.base_url('vendor/plugins/highcharts/highcharts.js').'"></script>';

	        echo'<script src="'.base_url('vendor/plugins/sparkline/jquery.sparkline.min.js').'"></script>';

	        echo'<script src="'.base_url('vendor/plugins/circles/circles.js').'"></script>';

	        echo'<script src="'.base_url('vendor/plugins/jvectormap/jquery.jvectormap.min.js').'"></script>';
	        echo'<script src="'.base_url('vendor/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js').'"></script>';

	        echo'<script src="'.base_url('assets/js/utility/utility.js').'"></script>';
	        echo'<script src="'.base_url('assets/js/demo/demo.js').'"></script>';

	        echo'<script src="'.base_url('assets/js/demo/widgets.js').'"></script>';
        ?>
    </head>
    <body>
    </body>
</html>