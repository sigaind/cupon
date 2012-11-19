<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class OrdenesAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('oreid', null, array('label' => 'ID'))
        ->add('lotid', null, array('label' => 'Lote'))
        ->add('labid', null, array('label' => 'Labor'))                
        ->add('orefechainicio', null, array('label' => 'Fecha Inicio'))
        ->add('orefechafin', null, array('label' => 'Fecha Fin'))
        ->add('supid', null, array('label' => 'Supervisor'))
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper        
        ->add('lotid', null, array('label' => 'Lote'))
        ->add('labid', null, array('label' => 'Labor'))                
        ->add('orefechainicio', null, array('label' => 'Fecha Inicio'))
        ->add('orefechafin', null, array('label' => 'Fecha Fin'))
        ->add('supid', null, array('label' => 'Supervisor'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
        ->add('lotid', null, array('label' => 'Lote'))
        ->add('labid', null, array('label' => 'Labor'))                
        ->add('orefechainicio', null, array('label' => 'Fecha Inicio'))
        ->add('orefechafin', null, array('label' => 'Fecha Fin'))
        ->add('supid', null, array('label' => 'Supervisor'))
        ;
    }
}