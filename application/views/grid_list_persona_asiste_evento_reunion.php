<div style="font-weight:bold; color:#009;">Mis Reuniones Asistidas</div>
<div style="font-weight:bold; color:#009;"><table border="0" width="100%"><tr><td>Empresa: GRAÑA & MONTERO</td><td style="text-align: right"><img src="../../public/img/back.png"  onclick="load_frm('persona/getGridEventAsist');" style="cursor:pointer;" width="30" height="30" title="Retornar" /></td></tr></table></div>
<div style="font-weight:bold; color:#009;">Evento: Gran Exposición Mineria</div>
<div class="container" style="padding: 5px;margin-top: 10px;" >
    <div class="bs-example">
    <div class="navbar">
        <div class="navbar-inner" style="">
            <form class="navbar-form pull-left">
                <input type="text" class="input-medium">
                <button class="btn btn-success" type="submit"><i class="icon-search icon-white"></i>Buscar</button>&nbsp;&nbsp;
                
                <!----<button class="btn btn-success" onclick="abrir_ventana('E')" id="boton_nuevo" type="button"><i class="icon-edit icon-white"></i>Editar</button>--->
                <input type="hidden" name="crtlrow_g" id="crtlrow_g" style="width:20px">
                <input type="hidden" name="pk_equipo" id="pk_equipo" style="width:25px">
            </form>
        </div>
    </div>
</div>
</div>
<div id="gridEvent">
    <table width="654" class="table">

        <thead>

            <tr>

                <th width="37">Nro.</th>

                <th width="94">Mesa/Zona</th>

                <th width="202">Tema</th>
                <th width="135">Expocitor</th>

                <th width="74">FechaReunion</th>
                <TH width="56">Hora.Ini</TH>
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
               <tr class="active" style="cursor:pointer;">
                 <td><?php echo "1";?></td>
                 <td>Mesa 1</td>
                 <td>Derivados de Metales</td>
                 <td>Ing. Jorge Peralta</td>
                 <td><?php echo "2015-03-22";?></td>
                 <td><?php echo "9:00 am";?></td>
               </tr>
               <tr class="active" style="cursor:pointer;">

                <td><?php echo "2";?></td>

                <td>Mesa 2</td>

                <td>Seminario de Agua Pesada</td>
                <td>Lic. Rony Chavez</td>

                <td><?php echo "2015-03-22";?></td>
                <td><?php echo "9:00 am";?></td>
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