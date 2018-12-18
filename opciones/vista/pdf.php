<?php 
 
                        // Instanciation of inherited class
                        $pdf = new PDF();
                        $pdf->AliasNbPages();
                        $pdf->AddPage();
                        $pdf->SetFont("Times", "", 12);


                        $pdf->Cell($w*12, $h, "$p", 0, $ln, $align, $fill, $link);
                        $pdf->Ln(10);
                        //********************
                        $pdf->Cell($w * 1, $h, "#", $border, $ln, $align, $fill, $link);

                         $pdf->Cell($w * 1, $h, _tr("campo"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("opcion"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("valor"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("orden"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("estatus"), $border, $ln, $align, $fill, $link);
 $pdf->Ln();
                //********************
                $i = 1;
                include "./opciones/modelos/pdf.php";
                while ($opciones = mysql_fetch_array($sql)) {
                    include "./opciones/reg/reg.php";
                    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link); $pdf->Cell($w * 1, $h, $opciones_campo, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $opciones_opcion, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $opciones_valor, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $opciones_orden, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $opciones_estatus, $border, $ln, $align, $fill, $link);


                    $pdf->Ln();
                    $i++;
                }
                //********************
                $pdf->Output();

                  
