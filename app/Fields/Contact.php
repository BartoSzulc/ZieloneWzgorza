<?php

namespace App\Fields;
use App\Fields\Partials\Hero;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Contact extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $contact = new FieldsBuilder('contact');

        $contact
            ->setLocation('page_template', '==', 'template-contact.blade.php');

        $contact
            ->addTab('hero', ['label' => 'Hero', 'placement' => 'left'])
                ->addFields($this->get(Hero::class))
            ->addTab('contact', ['label' => 'Kontakt', 'placement' => 'left'])
            ->addRepeater('contact_info', ['label' => 'Informacje kontaktowe', 'button_label' => 'Dodaj informacje'])
                ->addSelect('type', ['label' => 'Typ informacji', 'choices' => ['link' => 'Link', 'text' => 'Tekst bez linku'], 'default_value' => 'text'])
                ->addImage('icon', ['label' => 'Ikona'])
                ->addText('text', ['label' => 'Tekst', 'conditional_logic' => ['field' => 'type', 'operator' => '==', 'value' => 'text']])
                ->addText('link', ['label' => 'Link', 'conditional_logic' => ['field' => 'type', 'operator' => '==', 'value' => 'link']])
                ->addText('text_link', ['label' => 'Tekst w linku', 'conditional_logic' => ['field' => 'type', 'operator' => '==', 'value' => 'link']])
            ->endRepeater()

            ->addRepeater('socials', ['label' => 'Social media', 'button_label' => 'Dodaj social media'])
                ->addImage('icon', ['label' => 'Ikona'])
                ->addUrl('link', ['label' => 'Link'])
            ->endRepeater()
            ->addTab('form', ['label' => 'Formularz', 'placement' => 'left'])
                ->addText('form_title', ['label' => 'Tytuł formularza'])
                ->addText('shortcode', ['label' => 'Shortcode formularza'])

            ;

        return $contact->build();
    }
}
