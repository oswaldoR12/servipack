function mostrar_notificacion(heading,text,icon){
//--------------------------------------------------
	$.toast({
		            heading: heading,
		            text: text,
		            position: 'top-right',
		            loaderBg:'#ff6849',
		            icon: icon,
		            hideAfter: 5000, 
		            stack: 6
		        });
//--------------------------------------------------
	desbloquear_pantalla("#div_mensaje","#btn-nuevo,#btn-limpiar,#btn-registrar,#btn-consultar");
};
//funciones de validaciones
function valida(e,s,i,l)
{   
  tecla = (document.all) ? e.keyCode : e.which; 
  if (tecla==8 || tecla==0 || tecla==13) return true;
  //Exepcion barras y barras invertidas
  if(tecla == 47 || tecla == 92) return false;
  if (s.value.length>=l) return false;
        
  if (i==0) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz]/;  // 0 Solo acepta letras
  if (i==1) patron = /[0123456789,.]/;     // 1 Solo acepta n�meros
  if (i==2) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789]/;      // 2 Acepta n�meros y letras
  if (i==3) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789��������������\s]/;
  if (i==4) patron=  /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz��������������\s]/;
  if (i==5) patron=  /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@._-]/; // Formato Correo Electronico
  if (i==6) patron=  /[ABCDEFabcdef0123456789]/;
  if (i==7) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789��������������()@:;_\-.,/\s]/;
  if (i==8) patron = /[01]/;
  if (i==9) patron = /[GJV0123456789]/; //Formato de RIF
  if (i==10)patron = /[0123456789]/;
  if (i==11)patron = /[abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_]/; 
  if (i==12)patron = /[gjveGJVE0123456789]/;  //RIF
  if (i==13) patron = /[0123456789.,+-\s]/; 
  if (i==14) patron=  /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789._-]/; // Formato Nick Correo Electronico
  if (i==15) patron=  /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz@.]/; // Formato direccion manual Correo Electronico
  if (i==16) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzáéíóúÁÉÍÓÚ\w]/;  // 0 Solo acepta letras y comas
  if (i==17) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789\s,.]/; // Acepta n�meros, letras, espacios ,.
  if (i==18) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz\wáéíóúÁÉÍÓÚñÑ0123456789.,;()+-_=#*?¿{}$!\s]/; // Acepta n�meros, letras, espacios ,.
  if (i==19) patron=  /[A-Za-zñÑ'áéíóúÁÉÍÓÚàèìòùÀÈÌÒÙâêîôûÂÊÎÔÛÑñäëïöüÄËÏÖÜ\s\t]/; 
  if (i==20) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789*.,;%()+-_=?¿{}$!]/; // Acepta clave para el ldap
  if (i==21) patron = /[+0123456789.()]/;
  if (i==22) patron=  /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789;_\-.,\s]/; // Formato de url de red social
  if (i==23) patron = /[-0123456789.]/;     // 1 Solo acepta n�meros y .

  te = String.fromCharCode(tecla);
  return patron.test(te);
} 

