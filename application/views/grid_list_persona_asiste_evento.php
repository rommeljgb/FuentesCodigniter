<div style="font-weight:bold; color:#009;">Mi Lista de Eventos Asistidos</div>
<div class="container" style="padding: 5px;margin-top: 10px;" >
    <div class="bs-example">
    <div class="navbar">
        <div class="navbar-inner" style="">
            <form class="navbar-form pull-left">
                <input type="text" class="input-medium">
                <button class="btn btn-success" type="submit"><i class="icon-search icon-white"></i>Buscar</button>
                
                <!----<button class="btn btn-success" onclick="abrir_ventana('E')" id="boton_nuevo" type="button"><i class="icon-edit icon-white"></i>Editar</button>--->
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

                <th>Empresa</th>

                <th>NombreEvento</th>

                <th>Fecha Inicio</th>
                <TH>Fecha Final</TH>
                <TH>Hora.Ini</TH>
                <th style="text-align:center">Esatado</th>
                <th style="text-align:center">Acciones</th>
            </tr>

        </thead>

        <tbody>
            
            <?php 
			$i = 0;
		    $y=0;
				

				
			//foreach($rows as  $row){
						/*$i++;
						$y++;
						if ($y==4){
							$y=0;
						}else{
							if ($y==1){
							 $class= "active";
							}
							
							if ($y==2){
							 $class= "success";
							}
						}
						
						$estado = "Publicado";
						if ($row->estado==0){
							  $estado = "Sin Publicar";
						}*/
			?>
               <tr id="tr_1" class="active" style="cursor:pointer;"  onclick="Pintar_Tr(this.id, 'crtlrow_grid')" onmouseover="PaintMouseOver(this.id)" onmouseout="PaintMouseOut(this.id, 'crtlrow_grid')">
                 <td><?php echo "1";?></td>
                 <td><?php echo "Graña y Montero";?></td>
                 <td><?php echo "Expocicion de petroleo";?></td>
                 <td><?php echo "2015-03-22";?></td>
                 <td><?php echo "2015-03-22";?></td>
                 <td><?php echo "9:00 am";?></td>
                 <td style="text-align:center">&nbsp;</td>
                 <td style="text-align:center"><a href="#" onclick="load_frm_general('reunion/getGridReunionAsistido', '');">Ver Reuniones</a></td>
               </tr>
               <tr id="tr_2" class="active" style="cursor:pointer;" onclick="Pintar_Tr(this.id, 'crtlrow_grid')" onmouseover="PaintMouseOver(this.id)" onmouseout="PaintMouseOut(this.id, 'crtlrow_grid')">

                <td><?php echo "2";?></td>

                <td><?php echo "Pieros";?></td>

                <td><?php echo "feria de tortas industriales";?></td>

                <td><?php echo "2015-03-22";?></td>
                <td><?php echo "2015-03-22";?></td>
                <td><?php echo "9:00 am";?></td>
                <td style="text-align:center">&nbsp;</td>
                 <td style="text-align:center"><a href="#" onclick="load_grid_lista_reunion('<?php echo '';?>');">Ver Reuniones</a></td>

            </tr>
            <?php 
			//}
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