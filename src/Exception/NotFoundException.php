<?php

/**
 * When something is not found this exception is thrown
 * Class NotFoundException
 * @version 0.1
 */
class NotFoundException extends \RuntimeException
{
    protected $message;
    protected $code;

    /**
     * Constructor for this exception
     *
     * @param string $message
     * @param Exception $previous
     */
    public function __construct($message = "Resource not found", Exception $previous = null) 
    {
        $this->code = 404;
        $this->message = $message;
        parent::__construct($message, $this->code, $previous);
    }

    /**
     * @inheritdoc
     */
    public function __toString()
    {
        return "An error occured, Error Code: " . $this->code . ", Message: " . $this->message;
    }
}
