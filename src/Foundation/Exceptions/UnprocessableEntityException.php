<?php

namespace CrCms\Microservice\Foundation\Exceptions;

use Throwable;

/**
 * Class UnprocessableEntityException.
 */
class UnprocessableEntityException extends ServiceException
{
    /**
     * UnprocessableEntityException constructor.
     *
     * @param string         $message
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = '', int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, 422, $previous);
    }
}
