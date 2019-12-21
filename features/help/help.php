<?php
// Help extension, https://github.com/datenstrom/yellow-extensions/tree/master/features/help
// Copyright (c) 2013-2019 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowHelp {
    const VERSION = "0.8.6";
    const TYPE = "feature";
    public $yellow;         //access to API

    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
}
