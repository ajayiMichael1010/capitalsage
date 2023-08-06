<?php

namespace App\Http\Responses;

class YouVerifyBVNVerificationResponse
{
    public static function mapBVNOwnerDetail(mixed $bvnVerificationResponseData): array
    {
        return[
            "image" => $bvnVerificationResponseData["data"]["image"],
            "firstName" => $bvnVerificationResponseData["data"]["firstName"],
            "middleName" => $bvnVerificationResponseData["data"]["middleName"],
            "lastName" => $bvnVerificationResponseData["data"]["lastName"],
            "dateOfBirth" => $bvnVerificationResponseData["data"]["dateOfBirth"],
            "phoneNumber" => $bvnVerificationResponseData["data"]["mobile"],
            "country" => $bvnVerificationResponseData["data"]["country"],
            "verificationType" => $bvnVerificationResponseData["data"]["type"],
            "idNumber" => $bvnVerificationResponseData["data"]["idNumber"],
            "status" => $bvnVerificationResponseData["data"]["status"],
            "statusCode" => $bvnVerificationResponseData["statusCode"],
            "shouldRetrieveNin" => $bvnVerificationResponseData["data"]["shouldRetrivedNin"],
            "isConsent" => $bvnVerificationResponseData["data"]["isConsent"],
            "createdAt" => $bvnVerificationResponseData["data"]["createdAt"],
            "lastModifiedAt" => $bvnVerificationResponseData["data"]["lastModifiedAt"],
            "requestedBy" => "firstName: ". $bvnVerificationResponseData["data"]["requestedBy"]["firstName"] . " ,lastName: ".$bvnVerificationResponseData["data"]["requestedBy"]["lastName"]." ,id: ".$bvnVerificationResponseData["data"]["requestedBy"]["id"],
        ];
    }

    public static function mapBVNErrorDetail(mixed $errorDetail): array
    {
        return [
            "success" => $errorDetail["success"],
            "statusCode" => $errorDetail["statusCode"],
            "message" => $errorDetail["message"],
            "name" => $errorDetail["name"],
            "data" => $errorDetail["data"]
        ];
    }
}
