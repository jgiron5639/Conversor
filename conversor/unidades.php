<?php
function unidades(){
    $unidad = $_GET['convertir'];
    
    if($unidad =="longitud"){
      return "
        <div class='col-6'><select name='unidad_uno' class='form-select border border-dark text-center'>
        <option value=''>Seleccionar Unidad</option>
          <option value='Kilometro'>Kilometro</option>
          <option value='Metro'>Metro</option>
          <option value='Centimetro'>Centimetro</option>
          <option value='Milimetro'>Milimetro</option></select></div>
        <div class='col-6'><select name='unidad_dos' class='form-select border border-dark text-center'>
        <option value=''>Seleccionar Unidad</option>
          <option value='Kilometro'>Kilometro</option>
          <option value='Metro'>Metro</option>
          <option value='Centimetro'>Centimetro</option>
          <option value='Milimetro'>Milimetro</option></select></div>";
    }
    if($unidad =="masa"){
      return "
        <div class='col-6'><select name='unidad_uno' class='form-select border border-dark text-center'>
          <option value=''>Seleccionar Unidad</option>
          <option value='Tonelada'>Tonelada</option>
          <option value='Kilogramo'>Kilogramo</option>
          <option value='Gramo'>Gramo</option>
          <option value='Miligramo'>Miligramo</option></select></div>
        <div class='col-6'><select name='unidad_dos' class='form-select border border-dark text-center'>
          <option value=''>Seleccionar Unidad</option>
          <option value='Tonelada'>Tonelada</option>
          <option value='Kilogramo'>Kilogramo</option>
          <option value='Gramo'>Gramo</option>
          <option value='Miligramo'>Miligramo</option></select></div>";
    }
    if($unidad =="temperatura"){
      return "
        <div class='col-6'><select name='unidad_uno' class='form-select border border-dark text-center'>
          <option value=''>Seleccionar Unidad</option>
          <option value='Grados Celsius'>Grados Celsius</option>
          <option value='Grados Fahrenheit'>Grado Fahrenheit</option>
          <option value='Grados Kelvin'>Grados Kelvin</option></select></div>
        <div class='col-6'><select name='unidad_dos' class='form-select border border-dark text-center'>
          <option value=''>Seleccionar Unidad</option>
          <option value='Grados Celsius'>Grados Celsius</option>
          <option value='Grados Fahrenheit'>Grado Fahrenheit</option>
          <option value='Grados Kelvin'>Kelvin</option></select></div>";
    }
    if($unidad =="tiempo"){
      return "<div class='col-6'><select name='unidad_uno' class='form-select border border-dark text-center'>
          <option value=''>Seleccionar Unidad</option>
          <option value='Segundo'>Segundos</option>
          <option value='Minuto'>Minutos</option>
          <option value='Hora'>Horas</option>
          <option value='Dia'>Días</option></select></div>
        <div class='col-6'><select name='unidad_dos' class='form-select border border-dark text-center'>
          <option value=''>Seleccionar Unidad</option>
          <option value='Segundo'>Segundos</option>
          <option value='Minuto'>Minutos</option>
          <option value='Hora'>Horas</option>
          <option value='Dia'>Días</option></select></div>";
    }
  }
?>