<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace Fresns\CmdWordManager\Exceptions\Traits;

trait ExceptionThrowTrait
{
    public static function throw(string $message = '', ?string $fskey = null)
    {
        $instance = new static($message);

        $instance->setFskey($fskey);

        throw $instance;
    }

    public function setFskey(?string $fskey = null)
    {
        $this->fskey = $fskey;
    }

    public function getFskey()
    {
        return $this->fskey;
    }
}
