<?php

namespace App\Fields;

use App\Fields\Partials\Hero;
use App\Fields\Partials\CTA;


use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Home extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $home = new FieldsBuilder('home', ['title' => 'Sekcje z polami do wypełnienia']);

        $home
            ->setLocation('page_type', '==', 'front_page');
        $home
            ->addTab('hero', ['label' => 'Hero', 'placement' => 'left'])
                ->addFields($this->get(Hero::class))
                ->addRepeater('links-hero', ['label' => 'Linki', 'button_label' => 'Dodaj link'])
                    ->addLink('link', ['label' => 'Link'])
                ->endRepeater()
            ->addTab('intro', ['label' => 'Wstęp', 'placement' => 'left'])
                ->addGroup('intro', ['label' => 'Wstęp'])
                    ->addText('title', ['label' => 'Tytuł'])
                    ->addWysiwyg('content', ['label' => 'Treść'])
                    ->addWysiwyg('content_sec', ['label' => 'Treść druga'])
                ->endGroup()
            ->addTab('offer', ['label' => 'Oferta', 'placement' => 'left'])
                ->addGroup('offer', ['label' => 'Oferta'])
                    ->addText('title', ['label' => 'Tytuł'])
                    ->addRepeater('items', ['label' => 'Elementy', 'button_label' => 'Dodaj element'])
                        ->addImage('icon', ['label' => 'Ikona'])
                        ->addText('title', ['label' => 'Tytuł'])
                        ->addWysiwyg('content', ['label' => 'Treść'])
                        ->addLink('link', ['label' => 'Link'])
                    ->endRepeater()
                ->endGroup()
            ->addTab('services', ['label' => 'Usługi', 'placement' => 'left'])
                ->addGroup('services', ['label' => 'Usługi'])
                    ->addText('title', ['label' => 'Tytuł'])
                    ->addRepeater('items', ['label' => 'Elementy', 'button_label' => 'Dodaj element'])
                        ->addImage('image', ['label' => 'Obraz', 'return_format' => 'id'])
                        ->addText('title', ['label' => 'Tytuł'])
                        ->addText('subtitle', ['label' => 'Podtytuł'])
                    ->endRepeater()
                    ->addLink('link', ['label' => 'Link'])
                ->endGroup()
            ->addTab('apartments', ['label' => 'Apartamenty', 'placement' => 'left'])
                ->addGroup('apartments', ['label' => 'Apartamenty'])
                    ->addText('title', ['label' => 'Tytuł'])
                    ->addLink('link', ['label' => 'Link'])
                ->endGroup()
            ->addTab('cta', ['label' => 'CTA', 'placement' => 'left'])
                ->addFields($this->get(CTA::class))
            ->addTab('attractions', ['label' => 'Atrakcje', 'placement' => 'left'])
                ->addGroup('attractions', ['label' => 'Atrakcje'])
                    ->addText('title', ['label' => 'Tytuł'])
                    ->addLink('link', ['label' => 'Link'])
                ->endGroup()
            ->addTab('testimonials', ['label' => 'Opinie', 'placement' => 'left'])
                ->addGroup('testimonials', ['label' => 'Opinie'])
                    ->addText('title', ['label' => 'Tytuł'])
                    ->addRepeater('items', ['label' => 'Elementy', 'min' => 4, 'button_label' => 'Dodaj opinię'])
                        ->addText('name', ['label' => 'Imię i nazwisko'])
                        ->addWysiwyg('content', ['label' => 'Treść'])
                    ->endRepeater()
                ->endGroup()


                
            ;

        return $home->build();
    }
}
