<div style="font-weight:bold; color:#009;">Mi Lista de Contactos</div>
<div class="container" style="padding: 5px;margin-top: 10px;" >
    <div class="bs-example">
    <div class="navbar">
        <div class="navbar-inner" style="">
            <form class="navbar-form pull-left">
                <input type="text" class="input-medium">
                <button class="btn btn-success" type="submit"><i class="icon-search icon-white"></i>Buscar</button>&nbsp;&nbsp;
                <button class="btn btn-success" type="button" onclick="load_frm('persona/getGridListContacBuscar')"><i class="icon-search icon-white"></i>Agregar</button>
                <!----<button class="btn btn-success" onclick="abrir_ventana('E')" id="boton_nuevo" type="button"><i class="icon-edit icon-white"></i>Editar</button>--->
                <input readonly="" name="crtlrow_grid" id="crtlrow_grid" style="width:20px;"> 
                <input type="hidden" name="pk_equipo" id="pk_equipo" style="width:25px">
            </form>
        </div>
    </div>
</div>
</div>
<div id="gridEvent">
    <table width="1000" class="table">

        <thead>

            <tr>

                <th width="37">Nro.</th>
                <th width="139">Empresa</th>

                <th width="132">Nombres</th>

                <th width="185">Correo</th>
                <th width="145">Teléfono Fijo</th>

                <th width="142">Teléfono Mobil</th>
                <TH width="105">Estado</TH>
                <TH width="79">Accion</TH>
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
               <tr id="tr_1" class="active" style="cursor:pointer;" onclick="Pintar_Tr(this.id, 'crtlrow_grid')" onmouseover="PaintMouseOver(this.id)" onmouseout="PaintMouseOut(this.id, 'crtlrow_grid')">
                 <td><?php echo "1";?></td>
                 <td>Intico</td>
                 <td>Pedro</td>
                 <td>sjsjjs@gmail.com</td>
                 <td>5441710</td>
                 <td>988730522</td>
                 <td>Activado</td>
                 <td style="text-align:center"><img src="../../public/img/eliminar-icono-9089-32.png" width="24" height="24" title="Eliminar" onclick="" /></td>
               </tr>
               <tr id="tr_2" class="active" style="cursor:pointer;" onclick="Pintar_Tr(this.id, 'crtlrow_grid')" onmouseover="PaintMouseOver(this.id)" onmouseout="PaintMouseOut(this.id, 'crtlrow_grid')">

                <td><?php echo "2";?></td>
                <td>Camones</td>

                <td>Ronald</td>

                <td>sjsjjs@hotmail.com</td>
                <td>988730522</td>

                <td>988730522</td>
                <td>Activado</td>
                <td style="text-align:center;"><img src="../../public/img/eliminar-icono-9089-32.png" width="24" height="24" title="Eliminar" onclick="" /></td>
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