<?php

namespace sigaind\wsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use sigaind\siagBundle\Entity\TtLaboresreportadastemporal;

class TablaMaestrasController extends Controller
{
    public function indexAction()
    {   $name="Harold";     
        $helloworld = array('hello' => $name);
        return new Response(json_encode(array('message' => $helloworld)));                
    }
    
    public function lotesAction()
    {
        $peticion = $this->getRequest();
        $empId = $peticion->query->get('d0', '0');
        
        $array=array();        
        $em = $this->get('doctrine')->getEntityManager();
        $lotes = $em->getRepository('siagBundle:TmLotes')->allLotesActivosPorEmpresa($empId);
                  
        for ($i=0; $i<count($lotes);$i++ ) 
        {
            $array[$lotes[$i]['id']]["_id"] = $lotes[$i]['id'];
            $array[$lotes[$i]['id']]["simId"] = $lotes[$i]['simid'];
            $array[$lotes[$i]['id']]["matId"] = $lotes[$i]['matid'];
            $array[$lotes[$i]['id']]["zonId"] = $lotes[$i]['zonid'];
            $array[$lotes[$i]['id']]["lotCodigo"] = $lotes[$i]['lotcodigo'];
            $array[$lotes[$i]['id']]["lotNombre"] = $lotes[$i]['lotnombre'];
            $array[$lotes[$i]['id']]["lotHectarea"] = $lotes[$i]['lothectarea'];
            $array[$lotes[$i]['id']]["lotNumeroPalmas"] = $lotes[$i]['lotnumeropalmas'];
            if($lotes[$i]['lotdrenajes']==null)
                $array[$lotes[$i]['id']]["lotDrenajes"] = 0;
            else
                $array[$lotes[$i]['id']]["lotDrenajes"] = $lotes[$i]['lotdrenajes'];
                        
            $array[$lotes[$i]['id']]["lotPPr"] = $lotes[$i]['lotppr'];
            $array[$lotes[$i]['id']]["codCatastral"] = $lotes[$i]['codcatastral'];
                                                
        }
        return new Response(json_encode($array), 200, array('Content-Type' => 'text/html'));
    }
    public function laboresAction()
    { 
        $peticion = $this->getRequest();
        $empId = $peticion->query->get('d0', '0');
        $supId = $peticion->query->get('d1', '0');
        
        $array=array();        
        $em = $this->get('doctrine')->getEntityManager();
        $labores = $em->getRepository('siagBundle:TtOrdenagronomia')->allLaboresProgramadosActivos($empId, $supId);
                  
        for ($i=0; $i<count($labores);$i++ ) 
        {
            $array[$labores[$i]['id']]["_id"] = $labores[$i]['id'];                        
            $array[$labores[$i]['id']]["labCodigo"] = $labores[$i]['codigo'];
            $array[$labores[$i]['id']]["labNombre"] = $labores[$i]['nombre'];
            $array[$labores[$i]['id']]["uniId"] = $labores[$i]['unicodigo'];
            $array[$labores[$i]['id']]["tcoId"] = $labores[$i]['tcoid'];
        }
        return new Response(json_encode($array), 200, array('Content-Type' => 'text/html'));
    }
    
    public function EmpresaContratistaAction()
    { 
        $peticion = $this->getRequest();
        $empId = $peticion->query->get('d0', '0');
        
        $array=array();        
        $em = $this->get('doctrine')->getEntityManager();
        $contratista = $em->getRepository('siagBundle:TmEmpresacontratista')->allEmpresaContratistaActivosPorEmpresa($empId);
                  
        for ($i=0; $i<count($contratista);$i++ )
        {
            $array[$contratista[$i]['ecoid']]["_id"] = $contratista[$i]['ecoid'];
            $array[$contratista[$i]['ecoid']]["empId"] = $contratista[$i]['empid'];
            $array[$contratista[$i]['ecoid']]["ecoCodigo"] = $contratista[$i]['ecocodigo'];
            $array[$contratista[$i]['ecoid']]["ecoNombre"] = $contratista[$i]['econombre'];
        }
        return new Response(json_encode($array), 200, array('Content-Type' => 'text/html'));
    }
    
