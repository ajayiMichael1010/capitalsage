<?php
namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class BVNVerificationException extends Exception
{
    protected $message;
    private int $statusCode;
    public function __construct($message, int $statusCode)
    {
        parent::__construct($message);
    }

}
