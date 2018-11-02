<?php

namespace Erdemkeren\TemporaryAccess;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class TokenNotification.
 */
final class TokenNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * The token generated.
     *
     * @var Token
     */
    public $token;

    /**
     * TokenGenerated constructor.
     *
     * @param Token $token
     */
    public function __construct(Token $token)
    {
        $this->token = $token;
    }
}
