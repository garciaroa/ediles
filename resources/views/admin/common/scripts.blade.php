<script src="{!! asset('resources/views/admin/plugins/jQuery/jQuery-2.2.0.min.js') !!}"></script>
<script src="{!! asset('resources/views/admin/bootstrap/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('resources/views/admin/plugins/select2/select2.full.min.js') !!}"></script>

<!-- InputMask -->
<script src="{!! asset('resources/views/admin/plugins/input-mask/jquery.inputmask.js') !!}"></script>
<script src="{!! asset('resources/views/admin/plugins/input-mask/jquery.inputmask.date.extensions.js') !!}"></script>
<script src="{!! asset('resources/views/admin/plugins/input-mask/jquery.inputmask.extensions.js') !!}"></script>

<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{!! asset('resources/views/admin/plugins/daterangepicker/daterangepicker.js') !!}"></script>


<!-- bootstrap datepicker -->
<script src="{!! asset('resources/views/admin/plugins/datepicker/bootstrap-datepicker.js') !!}"></script>

<!-- bootstrap color picker -->
<script src="{!! asset('resources/views/admin/plugins/colorpicker/bootstrap-colorpicker.min.js') !!}"></script>
<!-- bootstrap time picker -->
<script src="{!! asset('resources/views/admin/plugins/timepicker/bootstrap-timepicker.min.js') !!}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{!! asset('resources/views/admin/plugins/slimScroll/jquery.slimscroll.min.js') !!}"></script>
<!-- iCheck 1.0.1 -->
<script src="{!! asset('resources/views/admin/plugins/iCheck/icheck.min.js') !!}"></script>
<!-- FastClick -->
<script src="{!! asset('resources/views/admin/plugins/fastclick/fastclick.js') !!}"></script>
<!-- AdminLTE App -->
<script src="{!! asset('resources/views/admin/dist/js/app.min.js') !!}"></script>
@if(Request::path() == 'admin/dashboard/last_year' or Request::path() == 'admin/dashboard/last_month' or Request::path() == 'admin/dashboard/this_month')
    <!--<script src="{!! asset('resources/views/admin/dist/js/pages/dashboard.js') !!}"></script>-->
@endif
<!-- AdminLTE for demo purposes -->
<script src="{!! asset('resources/views/admin/js/demo.js') !!}"></script>

<script src="{!! asset('resources/views/admin/plugins/chartjs/Chart.min.js') !!}"></script>
<script src="{!! asset('resources/views/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}"></script>
<script src="{!! asset('resources/views/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}"></script>
<script src="{!! asset('resources/views/admin/plugins/sparkline/jquery.sparkline.min.js') !!}"></script>

<script src="{!! asset('resources/views/admin/plugins/sparkline/jquery.sparkline.min.js') !!}"></script>

