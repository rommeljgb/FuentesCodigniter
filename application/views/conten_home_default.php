<style>
#d1{
    width: 1190px;
    height:  600px;
    margin: 0 auto;
    position: absolute;
	margin-top:30px;
	margin-left:5%;
    
	border:1px solid #CCCCCC;


}
#dhead{
	position:relative;
	 width:100%;
	 margin:auto 0px;
	 margin-left:0px;	
	 height:50px;
	}

#d1c{
    width: 390px;
    height: 500px;
    float:left;
   background-color: #F5F5F5;
	color:#00C;
	padding-left:5px;
	margin-left:40px;
	margin-top:30px;
	border:1px solid #CCCCCC;
}

#d2c{
    width: 700px;
    height: 500px;
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

 .bs-example{
    	margin: 20px;
    }
</style>
<div id="d1">
   <div id="dhead" >
   			   <div style="margin-left:45%; position:relative;height:48px;">
               <form method="post" name="frmlog" id="frmlog">
                     <table>
                     <tr>
                     <td>
                             <label for="" style="font-weight:bold;">Correo</label>
                     </td>
                     <td>
                      <input type="text" name="userName" id="userName" class="form-control input-sm chat-input" placeholder="@" style="width:150px;height:18px;font-size:12px;margin-top:5px;font-weight:bold;"/>
                     </td>
                     <td>
                    <label for="" style="font-weight:bold;">Clave</label>
                     </td>
                     <td>
                       <input type="password"  id="userPassword" class="form-control input-sm chat-input" placeholder="Clave" style="width:150px;height:18px;margin-top:5px;" />
                     </td>
               	     <td> &nbsp;&nbsp;
                           <span class="group-btn">     
                <a href="#" class="btn btn-primary btn-md" onclick="autentificacion_user()">Acceder<i class="fa fa-sign-in"></i></a>
                                    
                           <!---<a href="<?php //echo  base_url('usuario/load_vlogin')?>" class="btn btn-primary btn-lg btn-primary" role="button" style="margin-top:1px;">Ingresar</a> &nbsp;-->
                           <a href="<?php echo  base_url('persona/vregis')?>" class="btn btn-primary btn-lg btn-primary" role="button" style="margin-top:1px;">Registrarme</a>
                             <!---<a href="<?php //echo  base_url('index/load_view_empresa')?>" class="btn btn-primary btn-lg btn-primary" role="button">Registrarse</a>-->
        	   		</span>
                    </td>
                    </tr>
                    </table>
                    </form>
               </div>
               <div style="position:relative;padding-top:2px;margin-left:75%">
                <a href="#"> Te olvidaste tu clave ? </a>
               </div>
   </div>
          <div>
        <div id="d1c">
         Es el primer PortalWeb latinoamericano orientado a incrementar y fortalecer el comercio entre nuestros países; a potenciar 
         las oportunidades de las empresas para crecer y aumentar su participación en el mercado regional
         Leer más en: http://www.rueda-negocios.com.cl
         
         Es el primer PortalWeb latinoamericano orientado a incrementar y fortalecer el comercio entre nuestros países; a potenciar 
         las oportunidades de las empresas para crecer y aumentar su participación en el mercado regional
         Leer más en: http://www.rueda-negocios.com.cl<br />
         Es el primer PortalWeb latinoamericano orientado a incrementar y fortalecer el comercio entre nuestros países; a potenciar 
         las oportunidades de las empresas para crecer y aumentar su participación en el mercado regional
         Leer más en: http://www.rueda-negocios.com.cl
         <br />
         Es el primer PortalWeb latinoamericano orientado a incrementar y fortalecer el comercio entre nuestros países; a potenciar 
         las oportunidades de las empresas para crecer y aumentar su participación en el mercado regional
         Leer más en: http://www.rueda-negocios.com.cl
        </div>
        <div id="d2c">
        	<div id="DivEvento">
          		<!----Inicio--->
                <div class="bs-example">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. Gran evento 1 !</a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="http://www.tutorialrepublic.com/html-tutorial/" target="_blank">Inscribirse.</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2.  Gran evento 2 !</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="http://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Inscribirse.</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3.  Gran evento 3 !?</a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="http://www.tutorialrepublic.com/css-tutorial/" target="_blank">Inscribirse.</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                 </div>
                <!---fin acorodion -->
          	</div>               
        </div>
        </div>
</div> >