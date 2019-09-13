<?php
 
header("Access-Control-Allow-Origin: *");
$p= file_get_contents("http://indmovies.in/jio/token.php");

$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: JioTV\r\n" 


    ]
];

$cx = stream_context_create($opts);


if(isset($_GET['key'])){
$hs = file_get_contents("http://jio.indmovies.in:40500/jioserver1.php?https://tv.media.jio.com/streams_live/".$_GET["key"].$p,false,$cx);

}else{
$hs = file_get_contents("http://jio.indmovies.in:40500/jioserver1.php?https://tv.media.jio.com/streams_live_stb/".$_GET["fkey"].$p,false,$cx);
}
echo $hs;

?>
