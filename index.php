<html>
<head>
<title>Tablica</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
require "includes/Config.php"; //ucitavanje config fajla, 
$x="*"; //mogucnost promene operatora, predlog- select input sa izborom operatora 
$res = Operacija::uzmi();//uzmanje svih vrednsoti iz baze
?>
<table border="1">

    <thead>
        <tr>
            <th><?=$x?></th>
            <?php for($i=1; $i<=10; $i++) { ?>
                <th> <?php echo $i; ?></th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php for($i=1; $i<=10; $i++) { ?>
        <tr >
            <td>
			<?php echo "<b>".$i."<b>";?>
			</td>
            <?php for($j=1; $j<=10; $j++) { ?>
                <td onclick="klik(<?=$i?>,'<?=$x?>',<?=$j?>)">
				<?php 		

			foreach($res as $result){
			$xres = $result->number1;
			$yres =$result->number2;
			if($i==$xres && $j==$yres){
					echo "<p title='{$result->result}'>".$xres."x".$yres."</p>";
			}
		}
				?></td>
            <?php } ?>
        </tr>
        <?php } ?>
    </tbody>
</table>
<script src="calculator.js"></script> 
<?php

if(isset($_GET['number1'])){ //provera da li postoji get zahtev, ako postoji dodaju se vrednosti promenjljivim 
	$a= $_GET['number1'];
	$b=$_GET['number2'];
	$op = new Operacija; 
	$op->number1=$a;
	$op->number2=$b;
	$op->operation=$x;
	switch($x){  //primer za promernu operatora..
		case "*":
		$op->result=$a*$b;
		break;
		case "+":
		$op->result=$a+$b;
		break;
	}
	$op->date=date("y-m-d h:s:t");
	$op->unos();
}
?>
</body>
</html>
