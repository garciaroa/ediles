@extends('adminlte::page')

@section('title','Nuevo Proyecto')


@section('content')

        <!-- Main content -->
  <section class="content">  
 
  <div class="box-header shadow" style=" padding-right: 1em; padding-left: 1em;">
            <h3 class="box-title" style="margin:0.5em 0em 0em 0.5em;"><b> LOS MAS VOTADOS </b></h3>

    <div class="row">
      <?php $i=0; ?>
      @foreach($comunas as $comuna)
              <div class="col-lg-3 col-xs-6">
              
                <!-- small box -->
                <div class="small-box" style={{$fondo[$i]}}>
                  <div class="inner">
                    <h4><em> @if( isset($comuna->nombreProyecto) ) {{$comuna->nombreProyecto}} @else Sin Proyectos @endif</em></h4>
              <p>{{ trans('labels.totalVotos') }} <span style="float:right;">@if( isset($comuna->votos) ) {{$comuna->votos}} @else 0 @endif</span></p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                
                <div class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="View All Orders">

                    <form action="{{ URL::to('admin/listarProyecto')}}" id="formComuna{{$comuna->id_comuna}}" enctype="multipart/form-data">
                    
                    <input type="hidden" value="{{$comuna->id_comuna}}" name="categories_id" id="categories_id">
                      <a href="" class="VerComuna" data-comuna="{{$comuna->id_comuna}}" style="color:whitesmoke"> {{ trans('labels.verComuna') }} <span style="font-size: 1.3em;"><b>Comuna {{$comuna->id_comuna}}</b></span> <i class="fa fa-arrow-circle-right"></i></a>
                    
                    </form>

                </div>
                </div>
              </div>
              <?php $i++; ?>   
      @endforeach


        <!-- ./col -->
      </div>
      </div>  
      <br>
      <div class="row"><!-- la mia -->
          
         <div class="col-sm-6">
          <div class="nav-tabs-custom shadow ">
          <div class="box-header with-border">
            <h3 class="box-title">Proyectos Vs Comuna</h3>
          </div>
          
            <!--ul class="nav nav-tabs">
 

              <li style="width: 50%"><a href="#" data-toggle="tab">
                  <div class="input-group ">
                     <div class="input-group-btn">
                        <button type="button" class="btn btn-default" aria-label="Help">{{-- trans('labels.date') }}</button> 
                     </div>
                     
                     <input class="form-control reservation dateRangePie" readonly value="" name="dateRangePie" aria-label="Text input with multiple buttons " style="font-size:0.8em;">
                     <div class="input-group-btn"><button type="button" class="btn btn-primary getRangePie" >{{ trans('labels.go') --}}</button> </div> 
                   </div>
                </a></li>
            </ul-->
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="grafica" style="height: 250px;">
                        	
                    </canvas>
                    
                  </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        
        <!-- --------------------- columna 2--------------- -->
        <div class="col-sm-6">
          <div class="nav-tabs-custom shadow ">
          <div class="box-header with-border">
            
            <h3 class="box-title">Votos Vs Comuna</h3>
            
          </div>
          
         
            <!--ul class="nav nav-tabs">
                

              <li style="width: 50%"><a href="#" data-toggle="tab">
                  <div class="input-group ">
                     <div class="input-group-btn">
                        <button type="button" class="btn btn-default" aria-label="Help">{{-- trans('labels.date') }}</button> 
                     </div>
                     
                     <input class="form-control reservation dateRangeBar" data-report="reportBar" readonly value="" name="dateRangeBar" aria-label="Text input with multiple buttons " style="font-size:0.8em;">
                     <div class="input-group-btn"><button type="button" class="btn btn-primary getRangeBar" >{{ trans('labels.go') --}}</button> </div> 
                   </div>
                </a></li>
            </ul-->
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="popChart" style="height: 250px;"></canvas>
                  </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
          
      </div><!-- /row esta es la mia -->

    <!-------------Comparacionde Comunas y votacion en el tiempo----------------->
    <br>
    <div class="row"><!-- la mia -->
          
          <div class="col-sm-12">
           <div class="nav-tabs-custom shadow ">
           <div class="box-header with-border">
             <h3 class="box-title">Votos x Comuna Vs Tiempo</h3>
           </div>
           
             <!--ul class="nav nav-tabs">
  
 
               <li style="width: 50%"><a href="#" data-toggle="tab">
                   <div class="input-group ">
                      <div class="input-group-btn">
                         <button type="button" class="btn btn-default" aria-label="Help">{{-- trans('labels.date') }}</button> 
                      </div>
                      
                      <input class="form-control reservation dateRangePie" readonly value="" name="dateRangePie" aria-label="Text input with multiple buttons " style="font-size:0.8em;">
                      <div class="input-group-btn"><button type="button" class="btn btn-primary getRangePie" >{{ trans('labels.go') --}}</button> </div> 
                    </div>
                 </a></li>
             </ul-->
             <div class="tab-content">
               <div class="active tab-pane" id="activity">
                 <!-- Post -->
                 <div class="chart">
                     <!-- Sales Chart Canvas -->
                     <canvas id="ComparacionComunas" style="height: auto;">
                           
                     </canvas>
                     
                   </div>
                 <!-- /.post -->
               </div>
               <!-- /.tab-pane -->
             </div>
             <!-- /.tab-content -->
           </div>
           <!-- /.nav-tabs-custom -->
         </div>
         
         
           
       </div><!-- /row esta es la mia -->


      
      
      </section>
    <!-- /.content -->





