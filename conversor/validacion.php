<?php 
//Magnitud Longitud
    if(isset($_POST['submit'])){
      
        $dato = $_POST['valor1'];
        $unidad1 = $_POST['unidad_uno'];
        $unidad2 = $_POST['unidad_dos'];
        //Conversion del kilometro
        if($unidad1 == "Kilometro" && $unidad2 == "Metro" ){
          $resultado = $dato*1000;
          $UNIDAD = $unidad2;
        }if($unidad1 == "Kilometro" && $unidad2 == "Centimetro"){
            $resultado = $dato*100000;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Kilometro" && $unidad2 == "Milimetro"){
            $resultado = $dato*1e+6;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Kilometro" && $unidad2 == "Kilometro"){
            echo '<script language="javascript">alert("No puede realizarse esta conversión");</script>';
        }
        //Conversion del metro
        if($unidad1 == "Metro" && $unidad2 == "Kilometro"){
            $resultado = $dato/1000;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Metro" && $unidad2 == "Centimetro"){
            $resultado = $dato*100;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Metro" && $unidad2 == "Milimetro"){
            $resultado = $dato*1000;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Metro" && $unidad2 == "Metro"){
            echo '<script language="javascript">alert("No puede realizarse esta conversión");</script>';
        }
        //Conversion del centimetro
        if($unidad1 == "Centimetro" && $unidad2 == "Kilometro"){
            $resultado = $dato/100000;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Centimetro" && $unidad2 == "Metro"){
            $resultado = $dato/100;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Centimetro" && $unidad2 == "Milimetro"){
            $resultado = $dato*10;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Centimetro" && $unidad2 == "Centimetro"){
            echo '<script language="javascript">alert("No puede realizarse esta conversión");</script>';
        }
        //Conversion del milimetro
        
        if($unidad1 == "Milimetro" && $unidad2 == "Kilometro"){
            $resultado = $dato/1e+6;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Milimetro" && $unidad2 == "Metro"){
            $resultado = $dato/1000;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Milimetro" && $unidad2 == "Centimetro"){
            $resultado = $dato/10;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Milimetro" && $unidad2 == "Milimetro"){
            echo '<script language="javascript">alert("No puede realizarse esta conversión");</script>';
        }
    }
            //Conversion de la tonelada
            if($unidad1 == "Tonelada" && $unidad2 == "Kilogramo" ){
                $resultado = $dato*1000;
                $UNIDAD = $unidad2;
              }if($unidad1 == "Tonelada" && $unidad2 == "Gramo"){
                  $resultado = $dato*1e+6;
                  $UNIDAD = $unidad2;
              }if($unidad1 == "Tonelada" && $unidad2 == "Miligramo"){
                  $resultado = $dato*1e+9;
                  $UNIDAD = $unidad2;
              }if($unidad1 == "Tonelada" && $unidad2 == "Tonelada"){
                echo '<script language="javascript">alert("No puede realizarse esta conversión");</script>';
              }
              //Conversion del kilogramo
              if($unidad1 == "Kilogramo" && $unidad2 == "Tonelada" ){
                $resultado = $dato/1000;
                $UNIDAD = $unidad2;
              }if($unidad1 == "Kilogramo" && $unidad2 == "Gramo"){
                  $resultado = $dato*1000;
                  $UNIDAD = $unidad2;
              }if($unidad1 == "Kilogramo" && $unidad2 == "Miligramo"){
                  $resultado = $dato*1e+6;
                  $UNIDAD = $unidad2;
              }if($unidad1 == "Kilogramo" && $unidad2 == "Kilogramo"){
                echo '<script language="javascript">alert("No puede realizarse esta conversión");</script>';
              }
              //Conversion del gramo
              if($unidad1 == "Gramo" && $unidad2 == "Tonelada" ){
                $resultado = $dato/1e+6;
                $UNIDAD = $unidad2;
              }if($unidad1 == "Gramo" && $unidad2 == "Kilogramo"){
                  $resultado = $dato/1000;
                  $UNIDAD = $unidad2;
              }if($unidad1 == "Gramo" && $unidad2 == "Miligramo"){
                  $resultado = $dato*1000;
                  $UNIDAD = $unidad2;
              }if($unidad1 == "Gramo" && $unidad2 == "Gramo"){
                echo '<script language="javascript">alert("No puede realizarse esta conversión");</script>';
              }
              //Conversion del miligramo
              if($unidad1 == "Miligramo" && $unidad2 == "Tonelada" ){
                $resultado = $dato/1e+9;
                $UNIDAD = $unidad2;
              }if($unidad1 == "Miligramo" && $unidad2 == "Kilogramo"){
                  $resultado = $dato/1e+6;
                  $UNIDAD = $unidad2;
              }if($unidad1 == "Miligramo" && $unidad2 == "Gramo"){
                  $resultado = $dato/1000;
                  $UNIDAD = $unidad2;
              }if($unidad1 == "Miligramo" && $unidad2 == "Miligramo"){
                echo '<script language="javascript">alert("No puede realizarse esta conversión");</script>';
              }
            
        //Conversion de Grados Celsius
        if($unidad1 == "Grados Celsius" && $unidad2 == "Grados Fahrenheit"){
            $resultado = ($dato*9/5)+32;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Grados Celsius" && $unidad2 == "Grados Kelvin"){
            $resultado = $dato+273.15;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Grados Celsius" && $unidad2 == "Grados Celsius"){
            echo '<script language="javascript">alert("No puede realizarse esta conversión");</script>';
        }
        //Conversion de Grado Fahrenheit
        if($unidad1 == "Grados Fahrenheit" && $unidad2 == "Grados Celsius"){
            $resultado = ($dato-32)*5/9;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Grados Fahrenheit" && $unidad2 == "Grados Kelvin"){
            $resultado = ($dato-32)*5/9+273.15;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Grados Fahrenheit" && $unidad2 == "Grados Fahrenheit"){
            echo '<script language="javascript">alert("No puede realizarse esta conversión");</script>';
        }
        //Conversion de Grados Kelvin
        if($unidad1 == "Grados Kelvin" && $unidad2 == "Grados Celsius"){
            $resultado = $dato-273.15;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Grados Kelvin" && $unidad2 == "Grados Fahrenheit"){
            $resultado = ($dato-273.15)*9/5+32;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Grados Kelvin" && $unidad2 == "Grados Kelvin"){
            echo '<script language="javascript">alert("No puede realizarse esta conversión");</script>';
        }

            
        //Conversion de Segundos
        if($unidad1 == "Segundo" && $unidad2 == "Minuto"){
            $resultado = $dato/60;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Segundo" && $unidad2 == "Hora"){
            $resultado = $dato/3600;
            $UNIDAD = $unidad2;
        }
        if($unidad1 == "Segundo" && $unidad2 == "Dia"){
            $resultado = $dato/86400;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Segundo" && $unidad2 == "Segundo"){
            echo '<script language="javascript">alert("No puede realizarse esta conversión");</script>';
        }
        //Conversion de Minutos
        if($unidad1 == "Minuto" && $unidad2 == "Segundo"){
            $resultado = $dato*60;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Minuto" && $unidad2 == "Hora"){
            $resultado = $dato/60;
            $UNIDAD = $unidad2;
        }
        if($unidad1 == "Minuto" && $unidad2 == "Dia"){
            $resultado = $dato/1440;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Minuto" && $unidad2 == "Minuto"){
            echo '<script language="javascript">alert("No puede realizarse esta conversión");</script>';
        }
        //Conversion de Horas
        if($unidad1 == "Hora" && $unidad2 == "Segundo"){
            $resultado = $dato*3600;
            $UNIDAD = $unidad2;
        }if($unidad1 == "Hora" && $unidad2 == "Minuto"){
            $resultado = $dato*60;
            $UNIDAD = $unidad2;
        }
        if($unidad1 == "Hora" && $unidad2 == "Dia"){
            $resultado = $dato/24;
            $UNIDAD = $unidad2;}if($unidad1 == "Hora" && $unidad2 == "Hora"){
                echo '<script language="javascript">alert("No puede realizarse esta conversión");</script>';
            }
            //Conversion de Días
            if($unidad1 == "Dia" && $unidad2 == "Segundo"){
                $resultado = $dato*86400;
                $UNIDAD = $unidad2;
            }if($unidad1 == "Dia" && $unidad2 == "Minuto"){
                $resultado = $dato*1440;
                $UNIDAD = $unidad2;
            }
            if($unidad1 == "Dia" && $unidad2 == "Hora"){
                $resultado = $dato*24;
                $UNIDAD = $unidad2;}if($unidad2 == "Dia" && $unidad2 == "Dia"){
                    echo '<script language="javascript">alert("No puede realizarse esta conversión");</script>';
                }
        
            
?>