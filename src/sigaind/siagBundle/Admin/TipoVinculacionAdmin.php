<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class TipoVinculacionAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('id', null, array('label' => 'ID'))
        ->add('nombre', null, array('label' => 'Nombre'))
        ->add('descripcion', null, array('label' => 'Descripcion'))        
        ->add('estadoregistro', null, array('label' => 'Estado'))
        ->add('empresa', null, array('label' => 'Empresa'))
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper
        ->add('nombre', null, array('label' => 'Nombre'))
        ->add('descripcion', null, array('label' => 'Descripcion'))        
        ->add('estadoregistro', null, array('label' => 'Estado'))
        ->add('empresa', null, array('label' => 'Empresa'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
        ->add('nombre', null, array('label' => 'Nombre'))
        ->add('descripcion', null, array('label' => 'Descripcion'))        
        ->add('estadoregistro', null, array('label' => 'Estado'))
        ->add('empresa', null, array('label' => 'Empresa'))
        ;
    }
}