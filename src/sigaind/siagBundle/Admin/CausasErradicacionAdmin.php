<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class CausasErradicacionAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('cerrid', null, array('label' => 'ID'))
        ->add('cerrnombre', null, array('label' => 'Nombre'))
        ->add('cerrdescripcion', null, array('label' => 'Descripcion'))        
        ->add('empresa', null, array('label' => 'Empresa'))        
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper
        ->add('cerrnombre', null, array('label' => 'Nombre'))
        ->add('cerrdescripcion', null, array('label' => 'Descripcion'))        
        ->add('empresa', null, array('label' => 'Empresa'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
        ->add('cerrnombre', null, array('label' => 'Nombre'))
        ->add('cerrdescripcion', null, array('label' => 'Descripcion'))        
        ->add('empresa', null, array('label' => 'Empresa'))
        ;
    }
}