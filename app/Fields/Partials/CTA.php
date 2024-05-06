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
        $cta = new FieldsBuilder('cta');

        $cta
            ->addGroup('c_t_a', ['label' => 'CTA'])
                ->addText('title', ['label' => 'Tytuł'])
                ->addRepeater('links', ['label' => 'Linki', 'button_label' => 'Dodaj link'])
                    ->addLink('link', ['label' => 'Link'])
                ->endRepeater()
            ->endGroup()
            ;

        return $cta;
    }
}
