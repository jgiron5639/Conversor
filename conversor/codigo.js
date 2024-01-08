function mostrarSelects() {
    var seleccion = document.getElementById("seleccionMagnitud").value;
    var select1 = document.getElementById("select1");
    var select2 = document.getElementById("select2");

    // Reiniciar los valores
    select1.innerHTML = "";
    select2.innerHTML = "";

    if (seleccion === "longitud") {
        // Si la magnitud seleccionada es longitud
        var opciones = ["Kilometros", "Metros", "Centimetros", "Milimetros"];
        agregarOpciones(select1, opciones);
        agregarOpciones(select2, opciones);
    }else if (seleccion === "masa"){
        // Si la magnitud seleccionada es masa
        var opciones = ["Toneladas", "Kilogramos", "Gramos", "Miligramos"];
        agregarOpciones(select1, opciones);
        agregarOpciones(select2, opciones);
    }else if (seleccion === "temperatura") {
        // Si la magnitud seleccionada es temperatura
      var opciones = ["Celsius", "Fahrenheit", "Kelvin"];
      agregarOpciones(select1, opciones);
      agregarOpciones(select2, opciones);
    }else if(seleccion === "tiempo"){
        var opciones = ["Segundos", "Minutos", "Horas", "Dias"];
        agregarOpciones(select1, opciones);
        agregarOpciones(select2, opciones);
    }
        // Puedes seguir agregando más condiciones para otras magnitudes

  }

  function agregarOpciones(select, opciones) {
    for (var i = 0; i < opciones.length; i++) {
      var opcion = document.createElement("option");
      opcion.text = opciones[i];
      select.add(opcion);
    }
  }

  function calcularConversion() {
    var select1 = document.getElementById("select1").value;
    var select2 = document.getElementById("select2").value;
    var valorEntrada = parseFloat(document.getElementById("inputValor").value);
    var resultado = document.getElementById("resultado");

    // Realizar conversiones según las opciones seleccionadas
    //Kilometros
    if (select1 === "Kilometros" && select2 === "Metros") {
      resultado.innerHTML = valorEntrada * 1000+" Metros"; // Conversión de kilometros a metros
    } else if (select1 === "Kilometros" && select2 === "Centimetros") {
      resultado.innerHTML = valorEntrada * 100000+" Centimetros"; // Conversión de kilometros a centimetros
    } else if (select1 === "Kilometros" && select2 === "Milimetros") {
      resultado.innerHTML = valorEntrada * 1e+6+" Milimetros"; // Conversión de kilómetros a milimetros
    }
    //Metros
    if (select1 === "Metros" && select2 === "Kilometros") {
        resultado.innerHTML = valorEntrada / 1000+" Kilometros"; // Conversión de Metros a Kilometros
      } else if (select1 === "Metros" && select2 === "Centimetros") {
        resultado.innerHTML = valorEntrada * 100+" Centimetros"; // Conversión de Metros a Centimetros
      } else if (select1 === "Metros" && select2 === "Milimetros") {
        resultado.innerHTML = valorEntrada * 1000+" Milimetros"; // Conversión de Metros a Milimetros
      }
    //Centimetros
    if (select1 === "Centimetros" && select2 === "Kilometros") {
        resultado.innerHTML = valorEntrada / 100000+" Kilometros"; // Conversión de Centimetros a Kilometros
      } else if (select1 === "Centimetros" && select2 === "Metros") {
        resultado.innerHTML = valorEntrada / 100+" Metros"; // Conversión de centimetros a metros
      } else if (select1 === "Centimetros" && select2 === "Milimetros") {
        resultado.innerHTML = valorEntrada * 10+" Milimetros"; // Conversión de centimetros a milimetros
      }
    //Milimetros
    if (select1 === "Milimetros" && select2 === "Kilometros") {
        resultado.innerHTML = valorEntrada /1e+6+" Kilometros"; // Conversión de milimetros a kilometros
      } else if (select1 === "Milimetros" && select2 === "Metros") {
        resultado.innerHTML = valorEntrada / 1000+" Metros"; // Conversión de milimetros a metros
      } else if (select1 === "Milimetros" && select2 === "Centimetros") {
        resultado.innerHTML = valorEntrada / 10+" Centimetros"; // Conversión de milimetros a centimetros
      }
    //Unidades iguales
    if (select1 === "Kilometros" && select2 === "Kilometros") {
        resultado.innerHTML = valorEntrada+" Kilometros"; // Conversión de kilometros a kilometros
      } else if (select1 === "Metros" && select2 === "Metros") {
        resultado.innerHTML = valorEntrada+" Metros"; // Conversión de metros a metros
      } else if (select1 === "Centimetros" && select2 === "Centimetros") {
        resultado.innerHTML = valorEntrada+" Centimetros"; // Conversión de centimetros a centimetros
      } else if (select1 === "Milimetros" && select2 === "Milimetros") {
        resultado.innerHTML = valorEntrada+" Milimetros"; // Conversión de milimetros a milimetros
      }

      //Toneladas
      if (select1 === "Toneladas" && select2 === "Kilogramos") {
        resultado.innerHTML = valorEntrada * 1000+" Toneladas"; // Conversión de toneladas a kilogramos
      } else if (select1 === "Toneladas" && select2 === "Gramos") {
        resultado.innerHTML = valorEntrada * 1e+6+" Gramos"; // Conversión de toneladas a gramos
      } else if (select1 === "Toneladas" && select2 === "Miligramos") {
        resultado.innerHTML = valorEntrada * 1e+9+" Miligramos"; // Conversión de toneladas a miligramos
      }
      //Kilogramos
      if (select1 === "Kilogramos" && select2 === "Toneladas") {
        resultado.innerHTML = valorEntrada / 1000+" Toneladas"; // Conversión de kilogramos a toneladas
      } else if (select1 === "Kilogramos" && select2 === "Gramos") {
        resultado.innerHTML = valorEntrada * 1000+" Gramos"; // Conversión de kilogramos a gramos
      } else if (select1 === "Kilogramos" && select2 === "Miligramos") {
        resultado.innerHTML = valorEntrada * 1e+6+" Miligramos"; // Conversión de kilogramos a miligramos
      }
      //Gramos
      if (select1 === "Gramos" && select2 === "Toneladas") {
        resultado.innerHTML = valorEntrada / 1e+6+" Toneladas"; // Conversión de gramos a toneladas
      } else if (select1 === "Gramos" && select2 === "Kilogramos") {
        resultado.innerHTML = valorEntrada / 1000+" Kilogramos"; // Conversión de gramos a kilogramos
      } else if (select1 === "Gramos" && select2 === "Miligramos") {
        resultado.innerHTML = valorEntrada * 1000+" Miligramos"; // Conversión de gramos a miligramos
      }
      //Miligramos
      if (select1 === "Miligramos" && select2 === "Toneladas") {
        resultado.innerHTML = valorEntrada / 1e+9+" Toneladas"; // Conversión de miligramos a toneladas
      } else if (select1 === "Miligramos" && select2 === "Kilogramos") {
        resultado.innerHTML = valorEntrada / 1e+9+" Kilogramos"; // Conversión de miligramos a kilogramos
      } else if (select1 === "Miligramos" && select2 === "Gramos") {
        resultado.innerHTML = valorEntrada / 1000+" Gramos"; // Conversión de miligramos a gramos
      }
      //Unidades iguales
      if (select1 === "Toneladas" && select2 === "Toneladas") {
        resultado.innerHTML = valorEntrada+" Toneladas"; // Conversión de toneladas a toneladas
      } else if (select1 === "Kilogramos" && select2 === "Kilogramos") {
        resultado.innerHTML = valorEntrada+" Kilogramos"; // Conversión de kilometros a kilogramos
      } else if (select1 === "Gramos" && select2 === "Gramos") {
        resultado.innerHTML = valorEntrada+" Gramos"; // Conversión de gramos a gramos
      } else if (select1 === "Miligramos" && select2 === "Miligramos") {
        resultado.innerHTML = valorEntrada+" Miligramos"; // Conversión de miligramos a miligramos
      }

      //Celsius
      if (select1 === "Celsius" && select2 === "Fahrenheit") {
        resultado.innerHTML = (valorEntrada*9/5)+32+" Grados Fahrenheit"; // Conversión de celsius a fahrenheit
      } else if (select1 === "Celsius" && select2 === "Kelvin") {
        resultado.innerHTML = valorEntrada+273.15+" Grados Kelvin"; // Conversión de celsius a kelvin
      }
      //Fahrenheit
      if (select1 === "Fahrenheit" && select2 === "Celsius") {
        resultado.innerHTML = (valorEntrada-32)*5/9+" Grados Celsius"; // Conversión de fahrenheit a celsius
      } else if (select1 === "Fahrenheit" && select2 === "Kelvin") {
        resultado.innerHTML = (valorEntrada-32)*5/9+273.15+" Grados Kelvin"; // Conversión de fahrenheit a kelvin
      }
      //Kelvin
      if (select1 === "Kelvin" && select2 === "Celsius") {
        resultado.innerHTML = valorEntrada-273.15+" Grados Celsius"; // Conversión de kelvin a celsius
      } else if (select1 === "Kelvin" && select2 === "Fahrenheit") {
        resultado.innerHTML = (valorEntrada-273.15)*9/5+32+" Grados Fahrenheit"; // Conversión de kelvin a fahrenheit
      }
      //Unidades iguales
      if (select1 === "Celsius" && select2 === "Celsius") {
        resultado.innerHTML = valorEntrada+" Grados Celsius"; // Conversión de celsius a celsius
      } else if (select1 === "Fahrenheit" && select2 === "Fahrenheit") {
        resultado.innerHTML = valorEntrada+" Grados Fahrenheit"; // Conversión de fahrenheit a fahrenheit
      } else if (select1 === "Kelvin" && select2 === "Kelvin") {
        resultado.innerHTML = valorEntrada+" Grados Kelvin"; // Conversión de kelvin a kelvin
      }

      //Segundos
      if (select1 === "Segundos" && select2 === "Minutos") {
        resultado.innerHTML = valorEntrada / 60+" Minutos"; // Conversión de segundos a minutos
      } else if (select1 === "Segundos" && select2 === "Horas") {
        resultado.innerHTML = valorEntrada /3600+" Horas"; // Conversión de segundos a horas
      } else if (select1 === "Segundos" && select2 === "Dias") {
        resultado.innerHTML = valorEntrada / 86400+" Días"; // Conversión de segundos a días
      }
      //Minutos
      if (select1 === "Minutos" && select2 === "Segundos") {
        resultado.innerHTML = valorEntrada * 60+" Segundos"; // Conversión de minutos a segundos
      } else if (select1 === "Minutos" && select2 === "Horas") {
        resultado.innerHTML = valorEntrada / 60+" Horas"; // Conversión de minutos a horas
      } else if (select1 === "Minutos" && select2 === "Dias") {
        resultado.innerHTML = valorEntrada / 1440+" Días"; // Conversión de minutos a días
      }
      //Horas
      if (select1 === "Horas" && select2 === "Segundos") {
        resultado.innerHTML = valorEntrada * 3600+" Segundos"; // Conversión de horas a segundos
      } else if (select1 === "Horas" && select2 === "Minutos") {
        resultado.innerHTML = valorEntrada * 60+" Minutos"; // Conversión de horas a minutos
      } else if (select1 === "Horas" && select2 === "Dias") {
        resultado.innerHTML = valorEntrada / 24+" Días"; // Conversión de horas a días
      }
      //Dias
      if (select1 === "Dias" && select2 === "Segundos") {
        resultado.innerHTML = valorEntrada * 86400+" Segundos"; // Conversión de días a segundos
      } else if (select1 === "Dias" && select2 === "Minutos") {
        resultado.innerHTML = valorEntrada * 1440+" Minutos"; // Conversión de días a minutos
      } else if (select1 === "Dias" && select2 === "Horas") {
        resultado.innerHTML = valorEntrada * 24+" Horas"; // Conversión de días a horas
      }
      //Unidades iguales
      if (select1 === "Segundos" && select2 === "Segundos") {
        resultado.innerHTML = valorEntrada+" Segundos"; // Conversión de segundos a segundos
      } else if (select1 === "Minutos" && select2 === "Minutos") {
        resultado.innerHTML = valorEntrada+" Minutos"; // Conversión de minutos a minutos
      } else if (select1 === "Horas" && select2 === "Horas") {
        resultado.innerHTML = valorEntrada+" Horas"; // Conversión de horas a horas
      }else if (select1 === "Dias" && select2 === "Dias") {
        resultado.innerHTML = valorEntrada+" Días"; // Conversión de días a días
      }
    // Puedes añadir más casos para otras conversiones de unidades
  }
