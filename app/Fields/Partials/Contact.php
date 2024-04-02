<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Contact extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $contact = new FieldsBuilder('contact');

        $contact
            ->addGroup('contact', ['label' => 'Kontakt'])
                ->addText('id', ['label' => 'ID'])
                ->addText('title', ['label' => 'Nagłówek'])
                ->addRepeater('contact_informations', ['label' => 'Informacje kontaktowe', 'button_label' => 'Dodaj informacje kontaktowe'])
                    ->addImage('icon', ['label' => 'Ikona', 'return_format' => 'id'])
                    ->addText('information', ['label' => 'Tekst'])
                    ->addText('link', ['label' => 'Link'])
                ->endRepeater()
                ->addText('shortcode', ['label' => 'Shortcode do formularza'])
            ->endGroup()
            ;

        return $contact;
    }
}
