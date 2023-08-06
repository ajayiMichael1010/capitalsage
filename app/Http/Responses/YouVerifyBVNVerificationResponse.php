<?php

namespace App\Http\Responses;

class YouVerifyBVNVerificationResponse
{
    public static function mapBVNVerificationSuccessResponse(mixed $bvnVerificationResponseData): array
    {
        return[
            "image" => $bvnVerificationResponseData["image"],
            "firstName" => $bvnVerificationResponseData["firstName"],
            "middleName" => $bvnVerificationResponseData["middleName"],
            "lastName" => $bvnVerificationResponseData["lastName"],
            "dateOfBirth" => $bvnVerificationResponseData["dateOfBirth"],
            "phoneNumber" => $bvnVerificationResponseData["mobile"],
            "country" => $bvnVerificationResponseData["country"],
            "verificationType" => $bvnVerificationResponseData["type"],
            "idNumber" => $bvnVerificationResponseData["idNumber"],
            "status" => $bvnVerificationResponseData["status"],
            "shouldRetrivedNin" => $bvnVerificationResponseData["shouldRetrivedNin"],
            "isConsent" => $bvnVerificationResponseData["isConsent"],
            "createdAt" => $bvnVerificationResponseData["createdAt"],
            "lastModifiedAt" => $bvnVerificationResponseData["lastModifiedAt"],
            "requestedBy" => "firstName: ". $bvnVerificationResponseData["requestedBy"]["firstName"] . " ,lastName: ".$bvnVerificationResponseData["requestedBy"]["lastName"]." ,id: ".$bvnVerificationResponseData["requestedBy"]["id"]
        ];
    }
}
