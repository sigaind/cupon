<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class TiposLaboresAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('id', null, array('label' => 'ID'))
        ->add('codigo', null, array('label' => 'Codigo'))
        ->add('nombre', null, array('label' => 'Nombre'))
        ->add('unidadmedida', null, array('label' => 'Unidad'))
        ->add('catagorialabor', null, array('label' => 'Categoria de la Labor'))
        ->add('tipocontrol', null, array('label' => 'Control Por'))
        ->add('estadoregistro', null, array('label' => 'Estado'))
        ->add('empresa', null, array('label' => 'Empresa'))
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper
        ->add('codigo', null, array('label' => 'Codigo'))
        ->add('nombre', null, array('label' => 'Nombre'))
        ->add('unidadmedida', null, array('label' => 'Unidad'))
        ->add('catagorialabor', null, array('label' => 'Categoria de la Labor'))
        ->add('estadoregistro', null, array('label' => 'Estado'))
        ->add('empresa', null, array('label' => 'Empresa'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
        ->add('codigo', null, array('label' => 'Codigo'))
        ->add('nombre', null, array('label' => 'Nombre'))
        ->add('unidadmedida', null, array('label' => 'Unidad'))
        ->add('catagorialabor', null, array('label' => 'Categoria Labor'))
        ->add('tipocontrol', null, array('label' => 'Control'))
        ->add('estadoregistro', null, array('label' => 'Estado'))
        ->add('empresa', null, array('label' => 'Empresa'))
        ;
    }
}