function valida2(s,i,l){

	  if (i==0) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz]/;  // 0 Solo acepta letras
	  if (i==1) patron = /[0123456789,.%]/;     // 1 Solo acepta n�meros
	  if (i==2) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789]/;      // 2 Acepta n�meros y letras
	  if (i==3) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789��������������\s]/;
	  if (i==4) patron=  /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz��������������\s]/;
	  if (i==5) patron=  /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@._-]/;
	  if (i==6) patron=  /[ABCDEFabcdef0123456789]/;
	  if (i==7) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789��������������()@:;_\-.,/\s]/;
	  if (i==8) patron = /[01]/;
	  if (i==9) patron = /[GJV0123456789]/;
	  if (i==10)patron = /[0123456789]/;
	  if (i==11)patron = /[abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_]/;   
	  if (i==12)patron = /[gjveGJVE0123456789]/;  //RIF
	  if (i==13) patron = /[0123456789.,+-\s]/; 
	  if (i==14) patron=  /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789._-]/; // Formato Nick Correo Electronico
	  if (i==15) patron=  /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz@.]/; // Formato direccion manual Correo Electronico
	  if (i==16) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz]/;  // 0 Solo acepta letras y comas
	  if (i==17) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789\s,.]/; // 2 Acepta n�meros, letras, espacios ,.
	  if (i==18) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz\wáéíóúÁÉÍÓÚñÑ0123456789.,;()+-_=#*?¿{}$!\s]/; // Acepta n�meros, letras, espacios ,.
	  if (i==19) patron=  /[A-Za-zñÑ'áéíóúÁÉÍÓÚàèìòùÀÈÌÒÙâêîôûÂÊÎÔÛÑñäëïöüÄËÏÖÜ\s]/;
	  if (i==20) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789*.,;%()+-_=?¿{}$!]/; // Acepta clave para el ldap
	  if (i==21) patron = /[+0123456789.()]/;
	  if (i==22) patron=  /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789;_\-.,/\s]/; // Formato de url red social
	  if (i==23) patron = /[-0123456789.]/;     // 1 Solo acepta n�meros y .

	  r="";
	  ll=0;
	  for (i=0;i<s.value.length;i++)
	  {
	    if (patron.test(s.value.charAt(i)))
	    {
	      r=r+s.value.charAt(i);
	      ll++;
	      if (ll==l) break;
	    }
	  }
	  
	  return s.value=r;
}
		
//---para uploader de la página
function uploader_reg(campo,campos_bloquear)
{
	  //alert(campo)
	  $(campo).css({"display":"block"});
	  $(campo).removeClass("alert alert-danger").removeClass("alert alert-success").addClass("alert alert-info alert-rounded mensaje_load");
	  $(campo).html("");
	  $(campo).html("<div class='alert-rounded'><i class='fa fa-spinner fa-pulse'></i> Por favor espere unos segundos mientras se ejecuta el proceso</div>");
	  if(campos_bloquear!=""){
	      bloquear_pantalla(campos_bloquear);
	  }
}
//--para preloader
function preloader_proceso(campo,campo2){
	$(campo).css({"display":"block"});
	$(campo).removeClass("alert alert-danger").removeClass("alert alert-success").addClass("alert alert-info alert-rounded mensaje_load");
	$(campo).html("");
	$(campo2).addClass("hide");
	$(campo).html("<div class='alert-rounded'><i class='fa fa-spinner fa-pulse'></i> Por favor espere unos segundos</div>");
	setTimeout(function(){
		$(campo2).removeClass("hide");
		$(campo).css({"display":"none"});
	},5000)
}	
function quitar_preloader_proceso(campo){
	$(campo).css({"display":"none"});
}	
//--Bloqueo campos de la pantalla
function bloquear_pantalla(campos){
	  $(campos).attr("disabled","disabled");
}

//--Debloqueo de campos de la pantalla
function desbloquear_pantalla(campo_mensaje,campos){
	  $(campos).prop("disabled",false);
	  $(campo_mensaje).html("");
	  $(campo_mensaje).removeClass("alert alert-info").removeClass("alert alert-danger").removeClass("alert alert-success mensaje_load");
}

//--Validar un objeto vacio
function isEmpty(obj) {
    for(var key in obj) {
        if(obj.hasOwnProperty(key))
            return false;
    }
    return true;
}
//-Validar de correo
function correo(campo)
{
  var exr = /^\w+[a-z_0-9\-\.]+@\w+[0-9a-z\-\.]+\.[a-z]{2,4}$/i;
    if(!(exr.test(campo.value))){
	      campo.value="";
	      mostrar_notificacion("Campos no validos","Debe ingresar una dirección de correo v&aacute;lida: xxxxxxxxxxxxxx@host.com","warning");
    }
}
/*
*  Funcion para agregar options a los selects
*/
function agregarOptions(select, value, text){
    
    $(select).append($('<option>', { 
        value: value,
        text : text
    }));
    
    if(select=="#tipo_prod")
    	alert(select)
    //$(select + ' :nth-child(2)').prop('selected', true);
}
/***/
/*
    Funcion para limpiar los selects
*/
function eliminarOptions(select){
    $('#' + select).children('option:not(:first)').remove();
}
/***/
function bloquearForm(arreglo,mensaje){

}
/***/
