<?php

namespace Somecode\Framework\Http;

class Response
{
    public function __construct(
        private mixed $content,
        private int $statusCode = 200,
        private array $headers = [],

    ) {}

    public function send(): void
    {
        http_response_code($this->statusCode); // ← вот это добавили

        foreach ($this->headers as $name => $value) {
            header("$name: $value");
        }

        echo $this->content;
    }
}
