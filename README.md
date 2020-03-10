Codigo desenvolvido em PHP 7.2

Valores que deverao ser passados como parametro na URL para teste da funcao:
* current
* total
* boundaries
* around

Exemplo de URL: http://localhost:8000/index.php?current=4&total=10&boundaries=2&around=2

Caso este valores nao sejam passados, o footer nao sera criado.

A funcao createFooter que se encontra no seguinte destino: controller/FooterControler tem como funcionamento:
1. Verifica se as variaveis passadas como parametros nao sao nulas.
2. Calcula os valores passados de quantas paginas gostariam de linkar a partir da primeira pagina e quantas antes da ultima pagina
3. Calcula quantas paginas serao linkadas antes e depois da atual
4. Loop a patir da pagina 1 ate o total de paginas
    * O primeiro e o ultimo valor sempre entram, assim como os valores ate o limite inicial passado, logo sao adicionado ao array de resposta
    * Testa se a iteracao esta entre o limite final e se eh menor que o valor total de paginas, caso positivo, sera adicionado ao array de resposta
    * Testa se a iteracao esta entre o valor definido para estar antes ou depois da pagina atual, caso positivo, sera adicionado ao array de resposta
5. Verificacao da sequencia do array de resposta
    * Caso o valor dentro do array menos a iteracao seja diferente de 1, a string ... sera adicionada ao novo array.
6. Retorno do array final de paginacao