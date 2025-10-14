<?php

/**
 *
 * @package   Duplicator
 * @copyright (c) 2022, Snap Creek LLC
 */

namespace Duplicator\Libs\DupArchive;

abstract class DupArchiveLoggerBase
{
    /**
     * Log function
     *
     * @param string  $s     string to log
     * @param boolean $flush if true flish log
     *
     * @return void
     */
    abstract public function log($s, $flush = false);
}
