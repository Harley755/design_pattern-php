<?php

namespace Class\Enums;

enum ReservationStatus
{
    case APPROVAL_PENDING;
    case APPROVAL_APPROVED;
    case APPROVAL_REJECTED;
}
