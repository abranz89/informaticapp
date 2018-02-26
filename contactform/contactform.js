
jQuery(document).ready(function($) {
"use strict";

    //Contact
    $('form.contactForm').submit(function(){

        var f = $(this).find('.form-group'), 
        ferror = false, 
        emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

        f.children('input').each(function(){ // run all inputs

            var i = $(this); // current input
            var rule = i.attr('data-rule');

            if( rule !== undefined ){
            var ierror=false; // error flag for current input
            var pos = rule.indexOf( ':', 0 );
            if( pos >= 0 ){
                var exp = rule.substr( pos+1, rule.length );
                rule = rule.substr(0, pos);
            }else{
                rule = rule.substr( pos+1, rule.length );
            }
            
            switch( rule ){
                case 'required':
                if( i.val()==='' ){ ferror=ierror=true; }
                break;
                
                case 'minlen':
                if( i.val().length<parseInt(exp) ){ ferror=ierror=true; }
                break;

                case 'email':
                if( !emailExp.test(i.val()) ){ ferror=ierror=true; }
                break;

                case 'checked':
                if( !i.attr('checked') ){ ferror=ierror=true; }
                break;
                
                case 'regexp':
                exp = new RegExp(exp);
                if( !exp.test(i.val()) ){ ferror=ierror=true; }
                break;
            }
                i.next('.validation').html( ( ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '' ) ).show('blind');
            }
        });
        f.children('textarea').each(function(){ // run all inputs

            var i = $(this); // current input
            var rule = i.attr('data-rule');

            if( rule !== undefined ){
            var ierror=false; // error flag for current input
            var pos = rule.indexOf( ':', 0 );
            if( pos >= 0 ){
                var exp = rule.substr( pos+1, rule.length );
                rule = rule.substr(0, pos);
            }else{
                rule = rule.substr( pos+1, rule.length );
            }
            
            switch( rule ){
                case 'required':
                if( i.val()==='' ){ ferror=ierror=true; }
                break;
                
                case 'minlen':
                if( i.val().length<parseInt(exp) ){ ferror=ierror=true; }
                break;
            }
                i.next('.validation').html( ( ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '' ) ).show('blind');
            }
        });
        if( ferror ) return false; 
        else var str = $(this).serialize();		
            $.ajax({
                type: "POST",
                url: "contactform/contactform.php",
                data: str,
                success: function(msg){
                   // alert(msg);
                    if(msg == 'OK') {
                        $("#sendmessage").addClass("show");			
                        $("#errormessage").removeClass("show");	
                    }
                    else {
                        $("#sendmessage").removeClass("show");
                        $("#errormessage").addClass("show");
                        $('#errormessage').html(msg);
                    }
                    
                }
            });
        return false;
    });


    $('form.register-form').submit(function(){
    var str = $(this).serialize();

    var clave1 = document.getElementById("password").value;
    var clave2 = document.getElementById("password_confirmation").value;

    if(clave1 == clave2)
    {
        
        document.getElementById('password').style.borderColor="#5cb85c";
        document.getElementById('password_confirmation').style.borderColor="#5cb85c";
       // $("#msgerror").html("");
        
        if($("#t_and_c").is(':checked'))
         {
            $.ajax({
                    type: "POST",
                    url: "controlador/clientes/registrar.php",
                    data: str,
                    success: function(msg){
                        if(msg == 'OK') {
                            //alert("Insertado correctamente");
                            window.location = "confirmacion.php";
                        }
                        else if(msg == "1062")
                        {
                             $('.validation').html("El correo electrónico ya ha sido registrado").show('blind');
                              var strAncla = '.' + "validation";
                             $('html,body').animate({scrollTop: $(strAncla).offset().top}, 2000);
                             grecaptcha.reset();
                        }
                        else {
                            //alert(msg);
                             $('.validation').html("Debe hacer click en no soy un robot").show('blind');
                              var strAncla = '.' + "validation";
                             $('html,body').animate({scrollTop: $(strAncla).offset().top}, 2000);
                             grecaptcha.reset();
                        }
                        
                    }
                }); 
                return false;
         }
         else
         {
            //alert("no seleccionado");
            $('.validation').html("Debe aceptar nuestros terminos y condiciones").show('blind');
            var strAncla = '.' + "validation";
            $('html,body').animate({scrollTop: $(strAncla).offset().top}, 2000);
            return false;
           
         }
    }
    else
    {
        document.getElementById('password') .style.borderColor="#d9534f";
        document.getElementById('password_confirmation') .style.borderColor="#d9534f";
        //$("#msgerror").html("Las claves no coinciden");
         $('.validation').html("Las claves no coinciden").show('blind');
                              var strAncla = '.' + "validation";
                             $('html,body').animate({scrollTop: $(strAncla).offset().top}, 2000);
        return false;
    }   
       
  });


   $('form.login-form').submit(function(){
         var str = $(this).serialize();
        $.ajax({
                    type: "POST",
                    url: "controlador/clientes/iniciar_sesion.php",
                    data: str,
                    success: function(msg){
                       // alert(msg);
                        if(msg == 'OK') {
                            window.location= "index.php";
                        }
                        else if(msg == 'ESTADO')
                        {
                             $('.validation').html("No ha validado su cuenta a través del correo electrónico").show('blind');
                        }
                        else {
                            //alert(msg);
                             $('.validation').html("Correo electronico o contraseña incorrecta").show('blind');
                        
                        }
                        
                    }
                }); 
                return false;
   });

});