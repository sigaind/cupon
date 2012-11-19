<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class ProductosQuimicosAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('proid', null, array('label' => 'ID'))        
        ->add('procodigo', null, array('label' => 'Codigo'))
        ->add('pronombre', null, array('label' => 'Nombre'))
        ->add('profactorconversion', null, array('label' => 'Factor de Conversion'))
        ->add('profertilizacionsanidad', null, array('label' => 'Area'))
        ->add('uniid', null, array('label' => 'Unidad de Medida'))
        ->add('estid', null, array('label' => 'Estado'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper
        ->add('procodigo', null, array('label' => 'Codigo'))
        ->add('pronombre', null, array('label' => 'Nombre'))
        ->add('profactorconversion', null, array('label' => 'Factor de Conversion'))
        ->add('profertilizacionsanidad', null, array('label' => 'Area'))
        ->add('estid', null, array('label' => 'Estado'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
        ->add('procodigo', null, array('label' => 'Codigo'))
        ->add('pronombre', null, array('label' => 'Nombre'))
        ->add('profactorconversion', null, array('label' => 'Factor de Conversion'))
        ->add('profertilizacionsanidad', null, array('label' => 'Area'))
        ->add('uniid', null, array('label' => 'Unidad de Medida'))
        ->add('estid', null, array('label' => 'Estado'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
}