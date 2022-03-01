<?php
$myfile = fopen("webdictionary.txt", "r") or die("Açamadım");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?>
<br><br>
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>

<br><br>


<?php
$myfile2 = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile2)) {
  echo fgetc($myfile2);
}
fclose($myfile2);


#DOSYA OLUŞTRUMAK İÇİN DE fopen
$olDosya = fopen("deneme.txt","w") or die("Açamadım yar");
$txt = "Cekap Yakup\n";
fwrite($olDosya,$txt);
$txt = "Check-up Codes\n";
fwrite($olDosya,$txt);
fclose($olDosya);

#DOSYAYA EKLEME İÇİN DE w DEĞİL a
$myfile3 = fopen("deneme.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile3, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile3, $txt);
fclose($myfile3);
?>
?>