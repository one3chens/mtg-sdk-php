<?php

declare(strict_types=1);

use VCR\VCR;

trait RecordsRequests
{
    /**
     * @beforeClass
     */
    public static function turnOnRecorder()
    {
        VCR::turnOn();
    }

    /**
     * @after
     */
    protected function ejectCassette()
    {
        VCR::eject();
    }

    /**
     * @afterClass
     */
    public static function turnOffRecorder()
    {
        VCR::turnOff();
    }
}
