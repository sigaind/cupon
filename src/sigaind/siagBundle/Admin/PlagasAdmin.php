<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class PlagasAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('plaid', null, array('label' => 'ID'))        
        ->add('planombre', null, array('label' => 'Nombre'))
        ->add('plasigla', null, array('label' => 'Siglas'))
        ->add('prioridad', null, array('label' => 'Prioridad'))
        ->add('tplid', null, array('label' => 'Tipo Plaga'))
        ->add('estid', null, array('label' => 'Estado'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper
        ->add('planombre', null, array('label' => 'Nombre'))
        ->add('plasigla', null, array('label' => 'Siglas'))
        ->add('prioridad', null, array('label' => 'Prioridad'))
        ->add('tplid', null, array('label' => 'Tipo Plaga'))
        ->add('estid', null, array('label' => 'Estado'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
        ->add('planombre', null, array('label' => 'Nombre'))
        ->add('plasigla', null, array('label' => 'Siglas'))
        ->add('prioridad', null, array('label' => 'Prioridad'))
        ->add('tplid', null, array('label' => 'Tipo Plaga'))
        ->add('estid', null, array('label' => 'Estado'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
}