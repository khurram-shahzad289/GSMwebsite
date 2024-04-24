<?php

namespace App\Libraries;

class Brand
{
    public function getAllPolicyDocuments(): array
    {
        return [
            new Policy('Terms Of Service', route('policy.terms_of_service')),
            new Policy('Privacy Policy', route('policy.privacy_policy')),
            new Policy('Return Policy', route('policy.return_policy')),
            new Policy('Cancellation Policy', route('policy.cancellation_policy')),
            new Policy('Refund Policy', route('policy.refund_policy')),
        ];
    }
}
