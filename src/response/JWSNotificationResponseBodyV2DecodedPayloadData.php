<?php

namespace yanlongli\AppStoreServerApi\response;

/**
 * @property string         appAppleId
 * @property string         bundleId
 * @property string         bundleVersion
 * @property string         environment
 * @property JWSRenewalInfo signedRenewalInfo
 * @property JWSTransaction signedTransactionInfo
 *
 */
class JWSNotificationResponseBodyV2DecodedPayloadData
{
    public function __set($name, $value)
    {
        if ($name === 'signedRenewalInfo') {
            $this->signedRenewalInfo = new JWSRenewalInfo($value);
        } elseif ($name === 'signedTransactionInfo') {
            $this->signedTransactionInfo = new JWSTransaction($value);
        } else {
            $this->{$name} = $value;
        }
    }
}
