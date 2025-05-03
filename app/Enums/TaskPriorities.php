<?php

namespace App\Enums;

enum TaskPriorities: string
{
    case Low = 'LOW';
    case Medium = 'MEDIUM';
    case High = 'HIGH';

    public static function labels() : array
    {
        return array_map(fn($case)=>$case->value,self::cases());
    }
}
