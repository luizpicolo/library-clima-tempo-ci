<h1>CI Clima Tempo</h1>
<h2>Descrição</h2>
<p>
Esta biblioteca prove o acesso ao XML do Clima tempo e a incorporação do selo climático customizado em seu website. 
</p>

<h2>Dados do autor</h2>
<p>Para mais informações sobre o autor acesse: www.luizpicolo.com.br<br>
Reportar erros: https://github.com/luizpicolo/clima-tempo-ci/issues</p>

<h2>Utilização</h2>
<p>
Para a utilização da biblioteca em sua aplicação você deve acessar o diretório: <code>/application/libraries</code>
e copiar o arquivo <code>clima_ci.php</code> para o diretório correspondente em seu sistema.<br>
</p>

<p>
Em seu <i>controller</i> deve ser incorporado o código <br><br>
<code>$this->load->library("clima_ci");</code><br>
<code>$data['selo'] = $this->clima_ci->montar_selo(CODIGO DE SUA CIDADE);</code><br><br>
e, no local referente ao "CÓDIGO DE SUA CIDADE", deve ser alterado para o código desejado.<br>
Exemplo: http://www.climatempo.com.br/previsao-do-tempo/cidade/1138/novaandradina-ms (1138 é o código que deve ser passado como parâmetro)
</p>

<p>Será gerado um arquivo clima.xml na raiz de sua aplicação. Caso isso não ocorra, verifique as permissões ou crie o arquivo manualmente e de a permissão 0777 para o mesmo</p>

<h2>Licença de Uso</h2>
<p>Esta código está licenciada sobre a MIT License - http://choosealicense.com/licenses/mit/</p>
<p>Contudo, o mesmo foi posto como um fonte de estudo e todas as punições cabíveis em lei por seu mal uso, ficam restritas a seu utilizador</p>



