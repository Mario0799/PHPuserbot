<?php

if($msg=="/a") $bot->sm($chatID, "asd".$bot->join_link("https://t.me/joinchat/ciao"));
if(stripos(" ".$msg, ".join ")){
	var_dump($bot->join_link(str_replace(".join", "" , $msg)));
}