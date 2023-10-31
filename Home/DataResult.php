<?php

namespace Home;

class DataResult
{
    public $message;
    public $data;
    public $error = false;
    public $tags = 0;
    public $errorCodes = [];

    function Iterate()
    {
        if (gettype($this->message) == "array") {
            $message = "";
            foreach ($this->message as $key) {
                if ($message != "") {
                    $message .= ",";
                }
                $message .= $key;
            }

            $this->message = $message;
        }

        return $this;
    }
}
