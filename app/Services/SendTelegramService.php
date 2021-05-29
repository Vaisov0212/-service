<?php

namespace App\Services;


Class SendTelegramService
{

    public static function send($message)
    {

        $telegram_user_id   =977739889;
        $telegram_bot_token ='bot1464725841:AAFYK6FU0HvC7b6HGJTZDtKSvuMQX5Fyr2s';

        //Start
        $url = 'https://api.telegram.org/'.$telegram_bot_token.'/sendMessage?text=:text_content&chat_id='.$telegram_user_id;
        $replaced_url = str_replace(':text_content', urlencode($message), $url);
        $requestToTelegram = file_get_contents($replaced_url, true);
        $result = json_decode($requestToTelegram, true);
        //Response
        if(isset($result['ok']))
            return true;

        return false;

    }

}
