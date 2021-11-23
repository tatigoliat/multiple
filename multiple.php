<?php
class Multiple
{
    function buscaMultiple($min, $max)
    {
        $params = array(
            array("num" => 15, "word" => "integraciones"),
            array("num" => 3, "word" => "Falabella"),
            array("num" => 5, "word" => "IT")
        );
    
        $cant = count($params);
        $output = array();
        for ($i = $min; $i <= $max; $i++){
            $aux = $i;
            $output[$aux] = $aux;
            for($j=0; $j<$cant; $j++){
                $num    = json_encode($params[$j]['num']);
                $word   = json_encode($params[$j]['word']);
                if(($i % $num ) == 0){
                    $output[$aux] = $word;
                    continue 2;
                }
            }
        }
        return $output;
    }
}
?>