<?php

namespace App\Services;

use App\Models\Contact;
use App\Models\Notification;

class NotificationService
{
    /**
     * @return array
     * @throws DomainExcepion
     */
    public function notification()
    {
        return Notification::limit(20)->get();
    }
}
