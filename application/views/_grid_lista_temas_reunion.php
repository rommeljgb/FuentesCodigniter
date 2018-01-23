<div style="font-weight:bold; color:#009;">Lista de Reuniones</div>
<div style="font-weight:bold; color:#009;"><table border="0" width="100%"><tr><td>Empresa: GRAÑA & MONTERO</td><td style="text-align: right"><img src="../../public/img/back.png"  onclick="load_frm('rueda_negocio/getGridEventoReunion');" style="cursor:pointer;" width="30" height="30" title="Retornar" /></td></tr></table></div>
<div style="font-weight:bold; color:#009;">Evento: Gran exposición Mineria</div>
<div class="container" style="padding: 5px;margin-top: 10px;" >
    <div class="bs-example">
    <div class="navbar">
        <div class="navbar-inner" style="">
            <form class="navbar-form pull-left">
                <input type="text" class="input-medium">
                <button class="btn btn-success" type="submit"><i class="icon-search icon-white"></i>Buscar</button>
                &nbsp;<button class="btn btn-success" onclick="load_frm_general('reunion/getfrmReunion', '<?php echo $id_rueda;?>')" id="boton_nuevo" type="button"><i class="icon-plus icon-white"></i>Agregar</button>
                
                <input  readonly="" name="id_rueda" id="id_rueda" style="width:20px" value="<?php echo $id_rueda;?>">
                <input readonly="" name="crtlrow_grid" id="crtlrow_grid" style="width:20px;"> 
            </form>
        </div>
    </div>
</div>
</div>
<div id="gridEvent">
    <table class="table">

        <thead>

            <tr>

                <th>Nro.</th>

                <th>NombreTema</th>

                <th>Expocitor</th>
                <th>Zona/Mesa</th>
                <th>Capacidad</th>

                <th>Fecha </th>
                <TH>Hora.Inicio</TH>
                <TH>Hora.Final</TH>
                <th>Acciones</th>
            </tr>

        </thead>

        <tbody>
            
            <?php 
			$i = 0;
			foreach($rows as  $row){
			$i++;		
			?>
               <tr id="tr_<?php echo $i;?>" class="active" style="cursor:pointer;" onclick="Pintar_Tr(this.id, 'crtlrow_grid')" onmouseover="PaintMouseOver(this.id)" onmouseout="PaintMouseOut(this.id, 'crtlrow_grid')">

                <td><?php echo $i;?></td>

                <td><?php echo $row->nombre_tema;?></td>

                <td><?php echo $row->expocitores;?></td>
                <td><?php echo $row->nombre_ubicacion; ?></td>
                <td><?php echo $row->capacidad;?></td>

                <td><?php echo $row->fecha_reunion;?></td>
                <td><?php echo $row->hora_inicio;?></td>
                <td><?php echo $row->hora_final;?></td>
                 <td style="text-align:center"><img src="../../public/img/editar-icono-9796-32.png" width="24" height="24" alt="Editar" onclick="load_frm('empresa/getEmpresa')" />&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../public/img/eliminar-icono-9089-32.png" width="24" height="24" title="Eliminar" onclick="" /></td>

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