<?php

namespace App\Http;

class AppHelper {


    /**
     * Limite a quantidade de caracteres a ser exibido
     * @param $texto texto usado
     * @param $limite limite de caracteres
     * @uses AppHelper::limiteChar('Olá Mundo', 30) -> 'Ola Mundo'
     * @uses AppHelper::limiteChar('Olá Mundo', 5) -> 'Ola m...'
     */
    public static function limiteChar($texto, $limite = 100) {
        if (strlen($texto) < $limite) return $texto;
        return substr($texto, 0, $limite) . '...';
    }

    /**
     * Retorna o nome do mês reduzido
     * @param string $data | data formata em YYYY-MM-DD
     * @return string
     */
    public static function mes(string $data): string {
        $mes = (explode('-', $data))[1];

        switch($mes) {
            case '01': return 'Jan';
            case '02': return 'Fev';
            case '03': return 'Mar';
            case '04': return 'Abr';
            case '05': return 'Mai';
            case '06': return 'Jun';
            case '07': return 'Jul';
            case '08': return 'Ago';
            case '09': return 'Set';
            case '10': return 'Out';
            case '11': return 'Nov';
            case '12': return 'Dez';
        }
    }

    /**
     * Converte a manchete de uma noticia/video/imagem apra o formato de url
     * @param string $titulo
     * @return string   
     */
    public static function urlConteudo(string $titulo): string {
        $titulo = str_replace(' ', '-', $titulo);
        $titulo = str_replace(['.', ',', '?'], '', $titulo);
        return strtolower($titulo);
    }


}