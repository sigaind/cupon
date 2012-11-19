<?php

namespace sigaind\siagBundle\Util;

class Util
{
    
    static public function iniciarExpor($excelService)
    {                       
        // create the object see http://phpexcel.codeplex.com documentation
        $excelService->excelObj->getProperties()->setCreator("Sigaind S.A.S")
                            ->setLastModifiedBy("Sigaind S.A.S")
                            ->setTitle("Informe desde el aplicativo Sigaind S.A.S")
                            ->setSubject("")
                            ->setDescription("Informe")
                            ->setKeywords("office")
                            ->setCategory("Test result file"); 
        
    }
    
}