<?php

namespace HT\Nowy3Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('body')
            ->add('date')
            ->add('picture')
            ->add('is_active')
            ->add('array')
        ;
    }

    public function getName()
    {
        return 'ht_nowy3bundle_newstype';
    }
}
