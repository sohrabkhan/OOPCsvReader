<?php

/**
 * When an argument is unexpected is supplied this exception is thrown
 */
class IllegalArgumentException {
    protected $message;
    protected $code;

    /**
     * Constructor for this exception
     *
     * @param string $message
     * @param Exception $previous
     */
    public function __construct($message = "Illegal argument supplied", Exception $previous = null)
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