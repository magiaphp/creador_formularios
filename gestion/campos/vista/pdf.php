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

                         $pdf->Cell($w * 1, $h, _tr("base_datos"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("tabla"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("campo"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("label"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("tipo"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("clase"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("nombre"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("identificador"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("marca_agua"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("valor"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("solo_lectura"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("obligatorio"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("seleccionado"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("desactivado"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("orden"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("estatus"), $border, $ln, $align, $fill, $link);
 $pdf->Ln();
                //********************
                $i = 1;
                include "./campos/modelos/pdf.php";
                while ($campos = mysql_fetch_array($sql)) {
                    include "./campos/reg/reg.php";
                    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link); $pdf->Cell($w * 1, $h, $campos_base_datos, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $campos_tabla, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $campos_campo, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $campos_label, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $campos_tipo, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $campos_clase, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $campos_nombre, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $campos_identificador, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $campos_marca_agua, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $campos_valor, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $campos_solo_lectura, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $campos_obligatorio, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $campos_seleccionado, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $campos_desactivado, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $campos_orden, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $campos_estatus, $border, $ln, $align, $fill, $link);


                    $pdf->Ln();
                    $i++;
                }
                //********************
                $pdf->Output();

                  
