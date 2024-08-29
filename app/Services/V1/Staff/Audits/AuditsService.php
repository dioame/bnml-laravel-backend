<?php

namespace App\Services\V1\Staff\Audits;

use App\Exceptions\CredentialsInvalidException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Models\Audits;

class AuditsService
{
    /**
     * @param $params
     * @return array
     * @throws CredentialsInvalidException
     */

    public function execute($params){
        $audits = Audits::with('user')->orderBy('created_at', 'desc')->paginate($paramsp['limit'] ?? 10);

        $audits->getCollection()->transform(function ($audit) {
            $audit->name = $audit->user 
                ? $audit->user->firstname . ' ' . $audit->user->lastname 
                : null;
            return $audit;
        });

        return $audits;
    }

}
