<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
	<!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>QR-code Genarator - Bl4nkcode.info</title>

    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">

    <!-- Script -->
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="qrcode.js"></script>
	
    <!-- Style -->
	<style type="text/css">
		.save-image {
			color: #51acc7;
			cursor: pointer;
		}
		.qrcode {
			color: #51acc7;
			cursor: pointer;
		}
	</style>
</head>

<body>

<div class="container" style="margin-top: 3em;" >

<div>
	<h1><span class="fa fa-qrcode"></span> QR-Code Generator</h1>
</div>
	<input id="text" type="text" value="Input a text/phrase here..." class="form-control" style="width:80%" />

<div align="center">
	<small style="font-size: 11px;">*Input your text/phrase here and press Enter <i class="fa fa-long-arrow-right"></i></small>
	<!-- Qr-code display -->
	<div id="qrcode" style="width:250px; height:250px; margin-top:15px; text-align: ">
		
	</div>
	<small>Your QR-code output</small>
</div>

	<div>
		
			<h4><i class="fa fa-info-circle"></i> How to Save your QRcode?</h4>
		
		<small><i class="fa fa-long-arrow-right"></i> Just right click the <span class="qrcode"><i class="fa fa-qrcode"></i> QR-code</span> and click <span class="save-image"><i class="fa fa-image"></i> Save images as..</span></small>
	</div>
</div>


<script type="text/javascript">
var qrcode = new QRCode(document.getElementById("qrcode"), {
	width : 100,
	height : 100
});

function makeCode () {		
	var elText = document.getElementById("text");
	
	if (!elText.value) {
		alert("Input a text");
		elText.focus();
		return;
	}
	
	qrcode.makeCode(elText.value);
}

makeCode();

$("#text").
	on("blur", function () {
		makeCode();
	}).
	on("keydown", function (e) {
		if (e.keyCode == 13) {
			makeCode();
		}
	});
</script>
    
<script type="text/javascript" src="scripts.js"></script>
<script type="text/javascript" src="plugin.js"></script>

</body>