<?php
namespace App\Enums;
enum EnquiryStatus: string {
    case New = 'new'; case Awaiting = 'awaiting_tutor'; case Accepted = 'accepted'; case Scheduled = 'scheduled';
    case Completed = 'completed'; case Declined = 'declined'; case Expired = 'expired'; case Cancelled = 'cancelled';
}
