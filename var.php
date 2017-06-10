<?php

if(isset($update['update']['message']['message']))
{
	$msg = $update["update"]["message"]["message"];
}
if(isset($update['update']['message']['to_id']['channel_id']))
{
	$chatID = $update['update']['message']['to_id']['channel_id'];
	$chatID = "channel#$chatID";
	$type = "supergruppo";
}
if(isset($update['update']['message']['to_id']['chat_id']))
{
	$chatID = $update['update']['message']['to_id']['chat_id'];
	$chatID = "chat#$chatID";
	$type = "gruppo";
}
if(isset($update['update']['message']['from_id']))
{
	$userID = $update['update']['message']['from_id'];
}
if(isset($update['update']['message']['to_id']['user_id']))
{
	$chatID = $update['update']['message']['from_id'];
	$type = "privata";
}
if(isset($update['update']['message']['date']))
{
	$minutiv = date("i", time());
	$minutit = date("i", $update['update']['message']['date']);
if($minutiv == $minutit)
{
	include("cmd.php");
}
else 
{
	echo "-------------------------------------------------";
}
}