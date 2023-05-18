<?php


namespace App\Files;

class CSV{
/**Metodo responsavel por ler um arquivo CSV e retornar um array de dados

@param string

@param boolean

@param string

@return array
*/
    public static function lerArquivo($arquivo, $cabecalho = true, $delimitador = ','){
//VERIFICA SE O ARQUIVO EXISTE
if(!file_exists($arquivo)){
die("Arquivo nao encontrado\n");



}
// Dados da linha do arquivo
$dados = [];

//abre o arquivo

$csv = fopen($arquivo, 'r');

//cabeçalho dos dados (primeira linha)

$cabecalhoDados = $cabecalho ? fgetcsv($csv,0,$delimitador) : [];



//ITERA O ARQUIVO, LENDO TODAS AS LINHAS    
while($linha = fgetcsv($csv,0,$delimitador)){

$dados[] = $cabecalho ? 
array_combine($cabecalhoDados, $linha) : $linha;


}
//retorna os dados processados
return $dados;

    }

    /**
     * metodo responsavel por criar um arquivo CSV
     * @param string $arquivo
     * @param array $dados
     * @param string $delimitador
     * @return boolean
     */
    
public static function criarArquivo($arquivo, $dados, $delimitador = ','){

// Abre o arquivo para escrita

$csv = fopen($arquivo, 'w');

//cria o corpo do arquivo csv

foreach($dados as $linha){
fputcsv($csv, $linha, $delimitador);
}

//fecha o arquvo
fclose($csv);
//sucesso
return true; 
}


}