<?php
class PHPuserbot{
	public function sm($chatID, $text, $parse="HTML", $reply=false)
	{
		global $update;
		global $MadelineProto;
		if($reply){
		return $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => $text, 'reply_to_msg_id' => $update['update']['message']['id'], 'parse_mode' => $parse]);
		}else{
			return $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => $text, 'parse_mode' => $parse]);
		}
}
}