<?php
$parameter1 = str_ireplace('\\','/',"$empresax->banner");
$parameter = 'http://localhost:8000/storage/'.$parameter1; 
?>

</br>
<div class="scroll-element">
  <div class="card card-accordion scroll-element scroll-element-model company- my-3 bg-light text-dark">

    <div class="row">
        <div class="col-sm-5">
          <img class="card-img-top img-fluid rounded float-left img-company" src="{{ $parameter }}" style="width:100%">
        </div>
      <div class="col-sm-7">
        <div class="card-body">
          <h5 class="card-title text-uppercase text-danger">{{ $empresax->name }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">Telefone: {{ $empresax->phone }}</h6>

          <p class="card-text " style="display:block;color:black;">{{ $empresax->description }}</p>
        </div>
      </div>
      </br>
    </div>
  </div>
</div>