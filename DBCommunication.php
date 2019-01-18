<?php
	$text1 = $_POST["VisitaPrevia"];
	$text2 = $_POST["Item1"];
	$text3 = $_POST["Item2"];
	$text4 = $_POST["Item3"];
	$text5 = $_POST["Item4"];
	$text6 = $_POST["Item5"];
	$text7 = $_POST["Item6"];
	$text8 = $_POST["Item7"];
	$text9 = $_POST["Item8"];
	$text10 = $_POST["Item9"];
	$text11 = $_POST["Item10"];
	$text12 = $_POST["Item11"];
	$text13 = $_POST["Item12"];
	$text14 = $_POST["Item13"];
	$text15 = $_POST["Item14"];
	$text16 = $_POST["Item15"];
	$text17 = $_POST["Item16"];
	$text18 = $_POST["Item17"];
	$text19 = $_POST["Item18"];
	$text20 = $_POST["Item19"];

	if ($text1 != "")
	{
		echo("Message successfully sent!");
		echo("Field 1: ".$text1);
		echo(", Field 2: ".$text2);
		echo(", Field 3: ".$text3);
		echo(", Field 4: ".$text4);
		echo(", Field 5: ".$text5);
		echo(", Field 6: ".$text6);
		echo(", Field 7: ".$text7);
		echo(", Field 8: ".$text8);
		echo(", Field 9: ".$text9);
		echo(", Field 10: ".$text10);
		echo(", Field 11: ".$text11);
		echo(", Field 12: ".$text12);
		echo(", Field 13: ".$text13);
		echo(", Field 14: ".$text14);
		echo(", Field 15: ".$text15);
		echo(", Field 16: ".$text16);
		echo(", Field 17: ".$text17);
		echo(", Field 18: ".$text18);
		echo(", Field 19: ".$text19);
		echo(", Field 20: ".$text20);

		$file = fopen("database.txt", "a");

		fwrite($file, "\n ".$text1.",".$text2.",".$text3.",".$text4.",".$text5.",".$text6.",".$text7.",".$text8.",".$text9.",".$text10.",".$text11);
		fwrite($file, ",".$text12.",".$text13.",".$text14.",".$text15.",".$text16.",".$text17.",".$text18.",".$text19.",".$text20);
		fclose($file);
	}
	else
	{
		echo ("Message delivery failed...");
	}
?>