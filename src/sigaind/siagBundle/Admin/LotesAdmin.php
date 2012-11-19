<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class LotesAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('id', null, array('label' => 'ID'))
        ->add('lotcodigo', null, array('label' => 'Codigo'))
        ->add('lotnombre', null, array('label' => 'Nombre'))
        ->add('lothectarea', null, array('label' => 'Hectareas'))
        ->add('lotnumeropalmas', null, array('label' => 'Numero Palmas'))
        ->add('lotdensidadsiembra', null, array('label' => 'Densidad Siembra'))
        ->add('lotgrupo', null, array('label' => 'Grupo'))
        ->add('lotppr', null, array('label' => 'PPR'))
        ->add('lotpalmasiniciales', null, array('label' => 'Palmas Iniciales'))
        ->add('lotdrenajes', null, array('label' => 'Metros Drenajes'))        
        ->add('matid', null, array('label' => 'Material'))
        ->add('zonid', null, array('label' => 'Zona'))
        ->add('simid', null, array('label' => 'Siembra'))
        ->add('estid', null, array('label' => 'Estado'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper
        ->add('lotcodigo', null, array('label' => 'Codigo'))
        ->add('lotnombre', null, array('label' => 'Nombre'))
        ->add('lothectarea', null, array('label' => 'Hectareas'))
        ->add('lotnumeropalmas', null, array('label' => 'Numero Palmas'))
        ->add('lotdensidadsiembra', null, array('label' => 'Densidad Siembra'))
        ->add('lotgrupo', null, array('label' => 'Grupo'))
        ->add('lotppr', null, array('label' => 'PPR'))
        ->add('lotpalmasiniciales', null, array('label' => 'Palmas Iniciales'))
        ->add('lotdrenajes', null, array('label' => 'Metros Drenajes'))        
        ->add('matid', null, array('label' => 'Material'))
        ->add('zonid', null, array('label' => 'Zona'))
        ->add('simid', null, array('label' => 'Siembra'))
        ->add('estid', null, array('label' => 'Estado'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
        ->add('lotcodigo', null, array('label' => 'Codigo'))
        ->add('lotnombre', null, array('label' => 'Nombre'))
        ->add('lothectarea', null, array('label' => 'Hectareas'))
        ->add('lotnumeropalmas', null, array('label' => 'Numero Palmas'))
        ->add('lotdensidadsiembra', null, array('label' => 'Densidad Siembra'))
        ->add('lotgrupo', null, array('label' => 'Grupo'))
        ->add('lotppr', null, array('label' => 'PPR'))
        ->add('lotpalmasiniciales', null, array('label' => 'Palmas Iniciales'))
        ->add('lotdrenajes', null, array('label' => 'Metros Drenajes'))        
        ->add('matid', null, array('label' => 'Material'))
        ->add('zonid', null, array('label' => 'Zona'))
        ->add('simid', null, array('label' => 'Siembra'))
        ->add('estid', null, array('label' => 'Estado'))
        ->add('empid', null, array('label' => 'Empresa'))
        ;
    }
}