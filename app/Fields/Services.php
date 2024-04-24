<?php

namespace App\Fields;
use App\Fields\Partials\Hero;
use App\Fields\Partials\CTA;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Services extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $services = new FieldsBuilder('services');

        $services
            ->setLocation('page_template', '==', 'template-uslugi.blade.php');

        $services
            ->addTab('hero', ['label' => 'Hero', 'placement' => 'left'])
                ->addFields($this->get(Hero::class))
            ->addTab('intro', ['label' => 'Wstęp', 'placement' => 'left'])
                ->addGroup('intro', ['label' => 'Wstęp'])
                    ->addWysiwyg('content', ['label' => 'Treść'])
                ->endGroup()
            ->addTab('services', ['label' => 'Usługi', 'placement' => 'left'])
                ->addGroup('services', ['label' => 'Usługi'])
                    ->addRepeater('items', ['label' => 'Elementy', 'button_label' => 'Dodaj element'])
                        ->addImage('image', ['label' => 'Obraz', 'return_format' => 'id'])
                        ->addText('title', ['label' => 'Tytuł'])
                        ->addText('subtitle', ['label' => 'Podtytuł'])
                        ->addWysiwyg('content', ['label' => 'Treść'])
                    ->endRepeater()
                ->endGroup()
            ->addTab('cta', ['label' => 'CTA', 'placement' => 'left'])
                ->addFields($this->get(CTA::class))
                ;

        return $services->build();
    }
}
