<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class ZonasAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('zonid', null, array('label' => 'ID'))
        ->add('zoncodigo', null, array('label' => 'Codigo'))
        ->add('zonnombre', null, array('label' => 'Nombre'))
        ->add('estid', null, array('label' => 'Estado'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper
        ->add('zoncodigo', null, array('label' => 'Codigo'))
        ->add('zonnombre', null, array('label' => 'Nombre'))
        ->add('estid', null, array('label' => 'Estado'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
        ->add('zoncodigo', null, array('label' => 'Codigo'))
        ->add('zonnombre', null, array('label' => 'Nombre'))
        ->add('estid', null, array('label' => 'Estado'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
}