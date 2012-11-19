<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class UnidadMedidaAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('uniid', null, array('label' => 'ID'))
        ->add('unicodigo', null, array('label' => 'Codigo'))
        ->add('uninombre', null, array('label' => 'Nombre'))        
        ->add('unisigla', null, array('label' => 'Sigla'))
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper
        ->add('unicodigo', null, array('label' => 'Codigo'))
        ->add('uninombre', null, array('label' => 'Nombre'))        
        ->add('unisigla', null, array('label' => 'Sigla'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
        ->add('unicodigo', null, array('label' => 'Codigo'))
        ->add('uninombre', null, array('label' => 'Nombre'))        
        ->add('unisigla', null, array('label' => 'Sigla'))
        ;
    }
}