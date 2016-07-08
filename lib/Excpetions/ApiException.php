<?php


namespace Mafzst\CaptainUp\Exception;


class ApiException extends \Exception
{
    public function __construct($message, $type, \Exception $previous = null)
    {
        $message = "The API returned an error. $type : $message";

        parent::__construct($message, 500, $previous);
    }
}