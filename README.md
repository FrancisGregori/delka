
### Informações sobre a estrutura do projeto ###

Desenvolvi uma estrutura bem simples para conseguir trabalhar de uma forma mais organizada e pratica com o corte do projeto.


1. Na raiz do projeto se encontram os arquivos `header.php` e `footer.php` que possuem seu respectivo html
O arquivo index.php não tem nada de codificação referente ao html em si. Ele faz somente o include da página que for chamada.

2. Os arquivos referentes a cada página do projeto se encontram dentro da pasta `pages`. Cada um dos arquivos está com o nome referente a seu respectivo layout, exemplo.:
    
    > Página inicial = homepage.php
    >
    > Contato = contato.php
    >         
    > etc..

3. Os arquivos referentes a parte de estilo do projeto se encontar em `css/source/`. Eu desenvolvi um arquivo `.scss` para cada página e os mesmos se encontram em `css/source/pages/`. 
    
   Mesmo fazendo a separação dos arquivos por página, eu faço um import de todos eles dentro do arquivo `css/source/styles.scss`.
   
4. Criei uma configuração básica do Grunt para compilar os arquivos `.scss` e também para minificar os arquivos `.js` que se encontram dentro da pasta `js/source/`.

5. As imagens que julguei serem somente para exemplo eu coloquei na pasta `temp-images`

6. Para instalar o Grunt basta acessar a pasta `grunt` pelo terminal e rodar o comando `npm install` e depois nessa mesma pasta o comando `grunt default` vai estar disponivel.