    public function TrabajadoresAction()
    {  
        $peticion = $this->getRequest();
        $empId = $peticion->query->get('d0', '0');
        
        $array=array();        
        $em = $this->get('doctrine')->getEntityManager();
        $contratista = $em->getRepository('siagBundle:TmTrabajadores')->allTrabajadoresActivosPorEmpresa($empId);
                  
        for ($i=0; $i<count($contratista);$i++ )
        {
            $array[$contratista[$i]['traid']]["_id"] = $contratista[$i]['traid'];
            $array[$contratista[$i]['traid']]["ecoId"] = $contratista[$i]['ecoid'];
            $array[$contratista[$i]['traid']]["traCodigo"] = $contratista[$i]['tracodigo'];
            $array[$contratista[$i]['traid']]["traNombre"] = $contratista[$i]['tranombre'];
        }
        return new Response(json_encode($array), 200, array('Content-Type' => 'text/html'));
    }
    
    public function ProductoQuimicoAction()
    { 
        $peticion = $this->getRequest();
        $empId = $peticion->query->get('d0', '0');
        
        $array=array();        
        $em = $this->get('doctrine')->getEntityManager();
        $producto = $em->getRepository('siagBundle:TmProductoquimico')->allProductoQuimicoActivosPorEmpresa($empId);
                  
        for ($i=0; $i<count($producto);$i++ )
        {
            $array[$producto[$i]['proid']]["_id"] = $producto[$i]['proid'];            
            
            if($producto[$i]['uniid']==null)
                $array[$producto[$i]['proid']]["uniId"] = 0;
            else
                $array[$producto[$i]['proid']]["uniId"] = $producto[$i]['uniid'];
            
            $array[$producto[$i]['proid']]["proCodigo"] = $producto[$i]['procodigo'];
            $array[$producto[$i]['proid']]["proNombre"] = $producto[$i]['pronombre'];
            $array[$producto[$i]['proid']]["proFactorConversion"] = $producto[$i]['profactorconversion'];
            $array[$producto[$i]['proid']]["proFertilizacionSanidad"] = $producto[$i]['profertilizacionsanidad'];
        }
        return new Response(json_encode($array), 200, array('Content-Type' => 'text/html'));
    }
    
    public function PlagaAction()
    { 
        $peticion = $this->getRequest();
        $empId = $peticion->query->get('d0', '0');
        
        $array=array();        
        $em = $this->get('doctrine')->getEntityManager();
        $plaga = $em->getRepository('siagBundle:TmPlagas')->allPlagasActivosPorEmpresa($empId);
                  
        for ($i=0; $i<count($plaga);$i++ )
        {
            $array[$plaga[$i]['plaid']]["_id"] = $plaga[$i]['plaid'];
            $array[$plaga[$i]['plaid']]["plaNombre"] = $plaga[$i]['planombre'];
            $array[$plaga[$i]['plaid']]["prioridad"] = $plaga[$i]['prioridad'];
            $array[$plaga[$i]['plaid']]["plaSigla"] = $plaga[$i]['plasigla'];
        }
        return new Response(json_encode($array), 200, array('Content-Type' => 'text/html'));
    }
    
    public function EstadoPlagaAction()
    {   
        $peticion = $this->getRequest();
        $empId = $peticion->query->get('d0', '0');
        
        $array=array();        
        $em = $this->get('doctrine')->getEntityManager();
        $estado = $em->getRepository('siagBundle:TmEstadoplaga')->allEstadoPlagActivosPorEmpresa($empId);
                  
        for ($i=0; $i<count($estado);$i++ )
        {
            $array[$estado[$i]['eplid']]["_id"] = $estado[$i]['eplid'];
            $array[$estado[$i]['eplid']]["plaId"] = $estado[$i]['plaid'];
            $array[$estado[$i]['eplid']]["eplNombre"] = $estado[$i]['eplnombre'];
            $array[$estado[$i]['eplid']]["eplSiglas"] = $estado[$i]['eplsiglas'];
            $array[$estado[$i]['eplid']]["prioridad"] = $estado[$i]['prioridad'];
        }
        return new Response(json_encode($array), 200, array('Content-Type' => 'text/html'));
    }
    
