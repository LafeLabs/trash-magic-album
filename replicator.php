<?php
$dnaurl = "http://10.0.0.26/album/dna.txt";

if(isset($_GET["dna"])){
    $dnaurl = $_GET["dna"];
}

$baseurl = explode("dna.txt",$dnaurl)[0];
$dnaraw = file_get_contents($dnaurl);
$dna = json_decode($dnaraw);

mkdir("php");
mkdir("tracks");

copy("http://10.0.0.26/album/php/replicator.txt","replicator.php");


foreach($dna->html as $value){
    
    copy($baseurl.$value,$value);

}


foreach($dna->php as $value){
 
    copy($baseurl."php/".$value,"php/".$value);
    copy($baseurl."php/".$value,explode(".",$value)[0].".php");

}

?>
<a href = "index.html">CLICK ME(3/3)</a>
<style>
body{
    background-color:BLACK;
    font-family:Comic Sans MS;
    font-size:3em;
}
a{
        font-size:3em;
        color:#ff2cb4;

}
</style>
