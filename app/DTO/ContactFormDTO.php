<?php

namespace App\DTO;

final readonly class ContactFormDTO
{
    public function __construct(
        public readonly string $name, 
        public readonly string $email,
        public readonly string $message
    ) {}
}
