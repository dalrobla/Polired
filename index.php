<?php include('index_header.php'); ?>
			<?php include('dbcon.php'); ?>
    <body background="images/images.jpg" style="width:50px;height:50px">
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <div class="clr"><color="red"><div class="title"></div></div></div>
            </div><!--/ Codrops top bar -->
            <section>				
			
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                    
                        <div id="login" class="animate form">
								<?php include('login_form.php'); ?>
                                <img src="images/LogoPoli.png" style="width:100px;height:50px;">
                        </div>
                        <div id="register" class="animate form">
								<?php include('sign_up_form.php'); ?>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>