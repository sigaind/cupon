<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class TrampasRhynchopAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('trhyid', null, array('label' => 'ID'))        
        ->add('codtampa', null, array('label' => 'Codigo'))
        ->add('lotid', null, array('label' => 'Lote')) 
        ->add('linea', null, array('label' => 'Linea'))
        ->add('palma', null, array('label' => 'Palma'))
        ->add('cebid', null, array('label' => 'Tipo Cebo'))        
        ->add('estadoregistro', null, array('label' => 'Estado'))
        ->add('empresa', null, array('label' => 'Empresa'))
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper
        ->add('codtampa', null, array('label' => 'Codigo'))
        ->add('lotid', null, array('label' => 'Lote')) 
        ->add('linea', null, array('label' => 'Linea'))
        ->add('palma', null, array('label' => 'Palma'))
        ->add('cebid', null, array('label' => 'Tipo Cebo'))        
        ->add('estadoregistro', null, array('label' => 'Estado'))
        ->add('empresa', null, array('label' => 'Empresa'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
        ->add('codtampa', null, array('label' => 'Codigo'))
        ->add('lotid', null, array('label' => 'Lote')) 
        ->add('linea', null, array('label' => 'Linea'))
        ->add('palma', null, array('label' => 'Palma'))        
        ->add('cebid', null, array('label' => 'Tipo Cebo'))        
        ->add('estadoregistro', null, array('label' => 'Estado'))
        ->add('empresa', null, array('label' => 'Empresa'))
        ;
    }
}