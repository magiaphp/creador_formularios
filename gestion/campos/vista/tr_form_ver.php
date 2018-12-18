<?php

/**
  echo '<td>' . $i . '</td> ';
  foreach ($campo_disponibles as $campo) {
  if (in_array($campo, campos_campos_a_mostrar())) {
  echo "<td>$campos[$campo]</td> ";
  }
  }
  echo '<td>
  <a href=' . $_SERVER['PHP_SELF'] . '?p=campos&c=ver&campos_id=' . $campos_id . '>' . _tr("Ver") . '</a> |
  <a href=' . $_SERVER['PHP_SELF'] . '?p=campos&c=editar&campos_id=' . $campos_id . '>' . _tr("Editar") . '</a>

  </td>';
 * 
 */




echo   '
            <div class="form-group">
              <label for="' . $campos_id . '" class="col-sm-2 control-label">' . $campos_label . '</label>
              <div class="col-sm-10">
                <input type="' . $campos_tipo . '" class="'.$campos_clase.'" name="' . $campos_nombre . '" id="' . $campos_id . '" placeholder="' . $campos_marca_agua . '" value="' . $campos_valor . '" '.$solo_lectura.' '.$desactivado.' '.$requerido.' >
              </div>
            </div>';
