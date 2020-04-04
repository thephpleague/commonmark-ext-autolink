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

use League\CommonMark\Extension\Autolink\InlineMentionParser as CoreParser;
use League\CommonMark\Inline\Parser\InlineParserInterface;
use League\CommonMark\InlineParserContext;

/**
 * @deprecated The league/commonmark-ext-autolink extension is now deprecated. All functionality has been moved into league/commonmark 1.3+, so use that instead.
 */
final class InlineMentionParser implements InlineParserInterface
{
    private $coreParser;

    /**
     * @param string $linkPattern
     * @param string $handleRegex
     */
    public function __construct($linkPattern, $handleRegex = '/^[A-Za-z0-9_]+(?!\w)/')
    {
        @trigger_error(sprintf('league/commonmark-ext-autolink is deprecated; use %s from league/commonmark 1.3+ instead', CoreParser::class), E_USER_DEPRECATED);
        $this->coreParser = new CoreParser($linkPattern, $handleRegex);
    }

    /**
     * {@inheritdoc}
     */
    public function getCharacters(): array
    {
        return $this->coreParser->getCharacters();
    }

    /**
     * {@inheritdoc}
     */
    public function parse(InlineParserContext $inlineContext): bool
    {
        return $this->coreParser->parse($inlineContext);
    }

    public static function createTwitterHandleParser()
    {
        @trigger_error(sprintf('league/commonmark-ext-autolink is deprecated; use %s from league/commonmark 1.3+ instead', CoreParser::class), E_USER_DEPRECATED);

        return CoreParser::createTwitterHandleParser();
    }

    public static function createGithubHandleParser()
    {
        @trigger_error(sprintf('league/commonmark-ext-autolink is deprecated; use %s from league/commonmark 1.3+ instead', CoreParser::class), E_USER_DEPRECATED);

        return CoreParser::createGithubHandleParser();
    }
}
