<?php

namespace Mesd\StandardUnitBundle\FormType\Atom;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TimeUnitAtom extends AbstractType
{
    public function buildForm(
        FormBuilderInterface $builder,
        array                $options
    ) {}
    /**
     *
     *
     * @param object  $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $attr = function (Options $options) {
            $default =
            [
                'class'                           => 's2',
                'data-select2-minimuminputlength' => 0,
                'data-select2-limit'              => 10,
                'data-select2-placeholder'        => 'Select Unit',
                'data-select2-allowclear'         => true,
            ];

            if (isset($options['new_attr'])) {
                return array_replace($default, $options['new_attr']);
            } else {
                return $default;
            }

        };

        $resolver->setDefaults(
            [
                'class'         => 'Mesd\StandardUnitBundle\Entity\Unit',
                'attr'          => $attr,
                'new_attr'      => [],
                'label'         => 'Unit',
                'label_attr'    => ['class' => 'txtl'],
                'data_class'    => null,
                'empty_value'   => '',
                'query_builder' =>
                function ($repository) {
                    $qb = $repository->createQueryBuilder('u')
                        ->addOrderBy('u.shortName')
                        ->where('u.time = true');

                    return $qb;
                },

            ]
        );

        $resolver->setOptional(['new_attr']);

    }

    public function getParent()
    {
        return 'entity';
    }

    /**
     *
     *
     * @return unknown
     */
    public function getName()
    {
        return 'timeunit';
    }
}
