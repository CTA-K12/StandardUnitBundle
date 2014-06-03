<?php

namespace Mesd\Standard\UnitBundle\FormType\Atom;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\OptionsResolver\Options;

class UnitAtom extends AbstractType
{

    private $em;

    public function __construct( $em, $securityContext ) {
        $this->em=$em;
    }

    public function buildForm( FormBuilderInterface $builder, array $options ) {
    }

    /**
     *
     *
     * @param object  $resolver
     */
    public function setDefaultOptions( OptionsResolverInterface $resolver ) {
        $attr = function( Options $options ) {

            $default =
                array(
                'class'                           => 's2'            ,
                'data-select2-minimuminputlength' => 0               ,
                'data-select2-limit'              => 10              ,
                'data-select2-placeholder'        => 'Select Unit'   ,
                'data-select2-allowclear'         => true            ,
            );

            if ( isset( $options['new_attr'] ) ) {
                return array_replace( $default, $options['new_attr'] );
            } else {
                return $default;
            }

        };

        $resolver->setDefaults(
            array(
                'class'         => 'Mesd\Standard\UnitBundle\Entity\Unit' ,
                'attr'          => $attr                                  ,
                'new_attr'      => array()                                ,
                'label'         => 'Unit'                                 ,
                'label_attr'    => array( 'class' => 'txtl' )             ,
                'data_class'    => null                                   ,
                'empty_value'   => ''                                     ,
                'query_builder' =>
                function ( $repository ) {
                    $qb = $repository->createQueryBuilder( 'u' )
                    ->addOrderBy( 'u.shortName' );

                    return $qb;
                }

            )
        );

        $resolver->setOptional( array( 'new_attr' ) );

    }

    public function getParent() {
        return 'entity';
    }

    /**
     *
     *
     * @return unknown
     */
    public function getName() {
        return 'unit';
    }

}
