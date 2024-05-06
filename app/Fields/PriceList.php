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
            ->addTab('cennik', ['label' => 'Cennik', 'placement' => 'left'])
                ->addRepeater('addprices', ['label' => 'Cennik', 'button_label' => 'Dodaj cennik'])
                        ->addText('title', ['label' => 'Tytuł cennika'])
                    ->addRepeater('elements', ['label' => 'Elementy', 'button_label' => 'Dodaj element'])
                        ->addSelect('element_version', ['label' => 'Wersja elementu cennika', 'choices' => ['v1' => 'Prosty', 'v2' => 'Zwijany'], 'wrapper' => ['width' => '100%'], 'default_value' => 'v1'])
                        //simple
                        ->addGroup('element_simple', ['label' => 'Prosty', 'conditional_logic' => [['field' => 'element_version', 'operator' => '==', 'value' => 'v1']]])
                            ->addText('element_title', ['label' => 'Tytuł elementu'])
                            ->addWysiwyg('element_subtitle', ['label' => 'Podtytuł elementu'])
                            ->addText('element_price', ['label' => 'Cena elementu', 'instructions' => 'Cena w formacie 00,00 bez waluty (zł)']) 
                        ->endGroup()
                        //accordion
                        ->addGroup('element_accordion', ['label' => 'Zwijany', 'conditional_logic' => [['field' => 'element_version', 'operator' => '==', 'value' => 'v2']]])
                            ->addText('element_title', ['label' => 'Tytuł elementu'])
                            ->addWysiwyg('element_subtitle', ['label' => 'Podtytuł elementu'])
                            //accordion items
                            ->addRepeater('element_accordion_items', ['label' => 'Elementy zwijane', 'button_label' => 'Dodaj element'])
                                ->addText('element_accordion_title', ['label' => 'Tytuł elementu'])
                                ->addText('element_accordion_price', ['label' => 'Cena elementu', 'instructions' => 'Cena w formacie 00,00 bez waluty (zł)'])
                            ->endRepeater()
                        ->endGroup()

                    ->endRepeater()
                ->endRepeater()
            ;

        return $priceList->build();
    }
}
