<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class TipoPlagasAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('tplid', null, array('label' => 'ID'))        
        ->add('tplcodigo', null, array('label' => 'Codigo'))
        ->add('tplnombre', null, array('label' => 'Nombre'))        
        ->add('estid', null, array('label' => 'Estado'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper
        ->add('tplcodigo', null, array('label' => 'Codigo'))
        ->add('tplnombre', null, array('label' => 'Nombre'))        
        ->add('estid', null, array('label' => 'Estado'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
        ->add('tplcodigo', null, array('label' => 'Codigo'))
        ->add('tplnombre', null, array('label' => 'Nombre'))        
        ->add('estid', null, array('label' => 'Estado'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
}