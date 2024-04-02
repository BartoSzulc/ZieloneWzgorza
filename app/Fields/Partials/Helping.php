<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Helping extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $helping = new FieldsBuilder('helping');

        $helping
            ->addGroup('helping', ['label' => 'Pomagam w...'])
                ->addText('id', ['label' => 'ID'])
                ->addText('title', ['label' => 'Nagłówek'])
                ->addWysiwyg('content', ['label' => 'Treść'])
                ->addWysiwyg('content2', ['label' => 'Treść 2'])
            ->endGroup()
            ;
        return $helping;
    }
}
