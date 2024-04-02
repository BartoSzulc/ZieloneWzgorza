<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Headings extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $headings = new FieldsBuilder('headings');

        $headings
            ->addGroup('changingHeadings', ['label' => 'Zmieniające się nagłówki'])
                ->addText('id', ['label' => 'ID'])
                ->addText('title', ['label' => 'Nad nagłówkiem'])
                ->addRepeater('headings', ['label' => 'Nagłówki', 'min' => 1, 'max' => 5, 'button_label' => 'Dodaj nagłówek'])
                    ->addText('heading', ['label' => 'Nagłówek'])
                ->endRepeater()
            ->endGroup()
            ;

        return $headings;
    }
}