    public function EnfermedadesAction()
    {   
        $peticion = $this->getRequest();
        $empId = $peticion->query->get('d0', '0');
        
        $array=array();        
        $em = $this->get('doctrine')->getEntityManager();
        $enf = $em->getRepository('siagBundle:TmEnfermedades')->allEnfermedadesActivosPorEmpresa($empId);
                  
        for ($i=0; $i<count($enf);$i++ )
        {
            $array[$enf[$i]['enfid']]["_id"] = $enf[$i]['enfid'];
            $array[$enf[$i]['enfid']]["enfCodigo"] = $enf[$i]['enfcodigo'];
            $array[$enf[$i]['enfid']]["enfNombre"] = $enf[$i]['enfnombre'];
            $array[$enf[$i]['enfid']]["prioridad"] = $enf[$i]['prioridad'];
        }
        return new Response(json_encode($array), 200, array('Content-Type' => 'text/html'));
    }
    
    
    public function EstadoEnfermedadAction()
    {   
        $peticion = $this->getRequest();
        $empId = $peticion->query->get('d0', '0');
        
        $array=array();        
        $em = $this->get('doctrine')->getEntityManager();
        $estado = $em->getRepository('siagBundle:TmEstadoenfermedad')->allEstadosEnfermActivosPorEmpresa($empId);
                  
        for ($i=0; $i<count($estado);$i++ )
        {
            $array[$estado[$i]['eenid']]["_id"] = $estado[$i]['eenid'];
            $array[$estado[$i]['eenid']]["eenNombre"] = $estado[$i]['eennombre'];
            $array[$estado[$i]['eenid']]["eenSigla"] = $estado[$i]['eensigla'];
            
            if($estado[$i]['prioridad']==null)
                $array[$estado[$i]['eenid']]["prioridad"] = 10;
            else
                $array[$estado[$i]['eenid']]["prioridad"] = $estado[$i]['prioridad'];
            $array[$estado[$i]['eenid']]["enfId"] = $estado[$i]['enfid'];
        }
        return new Response(json_encode($array), 200, array('Content-Type' => 'text/html'));
    }
    
    public function OrdenAgronomiaAction()
    { 
        $peticion = $this->getRequest();
        $empId = $peticion->query->get('d0', '0');
        $supId = $peticion->query->get('d1', '0');
        
        $array=array();        
        $em = $this->get('doctrine')->getEntityManager();
        $orden = $em->getRepository('siagBundle:TtOrdenagronomia')->allOrdenesActivasUsuario($empId, $supId);
                  
        for ($i=0; $i<count($orden);$i++ )
        {
            $array[$orden[$i]['oreid']]["_id"] = $orden[$i]['oreid'];
            $array[$orden[$i]['oreid']]["lotId"] = $orden[$i]['lotid'];
            $array[$orden[$i]['oreid']]["labId"] = $orden[$i]['labid'];            
            $array[$orden[$i]['oreid']]["oreCantidadAcumulada"] = $orden[$i]['orecantidadacumulada'];
        }
        return new Response(json_encode($array), 200, array('Content-Type' => 'text/html'));
    }
    
    public function usuariosAction()
    {        
        $array=array();        
        $em = $this->get('doctrine')->getEntityManager();
        $usuario = $em->getRepository('siagBundle:SysUsuarios')->allUsuariosActivosPorEmpresa();
                  
        for ($i=0; $i<count($usuario);$i++ )
        {
            $array[$usuario[$i]['usuid']]["updaId"] = $usuario[$i]['usuid'];
            $array[$usuario[$i]['usuid']]["updaLogin"] = $usuario[$i]['updalogin'];
            $array[$usuario[$i]['usuid']]["usrPasword"] = $usuario[$i]['ptw'];            
            $array[$usuario[$i]['usuid']]["empId"] = $usuario[$i]['empid'];            
            $array[$usuario[$i]['usuid']]["traId"] = $usuario[$i]['traid'];            
            $array[$usuario[$i]['usuid']]["gusuId"] = $usuario[$i]['gusuid'];
        }
        return new Response(json_encode($array), 200, array('Content-Type' => 'text/html'));
    }
    
    public function permisosAction()
    {
        $peticion = $this->getRequest();
        $dato = $peticion->query->get('d0', '0');
        
        $array=array();        
        $em = $this->get('doctrine')->getEntityManager();
        $permisos = $em->getRepository('siagBundle:SysGrupopermisos')->allPermisosUsuario($dato);
                  
        for ($i=0; $i<count($permisos);$i++ )
        {
            $array[$permisos[$i]['id']]["gusuId"] = $permisos[$i]['gusuid'];
            $array[$permisos[$i]['id']]["modId"] = $permisos[$i]['modid'];
            $array[$permisos[$i]['id']]["lectura"] = $permisos[$i]['lectura'];            
            $array[$permisos[$i]['id']]["escritura"] = $permisos[$i]['escritura'];            
            $array[$permisos[$i]['id']]["actualizar"] = $permisos[$i]['update'];            
            $array[$permisos[$i]['id']]["eliminar"] = $permisos[$i]['delete'];
        }
        return new Response(json_encode($array), 200, array('Content-Type' => 'text/html'));
    }         
}