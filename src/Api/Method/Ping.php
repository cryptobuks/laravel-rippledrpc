<?php declare(strict_types=1);

namespace Gegosoft\Rippled\Api\Method;

use Gegosoft\Rippled\Api\Field;

/**
 * Ping Method Class
 *
 * The ping command returns an acknowledgement, so that clients can test the connection status and latency.
 *
 * @link https://developers.ripple.com/ping.html Ping method documentation.
 */
class Ping extends AbstractMethod
{
    /**
     * {@inheritDoc}
     *
     * @throws \Gegosoft\Rippled\Exception\FieldException
     */
    public function setFields(): void
    {
        parent::setFields();

        // GENERATED CODE FROM bin/generate.php types
        // BEGIN GENERATED
        // END GENERATED
    }
}
