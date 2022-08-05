<?php

namespace App\Http\Controllers;

use App\Services\NotificationService;
use Symfony\Component\HttpFoundation\Response;

class NotificationController
{
    protected $service;
    public function __construct(NotificationService $service)
    {
        $this->service = $service;
    }

    public function notification()
    {
        $notification = $this->service->notification();
        if (!$notification) {
            return [
                'status' => Response::HTTP_BAD_REQUEST
            ];
        }
        return [
            'status' => Response::HTTP_OK,
            'data' => $notification
        ];
    }
}
