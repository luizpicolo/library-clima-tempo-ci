<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author Luiz Picolo
 * www.luizpicolo.com.br
 * 
 * DESCRIÇÃO DA CLASSE
 * 
 * Código para agregar o clima tempo em seu website
 * Este classe consome o xml servido pelo site clima tempo para apresentar
 * os dados para o usuario.
 *
 * Nós não nos responsabilizamos pelo mal uso deste código.
 * Logo, ao utiliza-lo, tenha em mente que o mesmo servirá para puro e simples estudo
 * e todas as responsabilidades são medidas perante o usuário final
 *
 * EXEMPLO DE USO
 * 
 * // Acrescentar em seu controller
 * $this->load->library("clima_ci");
 *
 * // Acrescentar onde deseja que seja mostrado o clima
 * $this->climatempo->montar_selo("CODIGO CIDADE");
 *
 * ESTILO CSS
 *
 * Este código CSS deve ser incorporado ao seu arquivo de estilos.
 * O mesmo tem como função dar a estilização básica para o mostrador do clima
 *
 * div.tempo div.cidade { 
 *     font-size: 10px;
 *     width: 300px;
 * }
 *
 * div.tempo object {
 *     float: left;
 * }
 *
 * div.tempo div.data {
 *    font-size: 12px;
 *    width: 75px;
 *    float: left;
 * }
 *
 * div.tempo div.temperatura {
 *     font-size: 12px
 * }
 *
 * div.tempo div.frase {
 *     font-size: 12px;
 * } 
 */
class Clima_CI {
    
     /*
     * CÓDIGO DA CIDADE
     * Para verificar o cÓdigo de sua cidade visite o site do clima tempo
     * digite o cep de sua cidade e, na url que se segue, pegue o codigo que fica após o 
     * segmento cidade
     * http://climatempo.com.br/previsao-do-tempo/cidade/1138/novaandradina-ms
     */

    // Caminho para o xml (NÃO DEVE SER ALTERADO)
    private $caminho_xml = 'http://selos.climatempo.com.br/selos/selo.php?CODCIDADE=';
    
	// Icones
    private $caminho_icones = 'http://imagens.climatempo.com.br/selos/icones/';
    
	// Caminho que será gerado o xml. O mesmo deve ter a permissão 0777
    private $caminho_arquivo = "clima.xml";
    
    public function montar_selo($cidade) {
        $externo_xml = $this->caminho_xml . $cidade;
        $pagina = file_get_contents($externo_xml);
        file_put_contents($this->caminho_arquivo, utf8_encode($pagina));
        $xml = simplexml_load_file($this->caminho_arquivo);

        echo '<div class="tempo">
                <div class="cidade">'.$xml->cidade['nome'].'</div>
			    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="60" height="60" align="middle">
                    <param name="movie" value="http://imagens.climatempo.com.br/selos/icones/' . $xml->cidade[0]['ico'] . '.swf"  />
                    <param name="quality" value="high" />
                    <param name="bgcolor" value="#ffffff" />
                    <param name="play" value="true" />
                    <param name="loop" value="true" />
                    <param name="wmode" value="window" />
                    <param name="scale" value="showall" />
                    <param name="menu" value="true" />
                    <param name="devicefont" value="false" />
                    <param name="salign" value="" />
                    <param name="allowScriptAccess" value="sameDomain" />
                    <!--[if !IE]>-->
                    <object style="margin-left: 0px; float: left; margin-top: 2px" type="application/x-shockwave-flash" data="http://imagens.climatempo.com.br/selos/icones/' . $xml->cidade[0]['ico'] . '.swf" width="60" height="60">
                        <param name="movie" value="http://imagens.climatempo.com.br/selos/icones/' . $xml->cidade[0]['ico'] . '.swf" />
                        <param name="quality" value="high" />
                        <param name="bgcolor" value="#ffffff" />
                        <param name="play" value="true" />
                        <param name="loop" value="true" />
                        <param name="wmode" value="window" />
                        <param name="scale" value="showall" />
                        <param name="menu" value="true" />
                        <param name="devicefont" value="false" />
                        <param name="salign" value="" />
                        <param name="allowScriptAccess" value="sameDomain" />
                    </object>
                    <!--<![endif]-->
                </object>
                <div class="data">' . $xml->cidade[0]['data'] . '</div>
                <div class="temperatura">' . $xml->cidade[0]['high'] . '&ordm;C</div>
                <div class="frase">' . (wordwrap(($xml->cidade[0]['frase']), 30, '<br />')) . '</div>
		    </div>';
    }
}
