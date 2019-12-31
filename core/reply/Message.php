<?php


namespace wxl095\we_chat\core\reply;


abstract class Message
{
    protected $xmlStr;

    protected function create(string &$toUserName, string &$fromUserName)
    {

    }

    public function reply(string &$toUserName, string &$fromUserName)
    {
    }
}