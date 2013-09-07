<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	
	
	<title>JustWPFramework</title>
	
	
	
	<link rel="stylesheet" href="assets/css/normalize.css" />
	<link rel="stylesheet" href="assets/css/form-inputs.css" />
	<link rel="stylesheet" href="assets/css/headings.css" />
	<link rel="stylesheet" href="assets/css/text-format.css" />
	<link rel="stylesheet" href="assets/css/list.css" />
	<link rel="stylesheet" href="assets/css/media.css" />
	<link rel="stylesheet" href="assets/css/table.css" />
	<link rel="stylesheet" href="assets/css/wp.css" />
	
	<style type="text/css">

		body{
			background:#2c3e50;
			color:#7f8c8d;
			padding:0;
			margin:0;			
			font-family: Optima, Segoe, "Segoe UI", Candara, Calibri, Arial, sans-serif;
		}
		
		.section{
			padding-bottom:80px;
		}
		
		.page{
		
			width:1200px;
			max-width:100%;
			margin:0 auto 0 auto;
			
		}
		
		@media only screen and (max-width:1199px){
		
					.page{
						padding-left:10px;
						padding-right:10px;
					}
		
		}
		
		.subtitle{
			background:#bdc3c7;
			color:#f39c12;
			border-bottom:1px solid #2c3e50;
			padding:10px;
		}
		
		.heading{
			padding-top:25px;
			padding-bottom:25px;
		}
		
				#form-input,
				#media-elment{
					background:#34495e;
				}
			
				#head-elements .heading,
				#form-input .heading,
				#list-element .heading,
				#table-element .heading{
					background:#1abc9c;
					color:#34495e;
				}
	
				#head-elements,
				#text-format,
				#list-element,
				#table-element,
				#wp-functionalities{
					background:#ecf0f1;
					color:#2c3e50;
				}
				
				#text-format .heading,
				#media .heading,
				#wp-functionalities .heading{
					background:#e74c3c;
					color:#ecf0f1;
				}				
	
	</style>
	
</head>
<body>
	
	
	<div id="form-input" class="section">
		
		<div class="heading">	
			<div class="page">
				<h1>Form Input Elements</h1>
			</div>
		</div>
		
		<div class="page">
			
			<?php 
			
				include('form.php');
			
			?>
			
		</div>
	
	
	</div><!-- /#fomt-input -->
	
	
	
	<div id="head-elements" class="section">
		
		<div class="heading">	
			<div class="page">
				<h1>Head Elements</h1>
			</div>
		</div>
		
		<div class="page">
			
			<?php 
			
				include('head-element.php');
			
			?>
			
		</div>
	
	
	</div><!-- /#head-elements -->		
	
	
	
	
	<div id="text-format" class="section">
		
		<div class="heading">	
			<div class="page">
				<h1>Text Formatting Elements</h1>
			</div>
		</div>
		
		<div class="page">
			
			<?php 
			
				include('text-format.php');
			
			?>
			
		</div>
	
	
	</div><!-- /#fomt-input -->	
	
	
	
	
	
	
	<div id="list-element" class="section">
		
		<div class="heading">	
			<div class="page">
				<h1>List Elements</h1>
			</div>
		</div>
		
		<div class="page">
			
			<?php 
			
				include('list.php');
			
			?>
			
		</div>
	
	
	</div><!-- /#list-element -->	
	
	
	
	
	
	
	
	<div id="media" class="section">
		
		<div class="heading">	
			<div class="page">
				<h1>Media</h1>
			</div>
		</div>
		
		<div class="page">
			
			<?php 
			
				include('media.php');
			
			?>
			
		</div>
	
	
	</div><!-- /#media -->	
	
	
	
	
	
	
	
	<div id="table-element" class="section">
		
		<div class="heading">	
			<div class="page">
				<h1>Table</h1>
			</div>
		</div>
		
		<div class="page">
			
			<?php 
			
				include('table.php');
			
			?>
			
		</div>
	
	
	</div><!-- /#table-element -->	
	
	
	
	
	
	
	
	
	
	<div id="wp-functionalities" class="section">
		
		<div class="heading">	
			<div class="page">
				<h1>WordPress Functionalities</h1>
			</div>
		</div>
		
		<div class="page">
			
			<?php 
			
				include('wp-functionalities.php');
			
			?>
			
		</div>
	
	
	</div><!-- /#wp-functionalities -->	
	
	
	
	
	
	
	
	
	
	
	
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	
	
</body>
</html>