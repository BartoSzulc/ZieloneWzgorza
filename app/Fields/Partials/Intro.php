<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Intro extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $intro = new FieldsBuilder('intro');

        $intro
            ->addGroup('intro', ['label' => 'O mnie'])
                ->addText('id', ['label' => 'ID'])
                ->addText('title', ['label' => 'Nagłówek'])
                ->addWysiwyg('content', ['label' => 'Treść'])
                ->addRepeater('list', ['label' => 'Lista', 'button_label' => 'Dodaj element'])
                    ->addText('item', ['label' => 'Element'])
                ->endRepeater()
                ->addWysiwyg('content2', ['label' => 'Treść 2'])
            ->endGroup()
            ;

        return $intro;
    }
}
