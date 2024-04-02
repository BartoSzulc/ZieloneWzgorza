<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Offer extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $offer = new FieldsBuilder('offer');

        $offer
            ->addGroup('offer', ['label' => 'Oferta'])
                ->addText('id', ['label' => 'ID'])
                ->addRepeater('offer', ['label' => 'Oferta', 'min' => 1, 'button_label' => 'Dodaj ofertę'])
                    ->addText('heading', ['label' => 'Nagłówek'])
                    ->addWysiwyg('content', ['label' => 'Wstęp'])
                    ->addWysiwyg('content2', ['label' => 'Treść', 'instructions' => 'opcjonalnie'])
                    ->addText('subheading', ['label' => 'Podnagłówek', 'instructions' => 'opcjonalnie'])
                    ->addWysiwyg('content3', ['label' => 'Treść 2', 'instructions' => 'opcjonalnie'])
                    ->addImage('image', ['label' => 'Zdjęcie', 'return_format' => 'id'])
                ->endRepeater()
            ->endGroup()
            ;
        return $offer;
    }
}
