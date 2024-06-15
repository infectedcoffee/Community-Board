<!DOCTYPE PHP>
<html>
	<head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                <title>Internet Coin Free Space</title>
                <link rel="stylesheet" href="stylesheet.css">
        </head>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/* BUTTON SETTING */
if ($_POST){
	if (isset($_POST['txt'])) {
	        $t=$_POST['txt'];
	        $t1=$_POST['1txt'];
	        $t2=$_POST['2txt'];
		$t3=$_POST['3txt'];
		if ($t!=null and $t1!=null and $t3!=null){
			$file = fopen("test.txt", "a");
			/*
	        	fwrite($file, '<div class="container"><div class="row"><div class="col-25"><label>Public Key:</label></div><div class="col-75">'.$t.'</div></div>');
                        fwrite($file, '<div class="row"><div class="col-25"><label>Message:</label></div><div class="mcol-75">'.$t1.'</div></div>');
                        fwrite($file, '<div class="row"><div class="col-25"><label>Coin Wallet:</label></div><div class="col-75">'.$t2.'</div></div>');
                        fwrite($file, '<div class="row"><div class="col-25"><label>Email:</label></div><div class="col-75">'.$t3.'</div></div></div>');
			*/
			fwrite($file, "Public key: \n".$t."\n Message: \n".$t1."\n Coin Wallet: \n".$t2."\n Email: \n".$t3."\n");
	        	fclose($file);
		}
	}

}

?>
	<body1>
		<div class="section_header">
			<h1> Internet Coin Free Space </h1>
		</div>
		<div class="section_body">
			 <iframe src="pagedesc.txt" title="desc"
			 style="border:none;"
			 width="600" height="140">
			 </iframe>
		</div>
		<!--Buttons http-->


		<div class="section_header">
			<h3> Message Board </h3>
		</div>

		<div class="container">
		 <form method="post" enctype="multipart/form-data" >
	                 <button type="submit" class="button button1" name="button" id="button" value="Load Page">Load Page</button>
	         </form>
		 </div class="box">
		<?php
/*
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
*/

/* This php program is meant to load the test.txt file so that user inputs into the website can be posted and seen as a forum*/
		if(isset($_POST['button'])){
               		if ($file = fopen("test.txt","r") or die("Unable to open file!")){
				$z=0;
				while (($line = fgets($file)) !== false){
					$y = strlen($line);
/* This if statement runs until the breaker, reading the lines up until the breaker*/
					if ($y==0){
						$str =  strlen($line);
						echo(substr($line, 0, $str).'</br>');
						}
/* Print increments of 50 up to breaker*/
					else{
						$z = 0;
						$c = 50 + $z;
						while ($y-$z >= $c){
							echo(substr($line, $z, $c).'</br>');
							$z = $z + 50;
							}
						$str1 = strlen(substr($line,$z,$y));
						echo(substr($line, $z, $y-$z).'</br>');
						}
					}
				}
			}
		
		?>
		 </div>
		</div>
		<div class="section_header">
			<h3>Submit Form</h3>
		</div>

		<div class="container">
			<form method="post" enctype="multipart/form-data">
				<div class="row">
				 <div class="col-25">
				  <label for="txt">Public Key: </label>
				 </div>
				 <div class="col-75">
				  <textarea type="text" id="txt" name="txt" size="100" placeholder="Public Key (6000 bits available)" attribute="textbox" maxlength="6000"/></textarea>
				 </div>
				</div>
                                <div class="row">
                                 <div class="col-25">
                                  <label for="1txt">Message: </label>
                                 </div>
                                 <div class="col-75">
				  <textarea type="text1" id="1txt" name="1txt" size="100" placeholder="Message ... (600 Characters)" maxlength="600"></textarea>
				 </div>
				</div>
                                <div class="row">
                                 <div class="col-25">
                                  <label for="2txt">Coin Wallet: </label>
                                 </div>
                                 <div class="col-75">
				  <input type="text" id="2txt" name="2txt" size="20" placeholder="Coin Wallet ... (50 characters / optional)" maxlength="50"/>
				 </div>
				</div>
				<div class="row">
                                 <div class="col-25">
                                  <label for="3txt">Email: </label>
                                 </div>
                                 <div class="col-75">
                                  <input type="text" id="3txt" name="3txt" size="20" placeholder="Email ... (50 characters)" maxlength="50"/>
                                 </div>
                                </div>
				</br>
                                <div class="row">
		  		 <input type="submit" id="submit1" name="submit" value="Submit"  />
				</div>
			</form>
		</div>
	</body1>
</html>
