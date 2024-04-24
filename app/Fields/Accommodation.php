<?php

namespace App\Fields;
use App\Fields\Partials\Hero;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Accommodation extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $accommodation = new FieldsBuilder('accommodation');

        $accommodation
            ->setLocation('page_template', '==', 'template-noclegi.blade.php');

        $accommodation
            ->addTab('hero', ['label' => 'Hero', 'placement' => 'left'])
                ->addFields($this->get(Hero::class))
             ->addTab('intro', ['label' => 'Wstęp', 'placement' => 'left'])
                ->addGroup('intro', ['label' => 'Wstęp'])
                    ->addWysiwyg('content', ['label' => 'Treść'])
                ->endGroup()
            ->addTab('form', ['label' => 'Formularz', 'placement' => 'left'])
                ->addGroup('form', ['label' => 'Formularz'])
                    ->addText('title', ['label' => 'Tytuł'])
                    ->addText('title_form', ['label' => 'Tytuł formularza'])
                    ->addText('shortcode', ['label' => 'Shortcode formularza'])
                ->endGroup()
            ;

        return $accommodation->build();
    }
}
