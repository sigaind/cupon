<?php

namespace sigaind\siagBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class LaboresReportadasController extends Controller
{
    public function verAction()
    {                     
        return $this->render('siagBundle:Agronomia:LaboresReportadas.html.twig');
    }
    
    public function listarAction()
    {
        $em = $this->get('doctrine')->getEntityManager();
        $labores = $em->getRepository('siagBundle:TtLaboresreportadastemporal')->allLaboresReportadasTemporalActivos();
        
        return $this->render('siagBundle:Agronomia:LaboresAprobar.html.twig', array(
            'labores' => $labores
        ));
    }
    
    public function EliminarLaborAction()
    {
        
        //OBTENER EL ID DE LA LABOR A ELIMINAR
        $peticion = $this->getRequest();
        $id = $peticion->request->get('id', '0');

        //INVOCAR LA CLASE DE DOCTRINE Y ELIMINAR LA LABOR
        $em = $this->get('doctrine')->getEntityManager();        
        $labor = $em->getRepository('siagBundle:TtLaboresreportadas')->find($id);
        $idOrden = $labor->getOreid()->getOreid();
        $orden = $em->getRepository('siagBundle:TtOrdenagronomia')->find($idOrden);
        
        $cantAcumulada=$orden->getOrecantidadacumulada();
        $cantDescontar = $labor->getLrecantidad();
        
        //ACTUALIZAR LA CANTIDAD ACUMULADA EN LA ORDEN
        if($cantAcumulada > 0)
        {            
            $nuevaCantidad= $cantAcumulada - $cantDescontar;
            $orden->setOrecantidadacumulada($nuevaCantidad);
        }
        else
        {
            $orden->setOrecantidadacumulada(0);  
        }
        
        //CONFIRMAR SI SE PUEDE ELIMINAR Y SE EJECUTA CODIGO
        if($labor->getExportado()==0)
        {
            $em->persist($orden);
            $em->remove($labor);
            $em->flush();
            $html=$id;
        }
        else
        {
            $html=-1; 
        }
        

        //ENVIAR LA RESPUESTA
        return new Response($html, 200, array('Content-Type' => 'text/html'));
    }
    
    public function ConsultaAction()
    {
        //OBTENER FECHAS DE LA PETICION
        $peticion = $this->getRequest();
        $f1 = $peticion->query->get('f1', '0');
        $f2 = $peticion->query->get('f2', '0');
        
        $em = $this->get('doctrine')->getEntityManager();        
        $labores = $em->getRepository('siagBundle:TtLaboresreportadas')->allLaboresPorFechasActivos($f1, $f2);        
        
         return $this->render('siagBundle:Agronomia:TablaLaboresAprobadas.html.twig', array(
            'labores' => $labores
        ));
    }
    
    public function ExportarExcelAction()
    {
        $peticion = $this->getRequest();
        $f1 = $peticion->query->get('f1', '0');
        $f2 = $peticion->query->get('f2', '0');                        
        
        $excelService = $this->get('xls.service_xls5');
        $excelService->excelObj->getProperties()->setCreator("Sigaind S.A.S")
                            ->setLastModifiedBy("Sigaind S.A.S")
                            ->setTitle("Reporte de labores desde el: $f1 al $f2")
                            ->setSubject("")
                            ->setDescription("Informe")
                            ->setKeywords("office")
                            ->setCategory("Test result file");
        $excelService->excelObj->setActiveSheetIndex(0)
                    ->setCellValue('A1', "REPORTE DE LABORES DESDE EL: $f1 al $f2")
                    ->setCellValue('A2', '')
                    ->setCellValue('A3', 'ID')
                    ->setCellValue('B3', 'ORDEN')
                    ->setCellValue('C3', 'FECHA')
                    ->setCellValue('D3', 'COOPERATIVA')
                    ->setCellValue('E3', 'COD TRABAJADOR')
                    ->setCellValue('F3', 'NOM TRABAJADOR')
                    ->setCellValue('G3', 'LABOR DE CAMPO')
                    ->setCellValue('H3', 'LOTE')
                    ->setCellValue('I3', 'CANTIDAD')
                    ->setCellValue('J3', 'JORNALES')
                    ->setCellValue('K3', 'SUPERVISOR');
        $excelService->excelObj->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
        
        
        //CONSEGUIR LOS DATOS DE LAS LABORES E INGRESARLOS A LAS CELDAS
        $em = $this->get('doctrine')->getEntityManager();        
        $labores = $em->getRepository('siagBundle:TtLaboresreportadas')->allLaboresPorFechasActivos($f1, $f2);        
        $j=4;
        for ($i = 0; $i <count($labores); $i++) {
                $excelService->excelObj->getActiveSheet()->setCellValue('A' . $j, $labores[$i]['lrepid']);
                $excelService->excelObj->getActiveSheet()->setCellValue('B' . $j, $labores[$i]['oreid']);
                $excelService->excelObj->getActiveSheet()->setCellValue('C' . $j, $labores[$i]['lrefecha']->format('d-m-Y'));
                $excelService->excelObj->getActiveSheet()->setCellValue('D' . $j, $labores[$i]['econombre']);
                $excelService->excelObj->getActiveSheet()->setCellValue('E' . $j, $labores[$i]['tracodigo']);
                $excelService->excelObj->getActiveSheet()->setCellValue('F' . $j, $labores[$i]['tranombre']);
                $excelService->excelObj->getActiveSheet()->setCellValue('G' . $j, $labores[$i]['nombre']);
                $excelService->excelObj->getActiveSheet()->setCellValue('H' . $j, $labores[$i]['lotcodigo']);                
                $excelService->excelObj->getActiveSheet()->setCellValue('I' . $j, $labores[$i]['lrecantidad']);
                $excelService->excelObj->getActiveSheet()->setCellValue('J' . $j, $labores[$i]['lrejornales']);
                $excelService->excelObj->getActiveSheet()->setCellValue('K' . $j, $labores[$i]['supervisor']);
                
                $j++;
        }
                
        $excelService->excelObj->getActiveSheet()->getStyle('A3:K3')->getFont()->setBold(true);
        $excelService->excelObj->getActiveSheet()->getStyle('A1:K1')->getFont()->setBold(true);        
        
        $excelService->excelObj->getActiveSheet()->mergeCells('A1:K1');
        $excelService->excelObj->getActiveSheet()->mergeCells('A2:K2');
        
                   
        $excelService->excelObj->getActiveSheet()->setTitle('LaboresReportadas');        
        $excelService->excelObj->setActiveSheetIndex(0);

        $response = $excelService->getResponse();
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment;filename=LaboresReportadas.xls');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        return $response;         
    }
    
