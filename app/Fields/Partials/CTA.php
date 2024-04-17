<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class CTA extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $cTA = new FieldsBuilder('c_t_a');

        $cTA
            ->addRepeater('items')
                ->addText('item')
            ->endRepeater();

        return $cTA;
    }
}
