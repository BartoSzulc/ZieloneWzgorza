<?php

namespace App\Fields;
use App\Fields\Partials\Hero;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Room extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $room = new FieldsBuilder('room');

        $room
            ->setLocation('post_type', '==', 'pokoje');
        $room
            ->addTab('gallery', ['label' => 'Galeria'])
                ->addGallery('gallery', ['label' => 'Galeria', 'return_format' => 'id'])
            ->addTab('details', ['label' => 'Szczegóły'])
                ->addText('price', ['label' => 'Cena'])
                ->addText('size', ['label' => 'Ilość osób'])
                ->addRepeater('features', ['label' => 'Udogodnienia', 'button_label' => 'Dodaj udogodnienie'])
                    ->addText('feature', ['label' => 'Udogodnienie'])
                ->endRepeater()
                
            ;

        return $room->build();
    }
}