<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{!! asset('resources/views/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}"></script>

<!-- firebase-->
<!-- script src="https://www.gstatic.com/firebasejs/5.0.4/firebase.js"></script -->
<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-database.js"></script>

<!-- Page script -->

<?php
/*date_default_timezone_set("UTC");*/
//$c_time = date('M d Y',time());
//$date = $c_time.' 11:59:59 PM';
//$exp_date = strtotime($date);
//$now = time();
//
///*print(date('M d Y H:i:s',$exp_date))."<br>";
//print(date('M d Y H:i:s',$now))."<br>";*/
//if ($now < $exp_date) {
//?>
<script>
// Count down milliseconds = server_end - server_now = client_end - client_now
//var server_end = <!--<?php //echo $exp_date; ?>--> * 1000;
//var server_now = <!--<?php //echo time(); ?>--> * 1000;
//var client_now = new Date().getTime();
//var end = server_end - server_now + client_now; // this is the real end time
//
//var _second = 1000;
//var _minute = _second * 60;
//var _hour = _minute * 60;
//var _day = _hour *24
//var timer;
//
//function showRemaining()
//{
//    var now = new Date();
//    var distance = end - now;
//    if (distance < 0 ) {
//       clearInterval( timer );
//       document.getElementById('countdown').innerHTML = 'EXPIRED!';
//
//       return;
//    }
//    var days = Math.floor(distance / _day);
//    var hours = Math.floor( (distance % _day ) / _hour );
//    var minutes = Math.floor( (distance % _hour) / _minute );
//    var seconds = Math.floor( (distance % _minute) / _second );
//
//    var countdown = document.getElementById('countdown');
//    countdown.innerHTML = '';
//    if (days) {
//        countdown.innerHTML += 'Days: ' + days + ' ';
//    }
//    countdown.innerHTML += 'Demo will be reset automatically after: ' + hours;
//    countdown.innerHTML +=  ':'+minutes;
//    countdown.innerHTML +=  ':'+seconds;
//}
//
//timer = setInterval(showRemaining, 1000);
//</script>
<?php
//} else {
//    echo "Times Up";
//}
//?>




<script type="text/javascript">

$(document).ready(function () {
//inicializar();
$.ajaxSetup({
    headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
    }
});
	
	$(function () {
	
		//Initialize Select2 Elements
		$(".select2").select2();
	
		//Datemask dd/mm/yyyy
		$("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
		//Datemask2 mm/dd/yyyy
		$("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
		//Money Euro
		$("[data-mask]").inputmask();
	
		//Date range picker
		$('.reservation').daterangepicker();
		//Date range picker with time picker
		$('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
		//Date range as a button
	/*    $('#daterange-btn').daterangepicker(
			{
			  ranges: {
				'Today': [moment(), moment()],
				'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
				'Last 7 Days': [moment().subtract(6, 'days'), moment()],
				'Last 30 Days': [moment().subtract(29, 'days'), moment()],
				'This Month': [moment().startOf('month'), moment().endOf('month')],
				'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
			  },
			  startDate: moment().subtract(29, 'days'),
			  endDate: moment()
			},
			function (start, end) {
			  $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
			}
		);*/
	
		//Date picker
		$('#datepicker').datepicker({
		  autoclose: true
		});
	
		//iCheck for checkbox and radio inputs
		$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
		  checkboxClass: 'icheckbox_minimal-blue',
		  radioClass: 'iradio_minimal-blue'
		});
		//Red color scheme for iCheck
		$('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
		  checkboxClass: 'icheckbox_minimal-red',
		  radioClass: 'iradio_minimal-red'
		});
		//Flat red color scheme for iCheck
		$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
		  checkboxClass: 'icheckbox_flat-green',
		  radioClass: 'iradio_flat-green'
		});
	
		//Colorpicker
		$(".my-colorpicker1").colorpicker();
		//color picker with addon
		$(".my-colorpicker2").colorpicker();
	
		//Timepicker
		$(".timepicker").timepicker({
		  showInputs: false
		});
	  });


$(document).on('click', '.checkboxess', function(e){
      checked = $("input[type=checkbox]:checked.checkboxess").length;
		//console.log(checked);
		 //return false;
      if(!checked) {
        //alert("You must check at least one checkbox.");
        return false;
      }

});


///////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////Toda la configuracion de precarga nuevo cliente////////////////////////
 //getSedesPrecarga
$(document).on('change', '#id_school', function(e){
  
   
   var id_school = $(this).val();
  // alert(id_school);
    if(id_school != ""){	
	    $.ajax({
	    url: "{{ URL::to('admin/getSedesPrecarga')}}",
	    dataType: 'json',
	    type: "get",
	    data: '&id_school='+id_school,
	    success: function(data){
	  console.log(data);
		    if(data.length>0){
			    var i;
			    var showData = [];
			    showData[0] = "<option value='' selected>Seleccione</option>"; 
			    for (i = 0; i < data.length; i++) {
				    showData[(i+1)] = "<option value='"+data[i].id_sede+"'>"+data[i].nombre_sede+"</option>"; 
	
			    }
			
		    }
	        //showData[i]  =  "<option value='' selected>Seleccione Escolaridad</option>";
			$("#selectSede_preCarga").html(showData);
			$("#selectSede_preCarga").addClass('field-validate');
			$("#divSede_preCarga").css('display','block');
			
	    }
	    });
	
    }
    else{
        $("#selectSede_preCarga").html("");    
        $("#selectSede_preCarga").removeClass('form-validate');
        $("#divSede_preCarga").css('display','none');  
  
    }
});


////////////////////////////Toda la configuracion de precarga nuevo cliente////////////////////////


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////// Todo control school desde aqui y /////////////////////////////////////////////////////

 $('#addNewStudentForm').load(function() {
    $("#addNewStudentForm")[0].reset(); //ShowMe("¡Procesando su reserva!, favor espere un momento.");
  });

/////////////////////////desde aqui addStudents salud-institucion///////////////////////////////
/// Escolaridad
$(document).on('change', '.sede', function(e){

	var sede_id = $(this).val();
	
if(sede_id != ""){	
	$.ajax({
	  url: "{{ URL::to('admin/schoolEscolaridad')}}",
	  dataType: 'json',
	  type: "post",
	  data: '&sede_id='+sede_id,
	  success: function(result){
	    var showData        =   [];
	    var DataEscolaridad =   [];
	    
	    showData[0]        = "<option value='' selected>Sin Resultados</option>";
        DataEscolaridad[0] = "<option value='' selected>Sin Resultados</option>";
	    
		if(result.length>0){
			var i;
			
			var data        =   result[0];
			var escolaridad =   result[1];
			
			for (i = 0; i < data.length; i++) {
		
				showData[i] = "<option value='"+data[i].id_jornada+"'>"+data[i].nombre_jornada+"</option>"; 
			}
			showData[i] = "<option value='' selected>Seleccione</option>"; 
			
			for (i = 0; i < escolaridad.length; i++) {
		
				DataEscolaridad[i] = "<option value='"+escolaridad[i].id_escolaridad+"'>"+escolaridad[i].nombre+"</option>"; 
			}
			DataEscolaridad[i] = "<option value='' selected>Seleccione</option>"; 
		}
		
			$("#jornada_alumno_id").html(showData);
			$("#jornada_alumno_id").addClass('field-validate');
			$("#divSelectJornada").css('display','block');
			
			$("#escolaridad_alumnos_id").html(DataEscolaridad);
			$("#escolaridad_alumnos_id").addClass('field-validate');
			$("#divSelectEscolaridad_alumnos_id").css('display','block');
			
			$("#divSelectGrado_alumno_id").css('display','none');
	  }
	});
	
}
else{
  $("#jornada_alumno_id").html("<option value='' selected>Seleccione Escolaridad</option>");    
  $("#jornada_alumno_id").removeClass('form-validate');
  $("#divSelectJornada").css('display','none'); 
  
  $("#escolaridad_alumnos_id").html("<option value='' selected>Seleccione Escolaridad</option>");    
  $("#escolaridad_alumnos_id").removeClass('form-validate');
  $("#divSelectEscolaridad_alumnos_id").css('display','none'); 
  
  
  
  
  
  	$("#divSelectGrado_alumno_id").css('display','none');
}
	
});


/// Grados
$(document).on('change', '#escolaridad_alumnos_id', function(e){
    e.preventDefault();

/*	var datos           = {
	                        id_sede         : sede_id,
	                        id_escolaridad  :   escolaridad_id
	                    }
 //   alert(escolaridad_id);
    if(escolaridad_id != ""){	
	    
	    $.ajax({
	    url: "{{ URL::to('admin/schoolGrados')}}",
	    dataType: 'json',
	    type: "post",
	    data: datos,//'&sede_id='+sede_id,
	    success: function(data){
	
		if(data.length>0){
			var i;
			var showData = [];
			showData[0] = "<option value='' selected>Seleccione</option>"; 
			$x=1;
			for (i = 0; i < data.length; i++) {
			    if(data[i] != ""){
				 showData[$x] = "<option value='"+data[i]+"'>"+data[i]+"</option>"; 
				 $x++;
			    }
			}
			
		}
		$("#divSelectGrado_alumno_id").css('display','block');
		$("#grado_alumno_id").html(showData);
		$("#grado_alumno_id").addClass('field-validate');
	        //showData[i]  =  "<option value='' selected>Seleccione Escolaridad</option>";
		/*	$("#escolaridad_alumno_id").html(showData);
			$("#escolaridad_alumno_id").addClass('field-validate');
			$("#divSelectEscolaridad_alumno_id").css('display','block');
			$("#divSelectGrado_alumno_id").css('display','none');* /
	  }
	});
	
}
else{
 /* $("#escolaridad_alumno_id").html("<option value='' selected>Seleccione Escolaridad</option>");    
  $("#escolaridad_alumno_id").removeClass('form-validate');
  $("#divSelectEscolaridad_alumno_id").css('display','none');  * /
  
  	$("#divSelectGrado_alumno_id").css('display','none');
}
*/

	var sede_id         = $("#sede_id").val();
	var escolaridad_id  = $(this).val();

    if(escolaridad_id == ""){
        $("#divSelectGrado_alumno_id").css("display","none");
        $("#divCursoAlumno").css("display","none");
    }
    else
    if(escolaridad_id == 1){
       $("#divCursoAlumno").css("display","block");
       $("#divSelectGrado_alumno_id").css("display","none");
       //$("#divSelectGrado_alumno_id").removeClass("");
       
    }
    else{
        $("#divCursoAlumno").css("display","none");
        $("#divSelectGrado_alumno_id").css("display","block");
        
    }
    
    $('#curso_alumno_id').prop('selectedIndex',0);
        $('#grado_alumno_id').prop('selectedIndex',0);
     
	
});


$(document).on('change','#grado_alumno_id',function(e){
    
    var grado = $(this).val();
    if( grado != "" )
        $('#divCursoAlumno').css('display','block');
    else{
        $('#divCursoAlumno').css('display','none');
        $('#curso_alumno_id').prop('selectedIndex',0);
        $('#grado_alumno_id').prop('selectedIndex',0);
        
    }    
        
});

///////////////////Envio de hermanos/////////////////////////////

$(".deleteHermanoId").on("click",function(e){
    e.preventDefault();
    
   	var id_pre_registro = $(this).attr('hermano_id');

	$.ajax({
	  url: "{{ URL::to('admin/deleteBrother')}}",
	  dataType: 'json',
	  type: "post",
	  data: '&brother_id='+id_pre_registro,
	  success: function(data){
	   
	   //console.log(data);
		if(data > 0){
		    var tr  =   "#"+data;
		    $("#brothers "+tr).html();
		    $("#brothers "+tr).remove();
		}
		   
	  }
	});
	
});


///////////////////Envio de hermanos/////////////////////////////

$("#id_brother").on("click",function(){
  //  alert("sdsd");
   $('#formAddBrothers').submit(); 
});

////////////////////////hasta aqui addStudents salud-institucion

$(document).on('click','#codigo-Modal',function(){
    
   $('#codigoModal').modal('show'); 
});

/////////modal filtro llegadas tarde///////////
$(document).on('click', '#filtro-Modal', function(e){
     $("#listarLlegadaTardeFiltro")[0].reset(); 
});

$("#filtroModal").on("hidden.bs.modal", function () {
     
    $("#filtroModal select").each(function(){
        
        div = "#"+$(this).attr("data-div");
        $(this).prop('required',false);
        $(div).css('display','none');
        
   });
   
   
});
//$( "span" ).text( "Not valid!" ).show().fadeOut( 1000 ); es un recurso de retardar el mensaje 1 segundo
//$(document).on('submit', '.llegadasTarde', function(e){listarLlegadaTardeFiltro
//$(document).on('submit', '#listarLlegadaTardeFiltro', function(e){
   $("#listarLlegadaTardeFiltro").submit(function(e){//aqui se interrumpe el envio de datos del llegadas tarde y se recopila todos los valores se agregan a un input y se sigue con el reenvion del formulario
     //alert("si4");
     // e.preventDefault();
      var valorSelect="";
      var valueSelect="";
      $("#resumenSelect").val("");
      $("#valoresSelect").val("");
        $("#listarLlegadaTardeFiltro select").each(function(){
        
            var idSelect    = "#"+$(this).attr("id");
            valorSelect  = valorSelect+"/"+$(idSelect+" option:selected").text();
            valueSelect  = valueSelect+"/"+$(idSelect+" option:selected").val();
            
        
        });
         $("#resumenSelect").val(valorSelect);
         $("#valoresSelect").val(valueSelect);
 
       
        $("#filtroModal").modal("hide");
        $("#filtroModal select").each(function(){
        
             div = "#"+$(this).attr("data-div");
             $(this).prop('required',false);
             $(div).css('display','none');
        
        });
        
                return;

});

$( "input:checkbox.llegadas" ).on( "change", function(e) {
    e.preventdefault;
    valCheckbox = $(this).val();
    input_x  = "#"+valCheckbox+"-filtro";
    id_input = "#id_"+valCheckbox;
    id_sedes = $("#id_sedes") .val();
    
    
    if ( $( this ).is( ":checked" ) ){
        
              let data= '&filtro_id='+valCheckbox+'_school&sede='+id_sedes;
              traerFiltro(data);
             
    }
    else
        if (! $( this ).is( ":checked" ) ){
           
           $(input_x).css('display','none');
           $(id_input).prop('required',false);
            
        }
    
    
});



$(document).on('change','#id_sedes',function(){
    
   
   $("#listarLlegadaTardeFiltro input[type=checkbox].llegadas").prop('checked', false);
    $("#filtroModal select").each(function(){
        
        div = "#"+$(this).attr("data-div");
        $(this).prop('required',false);
        $(div).css('display','none');
        
   });
   
});

$(document).on('click','#filtro-Modal',function(){
    
   $('#filtroModal').modal('show'); 
});
/*
$(document).on('change','#listarLlegadaTardeFiltro select',function(){
    var idSelect    = "#"+$(this).attr("id");
    //alert($(idSelect+" option:selected").text());
    var valorSelect = $("#resumenSelect").val()+"/"+$(idSelect+" option:selected").text();
    $("#resumenSelect").val(valorSelect);
    
});*/


//////////////////////marca todos los checkbox de listingCustomers//////////////////////////////////////////

$(document).on('change','#todosX',function(e){
 
				if($(this).is(':checked'))
				    $("#example1 input[type=checkbox].checkboxId").prop('checked', true);
			
				else
					  $("#example1 input[type=checkbox].checkboxId").prop('checked', false);
			
  
//    var checked = $("input[type=checkbox].todos").length;

    
    
   /*$("#example1 input[type=checbox].checkboxId").each(function(){
       $(this).css('checked','true');
   });*/
});

//////////////////////EnviarCobro/////////////////////////////////////

$(document).on('click','#EnviarCobro',function(){
    
    var arrayCobro=[];
   //customers_id=97;
    $("#example1 input[type=checkbox]:checked.checkboxId").each(function() {
        
           arrayCobro.push($(this).attr("data-id"));
           
        });
 if(arrayCobro.length > 0) {

	$.ajax({
		url: '{{ URL::to("admin/enviarCuentaCobro")}}',
		//dataType: 'json',
		type: "POST",
		data: '&customers_id='+arrayCobro,//'&customers_id='+customers_id,//arrayCobro,
		//async: false,
		success: function (res) {
		    if(res > 0)
		    message="almenos "+res+" usuarios no se envio cuenta de cobro.";
		    else
		    message="El Envio de Cuentas de Cobro ha sido satisfactorio.";
		    
		    mensaje='<div class="alert alert-success alert-dismissible" role="alert">'+
					'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+message+'</div>';
					
			$("#mensaje").html(mensaje);
			$("#mensaje").show(500).hide(5000);
		    
		    //console.log(res);
		    //alert("a los usuarios seleccionados se han enviado la cuenta de cobro"+res);
				/*$('.addError').hide();
				//$("#content_"+products_options_id+'_'+language_id).parent('tbody').html(res);
				$("#content_"+products_options_id+'_'+language_id).parent('tbody').html(res);*/
		},


		
});

}
else{
    
     mensaje='<div class="alert alert-danger alert-dismissible" role="alert">'+
					'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
					'Debe seleccionar los clientes para enviar cuenta de cobro.</div>';
			$("#mensaje").html(mensaje);
			$("#mensaje").show(500).hide(5000);
    
}

    
    
});

/////////////////////fin EnviarCobro//////////////////////////////////

///////////////////// informacion adicional para adicionar nueva categoria de noticias /////////////////////

$(".sedeColegio").on('click',function(){
    
    sede   =   $(this).val();
  //  alert(sede);
   if( $(this).is(':checked') ) {
       
       data={
        
        "sede"   :  sede,
        
        }

    $.ajax({
		url: '{{ URL::to("admin/infoAdicional")}}',
		type: "POST",
		data: data,
		//async: false,
		success: function (res) {
			
			grados  =   res.grados;
			var showData = [];
			
			if( grados.length > 0){
			    for( i = 0; i < grados.length; i++){
			    
                    showData[(i)] = "<option value='"+grados[i]+"'>"+grados[i]+"</option>"; 

			    }
			    $("#divSedeJornadaGrado_"+res.sede).css('display','block');
			    $(".selectJornadaGrado_"+res.sede).addClass("field-validate");
			}
			else{
			    $(".selectJornadaGrado_"+res.sede).removeClass("field-validate");
			    showData[0] =   "<option value='' selected>Sin Grados</option>";
			}
			
			$(".selectJornadaGrado_"+res.sede).html(showData);
			   
		},
	
	});
 
   }
   else{
    $("#selectJornadaGrado_"+sede).removeClass("field-validate");
    $("#divSedeJornadaGrado_"+sede).css('display','none');
   }
 
});


/*$(document).on('change', '#departamento_id', function(e){

	
	var zone_country_id = $(this).val();
	$.ajax({
	  url: "{{ URL::to('getZones')}}",
	  dataType: 'json',
	  type: "post",
	  data: '&zone_country_id='+zone_country_id,
	  success: function(data){
		//alert(data);
		//console.log(data.data[0].zone_id);
		//console.log(data.data.length);
		if(data.data.length>0){
			var i;
			var showData = [];
			for (i = 0; i < data.data.length; ++i) {
				showData[i] = "<option value='"+data.data[i].zone_id+"'>"+data.data[i].zone_name+"</option>"; 
			}
		}else{
			showData = "<option value=''>Select Zone</option>"; 				
		}
			$(".selCiudad").html(showData);
	  }
	});
	
});
$(document).on('change', '.sede_id', function(e){
   	var sede_id = $(this).val();
alert(sede_id);
    
 /   $.ajax({
		url: '{{ URL::to("admin/visibilityProduct")}}',
		type: "POST",
		data: data,
		//async: false,
		success: function (res) {
			
			
			if(parseInt(res.visible) === 1 )
			  $(".fondo_"+res.idProduct).addClass("sold-content")
			else
			$(".fondo_"+res.idProduct).removeClass("sold-content")
			   
		},
	
	});*
 
});*/

///////////////////// fin informacion adicional para adicionar nueva catoria de noticias/////////////////////


///////////////////// visible/noVisible Products/////////////////////

$(".visibleCheck").on('click',function(){
    id_producto =   $(this).attr('data-id');
    visibilidad =   0;
    
   if( $(this).is(':checked') ) 
    visibilidad=1;
    
    data={
        
        "id_producto"   :  id_producto,
        "visibilidad"   :  visibilidad
        
    }

    
    $.ajax({
		url: '{{ URL::to("admin/visibilityProduct")}}',
		type: "POST",
		data: data,
		//async: false,
		success: function (res) {
			
			
			if(parseInt(res.visible) === 1 )
			  $(".fondo_"+res.idProduct).addClass("sold-content")
			else
			$(".fondo_"+res.idProduct).removeClass("sold-content")
			   
		},
	
	});
 
});

///////////////////// fin visible/noVisible Products/////////////////////
/*
var checked = $("input[type=checkbox].todos").length;
    $("#example1 :checkbox.checkboxId").attr('checked', true);
    
   /*$("#example1 input[type=checbox].checkboxId").each(function(){
       $(this).css('checked','true');
   });
*/

//////////////////////marca todos los checkbox//////////////////////////////////////////
	
//ajax call for add option value
$(document).on('click', '.add-value', function(e){
	$("#loader").show();
	var parentFrom = $(this).parent('.addvalue-form');
	var language_id = parentFrom.children('#language_id').val();
	var products_options_id = parentFrom.children('#products_options_id').val();
	var formData = parentFrom.serialize();
	$.ajax({
		url: '{{ URL::to("admin/addAttributeValue")}}',
		type: "POST",
		data: formData,
		//async: false,
		success: function (res) {
				$('.addError').hide();
				$('#addAttributeModal').modal('hide');
				$("#content_"+products_options_id+'_'+language_id).parent('tbody').html(res);
		},
		//cache: false,
		//contentType: false,
		//processData: false
	});
		
});

//ajax call for add option value
$(document).on('click', '.update-value', function(e){
	$("#loader").show();
	var parentFrom = $(this).parent('.editvalue-form');
	var language_id = parentFrom.children('#language_id').val();
	var products_options_id = parentFrom.children('#products_options_id').val();
	var formData = parentFrom.serialize();
	//console.log('language_id: '+language_id);
	//console.log('products_options_id: '+products_options_id);
	$.ajax({
		url: '{{ URL::to("admin/updateAttributeValue")}}',
		type: "POST",
		data: formData,
		//async: false,
		success: function (res) {
				$('.addError').hide();
				//$("#content_"+products_options_id+'_'+language_id).parent('tbody').html(res);
				$("#content_"+products_options_id+'_'+language_id).parent('tbody').html(res);
		},
		//cache: false,
		//contentType: false,
		//processData: false
	});
		
});


//deleteAttribute
$(document).on('click', '#deleteAttribute', function(e){
	$("#loader").show();
	var parentFrom = $('#deleteValue');
	var language_id = parentFrom.children('#delete_language_id').val();
	var products_options_id = parentFrom.children('#delete_products_options_id').val();
	var formData = parentFrom.serialize();
	//console.log(formData);
	//console.log('language_id: '+language_id);
	//console.log('products_options_id: '+products_options_id);
	$.ajax({
		url: '{{ URL::to("admin/deleteValue")}}',
		type: "POST",
		data: formData,
		//async: false,
		success: function (res) {
				$('.addError').hide();
				//$("#content_"+products_options_id+'_'+language_id).parent('tbody').html(res);
				$("#content_"+products_options_id+'_'+language_id).parent('tbody').html(res);
				$('#deleteValueModal').modal('hide');
		},
		//cache: false,
		//contentType: false,
		//processData: false
	});
		
});
////ajax nombres productos
$(document).on('click', '#mensualCustomerFrom', function(){
		var customers_id    = $(this).attr('customers_id');
		var nombreCustomers = $(this).attr('data-customers');
		var address         = $(this).attr('data-address');
	//	alert("si");
		
//	var administrator_id = $(this).attr('data-administrator');
	$.ajax({
	  url: "{{ URL::to('admin/nombreProductos')}}",
	  type: "POST",
	  data: '&address_id='+address,//+administrator_id,
	  success: function(data){
	    //  console.log(data);
		//alert(data);
		
		
	//	console.log("hola");
	//	console.log(data.length);
	//	console.log(data[0].products_id);
	//	console.log(data[0].products_name);
	//	console.log(data);
		
		
		//console.log(data.data.length);
		if(data.length > 0){
			var i;
			var showData = "<option value='' selected> Seleccione Producto</option>";
			for (i = 0; i < data.length; i++) {
				showData += "<option value='"+data[i].products_id+"'>"+data[i].products_name+"</option>";
				
				//showData[i] = "<option value='"+0+"'>"+"carlos"+"</option>"; 
			}
		}else{
			showData = "<option value=''>Aun no ingresas productos</option>"; 				
		}
			$("#mensualProduct").html(showData);
			$('#mensualDataCustomers').html(nombreCustomers);
			$('#mensualCustomers_id').val(customers_id);
		    $('#mensualAddress_id').val(address);
		    
		    $("#mensualCustomerModal").modal('show');
	  }
	});
		

});

//ajax call for submit value
$(document).on('click', '#addAttribute', function(e){
  //  alert("s5");
	$("#loader").show();
	var formData = $('#addAttributeFrom').serialize();
	$.ajax({
		url: '{{ URL::to("admin/addNewProductAttribute")}}',
		type: "POST",
		data: formData,
		//async: false,
		success: function (res) {
			//console.log(res);
			//console.log(res.length);
			if(res.length != ''){
				$('.addError').hide();
				$('#addAttributeModal').modal('hide');
				var i;
				var showData = [];
				for (i = 0; i < res.length; ++i) {
					var j = i + 1; 
					showData[i] = "<tr><td>"+j+"</td><td>"+res[i].products_options_name+"</td><td>"+res[i].products_options_values_name+"</td><td>"+res[i].price_prefix+" "+res[i].options_values_price+"</td><td>    <a class='badge bg-light-blue editProductAttributeModal' products_attributes_id = '"+res[i].products_attributes_id+"' ><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> <a class='badge bg-red deleteProductAttributeModal' products_attributes_id = '"+res[i].products_attributes_id+"' products_id = '"+res[i].products_id+"' ><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>"; 

				}
				$(".contentAttribute").html(showData);
			}else{
				//console.log("empty");
				$('.addError').show();
			}
			
			
		},
		//cache: false,
		//contentType: false,
		//processData: false
	});
		
		
});


//onchange get zones agains country
$(document).on('change', '#departamento_id', function(e){
	
	/*@if(Request::path() == 'admin/addCustomers')
		var getZones = '../getZones';
	@else
		var getZones = '../../getZones';
	@endif*/
	
	var zone_country_id = $(this).val();
	$.ajax({
	  url: "{{ URL::to('getZones')}}",
	  dataType: 'json',
	  type: "post",
	  data: '&zone_country_id='+zone_country_id,
	  success: function(data){
		//alert(data);
		//console.log(data.data[0].zone_id);
		//console.log(data.data.length);
		if(data.data.length>0){
			var i;
			var showData = [];
			for (i = 0; i < data.data.length; ++i) {
				showData[i] = "<option value='"+data.data[i].zone_id+"'>"+data.data[i].zone_name+"</option>"; 
			}
		}else{
			showData = "<option value=''>Select Zone</option>"; 				
		}
			$(".selCiudad").html(showData);
	  }
	});
	
});


//ajax de los filtros en las ordenes por estados
$(document).on('change', '#estado_id', function(e){


	//alert("padre:."+$(this).parent())
//	console.log('padre: '+$(this).parent().id());
//pad=$(this).parent('.form-validate');
//alert("padre:."+$(pad).attr('id'))


$('.searchFrom').submit();	
/*$('.searchFrom').submit(function( event ) {
  alert( "Handler for .submit() called." );
  event.preventDefault();
});*/
});
	//var estado_id = $(this).val();
	//alert("estado"+estado_id);
	/*var parentFrom = $(this).parent('.addvalue-form');
	var formData = $('#searchFrom').serialize();
	//alert("datos de formulario:."+formData);
	
	$.ajax({
		url: '{{ URL::to("admin/searchOrders")}}',
		type: "POST",
		data: formData,
		//async: false,
		success: function (res) {
		alert(res);
			/*console.log(res);
			//console.log(res.length);
			if(res.length != ''){
				$('.addError').hide();
				$('#addDefaultAttributesModal').modal('hide');
				var i;
				var showData = [];
				for (i = 0; i < res.length; ++i) {
					var j = i + 1;
					showData[i] = "<tr><td>"+j+"</td><td>"+res[i].products_options_name+"</td><td>"+res[i].products_options_values_name+"</td><td><a class='badge bg-light-blue editDefaultAttributeModal' products_attributes_id = '"+res[i].products_attributes_id+"' language_id ='"+res[i].language_id+"' options_id ='"+res[i].options_id+"'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> <a class='badge bg-red deleteDefaultAttributeModal' products_attributes_id = '"+res[i].products_attributes_id+"' products_id = '"+res[i].products_id+"' ><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>"; 

				}
				$(".contentDefaultAttribute").html(showData);
			}else{
				//console.log("empty");
				$('.addDefaultError').show();
			}*
			
			
		},
		//cache: false,
		//contentType: false,
		//processData: false
	});
	
	
	
	
});*/


//ajax de los filtros en las ordenes por diferentes tipos
$(document).on('change', '#buscar_por', function(e){
	
	
	$('.searchFrom').submit();	 
//	var estado_id = $(this).val();
//	alert("buscar por"+estado_id);
	//var formData = $('#searchFrom').serialize();
	//alert("datos de formulario:."+formData);

});

//ajax de los filtros en las ordenes por fecha inicial de compras
$(document).on('change', '#fecha_inicial', function(e){
	
	
	
//	var estado_id = $(this).val();
//	alert("fecha inicial"+estado_id);
	//var formData = $('#searchFrom').serialize();
//	alert("datos de formulario:."+formData);

});

//ajax de los filtros en las ordenes por fecha final de compras
$(document).on('change', '#fecha_final', function(e){
	
	
	
//	var estado_id = $(this).val();
//	alert("fecha final"+estado_id);
//	var formData = $('#searchFrom').serialize();
//	alert("datos de formulario:."+formData);

});





//ajax call for submit value
$(document).on('click', '#addDefaultAttribute', function(e){
	$("#loader").show();
	var formData = $('#addDefaultAttributeFrom').serialize();
	$.ajax({
		url: '{{ URL::to("admin/addNewDefaultAttribute")}}',
		type: "POST",
		data: formData,
		//async: false,
		success: function (res) {
			//console.log(res);
			//console.log(res.length);
			if(res.length != ''){
				$('.addError').hide();
				$('#addDefaultAttributesModal').modal('hide');
				var i;
				var showData = [];
				for (i = 0; i < res.length; ++i) {
					var j = i + 1;
					showData[i] = "<tr><td>"+j+"</td><td>"+res[i].products_options_name+"</td><td>"+res[i].products_options_values_name+"</td><td><a class='badge bg-light-blue editDefaultAttributeModal' products_attributes_id = '"+res[i].products_attributes_id+"' language_id ='"+res[i].language_id+"' options_id ='"+res[i].options_id+"'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> <a class='badge bg-red deleteDefaultAttributeModal' products_attributes_id = '"+res[i].products_attributes_id+"' products_id = '"+res[i].products_id+"' ><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>"; 

				}
				$(".contentDefaultAttribute").html(showData);
			}else{
				//console.log("empty");
				$('.addDefaultError').show();
			}
			
			
		},
		//cache: false,
		//contentType: false,
		//processData: false
	});
		
		
});
/////////////////////
//onchange get zones agains country
$(document).on('change', '.dpto', function(e){
	
	/*@if(Request::path() == 'admin/adminProfile')
		var getZones = '../getZones';
	@else
		var getZones = '../../getZones';
	@endif*/
	var selectCity = $(this).attr('data-select');
	var zone_country_id = $(this).val();
	$.ajax({
	  url: "{{ URL::to('getZones')}}",
	  dataType: 'json',
	  type: "post",
	  data: '&zone_country_id='+zone_country_id,
	  success: function(data){
		//alert(data);
		//console.log(data.data[0].zone_id);
		//console.log(data.data.length);
		if(data.data.length>0){
			var i;
			var showData = [];
			for (i = 0; i < data.data.length; ++i) {
				showData[i] = "<option value='"+data.data[i].zone_id+"'>"+data.data[i].zone_name+"</option>"; 
			}
		}else{
			showData = "<option value=''>Select Zone</option>"; 				
		}
			$("."+selectCity).html(showData);
	  }
	});
	
});

//onchange get zones agains country
$(document).on('change', '#entry_country_id', function(e){
	
	/*@if(Request::path() == 'admin/adminProfile')
		var getZones = '../getZones';
	@else
		var getZones = '../../getZones';
	@endif*/
	
	var zone_country_id = $(this).val();
	$.ajax({
	  url: "{{ URL::to('getZones')}}",
	  dataType: 'json',
	  type: "post",
	  data: '&zone_country_id='+zone_country_id,
	  success: function(data){
		//alert(data);
		//console.log(data.data[0].zone_id);
		//console.log(data.data.length);
		if(data.data.length>0){
			var i;
			var showData = [];
			for (i = 0; i < data.data.length; ++i) {
				showData[i] = "<option value='"+data.data[i].zone_id+"'>"+data.data[i].zone_name+"</option>"; 
			}
		}else{
			showData = "<option value=''>Select Zone</option>"; 				
		}
			$(".zoneContent").html(showData);
	  }
	});
	
});

$(document).on('change','.newSede',function(e){
    e.preventDefault();
     if($(this).val() == "new")
         $(".nuevaSede").css('display','block');
     else     
        $(".nuevaSede").css('display','none');
});

//ajax call for submit value
$(document).on('click', '#addAddress', function(e){
	$("#loader").show();
	var formData = $('#addAddressFrom').serialize();
//	alert("datoss"+formData);
	$.ajax({
		url: '{{ URL::to("admin/addNewCustomerAddress")}}',
		type: "POST",
		data: formData,
		async: false,
		success: function (res) {
		//alert(res);
			//console.log(res.length+"--");
		//	console.log(res);

			if(res.length > 0){
			
				$('#addAdressModal').modal('hide');
				var i;
				var showData = [];
				for (i = 0; i < res.length; ++i) {
					var j = i + 1;
				//	console.log(res[i]);
					showData[i] ="<tr><td>"+res[i].cafeteria_id+"</td><td><strong>Colegio:</strong>"+res[i].school_name+"<br><strong>Nombre:</strong>"+res[i].first_name+"<br><strong>Apellido:</strong>"+
					                        res[i].last_name+"<br><strong>Usuario:</strong>"+res[i].user_name+"<br><strong>Teléfono:</strong>"+res[i].phone+"<br></td><td><strong>Sede:</strong>"+res[i].nombre_sede+
					                        "<br><strong>Departamento:</strong>"+res[i].countries_name+"<br><strong>Ciudad:</strong>"+res[i].zone_name+"<br><strong>Nombre Cafeteria:</strong>"+res[i].cafeteria_name+
					                        "<br><strong>Direccion Cafeteria:</strong>"+res[i].address+"<br></td><td><a class='badge bg-light-blue editAddressModal' customers_id ="+ res[i].administrator_id+" address_book_id = "+
					                         res[i].id_address_sede+"><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a><a customers_id = "+res[i].administrator_id+" address_book_id = "+res[i].id_address_sede+
					                         " class='badge bg-red deleteAddressModal'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>";
					
					//showData[i] = "<tr><td>"+j+"</td><td><strong>Colegio:</strong> "+res[i].entry_company+"<br><strong>Nombre Administrador:</strong> "+res[i].entry_firstname+"<br><strong>Apellido Administrador:</strong> "+res[i].entry_lastname+"</td><td><strong>Direccion:</strong> "+res[i].entry_street_address+"<br><strong>Sector:</strong> "+res[i].entry_suburb+"<br><strong>Pais:</strong> "+res[i].entry_city+"<br><strong>Ciudad:</strong> "+res[i].zone_name+"<br><strong>Departamento:</strong> "+res[i].countries_name+"</td><td><a class='badge bg-light-blue editAddressModal' customers_id = '"+res[i].customers_id+"' address_book_id = '"+res[i].address_book_id+"' ><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a><a customers_id = '"+res[i].customers_id+"' address_book_id = '"+res[i].address_book_id+"' class='badge bg-red deleteAddressModal'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>"; 


						/*  script original en opciones de la direccion de la cafeteria

						showData[i] = "<tr><td>"+j+"</td><td><strong>Company:</strong> "+res[i].entry_company+"<br><strong>First Name:</strong> "+res[i].entry_firstname+"<br><strong>Last Name:</strong> "+res[i].entry_lastname+"</td><td><strong>Street:</strong> "+res[i].entry_street_address+"<br><strong>Suburb:</strong> "+res[i].entry_suburb+"<br><strong>Postcode:</strong> "+res[i].entry_postcode+"<br><strong>City:</strong> "+res[i].entry_city+"<br><strong>State:</strong> "+res[i].entry_state+"<br><strong>Zone:</strong> "+res[i].zone_name+"<br><strong>Country:</strong> "+res[i].countries_name+"</td><td><a class='badge bg-light-blue editAddressModal' customers_id = '"+res[i].customers_id+"' address_book_id = '"+res[i].address_book_id+"' ><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a><a customers_id = '"+res[i].customers_id+"' address_book_id = '"+res[i].address_book_id+"' class='badge bg-red deleteAddressModal'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>"; 
						*/





				}
				$(".contentAttribute").html(showData);
			}else{
			
				//console.log("empty");
			}
		},
	});
});

//editAddressModal
$(document).on('click', '.editAddressModal', function(){



	var customers_id = $(this).attr('customers_id');
	var address_book_id = $(this).attr('address_book_id');
	/*var tokenx=$(this).data('data-token');
	alert(address_book_id+"--llego a editar--"+customers_id);*/
	var tokenx = $(this).attr('data-token');
	
	datos={
		'customers_id':customers_id,
		'address_book_id':address_book_id,
		'_token':tokenx
	};

	$.ajax({
		url: "{{ URL::to('admin/editAddress')}}",
		type: "POST",
		data: datos,
		success: function (data) {
			
			x=JSON.parse(data);
			Administrador=x.customer_addresses;
			
			//departamento=Administrador[0].countries_id;
  		         todosDptos=x.countries;
       		         todosMpios=x.zones;
		        
		        options="";
		        
		        todosDptos.forEach(function(element) {
		        //console.log(element["countries_id"]+"--"+Administrador[0].countries_id)
		        
		     	 if(element["countries_id"] == Administrador[0].countries_id){
		       		options+='<option value="'+element["countries_id"]+'" selected>'+element["countries_name"]+'</option>"';
		       	}
		      	 else{
		      		options+='<option value="'+element["countries_id"]+'">'+element["countries_name"]+'</option>"';
		      	}	

                       });

                       options2="";
                       
                       todosMpios.forEach(function(element) {
		        
		        
		     	 if(element["zone_id"] == Administrador[0].zone_id){
		       		options2+='<option value="'+element["zone_id"]+'" selected>'+element["zone_name"]+'</option>"';
		       	}
		      	 else{
		      		options2+='<option value="'+element["zone_id"]+'">'+element["zone_name"]+'</option>"';
		      	}	
                       
                       });

                         $("#editAddressFrom #entry_country_id").append(options);                       
                         $("#editAddressFrom #entry_zone_id").append(options2);                       
			 $("#editAddressFrom #entry_company").val(Administrador[0].entry_company);
			 $("#editAddressFrom #entry_firstname").val(Administrador[0].entry_firstname);
			 $("#editAddressFrom #entry_lastname").val(Administrador[0].entry_lastname);
			 $("#editAddressFrom #entry_street_address").val(Administrador[0].entry_street_address);
			 $("#editAddressFrom #entry_suburb").val(Administrador[0].entry_suburb);
			 $("#editAddressFrom #entry_postcode").val(Administrador[0].entry_postcode);
			 $("#editAddressFrom #entry_city").val(Administrador[0].entry_city);	
			 $("#editAddressFrom #entry_state").val(Administrador[0].entry_state);	    	
			 $('#editAddressModal').modal('show');
		},
		dataType: 'html'
	});
});
	
	
		
//editProductAttributeModal
$(document).on('click', '.editProductAttributeModal', function(){
	var products_id = $(this).attr('products_id');
	var products_attributes_id = $(this).attr('products_attributes_id');
	var language_id = $(this).attr('language_id');	
	var options_id = $(this).attr('options_id');
	$.ajax({
		url: '{{ URL::to("admin/editProductAttribute")}}',
		type: "POST",
		data: '&products_id='+products_id+'&products_attributes_id='+products_attributes_id+'&language_id='+language_id+'&options_id='+options_id,
		success: function (data) {
			$('.editContent').html(data); 
			$('#editProductAttributeModal').modal('show');
		},
		dataType: 'html'
	});
});

//editDefaultAttributeModal
$(document).on('click', '.editDefaultAttributeModal', function(){
	var products_id = $(this).attr('products_id');
	var products_attributes_id = $(this).attr('products_attributes_id');
	var language_id = $(this).attr('language_id');
	var options_id = $(this).attr('options_id');
	$.ajax({
		url: "{{ URL::to('admin/editDefaultAttribute')}}",
		type: "POST",
		data: '&products_id='+products_id+'&products_attributes_id='+products_attributes_id+'&language_id='+language_id+'&options_id='+options_id,
		success: function (data) {
			$('.editDefaultContent').html(data); 
			$('#editDefaultAttributeModal').modal('show');
		},
		dataType: 'html'
	});
});

//udpate address
$(document).on('click', '#updateAddress', function(e){
		$("#loader").show();
		var formData = $('#editAddressFrom').serialize();
		$.ajax({
			url: "{{ URL::to('admin/updateAddress')}}",
			type: "POST",
			data: formData,
			//async: false,
			success: function (res) {
				//console.log(res);
				//console.log(res.length);
				if(res.length != ''){
					$('.addError').hide();
					$('#editAddressModal').modal('hide');
					var i;
					var showData = [];
					for (i = 0; i < res.length; ++i) {
					//console.log(res[i]);
					var j = i + 1;
					showData[i] = "<tr><td>"+j+"</td><td><strong>Company:</strong> "+res[i].entry_company+"<br><strong>First Name:</strong> "+res[i].entry_firstname+"<br><strong>Last Name:</strong> "+res[i].entry_lastname+"</td><td><strong>Street:</strong> "+res[i].entry_street_address+"<br><strong>Suburb:</strong> "+res[i].entry_suburb+"<br><strong>Pais:</strong> "+res[i].entry_city+"<br><strong>Ciudad:</strong> "+res[i].zone_name+"<br><strong>Departamento:</strong> "+res[i].countries_name+"</td><td><a class='badge bg-light-blue editAddressModal' customers_id = '"+res[i].customers_id+"' address_book_id = '"+res[i].address_book_id+"' ><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a><a customers_id = '"+res[i].customers_id+"' address_book_id = '"+res[i].address_book_id+"' class='badge bg-red deleteAddressModal'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>"; 

					}
					$(".contentAttribute").html(showData);
					
				}else{
					//console.log("empty");
					$('.addError').show();
				}


			},
			//cache: false,
			//contentType: false,
			//processData: false
		});
		
	});
	
	
		
	$(document).on('click', '#updateProductAttribute', function(e){
		$("#loader").show();
		var formData = $('#editAttributeFrom').serialize();
		$.ajax({
			url: '{{ URL::to("admin/updateProductAttribute")}}',
			type: "POST",
			data: formData,
			//async: false,
			success: function (res) {
				//console.log(res);
				//console.log(res.length);
				if(res.length != ''){
					$('.addError').hide();
					$('#editProductAttributeModal').modal('hide');
					var i;
					var showData = [];
					for (i = 0; i < res.length; ++i) {
						var j = i + 1;
						showData[i] = "<tr><td>"+j+"</td><td>"+res[i].products_options_name+"</td><td>"+res[i].products_options_values_name+"</td><td>"+res[i].price_prefix+" "+res[i].options_values_price+"</td><td>    <a class='badge bg-light-blue editProductAttributeModal' products_attributes_id = '"+res[i].products_attributes_id+"' products_id = '"+res[i].products_id+"'  language_id = '"+res[i].language_id+"'  options_id = '"+res[i].options_id+"'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> <a class='badge bg-red deleteProductAttributeModal' products_attributes_id = '"+res[i].products_attributes_id+"' products_id = '"+res[i].products_id+"' language_id = '"+res[i].language_id+"'  options_id = '"+res[i].options_id+"'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>"; 

					}
					$(".contentAttribute").html(showData);
				}else{
					//console.log("empty");
					$('.addError').show();
				}


			},
			//cache: false,
			//contentType: false,
			//processData: false
		});
		
	});
	
	
	$(document).on('click', '#updateDefaultAttribute', function(e){
		$("#loader").show();
		var formData = $('#editDefaultAttributeFrom').serialize();
		$.ajax({
			url: "{{ URL::to('admin/updateDefaultAttribute')}}",
			type: "POST",
			data: formData,
			//async: false,
			success: function (res) {
				//console.log(res);
				//console.log(res.length);
				if(res.length != ''){
					$('.addError').hide();
					$('#editDefaultAttributeModal').modal('hide');
					var i;
					var showData = [];
					for (i = 0; i < res.length; ++i) {
						var j = i + 1;
						showData[i] = "<tr><td>"+j+"</td><td>"+res[i].products_options_name+"</td><td>"+res[i].products_options_values_name+"</td><td><a class='badge bg-light-blue editDefaultAttributeModal' products_attributes_id = '"+res[i].products_attributes_id+"' language_id ='"+res[i].language_id+"' options_id ='"+res[i].options_id+"'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> <a class='badge bg-red deleteDefaultAttributeModal' products_attributes_id = '"+res[i].products_attributes_id+"' products_id = '"+res[i].products_id+"' ><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>";
					}
					$(".contentDefaultAttribute").html(showData);
				}else{
					//console.log("empty");
					$('.addError').show();
				}


			},
			//cache: false,
			//contentType: false,
			//processData: false
		});
		
	});
	

	
	//deleteAddressModal
	$(document).on('click', '.deleteAddressModal', function(){
		var customers_id = $(this).attr('customers_id');
		var address_book_id = $(this).attr('address_book_id');
		$('#customers_id').val(customers_id);
		$('#address_book_id').val(address_book_id);
		$('#deleteAddressModal').modal('show');
	});
		
	//deleteAddress
	$(document).on('click', '#deleteAddressBtn', function(){
		$("#loader").show();
		var formData = $('#deleteAddress').serialize();
		//console.log(formData);
		$.ajax({
			url: "{{ URL::to('admin/deleteAddress')}}",
			type: "POST",
			data: formData,
			success: function (res) {
				//$('.deleteEmbed').html(res); 
				//alert(res);
				$('#deleteAddressModal').modal('hide');
				if(res.length != ''){
					var i;
					var showData = [];
					for (i = 0; i < res.length; ++i) {
					//console.log(res[i]);
					var j = i + 1;
					showData[i] = "<tr><td>"+j+"</td><td><strong>Company:</strong> "+res[i].entry_company+"<br><strong>First Name:</strong> "+res[i].entry_firstname+"<br><strong>Last Name:</strong> "+res[i].entry_lastname+"</td><td><strong>Street:</strong> "+res[i].entry_street_address+"<br><strong>Suburb:</strong> "+res[i].entry_suburb+"<br><strong>Postcode:</strong> "+res[i].entry_postcode+"<br><strong>City:</strong> "+res[i].entry_city+"<br><strong>State:</strong> "+res[i].entry_state+"<br><strong>Zone:</strong> "+res[i].zone_name+"<br><strong>Country:</strong> "+res[i].countries_name+"</td><td><a class='badge bg-light-blue editAddressModal' customers_id = '"+res[i].customers_id+"' address_book_id = '"+res[i].address_book_id+"' ><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a><a customers_id = '"+res[i].customers_id+"' address_book_id = '"+res[i].address_book_id+"' class='badge bg-red deleteAddressModal'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>"; 

					}
					//$(".contentAttribute").html(showData);
					
				}else{
					//console.log("empty");
					var showData = "<tr><td colspan='5'><strong>No record found!</strong> Please click on '<strong>Add Address</strong>' to add address.</td></tr>";
				}
					$(".contentAttribute").html(showData);
			},
		});
	});
	
	//device id
	/*$(document).on('click', '#deletedeviceId', function(){
		var devices_id = $(this).attr('devices_id');
		$('#devices_id').val(devices_id);
		$('#deletedeviceModal').modal('show');
	})
	
	//DeviceDeletedMessage
	$(document).on('click', '.deleteProductAttributeModal', function(){
		var products_id = $(this).attr('products_id');
		var products_attributes_id = $(this).attr('products_attributes_id');
		$.ajax({
			url: "{{ URL::to('admin/deleteProductAttributeModal')}}",
			type: "POST",
			data: '&products_id='+products_id+'&products_attributes_id='+products_attributes_id,
			success: function (data) {
				$('.deleteEmbed').html(data); 
				$('#deleteProductAttributeModal').modal('show');
			},
			dataType: 'html'
		});
	});*/
	
	
	//deleteProductAttributeModal
	$(document).on('click', '.deleteProductAttributeModal', function(){
		var products_id = $(this).attr('products_id');
		var products_attributes_id = $(this).attr('products_attributes_id');
		$.ajax({
			url: "{{ URL::to('admin/deleteProductAttributeModal')}}",
			type: "POST",
			data: '&products_id='+products_id+'&products_attributes_id='+products_attributes_id,
			success: function (data) {
				$('.deleteEmbed').html(data); 
				$('#deleteProductAttributeModal').modal('show');
			},
			dataType: 'html'
		});
	});
	
	//deleteDefaultAttributeModal
	$(document).on('click', '.deleteDefaultAttributeModal', function(){
		var products_id = $(this).attr('products_id');
		var products_attributes_id = $(this).attr('products_attributes_id');
		$.ajax({
			url: "{{ URL::to('admin/deleteDefaultAttributeModal')}}",
			type: "POST",
			data: '&products_id='+products_id+'&products_attributes_id='+products_attributes_id,
			success: function (data) {
				$('.deleteDefaultEmbed').html(data); 
				$('#deleteDefaultAttributeModal').modal('show');
			},
			dataType: 'html'
		});
	});
	
	//deleteOption
	$(document).on('click', '.deleteOption', function(){
		$("#loader").show();
		var option_id = $(this).attr('option_id');
		//alert(option_id);
		$.ajax({
			url: "{{ URL::to('admin/checkAttributeAssociate')}}",
			type: "POST",
			data: '&option_id='+option_id,
			success: function (res) {
				//$('.deleteEmbed').html(res); 
				//alert(res);
				if(res.length != ''){
					$('.addError').hide();
					$("#assciate-products").html(res);
					$('#productListModal').modal('show');
				}else{
					$('#option_id').val(option_id);
					$('#productListModal').modal('hide');
					$('#deleteAttributeModal').modal('show');
					$(".contentAttribute").html(res);
				}
			},
		});
	});
	
	//deleteOption
	$(document).on('click', '.delete-value', function(){
		$("#loader").show();
		var value_id = $(this).attr('value_id');
		var delete_products_options_id = $(this).attr('option_id');
		var delete_language_id = $(this).attr('language_id');
		//alert(delete_language_id);
		$.ajax({
			url: "{{ URL::to('admin/checkValueAssociate')}}",
			type: "POST",
			data: '&value_id='+value_id,
			success: function (res) {
				//$('.deleteEmbed').html(res); 
				//alert(res);
				if(res.length != ''){
					$('.addError').hide();
					$("#assciate-products-value").html(res);
					$('#productListModalValue').modal('show');
				}else{
					$('#value_id').val(value_id);
					$('#delete_products_options_id').val(delete_products_options_id);
					$('#delete_language_id').val(delete_language_id);
					$('#productListModalValue').modal('hide');
					$('#deleteValueModal').modal('show');
					$(".contentAttribute").html(res);
				}
			},
		});
	});
		
	//deleteProductAttribute
	$(document).on('click', '#deleteProductAttribute', function(){
		$("#loader").show();
		var formData = $('#deleteAttributeForm').serialize();
		//console.log(formData);
		$.ajax({
			url: "{{ URL::to('admin/deleteProductAttribute')}}",
			type: "POST",
			data: formData,
			success: function (res) {
				//$('.deleteEmbed').html(res); 
				//alert(res);
				if(res.length != ''){
					$('.addError').hide();
					$('#deleteProductAttributeModal').modal('hide');
					var i;
					var showData = [];
					for (i = 0; i < res.length; ++i) {
						var j = i + 1;
						showData[i] = "<tr><td>"+j+"</td><td>"+res[i].products_options_name+"</td><td>"+res[i].products_options_values_name+"</td><td>"+res[i].price_prefix+" "+res[i].options_values_price+"</td><td>    <a class='badge bg-light-blue editProductAttributeModal' products_attributes_id = '"+res[i].products_attributes_id+"' products_id = '"+res[i].products_id+"'  language_id = '"+res[i].language_id+"'  options_id = '"+res[i].options_id+"'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> <a class='badge bg-red deleteProductAttributeModal' products_attributes_id = '"+res[i].products_attributes_id+"' products_id = '"+res[i].products_id+"' language_id = '"+res[i].language_id+"'  options_id = '"+res[i].options_id+"'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>"; 
					}
					//console.log(res.length);
					$(".contentAttribute").html(showData);
				}else{
					
					$('#deleteProductAttributeModal').modal('hide');
					//console.log("empty");
					$('.addError').show();
					$(".contentAttribute").html(res);
				}
			},
		});
	});
	
	
	
	
	//deleteDefaultAttributeModal
	$(document).on('click', '#deleteDefaultAttribute', function(){
		$("#loader").show();
		var formData = $('#deleteDefaultAttributeForm').serialize();
		//console.log(formData);
		$.ajax({
			url: "{{ URL::to('admin/deleteDefaultAttribute')}}",
			type: "POST",
			data: formData,
			success: function (res) {
				//$('.deleteEmbed').html(res); 
				//alert(res);
				if(res.length != ''){
					$('.addError').hide();
					$('#deleteDefaultAttributeModal').modal('hide');
					var i;
					var showData = [];
					for (i = 0; i < res.length; ++i) {
						var j = i + 1;
						showData[i] = "<tr><td>"+j+"</td><td>"+res[i].products_options_name+"</td><td>"+res[i].products_options_values_name+"</td><td><a class='badge bg-light-blue editDefaultAttributeModal' products_attributes_id = '"+res[i].products_attributes_id+"' language_id ='"+res[i].language_id+"' options_id ='"+res[i].options_id+"'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> <a class='badge bg-red deleteDefaultAttributeModal' products_attributes_id = '"+res[i].products_attributes_id+"' products_id = '"+res[i].products_id+"' ><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>"; 
					}
					//console.log(res.length);
					$(".contentDefaultAttribute").html(showData);
				}else{
					
					$('#deleteDefaultAttributeModal').modal('hide');
					//console.log("empty");
					$('.addDefaultError').show();
					$(".contentDefaultAttribute").html(res);
				}
			},
		});
	});
		
	//ajax call for submit value
	$(document).on('click', '#addImage', function(e){
		$("#loader").show();
		var formData = new FormData($('#addImageFrom')[0]);
		$.ajax({
			url: '{{ URL::to("admin/addNewProductImage")}}',
			type: "POST",
			data: formData,
			//async: false,
			success: function (res) {
				//console.log(res);
				//console.log(res);
				if(res.length != ''){
					$('.addError').hide();
					$('#addImagesModal').modal('hide');
					var i;
					var showData = [];
					for (i = 0; i < res.length; ++i) {
						var j = i + 1;
						showData[i] = "<tr><td>"+j+"</td><td><img src={{asset('').'/'}}"+res[i].image+" alt='' width=' 100px'></td><td>"+res[i].htmlcontent+"</td> <td><a products_id = '"+res[i].products_id+"' class='badge bg-light-blue editProductImagesModal' id = '"+res[i].id+"' ><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> <a class='badge bg-red deleteProductImagesModal' id = '"+res[i].id+"' products_id = '"+res[i].products_id+"' ><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>"; 
					}
					$(".contentImages").html(showData);
				}else{
					$('.addError').show();
				}


			},
			cache: false,
			contentType: false,
			processData: false
		});
		
		
	});
		
	//editProductImagesModal
	$(document).on('click', '.editProductImagesModal', function(){
		var id = $(this).attr('id');
		var products_id = $(this).attr('products_id');
		$.ajax({
			url: '{{ URL::to("admin/editProductImage")}}',
			type: "POST",
			data: '&products_id='+products_id+'&id='+id,
			success: function (data) {
				$('.editImageContent').html(data); 
				$('#editProductImagesModal').modal('show');
			},
			dataType: 'html'
		});
	});
	
		
	$(document).on('click', '#updateProductImage', function(e){
		$("#loader").show();
		var formData = new FormData($('#editImageFrom')[0]);
		$.ajax({
			url: "{{ URL::to('admin/updateProductImage')}}",
			type: "POST",
			data: formData,
			//async: false,
			success: function (res) {
				//console.log(res);
				//console.log(res.length);
				if(res.length != ''){
					$('.addError').hide();
					$('#editProductImagesModal').modal('hide');
					var i;
					var showData = [];
					for (i = 0; i < res.length; ++i) {
						var j = i + 1;
						showData[i] = "<tr><td>"+j+"</td><td><img src={{asset('').'/'}}"+res[i].image+" alt='' width=' 100px'></td><td>"+res[i].htmlcontent+"</td> <td><a products_id = '"+res[i].products_id+"' class='badge bg-light-blue editProductImagesModal' id = '"+res[i].id+"' ><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> <a class='badge bg-red deleteProductImagesModal' id = '"+res[i].id+"' products_id = '"+res[i].products_id+"' ><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>";

					}
					$(".contentImages").html(showData);
				}else{
					//console.log("empty");
					$('.addError').show();
				}


			},
			cache: false,
			contentType: false,
			processData: false
		});
		
	});	
		
	//send push Notification
	$(document).on('click', '#send-notificaion', function(){
		$('.not-sent').addClass('hide');
		$('.sent-push').addClass('hide');
		var title = $('#title').val();
		var message = $('#message').val();
		
		if(title !=''){
			$('.title-error').addClass('hidden');
			$('.title-error').closest('.form-group').removeClass('has-error');
			if(message !=''){
				
				$('.message-error').closest('.form-group').removeClass('has-error');
				$('.message-error').addClass('hidden');
				
				var device_type = $('#device_type').val();
				var device_id = $('#device_id').val();
				var x='device_type='+device_type+'&title='+title+'&message='+message+'&device_id='+device_id;
				
				$.ajax({
					url: "{{ URL::to('admin/notifyUser')}}",
					type: "POST",
					data: 'device_type='+device_type+'&title='+title+'&message='+message+'&device_id='+device_id,
					success: function (res) {
					
						$('.sent-push').addClass('hide');
						$('.not-sent').addClass('hide');
						if($.trim(res) == '1'){
							$('.sent-push').removeClass('hide');
						}else{
							$('.not-sent').removeClass('hide');
						}
					},
				});
			
			}else{
				$('.message-error').closest('.form-group').addClass('has-error');
				$('.message-error').removeClass('hidden');
			}
			
		}else{
			$('.title-error').closest('.form-group').addClass('has-error');
			$('.title-error').removeClass('hidden');
		}
		
	});

	//deleteProductImagesModal
	$(document).on('click', '.deleteProductImagesModal', function(){
		var id = $(this).attr('id');
		var products_id = $(this).attr('products_id');
		$.ajax({
			url: '{{ URL::to("admin/deleteProductImageModal")}}',
			type: "POST",
			data: '&products_id='+products_id+'&id='+id,
			success: function (data) {
				$('.deleteImageEmbed').html(data); 
				$('#deleteProductImageModal').modal('show');
			},
			dataType: 'html'
		});
	});
		
	//deleteProductImage
	$(document).on('click', '#deleteProductImage', function(){
		$("#loader").show();
		var formData = $('#deleteImageForm').serialize();
		//console.log(formData);
		$.ajax({
			url: "{{ URL::to('admin/deleteProductImage')}}",
			type: "POST",
			data: formData,
			success: function (res) {
				//$('.deleteEmbed').html(res); 
				//alert(res);
				if(res.length != ''){
					$('.addError').hide();
					$('#deleteProductImageModal').modal('hide');
					var i;
					var showData = [];
					for (i = 0; i < res.length; ++i) {
						var j = i + 1;
						showData[i] = "<tr><td>"+j+"</td><td><img src={{asset('').'/'}}"+res[i].image+" alt='' width=' 100px'></td><td>"+res[i].htmlcontent+"</td> <td><a products_id = '"+res[i].products_id+"' class='badge bg-light-blue editProductImagesModal' id = '"+res[i].id+"' ><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> <a class='badge bg-red deleteProductImagesModal' id = '"+res[i].id+"' products_id = '"+res[i].products_id+"' ><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>";
					}
					//console.log(res.length);
					$(".contentImages").html(showData);
				}else{
					var showData = '<tr><td colspan="4"><strong>No record found!</strong> Please click on "<strong>Add Product Images</strong>" to add images.</td></tr>';
					$('#deleteProductImageModal').modal('hide');
					//console.log("empty");
					//$('.addError').show();
					$(".contentImages").html(showData);
				}
			},
		});
	});
	
	
	//ajax call for notification pop
	$(document).on('click', '#notification-popup', function(){
		var customers_id = $(this).attr('customers_id');
		$.ajax({
			//url: '{{ URL::to("admin/editProductAttribute")}}',
			url: '{{ URL::to("admin/customerNotification")}}',
			type: "POST",
			data: '&customers_id='+customers_id,
			success: function (data) {
				$('.notificationContent').html(data); 
				$('#notificationModal').modal('show');
				
				//$('.editContent').html(data); 
				//$('#editProductAttributeModal').modal('show');
			},
			dataType: 'html'
		});
	});
	
	//get products for coupon
	$(document).on('focus', '.couponProdcuts input', function(){
		//var products = $(".couponProdcuts .select2-selection__rendered .select2-selection__choice").attr('title');
		//console.log(products);
		var products = $(this).attr('products_id');
		$.ajax({
			url: "{{URL::to('admin/couponProducts')}}",
			type: "POST",
			//data: '&products_id='+products_id+'&products_attributes_id='+products_attributes_id,
			data: '',
			success: function (data) {
			},
			dataType: 'html'
		});
	});
	

	
	//call function on window load
	@if(Request::path() == 'admin/editProduct/*')
		getSubCategory();
	@endif
	//special product
	showSpecial();
			
	//deleteProductModal
	$(document).on('click', '#deleteProductId', function(){
		var products_id = $(this).attr('products_id');
		$('#products_id').val(products_id);
		$("#deleteProductModal").modal('show');
	});
	
	//ModalImgQr
	$(document).on('click', '#linkModalImgQr', function(){
		var codigo_qr   =   $(this).attr('data_qr');
		var nombre      =   $(this).attr('data_nombre');
//		var Img = '<img src="../public/ALBERTO LLERAS CAMARGO/NARCISO MATUS TORRES/Primaria_M_12/12_ACOSTA DURAN DYLAN LEONARDO_2018075188.png" alt="" width=" 200px" height="200px">'; 
		var Img = '<img src="'+codigo_qr+'" alt="" width=" 200px" height="200px">'; 
		$('#imgCodigo_qr').html(Img);
		$('#nombreEstudiante').html(nombre);
		
		$("#ModalImgQr").modal('show');
	});
		
	//deleteAttributeModal
	$(document).on('click', '#deleteAttributeFrom', function(){
		var option_id = $(this).attr('option_id');
		$('#option_id').val(option_id);
		$("#deleteAttributeModal").modal('show');
	});
	
		//CredictCustomerModal creditoCustomerFrom
	$(document).on('click', '#creditoCustomerFrom', function(){
		var customers_id    =   $(this).attr('customers_id');
		var nombreCustomers =   $(this).attr('data-customers');
		var credito_hijo_id =   $(this).attr('data-credito_hijo_id');
		
		$('#dataCustomers').html(nombreCustomers);
		$('#creditoCustomers_id').val(customers_id);
		$('#credito_hijo_id').val(credito_hijo_id);
		$("#creditoCustomerModal").modal('show');
	});
	

	
		//discountCustomerModal descuento al cliente especifico
	$(document).on('change', '#chekCredito', function(){
	   
	    id=$(this).val();
	    nombre=$(this).attr('data-nombre');
	    $('#dataDiscountCustomer').html(nombre);
	    $('#discountCustomers_id').val(id);
	    
	//     alert(nombre);
	 if($(this).prop('checked')){
	     $('#descuento').val(1);
		 $("#discountCustomerModal").modal('show'); 
	 }
	 else{
	     $('#textoDescuento').html('El cliente <strong>No  tendr&aacute; </strong> acceso a los productos con descuento!');
	      $('#descuento').val(0);
		  $("#discountCustomerModal").modal('show'); 
	 }
		
		
	});
	
		//DocenteCustomerModal dar de alta docente
	$(document).on('change', '#chekDocente', function(){
	   
	    id=$(this).val();
	    nombre=$(this).attr('data-nombreDocente');
	    $('#dataDocente').html(nombre);
	    $('#docente_id').val(id);
	    
	//     alert(nombre);
	 if($(this).prop('checked')){
	     $('#docente').val(1);
		 $("#docenteModal").modal('show'); 
	 }
	 else{
	     $('#textoDescuento').html('El usuario <strong>No  tendr&aacute; </strong> rol Docente!');
	      $('#docente').val(0);
		  $("#docenteModal").modal('show'); 
	 }
		
		
	});
	/**
	*
	* Actualiza docente desde web adminstrador del rector
	* 
	*
	$(document).on('click','#actualizarDocente',function(e){
	    
	   // e.preventDefault();
	    var id          =   $(this).attr('data-id');
	    var form        =   "#contenedorDocente"+id;
	    var formData    =   $(form).serialize();
	    
	    $.ajax({
		    url: '{{ URL::to("admin/updateTeacher")}}',
		    type: "POST",
		    data: formData,
		//async: false,
		    success: function (res) {
		         //console.log(res);
			    	/*$('.addError').hide();
				    //$("#content_"+products_options_id+'_'+language_id).parent('tbody').html(res);
				    $("#content_"+products_options_id+'_'+language_id).parent('tbody').html(res);
				    $('#deleteValueModal').modal('hide');* /
		    },
		    //cache: false,
		    //contentType: false,
		    //processData: false
	    });
	    //alert(data);
	    
	});
	
	/*******************fin de la actualizacion docente******************************/
	
	
	/**
	*
	* Elimina docente desde web adminstrador del rector
	* 
	*/
	
	$(document).on('click', '#eliminarDocente', function(e){
	    
	    e.preventDefault();
		var id          =   $(this).attr('data-id');
		$('#user_id').val(id);
		$("#deleteTeacherModal").modal('show');
	});
	
	/*******************fin de la eliminacion docente******************************/	
	
	/**
	*
	* Reestablece el correo del login docente desde web adminstrador del rector
	* 
	*/
	
	$(document).on('click', '#reestablecerDocente', function(e){
	    
	    e.preventDefault();
		var id          =   $(this).attr('data-id');
		$('#teacherId').val(id);
		$("#reestablecerTeacherModal").modal('show');
	});
	
	/*******************fin de la reestablecer docente******************************/	
	
	
	
	//deleteCustomerModal
	$(document).on('click', '#deleteCustomerFrom', function(){
		var customers_id = $(this).attr('customers_id');
		$('#customers_id').val(customers_id);
		$("#deleteCustomerModal").modal('show');
	});
	
	//deletemanufacturerModal
	$(document).on('click', '#manufacturerFrom', function(){
		var manufacturers_id = $(this).attr('manufacturers_id');
		$('#manufacturers_id').val(manufacturers_id);
		$("#manufacturerModal").modal('show');
	});
	
	//deleteCountrytModal
	$(document).on('click', '#deleteCountryId', function(){
		var countries_id = $(this).attr('countries_id');
		$('#countries_id').val(countries_id);
		$("#deleteCountryModal").modal('show');
	});
	
	//deleteZoneModal
	$(document).on('click', '#deletezoneId', function(){
		var zone_id = $(this).attr('zone_id');
		$('#zone_id').val(zone_id);
		$("#deleteZoneModal").modal('show');
	});
	
	//deleteTaxClassModal
	$(document).on('click', '#deleteTaxClassId', function(){
		var tax_class_id = $(this).attr('tax_class_id');
		$('#tax_class_id').val(tax_class_id);
		$("#deleteTaxClassModal").modal('show');
	});
	
	//deleteTaxRateModal
	$(document).on('click', '#deleteTaxRateId', function(){
		var tax_rates_id = $(this).attr('tax_rates_id');
		$('#tax_rates_id').val(tax_rates_id);
		$("#deleteTaxRateModal").modal('show');
	});
	
	//deleteOrderStatusModal
	$(document).on('click', '#deleteOrderStatusId', function(){
		var orders_status_id = $(this).attr('orders_status_id');
		$('#orders_status_id').val(orders_status_id);
		$("#deleteOrderStatusModal").modal('show');
	});
	
	//deletelanguageModal
	$(document).on('click', '#deleteLanguageId', function(){
		var languages_id = $(this).attr('languages_id');
		$('#languages_id').val(languages_id);
		$("#deleteLanguagesModal").modal('show');
	});
	
	//deleteTaxRateModal
	$(document).on('click', '#deleteCoupans_id', function(){
		var coupans_id = $(this).attr('coupans_id');
		$('#coupans_id').val(coupans_id);
		$("#deleteCoupanModal").modal('show');
	});
	
	//deleteTaxClassModal
	$(document).on('click', '#deleteBannerId', function(){
		var banners_id = $(this).attr('banners_id');
		$('#banners_id').val(banners_id);
		$("#deleteBannerModal").modal('show');
	});
	
	//elimina publicidad
	$(document).on('click', '#deleteImageId', function(){
		var images_id = $(this).attr('images_id');
		$('#image_id').val(images_id);
		$("#deleteImageModal").modal('show');
		
	});
	
	//deleteNewsCategoryModal
	$(document).on('click', '#deleteNewsCategroyId', function(){
		var id = $(this).attr('category_id');
		$('#id').val(id);
		$("#deleteNewsCategoryModal").modal('show');
	});
	
	//deleteFaultsCategoryModal
	$(document).on('click', '#deleteFaultsCategroyId', function(){
		var id = $(this).attr('category_id');
		$('#id').val(id);
		$("#deleteFaultsCategoryModal").modal('show');
	});
	
	//deleteFaultsId
	$(document).on('click', '#deleteFaultsId', function(){
		var id = $(this).attr('category_id');
		$('#id').val(id);
		$("#deleteFaultsModal").modal('show');
	});
	
	
	//deleteNewsModal
	$(document).on('click', '#deleteNewsId', function(){
		var id = $(this).attr('news_id');
		$('#id').val(id);
		$("#deleteNewsModal").modal('show');
	});
	
	//traer grados AddNewsCategory
	$(document).on('click', '.chkCategory', function(e){
	   //e.preventDefault();
	    var nombreChk   =   $(this).attr('id');
	    var nombrex     =   $(this).attr('nombre');
	    var divNoChk    =   '#div'+nombrex;
        var selectNoChk =   '.select_'+nombrex+'_id';
	    
	    if($(this).is(':checked')){
	        
	        datos={
              
              "solicitud" 	:   nombreChk,
              "nombre"      :   nombrex
            }
        
            $.ajax({
            		url: '{{ URL::to("admin/gradosAddCategory") }}',
            		type: "GET",
            		data: datos,//formData,
            		//async: false,
            		success: function (data) {
            		   
            		    
            		    var i;
            		    var     j           =   0;
                        var     showData    =   [];
                        var     solicitud   =   data[0];
                        var     nombreId    =   data[2];
                        var     div         =   '#div'+nombreId;
                		var     selec       =   '.select_'+nombreId+'_id';
            		    const   objectArray =   Object.entries(data[1]);
            		    
            		    
            		    if(objectArray.length > 0 ){
            		        
            		        
                		    if( solicitud == 'chkGrados'){
                		        altura  = '15em';
                		        
                                objectArray.forEach(([sede, objGrados]) => {
                                            
                                    const objectArrayGrados = Object.entries(objGrados);
                                    objectArrayGrados.forEach(([key, values]) => {
                                                   
                                        const ArrayGrados = Object.entries(values);
                                        
                                        ArrayGrados.forEach(([clave, valor]) => {
                                                      
                                            if(Array.isArray(valor)){
                                               var id_sede   = ArrayGrados[2][1];               
                                                for($i=0; $i < valor.length; $i++){
                                                               
                                                    showData[j] = "<option value='"+id_sede+"-"+valor[$i]+"'>"+sede+"_"+valor[$i]+"</option>";
                                                    j++;
                                                                                    
                                                }
                                                                       
                                            }  
                                                        
                                        })
                                    
                                    })
                                            
                                })
                    	     
                		    }
                		    else
                		    if( solicitud == 'chkCoordinadores'){
                		        var j   =   0;
                		        objectArray.forEach( ([sede, objCoordinador])=>{
                		            if( Array.isArray( objCoordinador ) ){
                		                var i;
                		                for( i = 0; i < objCoordinador.length; i++){
                		                    /*[ 0 => id_pre_registro: "10014" , 
                		                        1 => identificacion: "17310847", 
                		                        2 => nombre: "VACA BOBADILLA INMAR NELSON", 
                		                        3 => sede: "20"]*/
                		                    const id_pre_registro   = Object.entries(objCoordinador[i])[0][1];
                		                    const nombre            = Object.entries(objCoordinador[i])[2][1];
                		                    showData[j] = "<option value='"+id_pre_registro+"'>"+sede+"_"+nombre+"</option>";
                		                    j++;
                		                }
                		            }
                		        })
                		   
                		    }
                		    else
                		    if( solicitud == 'chkDocentes'){
                		        var j   =   0;
                		        objectArray.forEach( ([sede, objDocentes])=>{
                		            if( Array.isArray( objDocentes ) ){
                		                var i;
                		                for( i = 0; i < objDocentes.length; i++){
                		                    /*[ 0 => id_pre_registro: "10014" , 
                		                        1 => identificacion: "17310847", 
                		                        2 => nombre: "VACA BOBADILLA INMAR NELSON", 
                		                        3 => sede: "20"]*/
                		                    const id_pre_registro   = Object.entries(objDocentes[i])[0][1];
                		                    const nombre            = Object.entries(objDocentes[i])[2][1];
                		                    showData[j] = "<option value='"+id_pre_registro+"'>"+sede+"_"+nombre+"</option>";
                		                    j++;
                		                }
                		            }
                		        })
                		   
                		    }
                		    else
                		    if( solicitud == 'chkAsoPadres'){
                		        var j   =   0;
                		        objectArray.forEach( ([sede, objAsopadres])=>{
                		            if( Array.isArray( objAsopadres ) ){
                		                var i;
                		                for( i = 0; i < objAsopadres.length; i++){
                		                    /*[ 0 => id_pre_registro: "10014" , 
                		                        1 => identificacion: "17310847", 
                		                        2 => nombre: "VACA BOBADILLA INMAR NELSON", 
                		                        3 => sede: "20"]*/
                		                    const id_pre_registro   = Object.entries(objAsopadres[i])[0][1];
                		                    const nombre            = Object.entries(objAsopadres[i])[2][1];
                		                    showData[j] = "<option value='"+id_pre_registro+"'>"+sede+"_"+nombre+"</option>";
                		                    j++;
                		                }
                		            }
                		        })
                		    
                		      
                		    }
                		    else
                		    if( solicitud == 'chkAdministrativos'){
                		        var j   =   0;
                		        objectArray.forEach( ([sede, objAdministrativo])=>{
                		            if( Array.isArray( objAdministrativo ) ){
                		                var i;
                		                for( i = 0; i < objAdministrativo.length; i++){
                		                    /*[ 0 => id_pre_registro: "10014" , 
                		                        1 => identificacion: "17310847", 
                		                        2 => nombre: "VACA BOBADILLA INMAR NELSON", 
                		                        3 => sede: "20"]
                		                        4 => nombre_rol:psicoorientador*/
                		                    const id_pre_registro   = Object.entries(objAdministrativo[i])[0][1];
                		                    const nombre            = Object.entries(objAdministrativo[i])[2][1];
                		                    const rol               = Object.entries(objAdministrativo[i])[4][1];
                		                    showData[j] = "<option value='"+id_pre_registro+"'>"+sede+"_"+rol+"_"+nombre+"</option>";
                		                    j++;
                		                }
                		            }
                		        })
                		      
                		    }
                		    
                		    var altura  = (j <= 8)?( ( j * 1.6 )+'em'):'15em';
                		    
                		    $(div).css('display','block');
                		    $(selec).css('height',altura);
            				$(selec).html(showData); 
            				
                              
    				    }else{
    				        $(div).css('display','block');
    				        $(selec).html("<option value=''>No se hallaron resultados! Consulte con su administrador</option>");
    				    }
            		}
       	
            });
		
		//$('.device_id > input').attr('disabled', true);
	    }else{

	        $(selectNoChk).html("");
    		$(divNoChk).css('display','none');
	    
	    }
	
	});
	
		//deleteAdvertisingModal
	$(document).on('click', '#deleteAdvertisingId', function(){
		var id = $(this).attr('advertising_id');
		$('#idPublicidad').val(id);
		$("#deleteAdvertisingModal").modal('show');
	});
	
	  //view points
	$(document).on('change', '#advertising_addPoints', function(e){
	    
	    e.preventDefault();
	    
		var points = $(this).val();
		var nowPoints = $("#Advertising_NowPoints").val();
		 if(parseInt( points )  >= 50 || parseInt( nowPoints ) >= 10)
		    $("#div_advertising_customersPoints").css('display','block');
		 else
		    $("#div_advertising_customersPoints").css('display','none');
		  
		
	});
	
		//deleteEventModal
	$(document).on('click', '#deleteEventId', function(){
		var id = $(this).attr('event_id');
		$('#idEvent').val(id);
		$("#deleteEventModal").modal('show');
	});

//	deleteBonoId
		$(document).on('click', '#deleteBonoId', function(){
		var id = $(this).attr('Bono_id');
		$('#idBono').val(id);
		$("#deleteBonoModal").modal('show');
	});
	
//	deleteBonoAsopadres
		$(document).on('click', '#deleteBonoAsopadre', function(){
		var id = $(this).attr('Bono_id');
		$('#idBonoAsopadres').val(id);
		$("#deleteAsopadreModal").modal('show');
	});

//	deleteAsopadres
		$(document).on('click', '#deleteAsopadre', function(){
		    
		var idCustomers     =   $(this).attr('customers_id');
		var idpreRegistro   =   $(this).attr('preRegistro_id');

		$('#idpreRegistro').val(idpreRegistro);
		$('#idCustomers').val(idCustomers);
		$("#deleteAsopadresModal").modal('show');
	});	

	//deletePageModal
	$(document).on('click', '#deletePageId', function(){
		var id = $(this).attr('page_id');
		$('#id').val(id);
		$("#deletePageModal").modal('show');
	});
	
	//deleteTaxClassModal
	$(document).on('click', '#deleteOrdersId', function(){
		var orders_id = $(this).attr('orders_id');
		$('#orders_id').val(orders_id);
		$("#deleteModal").modal('show');
	});
	
	
	//edit option value
	$(document).on('click', '.edit-value', function(){
		var value = $(this).attr('value');
		$(".form-p-"+value).hide();
		$(".form-content-"+value).show();
	});
	
	//cancel option value
	$(document).on('click', '.cancel-value', function(){
		var value = $(this).attr('value');
		$(".form-content-"+value).hide();
		$(".form-p-"+value).show();
	});
	
	
	
	@if (Request::is('admin/editCustomers/*'))
	{
		changePassword();
	}
	@endif

////////////////////////////////////////////////////////////////////
 
 	//getRange
	$(document).on('click', '.getRangeBonoAsopadre', function(){
	 
	    
	    var dateRangeAsopadre = $('.dateRangeBonoAsopadre').val();
	    
		if(dateRangeAsopadre != ''){
		    
			$('.dateRangeBonoAsopadre').parent('.input-group').removeClass('has-error');
			dateRangeAsopadre = dateRangeAsopadre.replace(/-/g , "_");
			dateRangeAsopadre = dateRangeAsopadre.replace(/\//g , "-");
			dateRangeAsopadre = dateRangeAsopadre.replace(/ /g , "");
			
			var id_sede     =   ($("#id_sede").val()   == "")?0:$("#id_sede").val();
			var id_grado    =   ($("#id_grado").val()  == "")?0:$("#id_grado").val();
			var students    =   ($("#students").val()  == "")?0:$("#students").val();
      

			
			//alert(dateRangeAsopadre);
			window.location="{{URL::to('admin/asopadresExcel')}}"+"/"+id_sede+"/"+students+"/"+id_grado+"/"+dateRangeAsopadre;  
		//	alert(dateRangeVentas);
		/*	$.ajax({
        	  url: "{{ URL::to('admin/productDateSales')}}",
        	  dataType: 'json',
        	  type: "post",
        	  data: '&fechasx='+dateRangeVentas,
        	  success: function(data){
        	      
        	      
        		//alert(data);
        	//	console.log(data.data.length);
        	//	console.log(data.data);
        		var showData="";
        		
        		if(data.data.length>0){
        		
        		}else{
        		    
        			showData = "<tr><td>No se hallaron registros para las fechas seleccionadas</td></tr>"; 				
        		}
        		
        		$("#cuerpoVentas").html(showData);
        			
        			
        			
        	  }
        	});
	
	*/
		//	window.location="{{URL::to('admin/dashboard')}}"+"/"+reportBase+"/"+dateRangeVentas+"/"+reportPie;
		}
		else{
			$('.dateRangeBonoAsopadre').parent('.input-group').addClass('has-error');
		}
	});	
	
 ////////////////////////////////////////////////////////////////////
 
 	//getRange
	$(document).on('click', '.getRangeVentas', function(){
	    
	    
	    var dateRangeVentas = $('.dateRangeVentas').val();
	    
		if(dateRangeVentas != ''){
			$('.dateRangeVentas').parent('.input-group').removeClass('has-error');
			dateRangeVentas = dateRangeVentas.replace(/-/g , "_");
			dateRangeVentas = dateRangeVentas.replace(/\//g , "-");
			dateRangeVentas = dateRangeVentas.replace(/ /g , "");
		//	alert(dateRangeVentas);
			$.ajax({
        	  url: "{{ URL::to('admin/productDateSales')}}",
        	  dataType: 'json',
        	  type: "post",
        	  data: '&fechasx='+dateRangeVentas,
        	  success: function(data){
        	      
        	      
        		//alert(data);
        	//	console.log(data.data.length);
        	//	console.log(data.data);
        		var showData="";
        		
        		if(data.data.length>0){
        			var i;
        			sumaTotal=0;
        			for (i = 0; i < data.data.length; ++i) {
        			    
        				showData+='<tr><td>'+(i+1)+'</td>'+
                                  '<td><strong>'+data.data[i].products_name+'</strong></td><td align="center">'+data.data[i].cantidad+'</td>'+
                                  '<td align="center">'+data.data[i].subTotal+'</td><td align="center">'+
                            	  '<a href="editProduct/'+data.data[i].products_id+'" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td></tr>';
                    sumaTotal+=parseInt(data.data[i].subTotal);    	  
        			}
        			showData+='<tr class="danger">'+
                         '<td scope="row"></td>'+
                         '<td colspan="2" style="font-size:2em;"><b>Total</b></td>'+
                         '<td style="font-size:2em;"><b>'+sumaTotal+'</b></td>'+
                         
                         '<td align="center"><a style="margin-top:0.5em;" href="reportExcelSales/'+dateRangeVentas+'" class="badge bg-green"><i class="fa fa-file-excel-o" style="font-size:18px"></i> </a></td>'+
                       '</tr>';
        		}else{
        		    
        			showData = "<tr><td>No se hallaron registros para las fechas seleccionadas</td></tr>"; 				
        		}
        		
        		$("#cuerpoVentas").html(showData);
        			
        			
        			
        	  }
        	});
	
	
		//	window.location="{{URL::to('admin/dashboard')}}"+"/"+reportBase+"/"+dateRangeVentas+"/"+reportPie;
		}
		else{
			$('.dateRangeVentas').parent('.input-group').addClass('has-error');
		}
	});	
 ////////////////////////////////////////////////////////////////////
 
 	//getRangeTransactions
	$(document).on('click', '.getRangeTransactions', function(){
	    
	    var error   = 0;
	    if( $("#medioTransaction").val() == '' ) {
	        	$('#medioTransaction').parent('.form-group').addClass('has-error');
		    error=1;
	    }    
	    if( $("#clienteTransaction").val() == '' ) {
	        	$('#clienteTransaction').parent('.form-group').addClass('has-error');
		    error=1;
	    }
	    
		if($('.dateRangeTransactions').val() == ''){
		    	$('.dateRangeTransactions').parent('.input-group').addClass('has-error');
		    	   error=1;
		}
		 
		 if(error == 0){
		     
		    var medio                 = $("#medioTransaction").val();
		    var cliente               = $("#clienteTransaction").val();
		    var dateRangeTransactions = $('.dateRangeTransactions').val();
		    
		
			//$('.dateRangeCompras').parent('.input-group').removeClass('has-error');
			dateRangeTransactions = dateRangeTransactions.replace(/-/g , "_");
			dateRangeTransactions = dateRangeTransactions.replace(/\//g , "-");
			dateRangeTransactions = dateRangeTransactions.replace(/ /g , "");
		
			$.ajax({
        	  url: "{{ URL::to('admin/getTransactions')}}",
        	  type: "post",
        	  data: '&fechasx='+dateRangeTransactions+'&medio='+medio+'&cliente='+cliente,
        	  success: function(data){
        	      
        	      
        		//alert(data);
        	//	console.log(data);
        		
        		var showData="";
        		
        		if(data.length>0){
        			var i;
        			$(".transaccionTable").css('display','block');
        			
        			for (i = 0; i < data.length; i++) {
        			    
        				showData+='<tr><td>'+(i+1)+'</td><td>'+data[i].descripcion+'</td>'+
                                  '<td align="center">'+data[i].origen+'</td>'+
                                  '<td align="center">'+data[i].valor_transaccion+'</td>'+
                                  '<td align="center">'+data[i].fecha_transaccion+'</td>'+
                                  '<td align="center">'+data[i].nombre+'</td><tr>';
                                  
        			}
        		}else{
        			showData = "<tr><td>No se hallaron registros para los datos seleccionadas</td></tr>"; 				
        		}
        		
        		$("#cuerpoTransacciones").html(showData);
        			
        			
        			
        	  },
        	  error:function(){
        	      console.error("no fue posibleyy");
        	  }
        	});
	
	}
		//	window.location="{{URL::to('admin/dashboard')}}"+"/"+reportBase+"/"+dateRangeVentas+"/"+reportPie;
		
	});
 
 ////////////////////////////////////////////////////////////////////
 
 
 
  	//getRangeDeliveryProducts
	$(document).on('click', '.getRangeDelivery', function(){
	    
	    var error   = 0;
	    
		if($('.dateRangeTransactions').val() == ''){
		    	$('.dateRangeTransactions').parent('.input-group').addClass('has-error');
		    	   error=1;
		}
		 
		 if(error == 0){
		     
		    var dateRangeTransactions = $('.dateRangeTransactions').val();
		    
		
			//$('.dateRangeCompras').parent('.input-group').removeClass('has-error');
			dateRangeTransactions = dateRangeTransactions.replace(/-/g , "_");
			dateRangeTransactions = dateRangeTransactions.replace(/\//g , "-");
			dateRangeTransactions = dateRangeTransactions.replace(/ /g , "");
		
			$.ajax({
        	  url: "{{ URL::to('admin/getProductsToDay')}}",
        	  type: "post",
        	  data: '&fechasx='+dateRangeTransactions,
        	  success: function(datos){
        	      
        	      
        	      
                   data=datos.resultado;
                
        		var showData="";
        		var i;
        		$("#cuerpoEntregas").html('');
        		if( data.length > 0){
        		    
        		    $("#pdfDelivery").css('display','block');
        		    $("#desdeDelivery").val(datos.desde);
                    $("#hastaDelivery").val(datos.hasta);
                    fechasX = datos.desde+"&nbsp;/&nbsp;"+datos.hasta;
                    $("#dateToDay").html('');
                    $("#dateToDay").html(fechasX);
        		    totals = 0;
        			for (i = 0; i < data.length; i++) {
        			    
        			    clase=(i % 2 == 0)?"active":"default";
        			    
        				showData+='<tr class="'+clase+'"><td>'+(i+1)+'</td><td>'+data[i].nombre+'</td>'+
                                  '<td align="center">'+data[i].cantidad+'</td><tr>';
                        totals+=parseInt(data[i].cantidad);
        			}
        			   showData+='<tr class="danger">'
                                 +'<td colspan="2" style="font-size:2em;"><b><span style="float:right">Total</span></b></td>'
                                 +'<td style="font-size:2em;"><b>'+totals+'</b></td></tr>';
        		}else{
        		       $("#pdfDelivery").css('display','none');
        		    	showData = '<tr><td colspan="3" style="font-size:2em;">No se hallaron registros para los datos seleccionadas</td></tr>'; 				
        		}
        		
        		
        		
        		$("#cuerpoEntregas").html(showData);
        			
        			
        			
        	  },
        	  error:function(){
        	      console.error("no fue posiblexx");
        	      
        	  }
        	});
	
	}
		//	window.location="{{URL::to('admin/dashboard')}}"+"/"+reportBase+"/"+dateRangeVentas+"/"+reportPie;
		
	});
 
 ////////////////////////////////////////////////////////////////////
 
 
 	//getRange
	$(document).on('click', '.getRangeCompras', function(){
	    
	    
	    var dateRangeCompras = $('.dateRangeCompras').val();
	    
		if(dateRangeCompras != ''){
			$('.dateRangeCompras').parent('.input-group').removeClass('has-error');
			dateRangeCompras = dateRangeCompras.replace(/-/g , "_");
			dateRangeCompras = dateRangeCompras.replace(/\//g , "-");
			dateRangeCompras = dateRangeCompras.replace(/ /g , "");
			//alert(dateRangeCompras);
			$.ajax({
        	  url: "{{ URL::to('admin/productDateSold')}}",
        	  dataType: 'json',
        	  type: "post",
        	  data: '&fechasx='+dateRangeCompras,
        	  success: function(data){
        	      
        	      
        		//alert(data);
        	//	console.log(data.data.length);
        	//	console.log(data.data[0]);
        		var showData="";
        		
        		if(data.data.length>0){
        			var i;
        			
        			for (i = 0; i < data.data.length; ++i) {
        			    
        				showData+='<tr><td>'+(i+1)+'</td><td>'+data.data[i].proveedor+'</td>'+
                                  '<td><strong>'+data.data[i].producto+'</strong></td><td align="center">'+data.data[i].cantidad+'</td>'+
                                  '<td align="center">'+data.data[i].precio+'</td>'+
                                  '<td align="center">'+data.data[i].precio*data.data[i].cantidad+'</td>'+
                                  '<td align="center">'+data.data[i].fecha+'</td>'+
                            	  '<td><a href="editProduct/'+data.data[i].products_id+'" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td></tr>'
        			}
        		}else{
        			showData = "<tr><td>No se hallaron registros para las fechas seleccionadas</td></tr>"; 				
        		}
        		
        		$("#cuerpoVentas").html(showData);
        			
        			
        			
        	  }
        	});
	
	
		//	window.location="{{URL::to('admin/dashboard')}}"+"/"+reportBase+"/"+dateRangeVentas+"/"+reportPie;
		}
		else{
			$('.dateRangeVentas').parent('.input-group').addClass('has-error');
		}
	});
	
 
	//getRange
	$(document).on('click', '.getRangeBar', function(){
	    
	    
	    var dateRangeBar = $('.dateRangeBar').val();
	    var reportPie = $('#reportPie').val();
	    var reportBase = $('#reportBase').val();
		
		if(dateRangeBar != ''){
			$('.dateRangeBar').parent('.input-group').removeClass('has-error');
			dateRangeBar = dateRangeBar.replace(/-/g , "_");
			dateRangeBar = dateRangeBar.replace(/\//g , "-");
			dateRangeBar = dateRangeBar.replace(/ /g , "");
		//	alert(dateRangeBar);
			window.location="{{URL::to('admin/dashboard')}}"+"/"+reportBase+"/"+dateRangeBar+"/"+reportPie;
		}
		else{
			$('.dateRangeBar').parent('.input-group').addClass('has-error');
		}
	});
	
	
 //getRangeCircle
	$(document).on('click', '.getRangePie', function(){
	    
	    var dateRangePie = $('.dateRangePie').val();
	    var reportBar = $('#reportBar').val();
		var reportBase = $('#reportBase').val();
		
		if(dateRangePie != ''){
			$('.dateRangePie').parent('.input-group').removeClass('has-error');
			dateRangePie = dateRangePie.replace(/-/g , "_");
			dateRangePie = dateRangePie.replace(/\//g , "-");
			dateRangePie = dateRangePie.replace(/ /g , "");
		//	alert(dateRangePie);
			window.location="{{URL::to('admin/dashboard')}}"+"/"+reportBase+"/"+reportBar+"/"+dateRangePie;
		}else{
			$('.dateRangePie').parent('.input-group').addClass('has-error');
		}
	});
 
 
	//getRange
	$(document).on('click', '.getRange', function(){
	    var reportPie = $('#reportPie').val();
	    var reportBar = $('#reportBar').val();
		var dateRange = $('.dateRange').val();
		if(dateRange != ''){
			$('.dateRange').parent('.input-group').removeClass('has-error');
			dateRange = dateRange.replace(/-/g , "_");
			dateRange = dateRange.replace(/\//g , "-");
			dateRange = dateRange.replace(/ /g , "");
		//	alert(dateRange);
			window.location="{{URL::to('admin/dashboard')}}"+"/"+dateRange+"/"+reportBar+"/"+reportPie;
		}else{
			$('.dateRange').parent('.input-group').addClass('has-error');
		}
	});
/////////////////////////////////////////////////////////////	
	//getRange
	$(document).on('click', '.default_method', function(){
		var shipping_id = $(this).attr('shipping_id');
		//alert(shipping_id);
		$.ajax({
			url: '{{ URL::to("admin/defaultShippingMethod")}}',
			type: "POST",
			data: '&shipping_id='+shipping_id,
			success: function (data) {
				$('.default-div').removeClass('hidden');
			},
		});
	});
	
	//product options language
	$(document).on('change', '.language_id', function(){
		var language_id = $(this).val();
		getOptions(language_id);
	});
	
	//product options option with language id
	$(document).on('change', '.default-option-id', function(){
		var option_id = $(this).val();
		getOptionsValue(option_id);
	});
	
	//product options language
	$(document).on('change', '.edit_language_id', function(){
		var language_id = $(this).val();
		getEditOptions(language_id);
	});
	
	//product options option with language id
	$(document).on('change', '.edit-default-option-id', function(){
		var option_id = $(this).val();
		getEditOptionsValue(option_id);
	});
	
	
	
	
	
	
	//product options language
	$(document).on('change', '.additional_language_id', function(){
		var language_id = $(this).val();
		getAdditionalOptions(language_id);
	});
	
	//product options option with language id
	$(document).on('change', '.additional-option-id', function(){
		var option_id = $(this).val();
		getAdditionalOptionsValue(option_id);
	});
	
	//product options language
	$(document).on('change', '.edit_additional_language_id', function(){
		var language_id = $(this).val();
		getEditAdditionalOptions(language_id);
	});
	
	//product options option with language id
	$(document).on('change', '.edit-additional-option-id', function(){
		var option_id = $(this).val();
		getEditAdditionalOptionsValue(option_id);
	});
	
	////////hasta aqui on de jquery
	
});

/////promesa de filtros hasta que no llegue la consul bd no se muestra el select////////
  
function traerDatosFiltroPromesa(datos) { 
    // return new Promise((resolve, reject) => {  // reject si deseamos devolver un error
  return new Promise(resolve => {
    
          	$.ajax({
		            url: '{{ URL::to("admin/validarFiltro")}}',
		            //dataType: 'json',
		            type: "POST",
		            data: datos,//'&filtro_id='+valCheckbox+'_school&sede='+id_sedes,
		            //async: false,
		            
		            success: function (rpta) {
		                
		                  resolve(rpta); 
		             },

                });
   });
}

async function traerFiltro(datos) {
    try{
        var rpta = await traerDatosFiltroPromesa(datos);
        
            if(rpta.rpta.length > 0){
                        let options      = "";
                        let nombreSelect = "#id_"+rpta.filtro;
                        let input_x      = "#"+rpta.filtro+"-filtro";
                        
		                $("select"+nombreSelect).html('');
		                
		                if(rpta.rpta.length > 0){
		                    
		                    options+='<option value="" selected>Todo_'+rpta.filtro+'</option>';
		                    opciones = rpta.rpta;
		                    opciones.forEach(function(element) {
		                    
		       		            options+='<option value="'+element["id_elemento"]+'">'+element["nombre"]+'</option>';
		       	            
		                   });      
		                }
		                else{
		                   // console.log(rpta);
		                 options='<option value="" selected>sin_'+rpta.filtro+'</option>';
		                }
		                 
		                 $("select"+nombreSelect).append(options);
              
                $(input_x).css('display','block');
        }    
    }
    catch(e){
        console.log(e); 
    }    
}



/////fin de la promesa de filtros hasta que no llegue la consul bd no se muestra el select////////

	
function getOptions(languages_id) {
	//alert(languages_id);
	$.ajax({
		url: '{{ URL::to("admin/getOptions")}}',
		type: "POST",
		data: '&languages_id='+languages_id,
		success: function (data) {
			/*if(data.length != ''){
			}
			*/
			$('.default-option-id').html(data);
		},
	});
}

	
function getOptionsValue(option_id) {
	var language_id = $('.language_id').val();
	$.ajax({
		url: '{{ URL::to("admin/getOptionsValue")}}',
		type: "POST",
		data: '&option_id='+option_id+'&language_id='+language_id,
		success: function (data) {
			$('.products_options_values_id').html(data);
		},
	});
}

function getEditOptions(languages_id) {
	//alert(languages_id);
	$.ajax({
		url: '{{ URL::to("admin/getOptions")}}',
		type: "POST",
		data: '&languages_id='+languages_id,
		success: function (data) {
			/*if(data.length != ''){
			}
			*/
			$('.edit-default-option-id').html(data);
		},
	});
}

	
function getEditOptionsValue(option_id) {
	
	var language_id = $('.edit_language_id').val();
	//alert(language_id);
	$.ajax({
		url: '{{ URL::to("admin/getOptionsValue")}}',
		type: "POST",
		data: '&option_id='+option_id+'&language_id='+language_id,
		success: function (data) {
			$('.edit-products_options_values_id').html(data);
		},
	});
}






function getAdditionalOptions(languages_id) {
	//alert(languages_id);
	$.ajax({
		url: '{{ URL::to("admin/getOptions")}}',
		type: "POST",
		data: '&languages_id='+languages_id,
		success: function (data) {
			/*if(data.length != ''){
			}
			*/
			$('.additional-option-id').html(data);
		},
	});
}

	
function getAdditionalOptionsValue(option_id) {
	
	var language_id = $('.additional_language_id').val();
	$.ajax({
		url: '{{ URL::to("admin/getOptionsValue")}}',
		type: "POST",
		data: '&option_id='+option_id+'&language_id='+language_id,
		success: function (data) {
			$('.additional_products_options_values_id').html(data);
		},
	});
}

function getEditAdditionalOptions(languages_id) {
	//alert(languages_id);
	$.ajax({
		url: '{{ URL::to("admin/getOptions")}}',
		type: "POST",
		data: '&languages_id='+languages_id,
		success: function (data) {
			$('.edit-additional-option-id').html(data);
		},
	});
}

	
function getEditAdditionalOptionsValue(option_id) {
	
	var language_id = $('.edit_additional_language_id').val();
	//alert(language_id);
	$.ajax({
		url: '{{ URL::to("admin/getOptionsValue")}}',
		type: "POST",
		data: '&option_id='+option_id+'&language_id='+language_id,
		success: function (data) {
			$('.edit-additional-products_options_values_id').html(data);
		},
	});
}







//getSubCategory
function getSubCategory() {
	
	@if(Request::path() == 'admin/addProduct')
		//var getCategories = 'getCategories';
	 	var getCategories =	'{{ URL::to("getCategories")}}';
	 
	@else
		var getCategories = '{{ URL::to("getCategories")}}';
	@endif
	
	var category_id = $('#category_id').val();
	if(category_id != ''){
		$.ajax({
			url: getCategories,
			type: "POST",
			data: '&category_id='+category_id,
			success: function (data) {
				if(data.length != ''){
					var i;
					var showData = [];
					for (i = 0; i < data.length; ++i) {
						showData[i] = "<option value='"+data[i].id+"'>"+data[i].name+"</option>";
					}
					$("#sub_category_id").html(showData);
				}else{
					$("#sub_category_id").html("<option value=''>Please Select</option>");
				}
			},
		});
	}
}

//showSpecial
function showSpecial() {
	if($('#isSpecial').val() == 'yes'){
		$(".special-container").show();
		$(".special-container input#expiry-date").addClass("field-validate");
		$(".special-container input#special-price").addClass("number-validate");
		
		//number-validate
	}else{
		$(".special-container").hide();
		$(".special-container input#expiry-date").removeClass("field-validate");
		$(".special-container input#special-price").removeClass("number-validate");
	}
}

/////////////////Menus////////////////////////////
   /*function agregarMenu(contadorMenus,dia,valor){

      	    //valor=(valor=="[object Object]")?"":1;
    		var nuevoMenu="";
    		            
            //identificador del div group que se pondra en el buton X
            dataFormGroup="dataFormGroup"+dia+"Menus"+contadorMenus;

             //se crean los div group deacuerdo al dia pulsado y el numero de menus que deseen en contador de meus
    		nuevoMenu= '<div class="form-group" id="'+dataFormGroup+'">'+
							'<label for="'+dia+'Menu'+contadorMenus+'">'+
							'Menu '+contadorMenus+
							'</label> <button type="button" data-dia="'+dia+'" data-form-group="'+dataFormGroup+'" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
							'<input type="text" value="'+valor+'" class="field-validate form-control '+dia+'Menu'+contadorMenus+'" id="'+dia+'Menu'+contadorMenus+'" name="'+dia+'Menu'+contadorMenus+'"></div>';
			//parte derecha o contenedor de los menus				
			contenedor="contenedor"+dia+"Menus";
			$("#"+contenedor).append(nuevoMenu);

      }*/
function showMenu() {
	if($('#isMenu').val() == 'yes'){
		$(".menu-container").show();
	/*	$(".menu-container input#LunesMenu1").addClass("field-validate");
		$(".menu-container input#MartesMenu1").addClass("field-validate");
		$(".menu-container input#MiercolesMenu1").addClass("field-validate");
		$(".menu-container input#JuevesMenu1").addClass("field-validate");
		$(".menu-container input#ViernesMenu1").addClass("field-validate");*/
		
		//number-validate
	}else{
		$(".menu-container").hide();
		/*$(".menu-container input#LunesMenu1").removeClass("field-validate");
		$(".menu-container input#MartesMenu1").removeClass("field-validate");
		$(".menu-container input#MiercolesMenu1").removeClass("field-validate");
		$(".menu-container input#JuevesMenu1").removeClass("field-validate");
		$(".menu-container input#ViernesMenu1").removeClass("field-validate");
		/*$(".special-container input#expiry-date").removeClass("field-validate");
		$(".special-container input#special-price").removeClass("number-validate");*/
	}
}
////////////////////Hasta aqui agregar menus y validate a los dias/////////////////////////////////
        $(document).on('click','.close',function(e){

        	dia  = $(this).attr("data-dia");
        	dataFormGroup=$(this).attr("data-form-group");
        	idContenedor = "contenedor"+dia+"Menus";

            copiaContadorMenus =  $("#"+dia).attr("data-contador");
            copiaContadorMenus = (parseInt(copiaContadorMenus)-1);

    		$("#"+dia).attr("data-contador",copiaContadorMenus);
            
        	$("#"+dataFormGroup).remove();	
     		
     		var arreglo = [];
            $("#"+idContenedor+" input[type=text]").each(function(){

            	 
            	 inpu=$(this).attr("id");
            	 valor=$("#"+inpu).val();
            	 
            	 arreglo.push({inpu:valor});	

            	 

            }) 

        	$("#"+idContenedor).empty();

          //   console.log(arreglo);
          
          if (arreglo.length > 0) {
          	var i=2;
          	var valor;
            for(key in arreglo){ 
            
              valor= arreglo[key].inpu;
              agregarMenu(i,dia,valor);
              i++;

            }

          }  	
            



        });


    	$(document).on('click','.dias',function(e){
    
       		dia 		  =  $(this).attr("data-name");
    		contadorMenus =  $(this).attr("data-contador");
    		contadorMenus = (parseInt(contadorMenus)+1);
    		
    		$(this).attr("data-contador",contadorMenus);
            
            agregarMenu(contadorMenus,dia,"");
            

    	})


	
$(function () {
	$('.datepicker').datepicker({
	  autoclose: true,
	  format: 'dd/mm/yyyy'
	});

});


function banner_type(){
	var type = $(this).val();
	//alert(type);
	if(type=='category'){
		$('.categoryContent').show();
		$('.productContent').hide();
	}else if(type=='product'){
		$('.categoryContent').hide();
		$('.productContent').show();
	}else{
		$('.categoryContent').hide();
		$('.productContent').hide();	
	}
}
$(document).on('change','.choseOption',function(){
	//console.log('here');
	var content = $(this).attr('content');
	var choseOption = $(this).val();
	//console.log(choseOption);
	
	if(choseOption == 'new'){
		$('.field-validate_'+content).addClass('field-validate');
		$('.newAttribute_'+content).show();
		$('.oldAttribute_'+content).hide();
	}else if(choseOption == 'old'){	
		$('.field-validate_'+content).removeClass('field-validate');
		$('.newAttribute_'+content).hide();
		$('.oldAttribute_'+content).show();
	}
	
});


$(document).on('change', '#bannerType', function(e){
	var type = $(this).val();
	
	if(type=='category'){
		$('.categoryContent').show();
		$('.productContent').hide();
	}else if(type=='product'){
		$('.categoryContent').hide();
		$('.productContent').show();
	}else{
		$('.categoryContent').hide();
		$('.productContent').hide();	
	}
	
});

//notifyTo
$(document).on('click', '.notifyTo', function(e){
	
	if($(this).is(':checked')){
		//alert('checked');
		$('.device_id > input').attr('disabled', true);
	}else{
		$('.device_id > input').removeAttr('disabled');
	}
});

//filter devieces
$(document).on('change', '.filter-devieces', function(e){
	var filter_devices = $(this).val();
	
	/*$('.device_id > input').removeAttr('checked');
	$('.notifyTo').attr("checked", "checked");
	$('.filter-div').show();
	$('.device_id').hide();
	
	$('label[devicetype="'+filter_devices+'"]').show();
	$('.device_id label[attributeid=' + filter_devices + ']').show();*/
	
});
// sourceProducts en adicionar nuevo producto
$(document).on('change','#sourceProducts',function(e){
      
      e.preventDefault();
      
      if($(this).val() != 9999){
          //$("#products_image").toggleClass("field-validate");
         // console.log("!9999");
          $("#products_image").removeClass("field-validate");
          //$("#ImagenProducto").css('display','none');
          
          img=$(this).find('option:selected').attr('data-img');
          img='<img src="'+img+'" alt="" width="70px">';
          $("#preview").html(img);
          
          // $("#editor1").val($(this).find('option:selected').attr('data-descriptiones'));
          //$("#editor2").val($(this).find('option:selected').attr('data-descriptionin'));
          areas='<textarea id="editor1" name="products_description_1" class="form-control descripcion_es" rows="5">'+$(this).find('option:selected').attr('data-descriptiones')+'</textarea>'+
                                      '<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">'+
                                      '{{ trans("labels.EnterProductDetailIn") }} Español</span>';      
          $("#divEditor1").html('');
          $("#divEditor1").html(areas);
          CKEDITOR.replace('editor1');
      
          areas='<textarea id="editor2" name="products_description_2" class="form-control descripcion_es" rows="5">'+$(this).find('option:selected').attr('data-descriptionin')+'</textarea>'+
                                      '<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">'+
                                      '{{ trans("labels.EnterProductDetailIn") }} Ingles</span>';      
          $("#divEditor2").html('');
          $("#divEditor2").html(areas);
          CKEDITOR.replace('editor2');
      
          //$(".editor textarea").html("logro desde jquery");
          $("#name_1").val($(this).find('option:selected').text());
          $("#name_2").val($(this).find('option:selected').attr('data-nameIn'));
      }
      else{
       //   console.log("si");
        $("#ImagenProducto").css('display','block');
        //$("#products_image").toggleClass("field-validate");
        $("#products_image").addClass("field-validate");
        $("#preview").html("");
      }
      
     
});

//validar proveedor
$(document).on('submit', '.form-validate3', function(e){
	var error = "";
//	alert("si");
	//to validate text field
	$(".field-validate").each(function() {
		
		if(this.value == '') {
		    id=$(this).attr('id');
			$(this).closest(".form-group").addClass('has-error');
			//$(this).next(".error-content").removeClass('hidden');
			error = "has error";
			//alert("1-"+id);
		}else{
			$(this).closest(".form-group").removeClass('has-error');
			//$(this).next(".error-content").addClass('hidden');
		}
	});
	
	$(".number-validate").each(function() {
		if(this.value == '' || isNaN(this.value)) {
			$(this).closest(".form-group").addClass('has-error');
			//$(this).next(".error-content").removeClass('hidden');
			error = "has error";
			//alert("2");
		}else{
			$(this).closest(".form-group").removeClass('has-error');
			//$(this).next(".error-content").addClass('hidden');
		}
	});
	
    	$(".email-validate").each(function() {
		var validEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		if(this.value != '')
		   if( validEmail.test(this.value)) {
		    //alert("3");
			$(this).closest(".form-group").removeClass('has-error');
			//$(this).next(".error-content").addClass('hidden');
			
    		}else{
    			$(this).closest(".form-group").addClass('has-error');
    			//$(this).next(".error-content").removeClass('hidden');
    			error = "has error";
    			//alert("33");
    		}
	});
	if(error=="has error"){
    	return false;
	}
	
});
//mensualCustomers
//validate form
$(document).on('submit', '.form-validate2', function(e){
	var error = "";
	//alert("sisi");
	//to validate text field
	$(".field-validate").each(function() {
		
		if(this.value == '') {
		    id=$(this).attr('id');
			$(this).closest(".form-group").addClass('has-error');
			//$(this).next(".error-content").removeClass('hidden');
			error = "has error";
			//alert("1-"+id);
		}else{
			$(this).closest(".form-group").removeClass('has-error');
			//$(this).next(".error-content").addClass('hidden');
		}
	});
	
	$(".number-validate").each(function() {
		if(this.value == '' || isNaN(this.value)) {
			$(this).closest(".form-group").addClass('has-error');
			//$(this).next(".error-content").removeClass('hidden');
			error = "has error";
			//alert("2");
		}else{
			$(this).closest(".form-group").removeClass('has-error');
			//$(this).next(".error-content").addClass('hidden');
		}
	});
	
	//
	$(".email-validate").each(function() {
		var validEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		if(this.value != '' && validEmail.test(this.value)) {
			$(this).closest(".form-group").removeClass('has-error');
			//$(this).next(".error-content").addClass('hidden');
			
		}else{
			$(this).closest(".form-group").addClass('has-error');
			//$(this).next(".error-content").removeClass('hidden');
			error = "has error";
			//alert("3");
		}
	});
	
	if(error=="has error"){
    	return false;
	}
	
});
/*
//validar formularios genericos
$(document).on('submit', '.form-validate', function(e){
	var error = "";
	alert("si3");
	//to validate text field
	$(".field-validate").each(function() {
		
		if(this.value == '') {
		    id=$(this).attr('id');
			$(this).closest(".form-group").addClass('has-error');
			//$(this).next(".error-content").removeClass('hidden');
			error = "has error";
			//alert("1-"+id);
		}else{
			$(this).closest(".form-group").removeClass('has-error');
			//$(this).next(".error-content").addClass('hidden');
		}
	});
	
	$(".number-validate").each(function() {
		if(this.value == '' || isNaN(this.value)) {
			$(this).closest(".form-group").addClass('has-error');
			//$(this).next(".error-content").removeClass('hidden');
			error = "has error";
			//alert("2");
		}else{
			$(this).closest(".form-group").removeClass('has-error');
			//$(this).next(".error-content").addClass('hidden');
		}
	});
	
		$(".number-validateX").each(function() {
		if( isNaN(this.value)) {
			$(this).closest(".form-group").addClass('has-error');
			//$(this).next(".error-content").removeClass('hidden');
			error = "has error";
			//alert("2");
		}else{
			$(this).closest(".form-group").removeClass('has-error');
			//$(this).next(".error-content").addClass('hidden');
		}
	});
	
    	$(".email-validate").each(function() {
		var validEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		if(this.value != ''){
		   if( validEmail.test(this.value)) {
		    //alert("3");
			$(this).closest(".form-group").removeClass('has-error');
			//$(this).next(".error-content").addClass('hidden');
			
    		}else{
    			$(this).closest(".form-group").addClass('has-error');
    			//$(this).next(".error-content").removeClass('hidden');
    			error = "has error";
    			//alert("33");
    		}
		}
        else{
    			$(this).closest(".form-group").addClass('has-error');
    		
    			error = "has error";
    		
    		}
	});
	if(error=="has error"){
    	return false;
	}
	
});*/


//focus form field
$(document).on('keyup change', '.field-validate', function(e){
	
	if(this.value == '') {
		$(this).closest(".form-group").addClass('has-error');
		//$(this).next(".error-content").removeClass('hidden');
	}else{
		$(this).closest(".form-group").removeClass('has-error');
		//$(this).next(".error-content").addClass('hidden');
	}
	
});

//focus form field
$(document).on('keyup', '.number-validate', function(e){
	
	if(this.value == '' || isNaN(this.value)) {
		$(this).closest(".form-group").addClass('has-error');
		//$(this).next(".error-content").removeClass('hidden');
	}else{
		$(this).closest(".form-group").removeClass('has-error');
		//$(this).next(".error-content").addClass('hidden');
	}
	
});

$(document).on('keyup focusout', '.email-validate', function(e){
	var validEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
	if(this.value != '' && validEmail.test(this.value)) {
		$(this).closest(".form-group").removeClass('has-error');
		//$(this).next(".error-content").addClass('hidden');
		
	}else{
		$(this).closest(".form-group").addClass('has-error');
		//$(this).next(".error-content").removeClass('hidden');
		error = "has error";
	}
});


//show password div
function changePassword(){
	var change_password = $("#change_password").val();
	//console.log(change_password);
	if(change_password=='1'){
		$('.password_content').show();
	}else{
		$('.password_content').hide();	
	}
}

//show password App div
	function validatePasswordFormApp(){
	    
		var password = document.forms["updateAdminPasswordApp"]["passwordApp"].value;
		var re_password = document.forms["updateAdminPasswordApp"]["re_passwordApp"].value;
		var err = '';
		var s   =   password+"-"+re_password;
		alert(s);
		if (password == null || password == "" || password.length < 6) {
			  $('#passwordApp').closest('.col-sm-10').addClass('has-error');
			  $('#passwordApp').focus();
			  err = "La contraseña debe estar llena y tener más de 6 caracteres! \n";
			  $('#passwordApp').next('.error-content').html(err).show();
			  return false;
		}else{
			 $('#passwordApp').closest('.col-sm-10').removeClass('has-error');
			 $('#passwordApp').next('.error-content').hide();
			 
			  if (re_password == null || re_password == '' ) {
					 err  = "Por favor, vuelva a ingresar la contraseña! \n";
					 document.getElementById("re_passwordApp").focus();
					 $('#re_passwordApp').parent('.col-sm-10').addClass('has-error');
					 $('#re_passwordApp').next('.error-content').html(err).show();
					 return false;
			 }else{
				 if (re_password != password) {
				     alert("se");
					 err  = "Ambas contraseñas deben coincidir! \n";
					 document.getElementById("re_passwordApp").focus()
					 $('#re_passwordApp').parent('.col-sm-10').addClass('has-error');
					 $('.diferente').html(err).addClass('has-error');
					return false;
				 }else{
					return true;
				
				}
			 }
		}
}

//show password Web div
	function validatePasswordForm(){
		var password = document.forms["updateAdminPassword"]["password"].value;
		var re_password = document.forms["updateAdminPassword"]["re_password"].value;
		var err = '';
		if (password == null || password == "" || password.length < 6) {
			  $('#password').closest('.col-sm-10').addClass('has-error');
			  $('#password').focus();
			  err = "La contraseña debe estar llena y tener más de 6 caracteres! \n";
			  $('#password').next('.error-content').html(err).show();
			  return false;
		}else{
			 $('#password').closest('.col-sm-10').removeClass('has-error');
			 $('#password').next('.error-content').hide();
			 
			  if (re_password == null || re_password == '' ) {
					 err  = "Por favor, vuelva a ingresar la contraseña! \n";
					 document.getElementById("re_password").focus();
					 $('#re_password').parent('.col-sm-10').addClass('has-error');
					 $('#re_password').next('.error-content').html(err).show();
					 return false;
			 }else{
				 if (re_password != password) {
					 err  = "Ambas contraseñas deben coincidir! \n";
					 document.getElementById("re_password").focus()
					 $('#re_password').parent('.col-sm-10').addClass('has-error');
					 $('#re_password').next('.error-content').html(err).show();
					return false;
				 }else{
					return true;
				
				}
			 }
		}
}

	
////////////////////////////////////////////////firebase////////////////////////////////////////////////////////////////////////////	



  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyB-xIR99m_KX5vIlzQUGJ1DkBIvlXe5rlM",
    authDomain: "ordenes-39af1.firebaseapp.com",
    databaseURL: "https://ordenes-39af1.firebaseio.com",
    projectId: "ordenes-39af1",
    storageBucket: "ordenes-39af1.appspot.com",
    messagingSenderId: "629028404883"
  };
  firebase.initializeApp(config);

  var refOrden;
  var objetoVentasHoy;
  var hoy;

//window.onload=inicializar;

  //function inicializar(){
   	var d = new Date();
        var anio = d.getFullYear();
    	var mes = (d.getMonth() + 1);
    	mes=(mes<10)?("0"+mes):mes;
    	var dia = d.getDate();
    	dia=(dia<10)?("0"+dia):dia;
    	hoy = anio+"-"+mes+"-"+dia;
    	
    idTienda=document.getElementById("idcafeteria").value;//$('#user_id').val();//
    ref='Ordenes/tienda'+idTienda;
    refProductsToDay=ref+"-RESUMEN"+hoy;    
    
    refOrden              = firebase.database().ref().child(ref);
    cantidadProductsToDay = firebase.database().ref().child(ref);
   
    
    
    
    
    cantidadProductsToDay.on("value",function(snap){
      
      var datos=snap.val();
      var n=0;
      for (var key in datos) {
        
          if(key == "-RESUMEN"+hoy){
        
          n=datos[key].productToDay;
          $('#idProductsToDay').html('');
          $('#idProductsToDay').html(n);
          }
          
      }
      
  });

 // }
  
  ////////////////////inicio de actualizacion de pedidos en tiempo real
 
      
     /*e.preventDefault();
    orden=this.getAttribute("data-pedido");
    if(orden == "cafeteria")
       tipoOrden=0;
    else   
    if(orden == "almuerzos")
       tipoOrden=1; 
    else
       tipoOrden=2;  */     
	var user_id= $('#user_id').val();

  	refOrden.on("value",function(snap){

  	var datos = snap.val();
  	var filasAMostrar ="<thead><tr><th>{{ trans('labels.Items') }}</th><th>{{ trans('labels.Orders') }}</th><th>{{ trans('labels.CustomerName') }}</th><th>{{ trans('labels.ProductName') }}</th><th>{{ trans('labels.Quantity') }}</th><th>{{ trans('labels.DatePurchased') }}</th><th>{{ trans('labels.DateDelivery') }}</th><th>{{ trans('labels.Status') }} </th><th>{{ trans('labels.Action') }}</th></tr></thead><tbody>";
  	var j   = 0;
  		  
  	  		//aqui inicia el for que recorre los datos del firebase
  		  for (var key in datos) {

			 if(key == "-RESUMEN"+hoy)
		        mostrarResumenFirebase(datos[key].almuerzos,datos[key].cafeteria,datos[key].ventasHoy);
			 
			 
			 /*  if($('.'+key).is(':visible'))
			     alert("esta visible");*/
			     /*if($('.'+key).hasClass('eliminado'))
			        alert("esta eliminado");*/
			  //if(!$('.'+key).hasClass('eliminado'))    
			  
			  
  		       if(datos[key].estadoProducto == 1 && datos[key].almuerzo == 0 && datos[key].fecha_entrega == hoy && key != "ventasHoy"){///pte revisar key != "ventasHoy"??
  		           
  		         j++;
  		  	     filasAMostrar += "<tr class='"+key+"'><td>"+j+"</td><td>"+datos[key].orders_id+"</td><td>"+datos[key].hijo+"</td><td align='center'; style='font-size:1.3em;'><span class='label label-warning'>";
                 filasAMostrar += datos[key].nombre_producto+"</span></td><td>"+datos[key].cantidad+"</td><td>"+datos[key].fecha_compra+"</td><td>"+datos[key].fecha_entrega+"</td><td><select name='old_option"+
                                  datos[key].orders_products_id+"' class='form-control btn-confirm' data-Orden='"+key+"' id='old_option"+datos[key].orders_products_id+"' data-cantidadPedidos='"+datos[key].cantidad+"'  data-id="+datos[key].orders_products_id+
                                  " data-Status="+datos[key].estadoProducto+" >";
                 filasAMostrar +=" <option value='1' selected > Pendientes</option>";
                 filasAMostrar +="<option value='2'><span class='label label-success'>Terminado</span></option></select></td><td> ";
                 filasAMostrar +="<a data-toggle='tooltip' data-placement='bottom' title='View Order' href='viewOrder/"+datos[key].orders_id+"'  class='badge bg-light-blue'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>";
                            
                 if(user_id == 1){
                    filasAMostrar +="<a data-toggle='tooltip' data-placement='bottom' title='Delete Order' id='deleteOrdersId' orders_id ='"+datos[key].orders_id+"' class='badge bg-red'><i class='fa fa-trash' aria-hidden='true'></i></a>";
                 }
                            
                 filasAMostrar +="</td></tr>";
                            
    
  		     }
  		  }  
  		  
  		  filasAMostrar+="</tbody>";
  		  /*$("#example11").html('');
  		  $("#example11").html(filasAMostrar);	*/
  		  $("#tableExample1").html('');
  		  $("#tableExample1").html(filasAMostrar);
  		  
       	  

  	});

  
  
 ////////////////////fin de actualizacion de pedidos en tiempo real 

  
 
 function mostrarResumenFirebase(almuerzos,cafeteria,ventasHoy){
        $("#cantidadAlmuerzo").html(almuerzos);
	   $("#cantidadCafeteria").html(cafeteria);
			   $("#ventasHoy").html(ventasHoy);
  }
  
function pendientesBd(tipoOrden) {
    return new Promise((resolve, reject) => {
        

        datos={
              
              "tipoOrden" 	: tipoOrden
        }
        mensaje=(tipoOrden == 0)?"Cafeteria":(tipoOrden == 1)?"Almuerzos":"estado pendiente";

        $.ajax({
        		url: '{{ URL::to("admin/listingAllOrdersPendientesAjax") }}',
        		type: "GET",
        		data: datos,//formData,
        		//async: false,
        		success: function (data) {
        		    
        		    if(data.length != 0 )
                      resolve(data);
                    
                    else
                     reject(tipoOrden);
        		}
        		
        });

    });
}
  
  async function traerPendientes(tipoOrden) {
    
    return await pendientesBd(tipoOrden);
     
}
  
  $(document).on('click', '.mostrarOrdenDeFirebase', function(e){
     
    e.preventDefault();
    orden=this.getAttribute("data-pedido");
    
   // alert("sisi");
    if(orden == "cafeteria")
       tipoOrden=0;
    else   
    if(orden == "almuerzos")
       tipoOrden=1; 
    else{
       tipoOrden=2;       
       var numeroPendientes =   $(this).attr('data-pendientes');
       
    }  
    
	var user_id= $('#user_id').val(); 

     
     traerPendientes(tipoOrden).then(v => {
                   
                    datos=v["data"];
              var error= "<tr><td></td></tr>"
              //data.forEach(function(datos) {
              var filasAMostrar = "<thead><tr><th>{{ trans('labels.Items') }}</th><th>{{ trans('labels.Orders') }}</th><th>{{ trans('labels.CustomerName') }}</th><th>{{ trans('labels.ProductName') }}</th><th>{{ trans('labels.Quantity') }}</th><th>{{ trans('labels.DatePurchased') }}</th><th>{{ trans('labels.DateDelivery') }}</th><th>{{ trans('labels.Status') }} </th><th>{{ trans('labels.Action') }}</th></tr></thead><tbody>";
              var j =  1;
              
                  for (var key in datos) {
                       
                          filasAMostrar += "<tr class='product-"+datos[key].orders_products_id+"'><td>"+j+"</td><td>"+datos[key].orders_id+"</td><td>"+datos[key].hijo+"</td><td align='center'; style='font-size:1.3em;'>";
                          filasAMostrar +=	"<span class='label label-warning'>";
                          filasAMostrar += datos[key].nombre_producto+"</span></td><td>"+datos[key].cantidad+"</td><td>"+datos[key].fecha_compra+"</td><td>"+datos[key].fecha_entrega+"</td><td><select name='old_option"+datos[key].orders_products_id+"' data-cantidadPedidos='"+datos[key].cantidad+"' class='form-control btn-confirm' data-Orden='"+key+"' id='old_option"+datos[key].orders_products_id+"' data-id="+datos[key].orders_products_id+" data-Status="+datos[key].estadoProducto+" >";
                          filasAMostrar +="<option value='1' selected> Pendientes</option>";
                          filasAMostrar +="<option value='2'><span class='label label-success'>Terminado</span></option></select></td><td>";
                          filasAMostrar +="<a data-toggle='tooltip' data-placement='bottom' title='View Order' href='viewOrder/"+datos[key].orders_id+"'  class='badge bg-light-blue'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>";
                          
                            if(user_id == 1){
                                filasAMostrar +="<a data-toggle='tooltip' data-placement='bottom' title='Delete Order' id='deleteOrdersId' orders_id ='"+datos[key].orders_id+"' class='badge bg-red'><i class='fa fa-trash' aria-hidden='true'></i></a>";
                            }
                          
                          filasAMostrar += "</td></tr>";
                          j++;
                       }
                          filasAMostrar += "</tbody>";
                          if(v["tipoOrden"] != 2){
                            $("#rowPendientes").css('display','none');///div que envuelve la tabla de cafeteria y almuerzos	  
                            $("#rowExample1").css('display','block');///div que envuelve la tabla de cafeteria y almuerzos	  
                            $("#tableExample1").html(filasAMostrar);	  
                          }    
                          else{    
                           $("#rowExample1").css('display','none');	  ///div que envuelve la tabla de cafeteria y almuerzos	  
                           $("#rowPendientes").css('display','block');///div que envuelve la tabla de los pendientes
                           $("#tablePendientes").html('');
                           $("#tablePendientes").html(filasAMostrar);
                              
                          }
                   },
                   e => {
                       dato={e};
                       
                       if(parseInt(dato.e) != 2){
                           $("#rowPendientes").css('display','none');///div que envuelve la tabla de cafeteria y almuerzos	  
                           $("#rowExample1").css('display','block');	  ///div que envuelve la tabla de cafeteria y almuerzos	  
                           $("#tableExample1").html('');
                           $("#tableExample1").html("<tbody><tr><td colspan='6'><strong>No se encontraron registros</strong></td></tr></tbody>")
                       }
                       else{
                           $("#rowExample1").css('display','none');	  ///div que envuelve la tabla de cafeteria y almuerzos	  
                           $("#rowPendientes").css('display','block');///div que envuelve la tabla de cafeteria y almuerzos	  
                           $("#tablePendientes").html('');
                           $("#tablePendientes").html("<tbody><tr><td colspan='6'><strong>No se encontraron registros</strong></td></tr></tbody>")
                       }     
                       
                            
                   }    
                                    );
                   /*.then(function() {
                       console.log(v + '- 2- Este uso síncrono es prácticamente inútil'); // 2- Este uso síncrono es prácticamente inútil
                    }); */
                   //console.log(`Error capturado:  ${e}`));//console.error('fetch failed', err);

  });
  
  
  
 //function mostrarOrdenDeFirebase(){
  /*$(document).on('click', '.mostrarOrdenDeFirebase3', function(e){//  ha sido reemplazada por   mostrarOrdenDeFirebase
      
     e.preventDefault();
    orden=this.getAttribute("data-pedido");
    if(orden == "cafeteria")
       tipoOrden=0;
    else   
    if(orden == "almuerzos")
       tipoOrden=1; 
    else
       tipoOrden=2;       
    
	var user_id= $('#user_id').val();

	
  	refOrden.on("value",function(snap){
  	
  	//alert("firebase-entra"+tipoOrden);

  		var datos = snap.val();
  		//console.log(datos);

  		//var filasAMostrar = "";
  		var filasAMostrar = "<thead><tr><th>{{ trans('labels.Items') }}</th><th>{{ trans('labels.Orders') }}</th><th>{{ trans('labels.CustomerName') }}</th><th>{{ trans('labels.ProductName') }}</th><th>{{ trans('labels.Quantity') }}</th><th>{{ trans('labels.DatePurchased') }}</th><th>{{ trans('labels.DateDelivery') }}</th><th>{{ trans('labels.Status') }} </th><th>{{ trans('labels.Action') }}</th></tr></thead><tbody>";
  		
  		var filasAMostrarPendientes = "<thead><tr><th style='background-color:rgba(71,71,71,0.4);'>{{ trans('labels.Items') }}</th><th style='background-color:rgba(71,71,71,0.4);'>{{ trans('labels.Orders') }}</th><th style='background-color:rgba(71,71,71,0.4);'>{{ trans('labels.CustomerName') }}</th><th style='background-color:rgba(71,71,71,0.4);'>{{ trans('labels.ProductName') }}</th><th style='background-color:rgba(71,71,71,0.4);'>{{ trans('labels.Quantity') }}</th><th style='background-color:rgba(71,71,71,0.4);'>{{ trans('labels.DatePurchased') }}</th><th style='background-color:rgba(71,71,71,0.4);'>{{ trans('labels.DateDelivery') }}</th><th style='background-color:rgba(71,71,71,0.4);'>{{ trans('labels.Status') }} </th><th style='background-color:rgba(71,71,71,0.4);'>{{ trans('labels.Action') }}</th></tr></thead><tbody>";
  		
  		var j = 0;
  		var k = 1;
  		var caf=0;
  		var alm=0;
  		  for (var key in datos) {//aqui inicia el for
			// console.log(key+"---"+datos[key].almuerzo+"=="+tipoOrden+"&&"+datos[key].fecha_entrega+"=="+hoy);
			 if(key == "-RESUMEN"+hoy){
			  // alert(key+"--========--"+"-RESUMEN"+hoy);
			   mostrarResumenFirebase(datos[key].almuerzos,datos[key].cafeteria,datos[key].ventasHoy);
			   /*$("#cantidadAlmuerzo").html(datos[key].almuerzos);
			   $("#cantidadCafeteria").html(datos[key].cafeteria);
			   $("#ventasHoy").html(datos[key].ventasHoy);* /
			 }
			 
			 /*  if($('.'+key).is(':visible'))
			     alert("esta visible");*/
			     /*if($('.'+key).hasClass('eliminado'))
			        alert("esta eliminado");* /
			  //if(!$('.'+key).hasClass('eliminado'))    
			  
			  
  		       if(datos[key].estadoProducto == 1 && datos[key].almuerzo == tipoOrden && datos[key].fecha_entrega == hoy && key != "ventasHoy"){
  		           
  		          // alert(key);
				j++;
  		  	        
			    filasAMostrar += "<tr class='"+key+"'><td>"+j+"</td><td>"+
                            datos[key].orders_id+"</td><td>"+datos[key].hijo+"</td><td align='center'; style='font-size:1.3em;'>";
                            
                            
                            if(datos[key].estadoProducto == 1)
                             filasAMostrar +=	"<span class='label label-warning'>";
                            else
                            	if(datos[key].estadoProducto==2)
                             filasAMostrar +=	"<span class='label label-success'>";
                            else
                            	if(datos[key].estadoProducto==3)
                             filasAMostrar +=	"<span class='label label-danger'>";
                            
                             filasAMostrar += datos[key].nombre_producto+"</span></td><td>"+datos[key].cantidad+"</td><td>"+datos[key].fecha_compra+"</td><td>"+datos[key].fecha_entrega+"</td><td><select name='old_option"+datos[key].orders_products_id+"' class='form-control btn-confirm' data-Orden='"+key+"' id='old_option"+datos[key].orders_products_id+"' data-id="+datos[key].orders_products_id+" data-Status="+datos[key].estadoProducto;
                            if (datos[key].estadoProducto==2) 
                            filasAMostrar += " disabled='disabled'"; 
                            
                            filasAMostrar += " >"; 


                            if (datos[key].estadoProducto!=3){
                                filasAMostrar +=" <option value='1' ";

                              if(datos[key].estadoProducto==1)
                              	 filasAMostrar +="selected";

                              	 filasAMostrar +="> Pendientes</option>";
                            
                            }

                            filasAMostrar +="<option value='2' ";
                            
                             if(datos[key].estadoProducto==2)
                             	filasAMostrar +="selected";

                             	filasAMostrar +="><span class='label label-success'>Terminado</span></option></select></td><td>";/*<option value='3'";

                             	if(datos[key].estadoProducto==3)
                             	filasAMostrar +="selected";

                             	filasAMostrar +="><span class='label label-danger'>Aplazado</span></option></select></td><td>";* /
                             	filasAMostrar +="<a data-toggle='tooltip' data-placement='bottom' title='View Order' href='viewOrder/"+datos[key].orders_id+"'  class='badge bg-light-blue'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>";
                            
                              if(user_id == 1){
                                filasAMostrar +="<a data-toggle='tooltip' data-placement='bottom' title='Delete Order' id='deleteOrdersId' orders_id ='"+datos[key].orders_id+"' class='badge bg-red'><i class='fa fa-trash' aria-hidden='true'></i></a>";
                              }
                            
                            filasAMostrar +="</td></tr>";
                            
                          			   
                            


  		  }
  		  else
  		  if (datos[key].fecha_entrega != undefined && datos[key].fecha_entrega != hoy && key != "ventasHoy") {
  		    //  console.log(datos[key].fecha_entrega);
  		  	  filasAMostrarPendientes += "<tr><td>"+k+"</td><td>"+
                            datos[key].orders_id+"</td><td>"+datos[key].hijo+"</td><td align='center'; style='font-size:1.3em;'>";
                            
                            
                            if(datos[key].estadoProducto == 1)
                             filasAMostrarPendientes +=	"<span class='label label-warning'>";
                            else
                            	if(datos[key].estadoProducto==2)
                             filasAMostrarPendientes +=	"<span class='label label-success'>";
                            else
                            	if(datos[key].estadoProducto==3)
                             filasAMostrarPendientes +=	"<span class='label label-danger'>";
                            
                             filasAMostrarPendientes += datos[key].nombre_producto+"</span></td><td>"+datos[key].cantidad+"</td><td>"+datos[key].fecha_compra+"</td><td>"+datos[key].fecha_entrega+"</td><td><select name='old_option"+datos[key].orders_products_id+"' class='form-control btn-confirm' data-Orden='"+key+"' id='old_option"+datos[key].orders_products_id+"' data-id="+datos[key].orders_products_id+" data-Status="+datos[key].estadoProducto;
                            if (datos[key].estadoProducto==2) 
                            filasAMostrarPendientes += " disabled='disabled'"; 
                            
                            filasAMostrarPendientes += " >"; 


                            if (datos[key].estadoProducto!=3){
                                filasAMostrarPendientes +=" <option value='1' ";

                              if(datos[key].estadoProducto==1)
                              	 filasAMostrarPendientes +="selected";

                              	 filasAMostrarPendientes +="> Pendientes</option>";
                            
                            }

                            filasAMostrarPendientes +="<option value='2' ";
                            
                             if(datos[key].estadoProducto==2)
                             	filasAMostrarPendientes +="selected";

                             	filasAMostrarPendientes +="><span class='label label-success'>Terminado</span></option></select></td><td>";/*<option value='3'";

                             	if(datos[key].estadoProducto==3)
                             	filasAMostrarPendientes +="selected";

                             	filasAMostrarPendientes +="><span class='label label-danger'>Aplazado</span></option></select></td><td>";* /
                             	filasAMostrarPendientes +="<a data-toggle='tooltip' data-placement='bottom' title='View Order' href='viewOrder/"+datos[key].orders_id+"'  class='badge bg-light-blue'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>";
                            
                              if(user_id == 1){
                                filasAMostrarPendientes +="<a data-toggle='tooltip' data-placement='bottom' title='Delete Order' id='deleteOrdersId' orders_id ='"+datos[key].orders_id+"' class='badge bg-red'><i class='fa fa-trash' aria-hidden='true'></i></a>";
                              }
                            
                            filasAMostrarPendientes +="</td></tr>";
                            k++;
  		  }
  		  
  		   if(datos[key].almuerzo == 0 && datos[key].fecha_entrega == hoy )
                              caf++;
            else
            if(datos[key].almuerzo == 1 && datos[key].fecha_entrega == hoy )  
                               alm++;	
  		  }//aqui finaliza el for
  		  
                     //   $("#cantidadAlmuerzo").html(alm); 
                  	//$("#cantidadCafeteria").html(caf); 

  		  
  		 // tbodyTablaOrden.innerHTML=filasAMostrar
  		  //$("#example1 tbody").html(filasAMostrar);
  		   filasAMostrar+="</tbody>";
  		   filasAMostrarPendientes+="</tbody>";
  		  //$("#example1").html(filasAMostrar);
  		  if ( j>0  ) {
         		//$("#example1").html(filasAMostrar);	
         		$("#tableExample1").html(filasAMostrar);	
       	  }
          else{
			//$("#example1").html("<tbody><tr><td colspan='6'><strong>No se encontraron registros</strong></td></tr></tbody>");
			$("#tableExample1").html("<tbody><tr><td colspan='6'><strong>No se encontraron registros</strong></td></tr></tbody>");
			
		  }
  		  //if(filasAMostrarPendientes != ""){
  		  
  		  if(k > 1 && tipoOrden == 2){
		     //$("#example11").html(filasAMostrarPendientes);
		     $("#tableExample1").html(filasAMostrarPendientes);
		     
  		  }
/*  		   if (filasAMostrar != "") {

  		  	var elementosEditables = document.getElementsByClassName("btn-confirm");
  		  	  for (var i = 0; i < elementosEditables.length; i++) {
//  		  	  	elementosEditables[i].addEventListener("change",editarOrdenDeFirebase,false);
  		  	  	elementosEditables[i].addEventListener("change",false);


  		  	  }					
  		 }* /

  	});

  })*/
  


///////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////// 
/*
var modalConfirm = function(callback){
  
//  $("#example1 .btn-confirm").on("change", function(){
  $("#example1").on("change", ".btn-confirm", function(){

  valor="Pendiente";
  if($(this).val()==2)
       valor="Terminado";
   else
     if($(this).val()==3)
       valor="Aplazado";
       
  informacion="El nuevo estado de pedido sera- "+valor;
  $("#idStatusOld").val($(this).attr('data-Status'));
  $("#idOrdenProduct").val($(this).attr('data-id'));
  $("#idNewStatus").val($(this).val());
  
  $("#keyFirebase").val(this.getAttribute("data-Orden"));// nuevo
    $(".mensaje").html(informacion);
    $("#mi-modal").modal('show');
    
    
  });
  
/////  
  
$("#example2").on("change", ".btn-confirm", function(){

  valor="Pendiente";
  if($(this).val()==2)
       valor="Terminado";
   else
     if($(this).val()==3)
       valor="Aplazado";
       
  informacion="El nuevo estado de pedido sera "+valor;
  $("#idStatusOld").val($(this).attr('data-Status'));
  $("#idOrdenProduct").val($(this).attr('data-id'));
  $("#idNewStatus").val($(this).val());
  
  $("#keyFirebase").val(this.getAttribute("data-Orden"));// nuevo
    $(".mensaje").html(informacion);
    $("#mi-modal").modal('show');
    
    
  });

/* ///aqui deberia ser por si cuando se actualiza
  $("#modal-btn-si").on("click", function(){
  // var keyDeOrdenABorrar = $("#keyFirebase").val();//this.getAttribute("data-Orden"); nuevo
    	callback(true);
    	$("#mi-modal").modal('hide');

  });* /
  
 ////// 
 ////aqui por no actualizar
  $("#modal-btn-no").on("click", function(){
      callback(false,0);
      idSelect="old_option"+$("#idOrdenProduct").val();
      x=$("#idStatusOld").val();
  
  
          $("#"+idSelect).val(x);
    $("#mi-modal").modal('hide');
   
  });
  
  ////aqui por si cuando se actualiza
   $("#updateOrder").on("click", function(){

    var keyDeOrdenAEditar = $("#keyFirebase").val();	
    /*hay que revisarrr
    
   
        refOrdenAEditar = refOrden.child(keyDeOrdenAEditar);
     	refOrdenAEditar.update({
			  		estadoProducto: 2
  					});
    * /
    $("#mi-modal").modal('hide');
    

	var formData = $("#updateStatusProduct").serialize();
//console.log(formData);
	
	$.ajax({
		url: '{{ URL::to("admin/updateStatusProduct")}}',
		type: "POST",
		data: formData,
		//async: false,
		success: function (res) {
		     
		        console.log(res);
		        //console.log(res.ventaHoy);
			    //callback(true,keyDeOrdenAEditar);
			    callback(true,res);
				
		},
		  error: function() {
          alert('Error occurs!');
       }
		
	});

  });
  

};

  ///
  modalConfirm(function(confirm,x){
  if(confirm){
    refResumen="-RESUMEN"+hoy;  
    console.log("aqui"+refResumen);
    
    refResumenAEditar = refOrden.child(refResumen);
    console.log("desde disco:."+x);
    console.log("disco:."+x.cafeteria);
  
    
  
      	 refResumenAEditar.update({
	             'almuerzos'    : x.restaurante,
                 'cafeteria'    : x.cafeteria,
                 'ventasHoy'    : x.ventaHoy,
                 'productToDay' : x.productToDay
			  	});

  }else{
    //Acciones si el usuario no confirma
    $("#result").html("NO CONFIRMADO");
  }
});
*/
///fin de callback
///reemplazando callback

  $("#modal-btn-no").on("click", function(){
      
      idSelect="old_option"+$("#idOrdenProduct").val();
      x=$("#idStatusOld").val();
  
  
      $("#"+idSelect).val(x);
      $("#mi-modal").modal('hide');
   
  });
  
 $("#tableExample1, #tablePendientes").on("change", ".btn-confirm", function(){
//alert("llego");
var valor;
var cantidadPedidos =   0;
  valor="Pendiente";
  if($(this).val()==2){
       valor            =   "Terminado";
       cantidadPedidos  =   $(this).attr('data-cantidadPedidos');
  }
   else
     if($(this).val()==3)
       valor="Aplazado";
       
  informacion="El nuevo estado de pedido sera- "+valor;
  $("#cantidadPedidos").val($(this).attr(cantidadPedidos));
  $("#idStatusOld").val($(this).attr('data-Status'));
  $("#idOrdenProduct").val($(this).attr('data-id'));
  $("#idNewStatus").val($(this).val());
  
  $("#keyFirebase").val(this.getAttribute("data-Orden"));// nuevo
    $(".mensaje").html(informacion);
    $("#mi-modal").modal('show');
    
    
  });
 /* $("#updateStatusProduct").submit(function(e){
      var cantida       =   parseInt($("#cantidadPedidos").val());
      var cantidadTotal =   parseInt($("#pendientes").html());
      alert(cantidadTotal - cantida);
      $("#pendientes").html( cantidadTotal - cantida );
      return;
  })*/
  
function updateProductBd(datos) {
    return new Promise((resolve, reject) => {
        

       /* formData={
              
              "data" 	: datos
        }*/
        mensaje="La transaccion no fue satisfactoria";
 
         	$.ajax({
         		url: '{{ URL::to("admin/updateStatusProduct")}}',
         		type: "POST",
         		data: datos,
         		//async: false,
         		success: function (data) {
         		 //    console.log("llegasi"+data);
         		      if(data.length != 0 )
                        resolve(data);
                      else
                       reject("La transaccion no fue satisfactoria");                    
         				
         		}
       });
		
	});
}	
  async function updateProduct(formData) {
    
    return await updateProductBd(formData);
    /*$xx = await updateProductfirebase($x);
    return $x
     */
}
 
 
  $(document).on('click', '#updateOrder', function(e){
    e.preventDefault();
    $("#mi-modal").modal('hide');
    
    var keyDeOrdenAEditar = $("#keyFirebase").val();	
	var formData          = $("#updateStatusProduct").serialize();
	var id                = $("#idOrdenProduct").val();
     
    var idOrdenProducto   = ".product-"+id;
      $(idOrdenProducto).css('display','none');
     
    var user_id = $('#user_id').val(); 
    updateProduct(formData).then(v => {
                     
                        estado=v["estado"];
                   //     console.log(v["notificado"]);
                            
                        if(estado == 2){
                            $("#pendientes").html( v["pendientes"] );
                            $("#ventasHoy").html( v["ventaHoy"] );
                            fila=1;
                            $("#tablePendientes tbody tr").each(function(index){
                                valorCssTr =  $(this).css('display');
                                    if( valorCssTr != 'none'){
                                        $(this).find("td").eq(0).html(fila);
                                        fila++;
                                    } 
                                    else{
                                     //$(this+" tr:last").remove();
                                     $(this).remove();
                                    } 
                                
                                
                            });
                          
                        }
                        else{
                            idOrdenProducto = ".product-"+v["idOrdenProduct"];
                            $(idOrdenProducto).css('display','block');
                        }
                      
              
              	  
                   },
                   e => console.log("pailas")/* $("#example1").html("<tbody><tr><td colspan='6'><strong>No se encontraron registros</strong></td></tr></tbody>")*/
                                     );
                  

  });




////fin de reemplazando callback
////////////////////////desde aqui Directo Cafeteria//////////////////////////////////////
//funcion comun
function traerDirecto(datos){
    
    $.ajax({
		url: '{{ URL::to("admin/codNombreProducts") }}',
		type: "GET",
		data: datos,//formData,
		//async: false,
		success: function (res) {
		
		  opciones='<option value="0">seleccione</option>';
		  
		for(i = 0; i < res.length; i++ ){
		    
		    opciones+='<option value="'+res[i].products_price+'">'+res[i].products_codigo+':'+res[i].products_name+'</option>';
		    
		}
	
	
        $("#selectProductsDirecto").html('');
		$("#selectProductsDirecto").html(opciones)
		$('#modal-container-211519').modal('show');
	//	console.log(opciones);
	//	$("#tdSubTotalDirecto").append('<input type="text" id="'+res[i].products_codigo+'" value="'+res[i].products_id+'" />');
		
		},
			 error:function(error){
			     
        	      console.error("no fue posiblez"+error);
        }
		
	});
    
}

//slecciona producto directo
$(document).on('change','#cantidadDirecta',function(){
   
    cantidad=$("#cantidadDirecta").val();
    valor=$("#selectProductsDirecto").val();
    $("#subTotalDirecto").html(cantidad*valor);
    
});
//slecciona producto directo
$(document).on('change','#selectProductsDirecto',function(){
     
    var cantidad=$("#cantidadDirecta").val();
    var valor=$("#selectProductsDirecto").val();
    var texto = $(this).find('option:selected').text();
    var rpta = texto.split(":");
    
    if($(this).val() == "0"){
      $("#codigoDirecto").val("");
      $('#cantidadDirecta').prop('selectedIndex',0);
    }  
    else  
      $("#codigoDirecto").val(rpta[0]);
    
    $("#subTotalDirecto").html(cantidad*valor);
    
});

//despacho directo Producto
$(document).on('keyup','#codigoDirecto',function(){
 
    datos={
      "user_id" : $('#user_id').val(),
      "codigo" : $("#codigoDirecto").val()
    }
    traerDirecto(datos);
 
});

///despacho directo
$(document).on('click','#directoCafeteria',function(){

    datos={
      "user_id" : $('#user_id').val(),
      "codigo" :""
    }
    $("#codigoDirecto").val('');
	$("#subTotalDirecto").html('0');
	$('#cantidadDirecta').prop('selectedIndex',0);
	//$('#cantidadDirecta option[value="0"]').attr('selected','selected');
	 //$("#selector       option[value=3]").attr('disabled','disabled');
    traerDirecto(datos);
   	

});
//guardarDespachoDirecto

$(document).on('click','#btnGuardarDirecto',function(){
   subtotal   = parseInt($("#subTotalDirecto").html()); 
  if(subtotal > 0) 
  if(confirm("Confirmar la Compra Desde la Cafetería")){
      datos={
            cantidad   : parseInt($("#cantidadDirecta").val()),
            codigo     : $("#codigoDirecto").val(),
            subtotal   : parseInt($("#subTotalDirecto").html())
            }
        $.ajax({
		        url: '{{ URL::to("admin/addOrdercafeteria") }}',
		        type: "POST",
		        data: datos,//formData,
		        //async: false,
		        success: function (res) {
                   // alert("res:."+res);
		        },
		        error:function(error){
		        	     
                	      console.error("no fue posibley"+error);
                }
		
	    });
	
  }
    
 
});

/////////////////////////////Hasta Aqui Despacho Directo Cafeteria////////////////////////////////////////////////////
//----------------------------------------------------------------------------------------

/////////////////////////////desde aqui Despacho Directo Restaurante////////////////////////////////////////////////
//funcion comun
function traerDirectoRestaurante(datos){
    
    $.ajax({
		url: '{{ URL::to("admin/codNombreEstudiantes") }}',
		type: "GET",
		data: datos,//formData,
		//async: false,
		success: function (res) {
		
		  opciones='<option data-grado="" value="0">seleccione</option>';
		  
		for(i = 0; i < res.length; i++ ){
		    

		    opciones+='<option data-grado="'+res[i].entry_street_address+'" value="'+res[i].address_book_id+'">'+res[i].cod_id+':'+res[i].entry_firstname+' '+res[i].entry_lastname+'</option>';
		    
		}
	
	
        $("#selectNombreEstudiante").html('');
		$("#selectNombreEstudiante").html(opciones)
		$('#modal-directo-restaurante').modal('show');
	//	console.log(opciones);
	//	$("#tdSubTotalDirecto").append('<input type="text" id="'+res[i].products_codigo+'" value="'+res[i].products_id+'" />');
		
		},
			 error:function(error){
			     
        	      console.error("no fue posiblex"+error);
        }
		
	});
    
}
//slecciona producto directo
$(document).on('change','#selectNombreEstudiante',function(){
     
   
    var texto = $(this).find('option:selected').text();
    var rpta = texto.split(":");
    
    if($(this).val() == "0")
      $("#codEstudiantes").val("");
    else  
    $("#codEstudiantes").val(rpta[0]);
    
    $("#gradoEstudiante").html($(this).find('option:selected').attr('data-grado'));
    
});

//despacho directo Producto
$(document).on('keyup','#codEstudiantes',function(e){
 
    datos={
      "user_id" : $('#user_id').val(),
      "codigo" : $("#codEstudiantes").val()
    }
    traerDirectoRestaurante(datos);
 
});

///despacho directo
$(document).on('click','#directoRestaurante',function(){

    datos={
      "user_id" : $('#user_id').val(),
      "codigo" :""
    }
    $("#codEstudiante").val('');
	$("#gradoEstudiante").html('');
	
	//$('#cantidadDirecta option[value="0"]').attr('selected','selected');
	 //$("#selector       option[value=3]").attr('disabled','disabled');
    traerDirectoRestaurante(datos);
   	

});
//sin codigo o con codigo
$(document).on('change','#chbxCodigo',function(e){
    e.preventDefault();
     var condiciones = $(this).is(":checked");
        if (condiciones) 
           $("#ventaRestaurante").css('display','none');
         else
         $("#ventaRestaurante").css('display','block');
})

//guardarDespachoDirecto Restaurante

$(document).on('click','#btnGuardarRestaurante',function(){
   //alert($("#rdRestaurante").val())
   //alert($('input:radio[name=rdRestaurante]:checked').val());
   //if(document.form1.rsexo[0].checked==false && document.form1.rsexo[1].checked==false)
   
 //if($('input:radio[name=rdRestaurante]:checked')){
  if  ($('input[name="rdRestaurante"]').is(':checked')){
             chbxCodigo = ($('#chbxCodigo').is(":checked"))?0:1;
             
             seguir=0;
             if(chbxCodigo == 0){
               seguir=1;
               addressId=0;
             }  
             else{
                addressId = $("#selectNombreEstudiante").val(); 
                seguir  = ($("#gradoEstudiante").html() != '')?1:0;
             }  
             
              
              
              if(seguir == 1 && confirm("Confirmar la Compra Desde Restaurante")){
                  datos={
                        address_id  : addressId,//$("#selectNombreEstudiante").val(),
                        restaurante : ($('input:radio[name=rdRestaurante]:checked').val() == "desayuno")?8:9
                        }
                    $.ajax({
            		        url: '{{ URL::to("admin/addOrderRestaurante") }}',
            		        type: "POST",
            		        data: datos,//formData,
            		        //async: false,
            		        success: function (res) {
                                //alert("res:."+res);
            		        },
            		        error:function(error){
            		        	     
                            	      console.error("no fue posiblezz"+error);
                            }
            		
            	    });
            	
              }
              else
               alert("Ingresa Estudiante")
  
}
  else
   alert("selecciona Desayuno/Almuerzo");
    

});

/////////////////////////////Hasta Aqui Despacho Directo Restaurante//////////////////////////////////////////////////////



$(document).on('click','#btnCerrarDirecto',function(){
     var cantidad   = $("#cantidadDirecta").val();
     var codigo     = $("#codigoDirecto").val();
     var subtotal   = $("#subTotalDirecto").html();
});

////////////////////////////////////////////////////

/////////////////////buscar una orden//////////////////////////////////

//ajax de los filtros en las ordenes por diferentes tipos
$(document).on('click', '#searchProduct', function(e){


datos={
      "idProduct" 		: $('#idProduct').val()
}



$.ajax({
		url: '{{ URL::to("admin/searchOrders") }}',
		type: "GET",
		data: datos,//formData,
		//async: false,
		success: function (res) {
	//	console.log(res);
	
		x=res.orders;
		ordenes=x.data;
		
			if (ordenes.length > 0){

				var i;
				var showData = [];
				  for(i = 0; i < ordenes.length; i++){
				  
				  	var j = i + 1;
			    showData[i] = "<tr><td>"+j+"</td><td>"+
                            ordenes[i].orders_id+"</td><td>"+ordenes[i].hijo+"</td><td align='center'; style='font-size:1.3em;'>";
                            
                            
                            if(ordenes[i].estadoProducto == 1)
                             showData[i] +=	"<span class='label label-warning'>";
                            else
                            	if(ordenes[i].estadoProducto==2)
                             showData[i] +=	"<span class='label label-success'>";
                            else
                            	if(ordenes[i].estadoProducto==3)
                             showData[i] +=	"<span class='label label-danger'>";
                            
                             showData[i] +=ordenes[i].nombre_producto+"</span></td><td>"+ordenes[i].cantidad+"</td><td>"+ordenes[i].fecha_compra+"</td><td>"+ordenes[i].fecha_entrega+"</td><td><select name='old_option"+ordenes[i].orders_products_id+"' class='form-control btn-confirm' data-Orden='"+ordenes[i].key+"' id='old_option"+ordenes[i].orders_products_id+"' data-cantidadPedidos='"+ordenes[i].cantidad+"' data-id="+ordenes[i].orders_products_id+" data-Status="+ordenes[i].estadoProducto;

                            if ( ordenes[i].estadoProducto == 2 ) 
                            showData[i] += " disabled='disabled'"; 
                            
                            showData[i] += " >"; 


                            if (ordenes[i].estadoProducto!=3){

                                showData[i] +=" <option value='1' ";

                              if(ordenes[i].estadoProducto==1)
                              	 showData[i] +="selected";

                              	 showData[i] +="> Pendientes</option>";
                            
                            }

                            showData[i] +="<option value='2' ";
                            
                             if(ordenes[i].estadoProducto==2)
                             	showData[i] +="selected";

                             	//showData[i] +="><span class='label label-success'>Terminado</span></option><option value='3'";
                             	showData[i] +="><span class='label label-success'>Terminado</span></option></select></td><td>";

                             	//if(ordenes[i].estadoProducto==3)
                             	//showData[i] +="selected";

                             	//showData[i] +="><span class='label label-danger'>Aplazado</span></option></select></td><td>";
                             	
                             	showData[i] +="<a data-toggle='tooltip' data-placement='bottom' title='View Order' href='viewOrder/"+ordenes[i].orders_id+"'  class='badge bg-light-blue'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>";
                            
                              if(user_id == 1){
                                showData[i] +="<a data-toggle='tooltip' data-placement='bottom' title='Delete Order' id='deleteOrdersId' orders_id ='"+ordenes[i].orders_id+"' class='badge bg-red'><i class='fa fa-trash' aria-hidden='true'></i></a>";
                              }
                            
                            showData[i] +="</td></tr>";

				  } 
				  
				// $("#example1 tbody").html(showData);  
				 var filasAMostrar = "<thead><tr><th>{{ trans('labels.Items') }}</th><th>{{ trans('labels.Orders') }}</th><th>{{ trans('labels.CustomerName') }}</th><th>{{ trans('labels.ProductName') }}</th><th>{{ trans('labels.Quantity') }}</th><th>{{ trans('labels.DatePurchased') }}</th><th>{{ trans('labels.DateDelivery') }}</th><th>{{ trans('labels.Status') }} </th><th>{{ trans('labels.Action') }}</th></tr></thead><tbody>"+showData+"</tbody>"; 
				 //$("#example1").html(filasAMostrar); 
				 $("#tableExample1").html(filasAMostrar); 
				
				
			
			}
			else{

				//$("#example1 tbody").html("<tr><td colspan='6'><strong>No se encontraron registros</strong></td></tr>");
			//	$("#example1").html("<tbody><tr><td colspan='6'><strong>No se encontraron registros</strong></td></tr></tbody>");
				$("#tableExample1").html("<tbody><tr><td colspan='6'><strong>No se encontraron registrosp</strong></td></tr></tbody>");

                 

			}
			
			
			
		},
		
	});



});


//////////////////////fin de buscar una orden///////////////////////////////////

//ajax de los filtros en las ordenes por diferentes tipos
//ajax de los filtros en las ordenes por diferentes tipos
$(document).on('click', '#buscarTodoAjax', function(e){


datos   =   {
                "buscar" 		: $('#buscar').val(),
                "fecha_final" 	: $('#fecha_final').val(),
                "fecha_inicial" 	: $('#fecha_inicial').val(),
                "buscar_por" 	: $('#buscar_por').val(),
                "estado_id" 	: $('#estado_id').val()
            }


var formData = $('#searchFrom').serialize();
var user_id= $('#user_id').val();

//alert($('#fecha_inicial').val()+"si llego--"+formData);
//console.log(datos);
$.ajax({
		url: '{{ URL::to("admin/listingAllOrdersAjax") }}',
		type: "GET",
		data: datos,//formData,
		//async: false,
		success: function (res) {
		
	//	console.log("res="+res.gradoCurso);
		x=res.orders;
		ordenes=x.data;
		//console.log(res.datos);
			if (ordenes.length > 0){

				var i;
				var showData = [];
				  for(i = 0; i < ordenes.length; i++){
				  
				  	var j = i + 1;
			    showData[i] = "<tr><td>"+j+"</td><td>"+
                            ordenes[i].orders_id+"</td><td>"+ordenes[i].hijo+"</td><td align='center'; style='font-size:1.3em;'>";
                            
                            
                            if(ordenes[i].estadoProducto == 1)
                             showData[i] +=	"<span class='label label-warning'>";
                            else
                            	if(ordenes[i].estadoProducto==2)
                             showData[i] +=	"<span class='label label-success'>";
                            else
                            	if(ordenes[i].estadoProducto==3)
                             showData[i] +=	"<span class='label label-danger'>";
                            
                             showData[i] +=ordenes[i].nombre_producto+"</span></td><td>"+ordenes[i].cantidad+"</td><td>"+ordenes[i].fecha_compra+"</td><td>"+ordenes[i].fecha_entrega+"</td><td><select name='old_option"+ordenes[i].orders_products_id+"' class='form-control btn-confirm' id='old_option"+ordenes[i].orders_products_id+"' data-cantidadpedidos='"+ordenes[i].cantidad+"' data-id="+ordenes[i].orders_products_id+" data-Status="+ordenes[i].estadoProducto;
                            if (ordenes[i].estadoProducto==2) 
                            showData[i] += " disabled='disabled'"; 
                            
                            showData[i] += " >"; 


                            if (ordenes[i].estadoProducto!=3){

                                showData[i] +=" <option value='1' ";

                              if(ordenes[i].estadoProducto==1)
                              	 showData[i] +="selected";

                              	 showData[i] +="> Pendientes</option>";
                            
                            }

                            showData[i] +="<option value='2' ";
                            
                             if(ordenes[i].estadoProducto==2)
                             	showData[i] +="selected";

                             	showData[i] +="><span class='label label-success'>Terminado</span></option></select></td><td>";/*<option value='3'";

                             	if(ordenes[i].estadoProducto==3)
                             	showData[i] +="selected";

                             	showData[i] +="><span class='label label-danger'>Aplazado</span></option></select></td><td>";*/
                             	showData[i] +="<a data-toggle='tooltip' data-placement='bottom' title='View Order' href='viewOrder/"+ordenes[i].orders_id+"'  class='badge bg-light-blue'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>";
                            
                              if(user_id == 1){
                                showData[i] +="<a data-toggle='tooltip' data-placement='bottom' title='Delete Order' id='deleteOrdersId' orders_id ='"+ordenes[i].orders_id+"' class='badge bg-red'><i class='fa fa-trash' aria-hidden='true'></i></a>";
                              }
                            
                            showData[i] +="</td></tr>";

				  } 
				  var filasAMostrar = "<thead><tr><th>{{ trans('labels.Items') }}</th><th>{{ trans('labels.Orders') }}</th><th>{{ trans('labels.CustomerName') }}</th><th>{{ trans('labels.ProductName') }}</th><th>{{ trans('labels.Quantity') }}</th><th>{{ trans('labels.DatePurchased') }}</th><th>{{ trans('labels.DateDelivery') }}</th><th>{{ trans('labels.Status') }} </th><th>{{ trans('labels.Action') }}</th></tr></thead><tbody>"+showData+"</tbody>";

				 //$("#example1").html(filasAMostrar);
				 $("#tableExample1").html(filasAMostrar);
				  
				  
				 //$("#example1 tbody").html(showData);  
			
			}
			else{

				//$("#example1").html("<tbody><tr><td colspan='6'><strong>No se encontraron registros</strong></td></tr></tbody>");
				$("#tableExample1").html("<tbody><tr><td colspan='6'><strong>No se encontraron registros</strong></td></tr></tbody>");
				

                 

			}
			
			
			
		},
		//dataType: 'html'
		//cache: false,
		//contentType: false,
		//processData: false
	});


	//alert("si llego--"+formData);
	
	
//	$('.searchFrom').submit();	 
//	var estado_id = $(this).val();
//	alert("buscar por"+estado_id);
	//var formData = $('#searchFrom').serialize();
	//alert("datos de formulario:."+formData);

});
//////////////////////////////1 modelo por promesas
/*
function promesaOrdenes(){
        
    return new Promise(function(resolve,reject){

    datos={
      "buscar" 		: $('#buscar').val(),
      "fecha_final" 	: $('#fecha_final').val(),
      "fecha_inicial" 	: $('#fecha_inicial').val(),
      "buscar_por" 	: $('#buscar_por').val(),
      "estado_id" 	: $('#estado_id').val()
	}

		var user_id= $('#user_id').val();

		$.ajax({
				url: '{{ URL::to("admin/listingOrdersAjax") }}',
				type: "GET",
				data: datos,
				//async: false,
				success: function (res) {
					x=res.orders;
					ordenes=x.data;
		
					if (ordenes.length > 0){

						resolve(ordenes);

					}
					else{
						reject("<tr><td colspan='6'><strong>No se encontraron registros</strong></td></tr>");
					}
			    },
		
		});   

    });	
}


function promesaBuscar(ordenes){

	return new Promise(function(resolve,reject){

			ref='Ordenes/tienda'+ordenes[0].administrator_id;
			refOrden = firebase.database().ref().child(ref);

			for(i = 0; i < ordenes.length; i++){

				 administrator_id = ordenes[i].administrator_id;
				 orders_id = ordenes[i].orders_id;
				 hijo = ordenes[i].hijo;
				 nombre_producto = ordenes[i].nombre_producto;
				 cantidad = ordenes[i].cantidad;
				 fecha_compra = ordenes[i].fecha_compra;
				 fecha_entrega = ordenes[i].fecha_entrega;
				 orders_products_id = ordenes[i].orders_products_id;
				 estadoProducto = ordenes[i].estadoProducto;
				 
				 subir=1;
  				 refOrden.on("value",function(snap){
  					var datos = snap.val();
  					for (var key in datos) {
						if(datos[key].orders_products_id == orders_products_id ){
					   	subir=0;
					   	break;
					   }
  		  		   	}

				    if(subir == 1 && i < ordenes.length){

				    	resolve(ordenes[i]);
  					   
  				    }
  			    });
            }

	 			
	 			
    });

}


function promesaMostrar(ordenes){

	return new Promise(function(resolve,reject){
			administrator_id   = ordenes["administrator_id"];
			orders_id 		   = ordenes["orders_id"];
			hijo 			   = ordenes["hijo"];
			nombre_producto    = ordenes["nombre_producto"];
			cantidad 		   = ordenes["cantidad"];
			fecha_compra 	   = ordenes["fecha_compra"];
			fecha_entrega      = ordenes["fecha_entrega"];
			orders_products_id = ordenes["orders_products_id"];
			estadoProducto     = ordenes["estadoProducto"];

        refOrden.push({
		 				'administrator_id':  administrator_id,
		 				'orders_id':  	     orders_id,					
		 				'hijo': 	     hijo,		 		
		 				'nombre_producto':   nombre_producto,	 	
		 				'cantidad':          cantidad,
		 				'fecha_compra':      fecha_compra,
		 				'fecha_entrega':     fecha_entrega,
		 				'orders_products_id':orders_products_id,
		 				'estadoProducto'    :estadoProducto	 		
	   });
	 		    resolve("cuando todo funciona");
	 	//		reject("cuando algo falla");
    });

}

$(document).on('click', '#buscarAjax', function(e){

promesaOrdenes()
 .then(function( response ){


 	return promesaBuscar(response);
 })
 .then(function(response){//aqui la respuesta del del anterior

 	//throw "error";//esta linea es de excepcion y s edetiene la linea de promesas;
 	return promesaMostrar(response);
 })
 .then(function(response){//aqui la respuesta del mostrar o del anterior
	mostrarOrdenDeFirebase();

 	console.log(response);

 })
 .catch(function(err){
 	    $("#example1 tbody").html(err);
  		//console.error("error!",err);
 });
});*/


/*
//////////////////////////2 modelo de promesas
function promiseSqrt(ordenes){

    return new Promise(function (fulfill, reject){

			ref='Ordenes/tienda'+ordenes["administrator_id"];
			refOrden = firebase.database().ref().child(ref);
			
				subir=1;
				orders_products_id = ordenes["orders_products_id"];
  				refOrden.on("value",function(snap){

  					var datos = snap.val();
  					if(datos != undefined){
  					 //n = Object.values(datos).length;
  					 //Object.values(object1)
  					 
  					for (var key in datos) {
  						
						if(datos[key].orders_products_id == orders_products_id ){
							subir++;
						
					   		//reject(x);
					   		fulfill({ value: ordenes, result: subir});
					       }
  		  		   	}
  		  		   	}
  		  		   	 //fulfill({ value: ordenes, result: subir, ids: n });//fulfill(ordenes);
  		  		   	 fulfill({ value: ordenes, result: subir});
  			    });
            
           
       
    });
}

$(document).on('click', '#buscarAjax', function(e){

  datos={
      "buscar" 		: $('#buscar').val(),
      "fecha_final" 	: $('#fecha_final').val(),
      "fecha_inicial" 	: $('#fecha_inicial').val(),
      "buscar_por" 	: $('#buscar_por').val(),
      "estado_id" 	: $('#estado_id').val()
	}

		var user_id= $('#user_id').val();

		$.ajax({
				url: '{{ URL::to("admin/listingOrdersAjax") }}',
				type: "GET",
				data: datos,
				//async: false,
				success: function (res) {
				     //console.log(res.length);
					x=res.orders;
					//console.log(x.length);
					ordenes=x.data;
		
				if (ordenes.length > 0){
					
						ordenes.reduce(function (sequence, value) {
       							return sequence.then(function() {
           								return promiseSqrt(value);
       							}).then(function(objeto) {
       							
       							subir = objeto.result;
       							obj=objeto.value;
       							//if(subir == 1){
       							if(subir == 1 && obj.estadoProducto != 2){
       								
       						administrator_id   = obj["administrator_id"];
							orders_id 	   = obj["orders_id"];
							hijo 		   = obj["hijo"];
							nombre_producto    = obj["nombre_producto"];
							cantidad 	   = obj["cantidad"];
							fecha_compra 	   = obj["fecha_compra"];
							fecha_entrega      = obj["fecha_entrega"];
							orders_products_id = obj["orders_products_id"];
							estadoProducto     = obj["estadoProducto"];
       							
           							//console.log('END execution with value =', obj.value,'and result =', obj.result);
		           						refOrden.push({
				 						'administrator_id':  administrator_id,
		 								'orders_id':  	     orders_id,					
						 				'hijo': 	     hijo,		 		
						 				'nombre_producto':   nombre_producto,	 	
						 				'cantidad':          cantidad,
						 				'fecha_compra':      fecha_compra,
						 				'fecha_entrega':     fecha_entrega,
						 				'orders_products_id':orders_products_id,
						 				'estadoProducto'    :estadoProducto	 		
	   
	   				   				});
	   				   		}		
       							})
   						},
   						Promise.resolve()
						).then(function() {
								mostrarOrdenDeFirebase();
   								
						  }).catch(function(err){
 						 	   // $("#example1 tbody").html(err);
  								console.error("errors!",err);
 						    });
				

				}
				else{
					$("#example1 tbody").html("<tr><td colspan='6'><strong>No se encontraron registros</strong></td></tr>");
					}
			    },
		
		}); 

});*/
/*para eliminar esta funcion
$(document).on('click', '#buscarAjax', function(e){
    alert("buscarAjax");

  datos={
      "buscar" 		: $('#buscar').val(),
      "fecha_final" 	: $('#fecha_final').val(),
      "fecha_inicial" 	: $('#fecha_inicial').val(),
      "buscar_por" 	: $('#buscar_por').val(),
      "estado_id" 	: $('#estado_id').val()
	}

		var user_id= $('#user_id').val();
		orden=this.getAttribute("data-pedido");
		tipoOrden=(orden=="almuerzos")?1:0;
		$.ajax({
			//	url: '{{ URL::to("admin/listingOrdersAjax") }}',
				type: "GET",
				data: datos,
				//async: false,
				success: function (res) {
				   //c=res["orders"];
				   //console.log("llego-"+res.orders); 
		
				if (res["ok"]){
				  //console.log(res["todasOrdenes"]);
				 // $("#cantidadCafeteria").html(res["cafeteria"]);
				  mostrarOrdenDeFirebase(tipoOrden);	
				}	
				else{
					//$("#example1 tbody").html("<tr><td colspan='6'><strong>No se encontraron registros</strong></td></tr>");
					$("#example1").html("<tbody><tr><td colspan='6'><strong>No se encontraron registros</strong></td></tr></tbody>");
				    }
			    },
		
		}); 

});*/
$('#searchOrders').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) { 
    e.preventDefault();
    return false;
  }
});

$(document).on('click','.infoProduct',function(){
    

if( $(this).css("background-color")=="rgba(214, 23, 23, 0.8)" )
 $(this).css("background-color","rgba(243, 156, 18, 0.8)")
else
if( $(this).css("background-color")=="rgba(243, 156, 18, 0.8)" )
 $(this).css("background-color","rgba(55, 158, 55, 0.8)")

	
});


/*
$(document).on('click','.pie',function(){
   
     intervaloTiempo = this.getAttribute("id");
     tipoReporte = this.getAttribute("data-report");//="reportPie"
     
     if($( "#pie_mensual" ).hasClass( 'active' ))
              $( "#pie_mensual" ).removeClass( 'active' );
     if($( "#pie_diario" ).hasClass( 'active' ))
              $( "#pie_diario" ).removeClass( 'active' );
     if($( "#pie_anual" ).hasClass( 'active' ))
              $( "#pie_anual" ).removeClass( 'active' );
        
     $("#"+intervaloTiempo).addClass('active')
     $("#"+tipoReporte).val(intervaloTiempo);
})
/*
$(document).on('click','.bar',function(){
   
     intervaloTiempo = this.getAttribute("id");
     tipoReporte = this.getAttribute("data-report");//="reportBar"
     
     if($( "#bar_mensual" ).hasClass( 'active' ))
              $( "#bar_mensual" ).removeClass( 'active' );
     if($( "#bar_diario" ).hasClass( 'active' ))
              $( "#bar_diario" ).removeClass( 'active' );
     if($( "#bar_anual" ).hasClass( 'active' ))
              $( "#bar_anual" ).removeClass( 'active' );
      
     $("#"+intervaloTiempo).addClass('active')
     $("#"+tipoReporte).val(intervaloTiempo);
       
    $.ajax({
        url: '../productSaleReport',
        type: "post",
        data: '&reportBar='+intervaloTiempo,//diario-mensual-anual
        
        success: function(rpta){
         console.log(rpta);
         valor=[];
         dias=[]
         for(i=0; i<rpta["dataBar"]["intervalo"].length; i++ ){
            valor[i]=rpta["dataBar"]["intervalo"][i].subtotal;
            dias[i]=rpta["dataBar"]["intervalo"][i].new_date;
             
         }
         console.log(valor);
      //var canvas= document.getElementById();     
      var barChartCanvas = $("#barChart").get(0).getContext("2d");
     // barChartCanvas.fillStyle = "blue";
     // barChartCanvas.fillRect(0, 0, 100, 150);
     // barChartCanvas.clearRect(0, 0, $("#barChart").width,$("#barChart").height);
         /*var   res = rpta["data"];  
         var i;
         var showDate = [];
         var showValue = [];
         var showQuantity = [];
            for (i = 0; i < res.length; ++i) {
             showDate[i] = res[i].date; 
             showValue[i] = res[i].totalSale;
              showQuantity[i] = res[i].productQuantity; 
             }*/
               /***************************inicio de barras********************************** /
    var areaChartData = {
            labels: dias,//["ene", "Feb", "Marz", "April", "May", "June", "July"],
            datasets: [
            {
                label: "Electronics",
                fillColor: "rgba(0, 166, 90, 1)",//(210, 214, 222, 1)",
                strokeColor: "rgba(0, 166, 90, 1)",
                pointColor: "rgba(0, 166, 90, 1)",
                pointStrokeColor: "#c1c7d1",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data:valor// [65, 59, 80, 81, 56, 55, 40]
            }/*,
            {
                label: "Digital Goods",
                fillColor: "rgba(60,141,188,0.9)",
                strokeColor: "rgba(60,141,188,0.8)",
                pointColor: "#3b8bba",
                pointStrokeColor: "rgba(60,141,188,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(60,141,188,1)",
                data: [28, 48, 40, 19, 86, 27, 90]
            }* /
            ]
        };
      var barChartCanvas = $("#barChart").get(0).getContext("2d");
     // barChartCanvas.fillStyle = "blue";
     // barChartCanvas.fillRect(0, 0, 100, 150);
     // barChartCanvas.clearRect(0, 0, 100, 50);
      
        var barChart = new Chart(barChartCanvas);
        var barChartData = areaChartData;
        //barChartData.datasets[1].fillColor = "#00a65a"; cambiar color del relleno de la fugura
        //barChartData.datasets[1].strokeColor = "#00a65a"; cambiar color de un punto de la fugura
        //barChartData.datasets[1].pointColor = "#00a65a"; cambiar color de otro punto  de la fugura
        var barChartOptions = {
            //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
            scaleBeginAtZero: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: true,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - If there is a stroke on each bar
            barShowStroke: true,
            //Number - Pixel width of the bar stroke
            barStrokeWidth: 2,//si aqui lo cambie
            //Number - Spacing between each of the X value sets
            barValueSpacing: 5,
            //Number - Spacing between data sets within X values
            barDatasetSpacing: 1,
            //String - A legend template
           // legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            //Boolean - whether to make the chart responsive
            responsive: true,
            maintainAspectRatio: true
        };

        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions); 
  /************************fin de barras************************************* /
        }//fin success
        
    })//fin ajax bar    

    
})*/
  
</script>