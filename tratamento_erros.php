<?php

//tenha uma lógica
try{
    //tenha uma lógica onde possa ocorrer um potencial erro (exceção)
    echo '<h3> *** Try *** </h3>';

    //$sql = 'Select * from clientes';
    //mysql_query($sql); //Erro

    //lançamento de exception
    if(!file_exists('require_arquivo_a.php')){ //retornaria false, pq o arquivo não existe. Estamos forçando o retorno de true com !
        throw new Exception('O arquivo em questão deveria estar disponível em ' . date('d/m/Y H:i:s') . ', mas não estava. Vamos seguir mesmo assim.');
    }
}catch(Error $e){
    echo '<h3> *** Catch Error *** </h3>';
    echo $e;
    /*
    - Catch: além de possibilitar uma ação reativa, podendo passar um feedback ao usuário final, caso 
    ocorra um erro, tbm podemos armazenar este erro em banco de dados para análise futura.
    
    - Não precisamos implementar o finally quando temos catch implementado. O try precisa tratar o erro 
    com o catch ou com finally, não precisa dos dois juntos.
    */

}catch(Exception $e){
    echo '<h3> *** Catch Exception *** </h3>';
    echo $e;
}finally{
    echo '<h3> *** Finally *** </h3>';
}

//tenha uma lógica
?>