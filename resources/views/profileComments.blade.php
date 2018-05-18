@extends('layout.profilelayout')
<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->


@section('content')

    <!-- Password input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="passwordinput">new password</label>
    <div class="col-md-4">
        <input id="passwordinput" name="passwordinput" type="password" placeholder="new password" class="form-control input-md">
        
    </div>
    </div>

    <!-- Password input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="passwordinput">repeat password</label>
    <div class="col-md-4">
        <input id="passwordinput" name="passwordinput" type="password" placeholder="repeat password" class="form-control input-md">
        
    </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">set security question</label>
    <div class="col-md-4">
        <select id="selectbasic" name="selectbasic" class="form-control">
        <option value="1">Question 1</option>
        <option value="2">Question 2</option>
        <option value="3">Question 3</option>
        </select>
    </div>
    </div>

    <!-- Button -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="singlebutton">view account status</label>
    <div class="col-md-4">
        <button id="singlebutton" name="singlebutton" class="btn btn-success">view</button>
    </div>
    </div>

    <!-- Button -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="singlebutton">Remove my account</label>
    <div class="col-md-4">
        <button id="singlebutton" name="singlebutton" class="btn btn-danger">remove</button>
    </div>
    </div>

    <!-- Multiple Checkboxes -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="checkboxes">Privacy settings</label>
    <div class="col-md-4">
    <div class="checkbox">
        <label for="checkboxes-0">
        <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
        1
        </label>
        </div>
    <div class="checkbox">
        <label for="checkboxes-1">
        <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
        2
        </label>
        </div>
    <div class="checkbox">
        <label for="checkboxes-2">
        <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
        3
        </label>
        </div>
    <div class="checkbox">
        <label for="checkboxes-3">
        <input type="checkbox" name="checkboxes" id="checkboxes-3" value="4">
        4
        </label>
        </div>
    </div>
    </div>

    <!-- Select Multiple -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="selectmultiple">Languages</label>
    <div class="col-md-4">
        <select id="selectmultiple" name="selectmultiple" class="form-control" multiple="multiple">
        <option value="1">Persian</option>
        <option value="2">English</option>
        <option value="3">Arabic</option>
        </select>
    </div>
    </div>

    </fieldset>
    </form>

    </div>
    </div>

@endsection