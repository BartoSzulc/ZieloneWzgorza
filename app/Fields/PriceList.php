<?php

namespace App\Fields;
use App\Fields\Partials\Hero;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PriceList extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $priceList = new FieldsBuilder('price_list');

        $priceList
            ->setLocation('page_template', '==', 'template-cennik.blade.php');

        $priceList
            ->addTab('hero', ['label' => 'Hero', 'placement' => 'left'])
                ->addFields($this->get(Hero::class))
            ;

        return $priceList->build();
    }
}
