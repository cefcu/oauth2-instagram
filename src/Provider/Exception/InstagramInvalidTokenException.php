<?php
/**
 * Created by PhpStorm.
 * User: bcaldwell
 * Date: 1/9/2020
 * Time: 3:24 PM
 */

namespace League\OAuth2\Client\Provider\Exception;


use Throwable;

class InstagramInvalidTokenException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null, $token)
    {
        parent::__construct($message, $code, $previous);

        error_log("Instagram API: $token is invalid.");
    }

}