<!DOCTYPE html>
<html lang="utf-8">
	<head>
		<title>Unicode to Bijoy(ASCII) converter</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<style type="text/css">
			@font-face {
			  font-family: 'Rajon Shoily';
			  src: url('bangla.ttf')  format('truetype'), /* Safari, Android, iOS */
			}
			.bijoy-text {
		    font-family: 'Rajon Shoily', sans-serif;
			font-size: 30px;
			}
			.content{
				max-width: 840px;
				display:block;
				margin: 0px auto;
			}
			.header{
				padding: 15px;
				text-align:center;
				background: #9b59b6;
				color: #ecf0f1;
				font-size: 17px;
			}
			.header a{
				text-decoration: none;
				color: #bdc3c7;
			}
			.header a:hover{
				text-decoration: none;
				color: #e74c3c;
			}
		</style>
	</head>
	<body>
		<?php
		require 'u2b.php';
		$uni_text = 'আমার সোনার বাংলা , আমি তোমায় ভালবাসি';

		$bijoy_text = u2b($uni_text);
		?>
		<div class="header">
			<h1>Avro Unicode To Bijoy ASCII Converter</h1>
			<p>
				<b>Author: </b><a href="http://fb.me/shouvo.sabbir">Sabbir Hasan</a><br/>
				<b>Version: </b>1.0.1<br/>
				<b>License: </b>FREE FOR ALL. NO RESTRICTION.
			</p>
		</div>
		<div class="content">
			<h2>Unicode text:</h2>
			<div class="uni-text"><?php echo $uni_text;?></div>
			<h2>Bijoy(ASCII) text (Using Font):</h2>
			<div class="bijoy-text"><?php echo $bijoy_text;?></div>
			<h2>Bijoy(ASCII) text (Original Output):</h2>
			<div><?php echo $bijoy_text;?></div>
		</div>
		<div style="background: #f2f2f2; position:fixed; bottom:0; width:100%;">
			<h3 style="text-align:center;"> How to use </h3>
			<pre style="padding: 20px 20%; background:#2e2e2e; color:#e2e2e2;"> 
				$uni_text = 'আমার সোনার বাংলা , আমি তোমায় ভালবাসি';
				$bijoy_text = u2b($uni_text);
				
				echo $bijoy_text;
			</pre>
		</div>
	</body>
</html>

