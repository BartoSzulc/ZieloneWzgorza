<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Testimonials extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $testimonials = new FieldsBuilder('testimonials');

        $testimonials
            ->addGroup('testimonials',  ['label' => 'Opinie'])
                ->addText('id', ['label' => 'ID'])
                ->addText('title', ['label' => 'Nagłówek'])
                ->addRepeater('testimonials', ['label' => 'Opinie', 'min' => 1, 'button_label' => 'Dodaj opinie'])
                    ->addImage('image', ['label' => 'Logo/Zdjęcie', 'return_format' => 'id'])
                    ->addText('name', ['label' => 'Nazwa'])
                    ->addWysiwyg('opinion', ['label' => 'Opinia'])
                    ->addText('underopinion', ['label' => 'Podpis'])
                ->endRepeater()
            ->endGroup()
            
            ;

        return $testimonials;
    }
}
