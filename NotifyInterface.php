<?php

/*
 * This file is part of the PHPFlasher package.
 * (c) Younes KHOUBZA <younes.khoubza@gmail.com>
 */

namespace Flasher\Cli\Prime;

interface NotifyInterface
{
    /**
     * @param Notification|string $notification
     *
     * @return void
     */
    public function send($notification);

    /**
     * @return int
     */
    public function getPriority();

    /**
     * @return bool
     */
    public function isSupported();

    /**
     * @param string               $type
     * @param string               $message
     * @param string|null          $title
     * @param array<string, mixed> $options
     *
     * @return void
     */
    public function type($type, $message, $title = null, $options = array());

    /**
     * @param string               $message
     * @param string|null          $title
     * @param array<string, mixed> $options
     *
     * @return void
     */
    public function warning($message, $title = null, $options = array());

    /**
     * @param string               $message
     * @param string|null          $title
     * @param array<string, mixed> $options
     *
     * @return void
     */
    public function info($message, $title = null, $options = array());

    /**
     * @param string               $message
     * @param string|null          $title
     * @param array<string, mixed> $options
     *
     * @return void
     */
    public function error($message, $title = null, $options = array());

    /**
     * @param string               $message
     * @param string|null          $title
     * @param array<string, mixed> $options
     *
     * @return void
     */
    public function success($message, $title = null, $options = array());
}
