<?php

echo   '
            <div class="form-group">
              <label for="' . $campos_id . '" class="col-sm-2 control-label">' . $campos_label . '</label>
              <div class="col-sm-10">
                <textarea class="'.$campos_clase.'" name="' . $campos_nombre . '" id="' . $campos_id . '" placeholder="' . $campos_marca_agua . '"  '.$solo_lectura.' '.$desactivado.' '.$requerido.' >' . $campos_valor . '</textarea>
              </div>
            </div>';
