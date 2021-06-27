@extends('adminlte::page')

@section('title','Nuevo Proyecto')


@section('content')
<div> 
  <!-- Content Header (Page header) -->
  <section class="content-header" style="margin-top: -1em;">
    <span style="font-size: 1.5em;"> {{ trans('labels.AddProyecto') }}</span>
    <ol class="breadcrumb float-right font-italic">
       <li><a href="{{ URL::to('admin') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      /<li><a href="{{ URL::to('admin/listarProyecto')}}"><i class="fa fa-dashboard"></i> {{ trans('labels.ListaDeProyectos') }}</a></li>
      /<li class="active">{{ trans('labels.NuevoProyecto') }}</li>
    </ol>
  </section>

  <div class="container-fluid">
	<div class="row">
  <div class="col-1"></div>
		<div class="col">

			<div class="tabbable" id="tabs-994657">

				<ul class="nav nav-tabs">

					<li class="nav-item">
						<a class="nav-link active show" href="#cronograma" data-toggle="tab">Cronograma</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#ubicacion" data-toggle="tab">Ubicación</a>
					</li>

          <li class="nav-item">
						<a class="nav-link" href="#informacion" data-toggle="tab">Información</a>
					</li>

          <li class="nav-item">
						<a class="nav-link" href="#obra" data-toggle="tab">Contrato de Obra</a>
					</li>

				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="cronograma">
						<p>

            <form class="was-validated">
              <div class="mb-3">
                <label for="validationTextarea">Textarea</label>
                <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                <div class="invalid-feedback">
                  Please enter a message in the textarea.
                </div>
              </div>

              <div class="custom-control custom-checkbox mb-3">
              <label for="validationTextarea">Textarea</label>
                <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                <div class="invalid-feedback">Example invalid feedback text</div>
              </div>

              <div class="custom-control custom-radio">
              <label for="validationTextarea">Textarea</label>
                <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
              </div>
              <div class="custom-control custom-radio mb-3">
              <label for="validationTextarea">Textarea</label>
                <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
                <div class="invalid-feedback">More example invalid feedback text</div>
              </div>

              <div class="mb-3">
              <label for="validationTextarea">Textarea</label>
                <select class="custom-select" required>
                  <option value="">Choose...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback33</div>
              </div>

              <div class="custom-file mb-3">
              <label for="validationTextarea">Textarea</label>
                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                <div class="invalid-feedback">Example invalid custom file feedback</div>
              </div>

              <div class="mb-3">
                <div class="input-group is-invalid">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="validatedInputGroupPrepend">@</span>
                  </div>
                  <label for="validationTextarea">Textarea</label>
                  <input type="text" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                </div>
                <div class="invalid-feedback">
                  Example invalid input group feedback
                </div>
              </div>

              <div class="mb-3">
                <div class="input-group is-invalid">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="validatedInputGroupSelect">Options</label>
                  </div>
                  <label for="validationTextarea">Textarea</label>
                  <select class="custom-select" id="validatedInputGroupSelect" required>
                    <option value="">Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="invalid-feedback">
                  Example invalid input group feedback
                </div>
              </div>

              <div class="input-group is-invalid">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" required>
                  <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
                </div>
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button">Button</button>
                </div>
              </div>
              <div class="invalid-feedback">
                Example invalid input group feedback
              </div>
            </form>

						</p>
					</div>

					<div class="tab-pane" id="ubicacion">
						<p>

            <form>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationServer01">First name</label>
                  <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationServer02">Last name</label>
                  <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationServer03">City</label>
                  <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
                  <div id="validationServer03Feedback" class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="validationServer04">State</label>
                  <select class="custom-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                    <option selected disabled value="">Choose...</option>
                    <option>...</option>
                  </select>
                  <div id="validationServer04Feedback" class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="validationServer05">Zip</label>
                  <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
                  <div id="validationServer05Feedback" class="invalid-feedback">
                    Please provide a valid zip.
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                  <label class="form-check-label" for="invalidCheck3">
                    Agree to terms and conditions
                  </label>
                  <div  id="invalidCheck3Feedback" class="invalid-feedback">
                    You must agree before submitting.
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Submit form</button>
            </form>


						</p>
					</div>

          <div class="tab-pane" id="informacion">
						<p>
            
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control form-control-sm" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input type="password" class="form-control form-control-sm" id="inputPassword4">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control form-control-sm" id="inputAddress" placeholder="1234 Main St">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control form-control-sm" id="inputAddress2" placeholder="Apartment, studio, or floor">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">City</label>
                  <input type="text" class="form-control form-control-sm" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">State</label>
                  <select id="inputState" class="form-control form-control-sm">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Zip</label>
                  <input type="text" class="form-control form-control-sm" id="inputZip">
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input form-control-sm" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    Check me out
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file form-control-sm" id="exampleFormControlFile1">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Sign in</button>
            </form>


						</p>
					</div>

					<div class="tab-pane" id="obra">
						<p>
            

            <div class="form-group">
                
                <div class="input-group mb-3">

                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                  </div>

                  <input type="text" class="form-control  date fechas" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">

                </div>

            </div>

						</p>
					</div>

				</div>

			</div>


		</div>
    <div class="col-1"></div> 
	</div>
</div>      



</div> 
@stop


@section('css')
  
@stop

@section('js')


    <script> 
$('.fechas').datepicker({
    format: "dd/mm/yyyy",
    language: "es",
    orientation: "bottom left"
});
 /*   Swal.fire(
  'Hola!',
  'Ahora Crearemos un proyecto!',
  'ok!'
)*/
     </script>
@stop