<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_news']['fields']['linktext'] = array ( 
    'label'                   => &$GLOBALS['TL_LANG']['tl_news']['linktext'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$pm = PaletteManipulator::create()
    ->addField('linktext', 'source_legend', PaletteManipulator::POSITION_APPEND)
;

foreach ($GLOBALS['TL_DCA']['tl_news']['palettes'] as $name => $palette) {
    if (\is_string($palette)) {
        $pm->applyToPalette($name, 'tl_news');
    }
}
