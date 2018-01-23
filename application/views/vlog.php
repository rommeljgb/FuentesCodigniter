
<!--Pulling Awesome Font -->
<style>
    @import url(http://fonts.googleapis.com/css?family=Roboto:400);
body {
  background-color:#fff;
  -webkit-font-smoothing: antialiased;
  font: normal 14px Roboto,arial,sans-serif;
}

.container {
    padding: 25px;
    position: fixed;
    width: 350px;
}

.form-login {
    background-color: #EDEDED;
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    box-shadow:0 1px 0 #cfcfcf;
}

h4 { 
 border:0 solid #fff; 
 border-bottom-width:1px;
 padding-bottom:10px;
 text-align: center;
}

.form-control {
    border-radius: 10px;
}

.wrapper {
    text-align: center;
}
</style>
<div style="margin-left: 35%;margin-right: 50%;margin-top: 150px;">
    <form method="post" name="frmlog" id="frmlog">
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">
            <h4>Bienvenido.</h4>
            <input type="text" name="userName" id="userName" class="form-control input-sm chat-input" placeholder="username" />
            </br>
            <input type="password"  id="userPassword" class="form-control input-sm chat-input" placeholder="password" />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
                <a href="#" class="btn btn-primary btn-md" onclick="autentificacion_user()">Login<i class="fa fa-sign-in"></i></a>
            </span>
            </div>
            </div>        
        </div>
    </div>
  </form>
</div>
</div>


<br><br>
    <div id="">
 <a href="<?php echo  base_url('index/index')?>" class="btn btn-primary btn-lg btn-primary" role="button">Retornar al Inicio</a><br><br>    
</div>