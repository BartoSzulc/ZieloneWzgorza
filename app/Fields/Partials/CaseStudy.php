<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class CaseStudy extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $caseStudy = new FieldsBuilder('case_study');

        $caseStudy
            ->addGroup('case-study', ['label' => 'Case Study'])
                ->addText('id', ['label' => 'ID'])
                ->addText('title', ['label' => 'Nagłówek'])
                ->addRepeater('casestudies', ['label' => 'Case Studies', 'button_label' => 'Dodaj Case Study',
                'min' => 1, 'layout' => 'block'])
                    ->addImage('logo', ['label' => 'Logo klienta', 'return_format' => 'id'])
                    ->addText('heading', ['label' => 'Nagłówek', 'default_value' => 'Klient:'])
                    ->addText('subheading', ['label' => 'Podnagłówek (nazwa klienta)'])
                    ->addRepeater('timeline', ['label' => 'Oś czasu', 'button_label' => 'Dodaj krok', 'layout' => 'block', 'min' => 1, 'max' => 6])
                        ->addWysiwyg('content', ['label' => 'Opis'])
                        ->addImage('image', ['label' => 'Ikona'])
                    ->endRepeater()
                ->endRepeater()
            ->endGroup()
            ;

        return $caseStudy;
    }
}
