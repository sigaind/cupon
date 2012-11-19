<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class EstadoPlagaAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('eplid', null, array('label' => 'ID'))
        ->add('eplnombre', null, array('label' => 'Nombre'))
        ->add('eplsiglas', null, array('label' => 'Siglas'))
        ->add('eplnivelcritico', null, array('label' => 'Nivel Critico'))
        ->add('prioridad', null, array('label' => 'Prioridad'))
        ->add('plaid', null, array('label' => 'Plaga'))
        ->add('empid', null, array('label' => 'Empresa'))
        ->add('estid', null, array('label' => 'Estado'))
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper
        ->add('eplnombre', null, array('label' => 'Nombre'))
        ->add('eplsiglas', null, array('label' => 'Siglas'))
        ->add('eplnivelcritico', null, array('label' => 'Nivel Critico'))
        ->add('prioridad', null, array('label' => 'Prioridad'))
        ->add('plaid', null, array('label' => 'Plaga'))
        ->add('empid', null, array('label' => 'Empresa'))
        ->add('estid', null, array('label' => 'Estado'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
        ->add('eplnombre', null, array('label' => 'Nombre'))
        ->add('eplsiglas', null, array('label' => 'Siglas'))
        ->add('eplnivelcritico', null, array('label' => 'Nivel Critico'))
        ->add('prioridad', null, array('label' => 'Prioridad'))
        ->add('plaid', null, array('label' => 'Plaga'))
        ->add('empid', null, array('label' => 'Empresa'))
        ->add('estid', null, array('label' => 'Estado'))
        ;
    }
}