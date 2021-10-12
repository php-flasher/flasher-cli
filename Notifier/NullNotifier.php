<?php

namespace Flasher\Cli\Prime\Notifier;

use Flasher\Prime\Envelope;

final class NullNotifier extends AbstractNotifier
{
    public function renderEnvelope(Envelope $envelope)
    {
    }

    public function isSupported()
    {
        return false;
    }
}
