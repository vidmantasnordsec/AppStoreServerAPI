<?php

namespace yanlongli\AppStoreServerApi\response;
/**
 * @property SendAttemptItem[]             sendAttempts  <br/>
 *  <p> SUCCESS
 * TIMED_OUT
 * SSL_ISSUE
 * CIRCULAR_REDIRECT
 * NO_RESPONSE
 * SOCKET_ISSUE
 * UNSUPPORTED_CHARSET
 * INVALID_RESPONSE
 * PREMATURE_CLOSE
 * OTHER
 * @property JWSNotificationResponseBodyV2 signedPayload
 */
class NotificationHistoryResponseItem
{
    public function __construct($signedPayload, $sendAttempts)
    {
        $this->signedPayload = new JWSNotificationResponseBodyV2($signedPayload);

        foreach ($sendAttempts as $sendAttempt) {
            $this->sendAttempts[] = new SendAttemptItem($sendAttempt['attemptDate'], $sendAttempt['sendAttemptResult']);
        }
    }
}
