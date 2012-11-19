<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class MaterialesAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('matid', null, array('label' => 'ID'))
        ->add('matcodigo', null, array('label' => 'Codigo'))
        ->add('matnombre', null, array('label' => 'Nombre'))
        ->add('estid', null, array('label' => 'Estado'))        
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper
        ->add('matcodigo', null, array('label' => 'Codigo'))
        ->add('matnombre', null, array('label' => 'Nombre'))
        ->add('estid', null, array('label' => 'Estado'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
        ->add('matcodigo', null, array('label' => 'Codigo'))
        ->add('matnombre', null, array('label' => 'Nombre'))
        ->add('estid', null, array('label' => 'Estado'))
        ;
    }
}