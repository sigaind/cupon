<?php

namespace sigaind\siagBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class LaboresAdmin extends Admin
{
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
        ->addIdentifier('id', null, array('label' => 'ID'))
        ->add('codigo', null, array('label' => 'Codigo'))
        ->add('nombre', null, array('label' => 'Nombre'))
        ->add('loteId', null, array('label' => 'Lote Especifico'))
        ->add('rangosiembrainicial', null, array('label' => 'Siembra Inicial'))
        ->add('rangosiembrafinal', null, array('label' => 'Siembra Final'))
        ->add('tipolabor', null, array('label' => 'Labor'))
        ->add('ceco', null, array('label' => 'Centro de Costo'))                
        ->add('cuentacontable', null, array('label' => 'Cuenta Contable'))
        ->add('periodicidad', null, array('label' => 'Periodicidad'))
        ->add('vinculacion', null, array('label' => 'Vinculacion'))
        ->add('costocontratista', null, array('label' => 'Valor Empresa'))
        ->add('costotrabajador', null, array('label' => 'Valor Trabajador'))
        ->add('estadoregistro', null, array('label' => 'Estado'))
        ->add('empresa', null, array('label' => 'Empresa'))        
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        $mapper
         ->add('codigo', null, array('label' => 'Codigo'))
        ->add('nombre', null, array('label' => 'Nombre'))
        ->add('loteId', null, array('label' => 'Lote Especifico'))
        ->add('rangosiembrainicial', null, array('label' => 'Siembra Inicial'))
        ->add('rangosiembrafinal', null, array('label' => 'Siembra Final'))
        ->add('tipolabor', null, array('label' => 'Labor'))
        ->add('ceco', null, array('label' => 'Centro de Costo'))                
        ->add('periodicidad', null, array('label' => 'Periodicidad'))
        ->add('vinculacion', null, array('label' => 'Vinculacion'))
        ->add('estadoregistro', null, array('label' => 'Estado'))
        ->add('empresa', null, array('label' => 'Empresa'))
        ;
    }
    
    protected function configureFormFields(FormMapper $mapper)
    {
        $mapper
         ->add('codigo', null, array('label' => 'Codigo'))
        ->add('nombre', null, array('label' => 'Nombre'))
        ->add('loteId', null, array('label' => 'Lote Especifico'))
        ->add('rangosiembrainicial', null, array('label' => 'Siembra Inicial'))
        ->add('rangosiembrafinal', null, array('label' => 'Siembra Final'))
        ->add('tipolabor', null, array('label' => 'Labor'))
        ->add('ceco', null, array('label' => 'Centro de Costo'))                
        ->add('cuentacontable', null, array('label' => 'Cuenta Contable'))
        ->add('periodicidad', null, array('label' => 'Periodicidad'))
        ->add('vinculacion', null, array('label' => 'Vinculacion'))
        ->add('costocontratista', null, array('label' => 'Valor Empresa'))
        ->add('costotrabajador', null, array('label' => 'Valor Trabajador'))
        ->add('estadoregistro', null, array('label' => 'Estado'))
        ->add('empresa', null, array('label' => 'Empresa'))
        ;
    }
}