<?php

namespace App\Fields;
use App\Fields\Partials\Hero;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Attractions extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $attractions = new FieldsBuilder('attractions', ['show_in_rest' => true]);

        $attractions
            ->setLocation('page_template', '==', 'template-atrakcje.blade.php');

        $attractions
            ->addTab('hero', ['label' => 'Hero', 'placement' => 'left'])
                ->addFields($this->get(Hero::class))
            ->addTab('attractions-map', ['label' => 'Atrakcje', 'placement' => 'left'])
                ->addGroup('attractions-map', ['label' => 'Atrakcje', 'show_in_rest' => true]) 
                    ->addRepeater('attractions', ['label' => 'Atrakcje'])
                        ->addText('name', ['label' => 'Nazwa'])
                        ->addText('undername', ['label' => 'Podtytuł'])
                        ->addText('geo', ['label' => 'Lokalizacja'])
                    ->endRepeater()
                ->endGroup()
                ;

        return $attractions->build();
    }
}
