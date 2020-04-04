<?php

/*
 * This file is part of the league/commonmark-ext-autolink package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Ext\Autolink;

use League\CommonMark\Event\DocumentParsedEvent;
use League\CommonMark\Extension\Autolink\EmailAutolinkProcessor as CoreProcessor;

/**
 * @deprecated The league/commonmark-ext-autolink extension is now deprecated. All functionality has been moved into league/commonmark 1.3+, so use that instead.
 */
final class EmailAutolinkProcessor
{
    const REGEX = '/([A-Za-z0-9.\-_+]+@[A-Za-z0-9\-_]+\.[A-Za-z0-9\-_.]+)/';

    private $coreProcessor;

    public function __construct()
    {
        @trigger_error(sprintf('league/commonmark-ext-autolink is deprecated; use %s from league/commonmark 1.3+ instead', CoreProcessor::class), E_USER_DEPRECATED);
        $this->coreProcessor = new CoreProcessor();
    }

    /**
     * @param DocumentParsedEvent $e
     *
     * @return void
     */
    public function __invoke(DocumentParsedEvent $e)
    {
        $this->coreProcessor->__invoke($e);
    }
}
