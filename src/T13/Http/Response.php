<?php

namespace T13\Http;

class Response
{
    protected $content;

    protected $status;

    public function __construct($content = null, $status = 200)
    {
        $this->content = $content;
        $this->status = $status;
    }

    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sends content for the current web response.
     *
     * @return Response
     */
    public function sendContent()
    {
        echo $this->content;

        return $this;
    }

    /**
     * Sends HTTP headers.
     *
     * @return Response
     */
    public function sendHeaders()
    {
        // headers have already been sent by the developer
        if (headers_sent()) {
            return $this;
        }

        return $this;
    }

    /**
     * Sends content for the current web response.
     *
     * @return Response
     */
    public function send()
    {
        $this->sendHeaders();
        $this->sendContent();

        return $this;
    }
}
