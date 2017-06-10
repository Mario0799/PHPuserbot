<?php
class PHPuserbot{
	public function sm($chatID, $text, $parse="HTML", $reply=false){
		global $update;
		global $MadelineProto;
		if($reply){
		return $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => $text, 'reply_to_msg_id' => $update['update']['message']['id'], 'parse_mode' => $parse]);
		}else{
			return $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => $text, 'parse_mode' => $parse]);
		}
	}
	public function join_link($link){ 
		global $update;
		global $MadelineProto;
		$link_explode=explode("/", $link);
		if($link_explode[3]=="joinchat"){
			return $MadelineProto->messages->importChatInvite(['hash' => $link_explode[4]]);
		}else{
			return $MadelineProto->channels->joinChannel(['channel' => $link_explode[3] ]);
		}
	}
}