@stop


@section('css')

@stop

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js" ></script> 


<script>
$(function(){

 $(".VerComuna").on("click",function(e){
    e.preventDefault();   
    idComuna = $(this).attr("data-comuna");
    comuna  = "#formComuna"+idComuna;
    $(comuna).submit();
    
 }); 
//Chart.defaults.global.defaultFontFamily = "Lato";
//Chart.defaults.global.defaultFontSize = 18;
//Chart.defaults.global.defaultFontColor = 'blue';

/*var popCanvas = $("#popChart");
var popCanvas = document.getElementById("popChart");*/
var popCanvas = document.getElementById("popChart").getContext("2d");
var barChart = new Chart(popCanvas, {
  type: 'bar',
  data: {
    //labels: ["China", "India", "United States", "Indonesia", "Brazil", "Pakistan", "Nigeria", "Bangladesh", "Russia", "Japan"],
    labels: ["Comuna 1", "Comuna 2", "Comuna 3", "Comuna 4", "Comuna 5", "Comuna 6", "Comuna 7", "Comuna 8"],
    datasets: [{
      label: 'Mayor Participación',
     // data: [1379302771, 1281935911, 326625791, 260580739, 207353391, 204924861, 190632261, 157826578, 142257519, 126451398],
     data: [320, 120, 105, 210, 18, 126, 184, 119],
      backgroundColor: [
        'rgba(255, 99, 132, 0.6)',
        'rgba(54, 162, 235, 0.6)',
        'rgba(255, 206, 86, 0.6)',
       // 'rgba(75, 192, 192, 0.6)',
        'rgba(153, 102, 255, 0.6)',
        'rgba(255, 159, 64, 0.6)',
       // 'rgba(255, 99, 132, 0.6)',
       // 'rgba(54, 162, 235, 0.6)',
        'rgba(255, 206, 186, 0.6)',
        'rgba(175, 192, 192, 0.6)',
        'rgba(153, 202, 255, 0.6)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(255, 206, 186, 1)',
        'rgba(175, 192, 192, 1)',
        'rgba(153, 202, 255, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
        legend: {
          display: true,
          position: 'bottom',
          labels: {
            boxWidth: 180,
            fontColor: 'rgb(60, 180, 100)',
            backgroundColor:'rgb(60, 180, 100)'
          }
        }
    }
});
/************************************************************************ */
/* Grafica De Torta*/

// Obtener una referencia al elemento canvas del DOM
const $grafica = document.querySelector("#grafica");
// Las etiquetas son las porciones de la gráfica
const etiquetas = ["Comuna 1", "Comuna 2", "Comuna 3", "Comuna 4", "Comuna 5", "Comuna 6", "Comuna 7", "Comuna 8"]
// Podemos tener varios conjuntos de datos. Comencemos con uno
const datosIngresos = {
    data: [30, 40, 20, 70, 10, 15, 28, 43], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    // Ahora debería haber tantos background colors como datos, es decir, para este ejemplo, 4
    backgroundColor: [
        'rgba(255, 99, 132, 0.6)',
        'rgba(54, 162, 235, 0.6)',
        'rgba(255, 206, 86, 0.6)',
        'rgba(153, 102, 255, 0.6)',
        'rgba(255, 159, 64, 0.6)',
        'rgba(255, 206, 186, 0.6)',
        'rgba(175, 192, 192, 0.6)',
        'rgba(153, 202, 255, 0.6)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(255, 206, 186, 1)',
        'rgba(175, 192, 192, 1)',
        'rgba(153, 202, 255, 1)'
      ],  
   /* backgroundColor: [
        'rgba(163,221,203,0.2)',
        'rgba(232,233,161,0.2)',
        'rgba(230,181,102,0.2)',
        'rgba(229,112,126,0.2)',
    ],// Color de fondo
    borderColor: [
        'rgba(163,221,203,1)',
        'rgba(232,233,161,1)',
        'rgba(230,181,102,1)',
        'rgba(229,112,126,1)',
    ],// Color del borde*/
    borderWidth: 1,// Ancho del borde
};
new Chart($grafica, {
    type: 'pie',// Tipo de gráfica. Puede ser dougnhut o pie
    data: {
        labels: etiquetas,
        datasets: [
            datosIngresos,
            // Aquí más datos...
        ]
    },
});

/******************************************* */
/**Grafica de todas las comunas comparacion */

// Obtener una referencia al elemento canvas del DOM
const $graficaComparacionComunas = document.querySelector("#ComparacionComunas");
// Las etiquetas son las que van en el eje X. 
const etiquetasTiempo = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"]
// Podemos tener varios conjuntos de datos

const datosVotosComuna1 = {
    label: "Comuna_1",
    data: [10, 90, 134, 200, 32, 45, 145, 89, 12, 230, 430, 1200 ], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(255, 99, 132, 0.2)',// Color de fondo
    borderColor: 'rgba(255, 99, 132, 1)',// Color del borde
    borderWidth: 1,// Ancho del borde
    fill:false,
};
const datosVotosComuna2 = {
    label: "Comuna_2",
    data: [132, 700, 350, 100, 700, 700, 400, 20, 120, 49, 76, 117], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(54, 162, 235, 0.5)',// Color de fondo
    borderColor: 'rgba(54, 162, 235,,1)',// Color del borde
    borderWidth: 1,// Ancho del borde
    fill:false,
};
const datosVotosComuna3 = {
    label: "Comuna_3",
    data: [500, 105, 80, 102, 504, 1500, 800, 512, 120, 178, 231, 100], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(255, 206, 86, 0.2)', // Color de fondo
    borderColor: 'rgba(255, 206, 86, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
    fill:false,
};

const datosVotosComuna4 = {
    label: "Comuna_4",
    data: [50, 170, 503, 89, 107, 370, 450, 89, 12, 170, 210, 54], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(153, 102, 255, 0.2)',// Color de fondo
    borderColor: 'rgba(153, 102, 255, 1)',// Color del borde
    borderWidth: 1,// Ancho del borde
    fill:false,
};
const datosVotosComuna5 = {
    label: "Comuna_5",
    data: [250, 190, 334, 280, 15, 90, 134, 20, 120, 0, 93, 100], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(255, 159, 64, 0.2)',// Color de fondo
    borderColor: 'rgba(255, 159, 64, 1)',// Color del borde
    borderWidth: 1,// Ancho del borde
    fill:false,
};
const datosVotosComuna6 = {
    label: "Comuna_6",
    data: [70, 710, 450, 200, 170, 897, 450, 250, 33, 43, 0, 20], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(255, 206, 186,0.5)',// Color de fondo
    borderColor: 'rgba(255, 206, 186,1)',// Color del borde
    borderWidth: 1,// Ancho del borde
    fill:false,
};
const datosVotosComuna7 = {
    label: "Comuna_7",
    data: [100, 150, 80, 51, 120, 130, 80, 51, 120, 210, 320, 145], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(175, 192, 192, 0.2)', // Color de fondo
    borderColor: 'rgba(175, 192, 192, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
    fill:false,
};
const datosVotosComuna8 = {
    label: "Comuna_8",
    data: [10, 17, 50, 89, 101, 37, 500, 189, 29, 84, 120, 560], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(153, 202, 255, 0.2)',// Color de fondo
    borderColor: 'rgba(153, 202, 255, 1)',// Color del borde
    borderWidth: 1,// Ancho del borde
    fill:false,
    
};

new Chart($graficaComparacionComunas, {
    type: 'line',// Tipo de gráfica
    data: {
        labels: etiquetasTiempo,
        datasets: [
          datosVotosComuna1,
          datosVotosComuna2,
          datosVotosComuna3,
          datosVotosComuna4,
          datosVotosComuna5,
          datosVotosComuna6,
          datosVotosComuna7,
          datosVotosComuna8,
            // Aquí más datos...
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
        },
    }
});


/*** otra grafica */
/*
      //get the pie chart canvas
      var cData = JSON.parse(`//< ? php echo $chart_data; ?>`);
      var ctx = $("#pie-chart");
 
      //pie chart data
      var data = {
        labels: cData.label,
        datasets: [
          {
            label: "Users Count",
            data: cData.data,
            backgroundColor: [
              "#DEB887",
              "#A9A9A9",
              "#DC143C",
              "#F4A460",
              "#2E8B57",
              "#1D7A46",
              "#CDA776",
            ],
            borderColor: [
              "#CDA776",
              "#989898",
              "#CB252B",
              "#E39371",
              "#1D7A46",
              "#F4A460",
              "#CDA776",
            ],
            borderWidth: [1, 1, 1, 1, 1,1,1]
          }
        ]
      };
 
      //options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          text: "Last Week Registered Users -  Day Wise Count",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: true,
          position: "bottom",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };
 
      //create Pie Chart class object
      var chart1 = new Chart(ctx, {
        type: "pie",
        data: data,
        options: options
      });*/
 
  });
</script>
@stop

