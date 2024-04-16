<?php

namespace App\Fields;
use App\Fields\Partials\Hero;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Stays extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $stays = new FieldsBuilder('stays');

        $stays
            ->setLocation('page_template', '==', 'template-turnusy.blade.php');

        $stays
            ->addTab('hero', ['label' => 'Hero', 'placement' => 'left'])
                ->addFields($this->get(Hero::class))
            ;

        return $stays->build();
    }
}
