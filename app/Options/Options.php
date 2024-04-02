<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;

use App\Options\Partials\Recent;
use App\Options\Partials\Header;

use StoutLogic\AcfBuilder\FieldsBuilder;

class Options extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Zarządzanie motywem';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Zarządzanie motywem | Ustawienia';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $options = new FieldsBuilder('options');

        $options
           
            ->addTab('footer_tab', ['label' => 'Stopka'])
                ->addGroup('footer', ['label' => 'Stopka'])
                    ->addRepeater('socials', ['label' => 'Social media', 'button_label' => 'Dodaj social media'])
                        ->addImage('icon', ['label' => 'Ikona', 'return_format' => 'id'])
                        ->addText('link', ['label' => 'Link'])
                    ->endRepeater()
                ->endGroup()
            ->addTab('dodatkowe_skrypty_tab', ['label' => 'Dodatkowe skrypty'])
                ->addTextarea('head', ['label' => 'Kod w sekcji head'])
                ->addTextarea('body', ['label' => 'Kod w sekcji body (przed zamknięciem body)'])

                ;

        return $options->build();
    }
}
