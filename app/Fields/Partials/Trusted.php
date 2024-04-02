<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Trusted extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $trusted = new FieldsBuilder('trusted');

        $trusted

            ->addGroup('trustedme', ['label' => 'Zaufali mi'])
                ->addText('id', ['label' => 'ID'])
                ->addText('title', ['label' => 'Nagłówek'])
                ->addRepeater('logos', ['label' => 'Logotypy', 'min' => 1, 'button_label' => 'Dodaj logotyp'])
                    ->addImage('logo', ['label' => 'Logotyp', 'return_format' => 'id'])
                ->endRepeater()
            ->endGroup()

            ;

        return $trusted;
    }
}
