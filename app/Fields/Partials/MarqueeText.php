<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class MarqueeText extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $marqueeText = new FieldsBuilder('marquee_text');

        $marqueeText
            ->addGroup('marquee_text',  ['label' => 'Marquee Text'])
                ->addText('id', ['label' => 'ID'])
                ->addText('text', ['label' => 'Tekst'])
            ->endGroup()
            ;
        return $marqueeText;
    }
}
