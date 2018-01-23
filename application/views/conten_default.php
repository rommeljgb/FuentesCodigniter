<style>
#d1{
    width: 1000px;
    height:  700px;
    margin: 0 auto;
    position: absolute;
    
	border:1px solid #CCCCCC;


}

#d1c{
    width: 200px;
    height: 440px;
    float:left;
   background-color: #F5F5F5;
	color:#00C;
	padding-left:5px;
	margin-left:30px;
	margin-top:30px;
	border:1px solid #CCCCCC;
}

#d2c{
    width: 700px;
    height: 440px;
    margin: auto;
    float:left;
	margin-left:5px;
	margin-top:30px;
    background-color: #F5F5F5;
	border:1px solid #CCCCCC;
}

#d3c{
    width: 200px;
    height: 100px;
    float:right;
    
    background-color: orange;




}

</style>
<!------Menu------->
<div class="container" style="width: 100%;">
            <div class="navbar navbar-inverse" >
                <div class="navbar-inner">
                    <div class="container" style="width: 1000px;">
                        <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>                        
                        <div class="nav-collapse collapse navbar-responsive-collapse">
                            <ul class="nav">                                
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Mantenimientos<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                         <li class="divider"></li>
                                        <li><a href="<?php echo base_url('equipo/lista') ?>">Maestros de Equipo</a></li>                                        
                                         <li class="divider"></li>
                                         <li><a href="<?php echo base_url('tblindependientes/opciones') ?>">Tablas Independientes</a></li> 
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Procesos <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url('programacion/listar_tareo_grilla') ?>">Tareo de Maquinas</a></li>
                                        <li><a href="#">Opcion 1</a></li>
                                        <li><a href="#">Opcion 2</a></li>
                                        <li><a href="#">Opcion 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Reportes <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url('averias/lista_averias') ?>">Administrador de averias</a></li>
                                        <li><a href="#">Opcion 1</a></li>
                                        <li><a href="#">Opcion 2</a></li>
                                        <li><a href="<?php echo base_url('reporte'); ?>">Opcion 3</a></li>
                                    </ul>
                                </li>
                            </ul>
<!--                            <form action="" class="navbar-search pull-left">
                                <input type="text" placeholder="Buscar…" class="search-query">
                            </form>-->
                            <ul class="nav pull-right">
                                <li class="divider-vertical"></li>
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="<?php echo base_url('public/img/user_s.png') ?>"/>
                                        <?php //echo $this->session->userdata('email')?> <b class="caret"></b></a>

                                    <ul class="dropdown-menu">
                                        <li><a href="#">Perfil</a></li>
                                        <li><a href="#">Configuracion</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo base_url("index/logout"); ?>">Cerrar sesion</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!------Fin menu--->
<div id="d1">
        <div id="d1c">
         Es el primer PortalWeb latinoamericano orientado a incrementar y fortalecer el comercio entre nuestros países; a potenciar 
         las oportunidades de las empresas para crecer y aumentar su participación en el mercado regional
         Leer más en: http://www.rueda-negocios.com.cl
         
         Es el primer PortalWeb latinoamericano orientado a incrementar y fortalecer el comercio entre nuestros países; a potenciar 
         las oportunidades de las empresas para crecer y aumentar su participación en el mercado regional
         Leer más en: http://www.rueda-negocios.com.cl
        </div>
        <div id="d2c">
        <br />
               <div style="margin-left:30px">
                   <!---<a href="<?php //echo  base_url('index/load_view_empresa')?>" class="btn btn-primary btn-lg btn-primary" role="button">Registrarse</a>-->
                   <a href="<?php echo  base_url('persona/vregis')?>" class="btn btn-primary btn-lg btn-primary" role="button">Registro</a>          
                   <a href="<?php echo  base_url('usuario/load_vlogin')?>" class="btn btn-primary btn-lg btn-primary" role="button">Ingresar</a> 
        	   </div>
        </div>
</div> 