<?php

namespace App\Enums;

enum Role: string
{
    case Admin = 'admin';
    case User = 'user';

    public function getId(): int
    {
        return match ($this) {
            self::Admin => 1,
            self::User => 2,
        };
    }
}