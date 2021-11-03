<?php

/*
 * This file is part of the ContaoChangeNewsMore Bundle.
 *
 * (c) Nicolas Görlach <https://github.com/ngdot>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ContaoChangeNewsMoreBundle\EventListener;

use Contao\FrontendTemplate;
use Contao\Module;
use Contao\NewsModel;
use ContaoChangeNewsMoreBundle\NewsHelper;

class ParseArticlesListener
{
    public function __invoke(FrontendTemplate $template, array $newsEntry, Module $module): void
    {
        if (empty($newsEntry['linktext'])) {
            return;
        }

        $template->more = (new NewsHelper())->getReadMoreLink($newsEntry['linktext'], NewsModel::findByPk($newsEntry['id']));
    }
}
