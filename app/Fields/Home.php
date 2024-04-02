<?php

namespace App\Fields;

use App\Fields\Partials\Hero;
use App\Fields\Partials\Intro;
use App\Fields\Partials\Headings;
use App\Fields\Partials\Helping;
use App\Fields\Partials\Offer;
use App\Fields\Partials\Trusted;
use App\Fields\Partials\CaseStudy;
use App\Fields\Partials\Realizations;
use App\Fields\Partials\Testimonials;
use App\Fields\Partials\MarqueeText;
use App\Fields\Partials\Contact;

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
        ->addTab('intro', ['label' => 'O mnie', 'placement' => 'left'])
            ->addFields($this->get(Intro::class))
        ->addTab('headings', ['label' => 'Nagłówki', 'placement' => 'left'])
            ->addFields($this->get(Headings::class))
        ->addTab('helping', ['label' => 'Pomagam w...', 'placement' => 'left'])
            ->addFields($this->get(Helping::class))
        ->addTab('offer', ['label' => 'Oferta', 'placement' => 'left'])
            ->addFields($this->get(Offer::class))
        ->addTab('trusted', ['label' => 'Zaufali mi', 'placement' => 'left'])
            ->addFields($this->get(Trusted::class))
        ->addTab('case-study', ['label' => 'Case Study', 'placement' => 'left'])
            ->addFields($this->get(CaseStudy::class))
        ->addTab('realizations', ['label' => 'Realizacje', 'placement' => 'left'])
            ->addFields($this->get(Realizations::class))
        ->addTab('testimonials', ['label' => 'Opinie', 'placement' => 'left'])
            ->addFields($this->get(Testimonials::class))
        ->addTab('marquee-text', ['label' => 'Marquee Text', 'placement' => 'left'])
            ->addFields($this->get(MarqueeText::class))
        ->addTab('contact', ['label' => 'Kontakt', 'placement' => 'left'])
            ->addFields($this->get(Contact::class))
        ;

        return $home->build();
    }
}
