<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php esc_html_e( 'Toshiba Marketing Form – hello from a dynamic block!', 'toshiba-marketing-form-block' ); ?>
</p>

<!--
<form id="wptoshibamarketing-form"  method="post" class="wptoshibamarketing-forms" enctype="multipart/form-data">
    <h3>Quiero información de este Toshiba</h3>
    <fieldset>
        <div class="clearfix">
            <div class="form-group row">
                <div class="col-md-12 col-xs-12">
                    <input type="text" name="nombre" id="field_nombre" required="" placeholder="Tu nombre">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12 col-xs-12">
                    <input type="email" name="e_mail" id="field_e_mail" required="" placeholder="Tu e-mail">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12 col-xs-12">
                    <input type="text" name="telefono" id="field_telefono" required="" placeholder="Tu teléfono">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12 col-xs-12">
                    <input type="text" name="cp" id="field_cp" placeholder="Código Postal">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12 col-xs-12">
                    <select name="asunto" id="field_asunto" required="" placeholder="Indícame el asunto">
                        <option value="—Selecciona tu consulta—">—Selecciona tu consulta—</option>
                        <option value="Quiero información del producto">Quiero información del producto</option>
                        <option value="Quiero que me llame un instalador para hacerme un presupuesto">Quiero que me llame un instalador para hacerme un presupuesto</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12 col-xs-12">
                    <select name="estancia" id="field_estancia">
                        <option value="--Selecciona una Opción--">--Selecciona una Opción--</option>
                        <option value="Vivienda">Vivienda</option><option value="Chalet">Chalet</option>
                        <option value="Local comercial">Local comercial</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12 col-xs-12">
                    <select name="servicio" id="field_servicio">
                        <option value="-Selecciona los servicios -">-Selecciona los servicios -</option>
                        <option value="Climatización (frío y calor)">Climatización (frío y calor)</option>
                        <option value="Agua caliente">Agua caliente</option>
                        <option value="Climatización y agua caliente">Climatización y agua caliente</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12 col-xs-12">
                    <textarea rows="3" cols="10" name="mensaje" id="field_mensaje" placeholder="Comentarios."></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12 col-xs-12">
                    <label class="input">
                        <input type="checkbox" value="true" name="acepto" id="field_acepto" required="" onclick="showGRDPMsg()"> He leído y acepto la <a href="/politica-de-privacidad/">Política de Privacidad</a>.
                    </label>
                </div>
            </div>
        </div>
        <div class="submit row">
            <button type="submit" name="submitMessage" class="btn btn-primary"><span>enviar</span></button>
        </div>
    </fieldset>
</form>
-->
