<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Requests\Contacts\ContactInputRequest;
use App\Services\Contacts\ContactInputService;
use Symfony\Component\HttpFoundation\Response;

class ContactInputController
{
    public function contactInput(ContactInputRequest $request, ContactInputService $service)
    {
        $contactInput = $request->all();
        $dataContact = $service->contactInput($contactInput);
        if (!$dataContact) {
            return [
                'status' => Response::HTTP_BAD_REQUEST
            ];
        }
        return [
            'status' => Response::HTTP_OK
        ];
    }
}
