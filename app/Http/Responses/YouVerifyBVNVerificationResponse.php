<?php

namespace App\Http\Responses;

/**
 * Class YouVerifyBVNVerificationResponse
 * Maps YouVerify BVN verification responses.
 *
 * @package App\Http\Responses
 */
class YouVerifyBVNVerificationResponse
{
    /**
     * Map BVN owner detail from YouVerify response.
     *
     * @param array $bvnVerificationResponseData The BVN verification response data from YouVerify.
     * @return array Mapped BVN owner details.
     */
    public static function mapBVNOwnerDetail(array $bvnVerificationResponseData): array
    {
        return [
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
            "requestedBy" => "firstName: " . $bvnVerificationResponseData["data"]["requestedBy"]["firstName"] .
                " ,lastName: " . $bvnVerificationResponseData["data"]["requestedBy"]["lastName"] .
                " ,id: " . $bvnVerificationResponseData["data"]["requestedBy"]["id"],
        ];
    }

    /**
     * Map BVN error detail from YouVerify response.
     *
     * @param array $errorDetail The error detail data from YouVerify.
     * @return array Mapped error details.
     */
    public static function mapBVNErrorDetail(array $errorDetail): array
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
