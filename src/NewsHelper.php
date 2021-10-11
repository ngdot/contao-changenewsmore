<?php

/*
 * This file is part of the ContaoChangeNewsMore Bundle.
 *
 * (c) Nicolas Görlach <https://github.com/ngdot>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ContaoChangeNewsMoreBundle;

use Contao\ModuleNews;
use Contao\NewsModel;

/**
 * Helper class to expose ModuleNews::generateLink()
 */
class NewsHelper extends ModuleNews
{
    public function __construct() {}

    public function compile() {}

    public function getReadMoreLink(string $linkText, NewsModel $news): string
    {
        return $this->generateLink($linkText, $news, false, true);
    }
}
