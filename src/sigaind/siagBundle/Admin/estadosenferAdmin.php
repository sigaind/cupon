<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class estadosenferAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('eenid', null, array('label' => 'ID'))       
        ->add('eennombre', null, array('label' => 'Nombre'))
        ->add('eensigla', null, array('label' => 'Sigla'))
        ->add('prioridad', null, array('label' => 'Priorida'))
        ->add('enfid', null, array('label' => 'Enfermedad'))
        ->add('empid', null, array('label' => 'Empresa'))
        ->add('estid', null, array('label' => 'Estado'))                
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper
        ->add('eennombre', null, array('label' => 'Nombre'))
        ->add('eensigla', null, array('label' => 'Sigla'))
        ->add('prioridad', null, array('label' => 'Priorida'))
        ->add('enfid', null, array('label' => 'Enfermedad'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
        ->add('eennombre')
        ->add('eensigla')        
        ->add('prioridad')
        ->add('enfid')
        ->add('estid')
        ;
    }
}