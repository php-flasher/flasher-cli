<?php

namespace Flasher\Cli\Prime\Notifier;

use Flasher\Cli\Prime\System\Command;
use Flasher\Cli\Prime\System\OS;
use Flasher\Prime\Envelope;

final class ToasterNotifier extends AbstractNotifier
{
    public function renderEnvelope(Envelope $envelope)
    {
        $cmd = new Command($this->getProgram());

        $cmd
            ->addOption('-m', $envelope->getMessage())
            ->addOption('-t', $this->getTitle($envelope))
            ->addOption('-p', $this->getIcon($envelope->getType()))
        ;

        $cmd->run();
    }

    public function isSupported()
    {
        return $this->isEnabled() && OS::isWindows() && $this->getProgram();
    }

    public function configureOptions(array $options)
    {
        $default = array(
            'binary' => 'toast',
            'binary_paths' => array(
                __DIR__ . '/../Resources/bin/toaster/toast.exe',
            ),
        );

        $options = array_replace($default, $options);

        parent::configureOptions($options);
    }
}
