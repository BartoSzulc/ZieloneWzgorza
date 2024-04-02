<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Realizations extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $realizations = new FieldsBuilder('realizations');

        $realizations
            ->addGroup('realizations',  ['label' => 'Realizacje'])
                ->addText('id', ['label' => 'ID'])
                ->addText('title', ['label' => 'Nagłówek'])
                ->addRepeater('addline', ['label' => 'Dodaj linię', 'min' => 1, 'button_label' => 'Dodaj linię'])
                    ->addRepeater('realizations', ['label' => 'Realizacje', 'instructions' => 'Maksymalnie 4 na linie', 'min' => 1, 'max' => 4])
                        ->addImage('image', ['label' => 'Zdjęcie', 'return_format' => 'id'])
                    ->endRepeater()
                ->endRepeater()
            ->endGroup()
            ;

        return $realizations;
    }
}
