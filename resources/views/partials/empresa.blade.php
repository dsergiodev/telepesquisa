<?php
$parameter1 = str_ireplace('\\','/',"$empresax->banner");
$parameter = 'http://localhost:8000/storage/'.$parameter1; 
?>

</br>
<div class="card bg-light">

  <div class="row">
      <div class="col-sm-5">
        <img class="card-img-top" src="{{ $parameter }}" style="width:100%">
      </div>

    <div class="col-sm-7">
      <div class="card-body">
        <h5 class="card-title">{{ $empresax->name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Telefon: {{ $empresax->phone }}</h6>
        <p class="card-text">{{ $empresax->description }}</p>
      </div>
    </div>
    </br>
  </div>
</div>