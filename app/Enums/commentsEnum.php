<?php

namespace App\Enums;

enum commentsEnum: string
{
    case Accept = 'accept';
    case Pending = 'pending';
    case Reject = 'reject';
}
