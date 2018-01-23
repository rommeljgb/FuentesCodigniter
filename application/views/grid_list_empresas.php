<div style="font-weight:bold; color:#009;">Mis Empresas</div>
<div class="container" style="padding: 5px;margin-top: 10px;" >
    <div class="bs-example">
    <div class="navbar">
        <div class="navbar-inner" style="">
            <form class="navbar-form pull-left">
              <button class="btn btn-success" onclick="load_frm_general('empresa/getEmpresa', '');" id="boton_nuevo" type="button"><i class="icon-plus icon-white"></i><!---->Nuevo</button>&nbsp;&nbsp;                
              <input type="text" name="crtlrow_grid" id="crtlrow_grid" style="width:20px">
                              
          </form>
        </div>
    </div>
</div>
</div>
<div id="gridEvent">
    <table width="1150" class="table">

        <thead>

            <tr>

                <th width="31">Nro.</th>
                <th width="121">Rut</th>

                <th width="207">Razon social</th>

                <th width="99">Teléfono</th>
                <th width="160">WebSite</th>

                <th width="119">Email</th>
                <th width="150">GiroComercial</th>
                <TH width="142">Rubro</TH>
                <TH width="81">Acciones</TH>
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
                     <td><?php echo $row->rut;?></td>
                     <td><?php echo $row->razon_social;?></td>
                     <td><?php echo $row->telefono;?></td>
                     <td><?php echo $row->website;?></td>
                     <td><?php echo $row->email;?></td>
                     <td><?php echo $row->giro_comercial;?></td>
                     <td><?php echo $row->nombre_rubro;?></td>
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