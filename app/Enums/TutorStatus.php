<?php
namespace App\Enums;
enum TutorStatus: string { case Draft = 'draft'; case Pending = 'pending'; case Approved = 'approved'; case Rejected = 'rejected'; case ChangesRequested = 'changes_requested'; }
