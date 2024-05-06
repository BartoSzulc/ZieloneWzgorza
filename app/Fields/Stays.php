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
            ->addTab('intro', ['label' => 'Wstęp', 'placement' => 'left'])
                ->addGroup('intro', ['label' => 'Wstęp'])
                    ->addWysiwyg('content', ['label' => 'Treść'])
                ->endGroup()
            ->addTab('intro_sec', ['label' => 'Sekcja tekst/zdjęcie', 'placement' => 'left'])
                ->addGroup('intro_sec', ['label' => 'Sekcja tekst/zdjęcie'])
                    ->addWysiwyg('title' , ['label' => 'Tytuł'])
                    ->addWysiwyg('content', ['label' => 'Treść'])
                    ->addImage('image', ['label' => 'Zdjęcie'])
                ->endGroup()
            ->addTab('offer', ['label' => 'Oferta', 'placement' => 'left'])
                ->addGroup('offer', ['label' => 'Oferta'])
                    ->addText('title', ['label' => 'Tytuł'])
                    ->addRepeater('items', ['label' => 'Elementy', 'button_label' => 'Dodaj element'])
                        ->addImage('icon', ['label' => 'Ikona'])
                        ->addText('title', ['label' => 'Tytuł'])
                        ->addWysiwyg('content', ['label' => 'Treść'])
                    ->endRepeater()
                    ->addLink('link', ['label' => 'Link'])
                ->endGroup()
            ->addTab('zabiegi', ['label' => 'Zabiegi', 'placement' => 'left'])
                ->addGroup('zabiegi', ['label' => 'Zabiegi'])
                    ->addText('title', ['label' => 'Tytuł'])
                    ->addRepeater('items', ['label' => 'Elementy', 'button_label' => 'Dodaj element'])
                        ->addImage('image', ['label' => 'Obraz'])
                        ->addText('title', ['label' => 'Tytuł'])
                        ->addWysiwyg('content', ['label' => 'Treść'])
                    ->endRepeater()
                    ->addLink('link', ['label' => 'Link'])
                ->endGroup()
            ->addTab('dodatkowe_atrakcje', ['label' => 'Dodatkowe atrakcje', 'placement' => 'left'])
                ->addGroup('dodatkowe_atrakcje', ['label' => 'Dodatkowe atrakcje'])
                    ->addText('title', ['label' => 'Tytuł'])
                    ->addRepeater('items', ['label' => 'Elementy', 'button_label' => 'Dodaj element'])
                        ->addImage('image', ['label' => 'Obraz'])
                        ->addText('title', ['label' => 'Tytuł'])
                        ->addWysiwyg('content', ['label' => 'Treść'])
                    ->endRepeater()
                    ->addLink('link', ['label' => 'Link'])
                ->endGroup()
            ->addTab('form', ['label' => 'Formularz', 'placement' => 'left'])
                ->addGroup('form', ['label' => 'Formularz'])
                    ->addText('title', ['label' => 'Tytuł'])
                    ->addText('title_form', ['label' => 'Tytuł formularza'])
                    ->addText('shortcode', ['label' => 'Shortcode formularza'])
                ->endGroup()
            ;


        return $stays->build();
    }
}
