<?php

use ContaoChangeNewsMoreBundle\EventListener\ParseArticlesListener;

$GLOBALS['TL_HOOKS']['parseArticles'][] = [ParseArticlesListener::class, '__invoke'];
