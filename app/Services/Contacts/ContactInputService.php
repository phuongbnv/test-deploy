<?php

namespace App\Services\Contacts;

use App\Models\Contact;

class ContactInputService
{
    /**
     * @return array
     * @throws DomainExcepion
     */
    public function contactInput($contactInput)
    {
        $dataContact = new Contact();
        $dataContact->email = $contactInput['email'];
        $dataContact->inquiry_type_id = $contactInput['inquiry_type_id'];
        $dataContact->title = $contactInput['title'];
        $dataContact->content = $contactInput['content'];
        $dataContact->save();
        return  $dataContact;
    }
}
