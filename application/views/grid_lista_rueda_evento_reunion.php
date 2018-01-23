<div style="font-weight:bold; color:#009;">Lista Evento de Rueda de Negios</div>
<div class="container" style="padding: 5px;margin-top: 10px;" >
    <div class="bs-example">
    <div class="navbar">
        <div class="navbar-inner" style="">
            <form class="navbar-form pull-left">
                <input type="text" class="input-medium">
                <button class="btn btn-success" type="submit"><i class="icon-search icon-white"></i>Buscar</button>                
                <!----<button class="btn btn-success" onclick="abrir_ventana('E')" id="boton_nuevo" type="button"><i class="icon-edit icon-white"></i>Editar</button>--->
                <input readonly="" name="crtlrow_grid" id="crtlrow_grid" style="width:20px">
                
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

                <th>Empresa</th>

                <th>NombreEvento</th>

                <th>Fecha Inicio</th>
                <TH>Fecha Final</TH>
                <TH>Hora.Ini</TH>
                <th style="text-align:center">Acciones</th>
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
                                          $estado = "Sin Publicar";
                                }
			?>
               <tr id="tr_<?php echo $i;?>" class="active" style="cursor:pointer;" onclick="Pintar_Tr(this.id, 'crtlrow_grid')" onmouseover="PaintMouseOver(this.id)" onmouseout="PaintMouseOut(this.id, 'crtlrow_grid')">

                <td><?php echo $i;?></td>

                <td><?php echo $row->razon_social;?></td>

                <td><?php echo $row->nombre_evento;?></td>

                <td><?php echo $row->fecha_inicio;?></td>
                <td><?php echo $row->fecha_fin;?></td>
                <td><?php echo $row->hora_inicio;?></td>
                 <td style="text-align:center"><a href="#" onclick="load_grid_lista_reunion('<?php echo $row->id_rueda_negocio;?>');">Ver Reunion</a></td>

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