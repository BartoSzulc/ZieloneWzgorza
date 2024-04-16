<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Hero extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $hero = new FieldsBuilder('hero');

        $hero
            ->addGroup('hero', ['label' => 'Hero'])
                ->addSelect('type', ['label' => 'Wybór układu', 'choices' => ['default' => 'Nagłówek dół',  'big' => 'Nagłówek góra'], 'default_value' => 'default'])
                ->addText('subtitle', ['label' => 'Nadtytuł'])
                ->addText('title', ['label' => 'Nagłówek'])
                ->addImage('image', ['label' => 'Zdjęcie', 'return_format' => 'id', 'required' => 1])
            ->endGroup()
        ;
        return $hero;
    }
}
