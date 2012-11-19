<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class TrabajadoresAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('traid', null, array('label' => 'ID'))
        ->add('tracodigo', null, array('label' => 'Codigo'))
        ->add('tracedula', null, array('label' => 'Cedula'))
        ->add('tranombre', null, array('label' => 'Nombre'))
        ->add('tracargo', null, array('label' => 'Cargo'))
        ->add('ecoid', null, array('label' => 'Empresa Contratista'))
        ->add('estid', null, array('label' => 'Estado'))
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper
        ->add('tracodigo', null, array('label' => 'Codigo'))
        ->add('tracedula', null, array('label' => 'Cedula'))
        ->add('tranombre', null, array('label' => 'Nombre'))
        ->add('tracargo', null, array('label' => 'Numero Palmas'))
        ->add('ecoid', null, array('label' => 'Empresa'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
        ->add('tracodigo', null, array('label' => 'Codigo'))
        ->add('tracedula', null, array('label' => 'Cedula'))
        ->add('tranombre', null, array('label' => 'Nombre'))
        ->add('tracargo', null, array('label' => 'Cargo'))
        ->add('ecoid', null, array('label' => 'Empresa Contratista'))
        ->add('estid', null, array('label' => 'Estado'))
        ;
    }
}