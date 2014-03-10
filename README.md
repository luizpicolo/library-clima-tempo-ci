#CI Clima Tempo
##Descrição

Esta biblioteca prove o acesso ao XML do Clima tempo e a incorporação do selo climático customizado em seu website. 

##Dados do autor

Para mais informações sobre o autor acesse: www.luizpicolo.com.br.

Reportar erros: https://github.com/luizpicolo/clima-tempo-ci/issues

##Utilização

Para a utilização da biblioteca em sua aplicação você deve acessar o diretório:

    /application/libraries
e copiar o arquivo 

    clima_ci.php 

para o diretório correspondente em seu sistema

Em seu ***controller*** deve ser incorporado o código

    $this->load->library("clima_ci");
    $data['selo'] = $this->clima_ci->montar_selo(CODIGO DE SUA CIDADE);

e, no local referente ao "CÓDIGO DE SUA CIDADE", deve ser alterado para o código desejado.

Exemplo: [http://www.climatempo.com.br/previsao-do-tempo/cidade/1138/novaandradina-ms](http://www.climatempo.com.br/previsao-do-tempo/cidade/1138/novaandradina-ms) (1138 é o código que deve ser passado como parâmetro)

Será gerado um arquivo 

    clima.xml 

na raiz de sua aplicação. Caso isso não ocorra, verifique as permissões ou crie o arquivo manualmente e de a permissão 0777 para o mesmo.

OBS: A estilização do selo está incorporada ao arquivo 

    application/views/welcome_message.php


##Licença de Uso

Esta código está licenciada sobre a MIT License - [http://choosealicense.com/licenses/mit/](http://choosealicense.com/licenses/mit/)

Contudo, o mesmo foi posto como um fonte de estudo e todas as punições cabíveis em lei por seu mal uso ficam restritas a seu utilizador

##Demostração
[http://clima-tempo-ci.herokuapp.com/](http://clima-tempo-ci.herokuapp.com/)
