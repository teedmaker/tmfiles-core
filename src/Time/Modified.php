<?php

namespace TMPHPFiles\Time;

use TMPHPFiles\{
    TMFile         as TMFile,
    Time\TimeBase  as TimeBase,
    Time\TimeModel as TimeModel
};
use Exception;

class Modified extends TimeBase implements TimeModel
{
    protected $path = null;
    protected $time = null;

    public function __construct($object) {
        parent::__construct($object);
    }

    public function isGreaterThan($object) {
        $object = $this->generateAObject($object);
        return $this->instance->getMTime() > $object->getMTime();
    }

    public function isLessThan($object) {
        $object = $this->generateAObject($object);
        return $this->instance->getCTime() < $object->getCTime();
    }
}
