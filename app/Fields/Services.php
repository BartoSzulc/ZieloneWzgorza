<?php

namespace App\Fields;
use App\Fields\Partials\Hero;
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
                ;

        return $services->build();
    }
}
