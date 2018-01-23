<div style="font-weight:bold; color:#009;"><table border="0" width="100%"><tr><td>Buscar Contactos</td><td style="text-align: right"><img src="../../public/img/back.png"  onclick="load_frm('persona/getGridListContac');" style="cursor:pointer;" width="30" height="30 title="Retornar" /></td></tr></table></div>
<div class="container" style="padding: 5px;margin-top: 10px;" >
    <div class="bs-example">
    <div class="navbar">
        <div class="navbar-inner" style="">
            <form class="navbar-form pull-left">
                <input type="text" class="input-medium">
                <button class="btn btn-success" type="submit"><i class="icon-search icon-white"></i>Buscar</button>
                &nbsp;<button class="btn btn-success" type="button" onclick="load_frm('persona/getGridListContac');"><i class="icon-search icon-white"></i>Retornar</button>
                
                <!----<button class="btn btn-success" onclick="abrir_ventana('E')" id="boton_nuevo" type="button"><i class="icon-edit icon-white"></i>Editar</button>--->
                <input type="hidden" name="crtlrow_g" id="crtlrow_g" style="width:20px">
                <input type="hidden" name="pk_equipo" id="pk_equipo" style="width:25px">
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

                <th>NombreContacto</th>

                <th>Telef.Fijo</th>
                <TH>Telef.Mobil</TH>
                <th style="text-align:center">Acciones</th>
            </tr>

        </thead>

        <tbody>
            
            <?php 
			$i = 0;
		    $y=0;
				

				
			/*foreach($rows as  $row){
						$i++;
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
               <tr class="info" style="cursor:pointer;">
                 <td>1</td>
                 <td>Camones S.A</td>
                 <td>Leonard</td>
                 <td>2763154</td>
                 <td>988965244</td>
                 <td style="text-align:center"><a href="#" onclick="load_grid_lista_reunion('<?php //echo $row->id_rueda_negocio;?>');">Invitar</a></td>
               </tr>
               <tr class="warning" style="cursor:pointer;">

                <td>2</td>

                <td>Intico Chile</td>

                <td>Jose Soto</td>

                <td>2763154</td>
                <td>988965244</td>
                <td style="text-align:center"><a href="#" onclick="load_grid_lista_reunion('<?php //echo $row->id_rueda_negocio;?>');">Invitar</a></td>

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