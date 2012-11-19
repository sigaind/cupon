<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class EmpresasContratistasAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('ecoid', null, array('label' => 'ID'))
        ->add('ecocodigo', null, array('label' => 'Codigo'))
        ->add('econombre', null, array('label' => 'Nombre'))
        ->add('econit', null, array('label' => 'NIT'))
        ->add('ecorepresentante', null, array('label' => 'Representante Legal'))
        ->add('econitrepresentante', null, array('label' => 'Ced. Representante'))
        ->add('estid', null, array('label' => 'Estado'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper
        ->add('ecocodigo', null, array('label' => 'Codigo'))
        ->add('econombre', null, array('label' => 'Nombre'))
        ->add('econit', null, array('label' => 'NIT'))
        ->add('ecorepresentante', null, array('label' => 'Representante Legal'))
        ->add('econitrepresentante', null, array('label' => 'Ced. Representante'))
        ->add('estid', null, array('label' => 'Estado'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
         ->add('ecocodigo', null, array('label' => 'Codigo'))
        ->add('econombre', null, array('label' => 'Nombre'))
        ->add('econit', null, array('label' => 'NIT'))
        ->add('ecorepresentante', null, array('label' => 'Representante Legal'))
        ->add('econitrepresentante', null, array('label' => 'Ced. Representante'))
        ->add('estid', null, array('label' => 'Estado'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
}