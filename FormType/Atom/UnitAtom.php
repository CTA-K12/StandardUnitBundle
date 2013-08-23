<?php

namespace MESD\Standard\UnitBundle\FormType\Atom;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UnitAtom extends AbstractType
{

    private $em;
    private $user;


    public function __construct( $em, $securityContext ) {
        $this->em=$em;
        $this->user=$securityContext->getToken()->getUser();

    }

    public function buildForm( FormBuilderInterface $builder, array $options ) {
    }

    /**
     *
     *
     * @param object  $resolver
     */
    public function setDefaultOptions( OptionsResolverInterface $resolver ) {
        $user = $this->user;
        $resolver->setDefaults(
            array(
                'class'           => 'MESD\Standard\UnitBundle\Entity\Unit'
                , 'label'         => 'Unit'
                , 'label_attr'    => array( 'class' => 'txtl' )
                , 'data_class'    => null
                , 'query_builder' =>
                function ( $repository ) use ( $user ) {
                    $qb = $repository->createQueryBuilder( 'u' )
                    ->addOrderBy( 'u.shortName' );

                    return $qb;
                }
            )
        );
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
