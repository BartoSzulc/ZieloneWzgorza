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
                ;

        return $contact->build();
    }
}