    public function ExportarPdfAction()
    {
        $peticion = $this->getRequest();
        $f1 = $peticion->query->get('f1', '0');
        $f2 = $peticion->query->get('f2', '0');                        
        
        $excelService = $this->get('xls.service_pdf');
        $excelService->excelObj->getProperties()->setCreator("Sigaind S.A.S")
                            ->setLastModifiedBy("Sigaind S.A.S")
                            ->setTitle("Reporte de labores desde el: $f1 al $f2")
                            ->setSubject("")
                            ->setDescription("Informe")
                            ->setKeywords("office")
                            ->setCategory("Test result file");        
        
        $excelService->excelObj->setActiveSheetIndex(0)
                    ->setCellValue('A1', "REPORTE DE LABORES DESDE EL: $f1 al $f2")
                    ->setCellValue('A2', '')
                    ->setCellValue('A3', 'ID')
                    ->setCellValue('B3', 'ORDEN')
                    ->setCellValue('C3', 'FECHA')
                    ->setCellValue('D3', 'COOPERATIVA')
                    ->setCellValue('E3', 'COD TRABAJADOR')
                    ->setCellValue('F3', 'NOM TRABAJADOR')
                    ->setCellValue('G3', 'LABOR DE CAMPO')
                    ->setCellValue('H3', 'LOTE')
                    ->setCellValue('I3', 'CANTIDAD')
                    ->setCellValue('J3', 'JORNALES')
                    ->setCellValue('K3', 'SUPERVISOR');
        $excelService->excelObj->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
        
        $excelService->excelObj->getActiveSheet()->getPageSetup()->setOrientation('portrait');
        //CONSEGUIR LOS DATOS DE LAS LABORES E INGRESARLOS A LAS CELDAS
        $em = $this->get('doctrine')->getEntityManager();        
        $labores = $em->getRepository('siagBundle:TtLaboresreportadas')->allLaboresPorFechasActivos($f1, $f2);        
        $j=4;
        for ($i = 0; $i <count($labores); $i++) {
                $excelService->excelObj->getActiveSheet()->setCellValue('A' . $j, $labores[$i]['lrepid']);
                $excelService->excelObj->getActiveSheet()->setCellValue('B' . $j, $labores[$i]['oreid']);
                $excelService->excelObj->getActiveSheet()->setCellValue('C' . $j, $labores[$i]['lrefecha']->format('d-m-Y'));
                $excelService->excelObj->getActiveSheet()->setCellValue('D' . $j, $labores[$i]['econombre']);
                $excelService->excelObj->getActiveSheet()->setCellValue('E' . $j, $labores[$i]['tracodigo']);
                $excelService->excelObj->getActiveSheet()->setCellValue('F' . $j, $labores[$i]['tranombre']);
                $excelService->excelObj->getActiveSheet()->setCellValue('G' . $j, $labores[$i]['nombre']);
                $excelService->excelObj->getActiveSheet()->setCellValue('H' . $j, $labores[$i]['lotcodigo']);                
                $excelService->excelObj->getActiveSheet()->setCellValue('I' . $j, $labores[$i]['lrecantidad']);
                $excelService->excelObj->getActiveSheet()->setCellValue('J' . $j, $labores[$i]['lrejornales']);
                $excelService->excelObj->getActiveSheet()->setCellValue('K' . $j, $labores[$i]['supervisor']);
                
                $j++;
        }
                
        $excelService->excelObj->getActiveSheet()->getStyle('A3:K3')->getFont()->setBold(true);
        $excelService->excelObj->getActiveSheet()->getStyle('A1:K1')->getFont()->setBold(true);        
        
        $excelService->excelObj->getActiveSheet()->mergeCells('A1:K1');
        $excelService->excelObj->getActiveSheet()->mergeCells('A2:K2');
        
                   
        $excelService->excelObj->getActiveSheet()->setTitle('LaboresReportadas');        
        $excelService->excelObj->setActiveSheetIndex(0);

        $response = $excelService->getResponse();
        $response->headers->set('Content-Type', 'application/pdf; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment;filename=LaboresReportadas.pdf');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        return $response;         
    }
}
