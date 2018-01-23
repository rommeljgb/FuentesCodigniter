<div style="font-weight:bold; color:#009;">Mis Eventos Organizados</div>
<div class="container" style="padding: 5px;margin-top: 10px;" >
    <div class="bs-example">
    <div class="navbar">
        <div class="navbar-inner" style="">
            <form class="navbar-form pull-left">
                <input type="text" class="input-medium">
                <button class="btn btn-success" type="submit"><i class="icon-search icon-white"></i>Buscar</button>
                &nbsp;<button class="btn btn-success" onclick="load_frm_general('rueda_negocio/getFrmRueda', '');" id="boton_nuevo" type="button"><i class="icon-plus icon-white"></i><!---->Nuevo</button>
                <!----<button class="btn btn-success" onclick="abrir_ventana('E')" id="boton_nuevo" type="button"><i class="icon-edit icon-white"></i>Editar</button>--->
                <input type="text" name="crtlrow_grid" id="crtlrow_grid" style="width:20px">
                
            </form>
        </div>
    </div>
</div>
</div>
<div id="gridEvent">
    <table width="900" class="table">

        <thead>

            <tr>

                <th width="37">Nro.</th>

                <th width="98">Empresa</th>

                <th width="193">NombreEvento</th>

                <th width="99">Fecha Inicio</th>
                <TH width="81">Fecha Fin</TH>
                <TH width="96">Hora.Ini</TH>
                <TH width="65">Costo</TH>
                <th width="88">Estado</th>
                <th width="103" style="text-align:center">Acciones</th>
            </tr>

        </thead>

        <tbody>
            
            <?php 
			$i = 0;
		    $y=0;
				

				
			foreach($rows as  $row){
			$i++;		
			 
			$estado = "Publicado";
			if ($row->estado==0){
				  $estado = "Inactivo";
		    }else{
				  $estado = "Activo";
				}
			?>
               <tr id="tr_<?php echo $i;?>" class="active" style="cursor:pointer;" onclick="Pintar_Tr(this.id, 'crtlrow_grid')" onmouseover="PaintMouseOver(this.id)" onmouseout="PaintMouseOut(this.id, 'crtlrow_grid')">

                <td><?php echo $i;?></td>

                <td><?php echo $row->razon_social;?></td>

                <td><?php echo $row->nombre_evento;?></td>

                <td><?php echo $row->fecha_inicio;?></td>
                <td><?php echo $row->fecha_fin;?></td>
                <td><?php echo $row->hora_inicio;?></td>
                 <td><?php echo $row->costo;?></td>
                 <td><?php echo $estado;?></td>                 
                <td style="text-align:center"><img src="../../public/img/editar-icono-9796-32.png" width="24" height="24" style="cursor:pointer;" onclick="load_frm_general('rueda_negocio/getFrmRueda', '<?php echo $row->id_rueda_negocio;?>');" />&nbsp;&nbsp;&nbsp;<img src="../../public/img/eliminar-icono-9089-32.png" width="24" height="24" title="Eliminar" onclick="" /><!---<img src="../../public/img/agregar-dinero-icono-4195-32.png" width="24" height="24" alt="Editar"  style="cursor:pointer;" onclick="load_frm_general('pago/getFrmPagos', '<?php //echo $row->id_rueda_negocio;?>');"/>---></td>

            </tr>
            <?php 
			}
			?>
            
            <!---<tr class="active">

                <td>1</td>

                <td>Credit Card</td>

                <td>04/07/2014</td>

                <td>Call in to confirm</td>
                <td>Acciones</td>

            </tr>

            <tr class="success">

                <td>2</td>

                <td>Water</td>

                <td>01/07/2014</td>

                <td>Paid</td>
                <td>Acciones</td>

            </tr>

            <tr class="info">

                <td>3</td>

                <td>Internet</td>

                <td>05/07/2014</td>

                <td>Change plan</td>
                <td>Acciones</td>

            </tr>

            <tr class="warning">

                <td>4</td>

                <td>Electricity</td>

                <td>03/07/2014</td>

                <td>Pending</td>
                <td>Acciones</td>

            </tr>

            <tr class="danger">

                <td>5</td>

                <td>Telephone</td>

                <td>06/07/2014</td>

                <td>Due</td>
                <td>Acciones</td>

            </tr>-->

        </tbody>

    </table>

</div>