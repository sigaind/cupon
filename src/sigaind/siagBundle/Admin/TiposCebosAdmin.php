<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class TiposCebosAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('cebid', null, array('label' => 'ID'))
        ->add('cebnombre', null, array('label' => 'Nombre'))
        ->add('cebdescripcion', null, array('label' => 'Descripcion'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper
        ->add('cebnombre', null, array('label' => 'Nombre'))
        ->add('cebdescripcion', null, array('label' => 'Descripcion'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
        ->add('cebnombre', null, array('label' => 'Nombre'))
        ->add('cebdescripcion', null, array('label' => 'Descripcion'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
}