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
                ->addText('id', ['label' => 'ID'])
                ->addText('title', ['label' => 'Nagłówek'])
                ->addRepeater('realizations', ['label' => 'Realizacje (wersja desktopowa)', 'instructions' => 'Dodaj maksymalnie 6 realizacji, środkowa (5) jest widoczna jako pierwsza', 'min' => 9, 'max' => 9])
                    ->addImage('image', ['label' => 'Zdjęcie', 'return_format' => 'id'])
                ->endRepeater()
                ->addRepeater('realizations-mobile', ['label' => 'Realizacje (wersja mobilna)', 'instructions' => 'Dodaj maksymalnie 3 realizacje, środkowa (2) jest widoczna jako pierwsza', 'min' => 3, 'max' => 3])
                    ->addImage('image', ['label' => 'Zdjęcie', 'return_format' => 'id'])
                ->endRepeater()
            ->endGroup()
        ;
        return $hero;
    }
}
