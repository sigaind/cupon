<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class EnfermedadesAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('enfid', null, array('label' => 'ID'))
        ->add('enfcodigo', null, array('label' => 'Codigo'))
        ->add('enfnombre', null, array('label' => 'Nombre'))
        ->add('prioridad', null, array('label' => 'Prioridad'))
        ->add('empid', null, array('label' => 'Empresa'))
        ->add('estid', null, array('label' => 'Estado'))
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper
        ->add('enfid', null, array('label' => 'ID'))
        ->add('enfcodigo', null, array('label' => 'Codigo'))
        ->add('enfnombre', null, array('label' => 'Nombre'))
        ->add('prioridad', null, array('label' => 'Prioridad'))
        ->add('estid', null, array('label' => 'Estado'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
        ->add('enfcodigo')
        ->add('enfnombre', null, array('required' => TRUE))        
        ->add('prioridad')
        ->add('empid')
        ->add('estid')
        ;
    }
}