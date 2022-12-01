<!DOCTYPE html>
<html>
<div class="contenedor">
    <header>
        <h2 class="titulo">FORJA TU CUERPO Y TRANSFORMATE EN UN TITAN</h2>
        <hr>
    </header>

    <div id="cuerpo">
        <div>
            <h2>Calculadora de IMC</h2>
        </div>
        <div>
            <form action="dietas.php" method="post">
                <table>
                    <tr>
                        <td>PESO:</td>
                        <td><input type="text" name="peso" required=""></input></td>
                    </tr>
                    <tr>
                        <td>ESTATURA:</td>
                        <td><input type="text" name="estatura" required=""></input></td>
                    </tr>
                </table>
                <br>
                <input type="submit" value="calcular"></input>
                <hr class="dividir">
                <br>
            </form>
            
            <div name="resultados">
                <?php
                $imc = 0;
                $peso = isset($_POST["peso"]) ? $_POST["peso"] : null;
                $estatura = isset($_POST["estatura"]) ? $_POST["estatura"] : null;
                if ($estatura != 0) {
                    $imc = $peso / pow($estatura, 2);

                    echo "Su indice de masa corporal es de " . round($imc, 2) . "<br>";

                    if ($imc < 18) {
                        echo "Tú peso es muy bajo. Por lo que debererías seguir un plan encaminado a obtener un peso apto para ti y una correcta nutrición. <br>
                    Por lo que te recomendamos la siguiente dieta: <br>

                    <h2>Dieta para la desnutrición</h2>
                    <p>Está debe contener de 5 a 6 comidas diarias, con alimentos hipercalóricos, 
                    cantidades moderadas de hidratos de carbono, consumir grasas salubles de forma
                    moderada, beber agua fuera de las comidas, consumir vitaminas
                    A, E, B1, B2, B3 y B9, minerales como el, magnecio, selinio
                    y el zinc</p>
                    ";
                    } elseif ($imc >= 18 && $imc <= 24.9) {
                        echo "Tú peso es normal. El rango de peso recomendado es muy amplio por lo que si quieres 
                        llevar una pauta encaminada a tu mantenimiento o a la pérdida de esos 2 o 3 kilitos que 
                        te sobran accede a iniciar plan y el equipo de dietas a tu medida te asesorará de modo personalizado 
                        con el fin de que obtengas tu peso ideal. <br>
                    Por lo que te recomendamos la siguiente dieta: <br>
                    
                    <h2>Dieta para el peso normal</h2>
                    <p>Conseguir en  nuestro día a día llevar una alimentación equilibrada y variada esto quiere decir que debes
                    consumir de todos los grupos de alimentos pero teniendo en cuenta las características de cada alimento</p>
                    ";
                    } elseif ($imc >= 25 && $imc <= 26.9) {
                        echo "Tienes sobrepeso. Ello quiere decir que tu peso está por encima del recomendado para tu estatura. Accede cuanto antes a inciciar tu plan y verás qué sencillo te resulta. <br>
                    Por lo que te recomendamos la siguiente dieta: <br>
                    
                    <h2>Dieta para el sobrepeso</h2>
                    <p>Para rebajar el sobrepeso seguiremos una alimentación equilibrada y un plan regular de ejercicio físico. 
                    Debemos tener presente que las dietas muy restrictivas nunca son saludables porque provocan una importante 
                    pérdida de masa magra (músculo) y favorecen los trastornos alimentarios. Por tanto, un plan alimentario ideal para 
                    actuar contra el sobrepeso siempre ha de ser normocalórico o con una mínima restricción de calorías.</p>
                    ";
                    } elseif ($imc == 27) {
                        echo "Tienes obesidad.  <br>
                    Por lo que te recomendamos la siguiente dieta: <br>
                    
                    <h2>Dieta para la obesidad</h2>
                    <p>Hola</p>
                    ";
                    } elseif ($imc >= 27 && $imc <= 29.9) {
                        echo "Tienes obesidad grado I, ojo que hay un riesgo relativo alto para desarrollar enfermedades cardiovasculares <br>
                    Por lo que te recomendamos la siguiente dieta: <br>
                    
                    <h2>Dieta para la obesidad grado I</h2>
                    <p>Introducir abundantes frutas y verduras crudas o cocidas (al menos cinco unidades al día), lácteos desnatados, cereales integrales.
                    Seleccionar cortes magros de carnes y pescados. Cocinarlos con procedimientos bajos en grasa (al horno, a la plancha, al vapor, papillote, etc.)
                    Vigilar las cantidades e intentar disminuir poco a poco el consumo de sal y alcohol.
                    Beber al menos entre 1,5 y 2 litros de agua diarios.
                    Hacer un desayuno completo, planificar con antelación los menús y distribuir las comidas en al menos cinco ingestas para evitar caer en el picoteo.</p>
                    ";
                    } elseif ($imc >= 30 && $imc <= 39.9) {
                        echo "Tienes obesidad grado II, ojo que hay un riesgo relativo muy alto para el desarrollo de enfermedades cardiovasculares <br>
                    Por lo que te recomendamos la siguiente dieta: <br>
                    
                    <h2>Dieta para la obesidad grado II</h2>
                    <p>Se recomienda tomar todos los días tres raciones de fruta, dos de verduras,  tres de lácteos mejor desnatados 
                    y las raciones de hidratos de carbono, proteínas y grasa ajustadas a las necesidades personales.  En esta página puede calcular 
                    las raciones que necesita y la información sobre los distintos  tipos de alimentos</p>
                    ";
                    } elseif ($imc >= 40) {
                        echo "Tienes obesidad grado III (Extrema o Mórbida), ojo que hay un riesgo relativo extremadamente alto para el desarrollo de enfermedades cardiovasculares  <br>
                    Por lo que te recomendamos la siguiente dieta: <br> 
                    
                    <h2>Dieta para la obesidad grado III</h2>
                    <p>Ello significa que tu peso está por encima del recomendado para tu estatura, y que además tienes probabilidades 
                    de que vaya asociado todo ello a la aparición de patologías (colesterol, Trigliéridos, hipertensión, diabetes tipoII, etc). 
                    Por todo esto, accede a iniciar plan, y te ayudaremos a bajar de peso y mejorar tu salud.</p>
                    ";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

</html>