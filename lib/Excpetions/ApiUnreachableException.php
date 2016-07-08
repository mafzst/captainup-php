<?php


namespace Mafzst\CaptainUp\Exception;


class ApiUnreachableException extends \Exception
{
    public function __construct($code, \Exception $previous = null)
    {
        $message = "The Captain Up API is currently unreachable (HTTP $code)";

        parent::__construct($message, 500, $previous);
    }
}