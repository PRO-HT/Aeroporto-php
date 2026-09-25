# Projeto Aeroporto

## Descrição

Aplicação em PHP que coleta nome e idade e informa se o usuário pode viajar sozinho ou precisa estar acompanhado por um responsável.

## Arquivos PHP

### `aeroporto_login.php`

Exibe o formulário de entrada no aeroporto. O formulário solicita:

- `usuario`: nome do usuário;
- `idade`: idade do usuário.

Ao enviar, os dados são enviados pelo método `POST` para `aeroporto_igresso.php`.

### `aeroporto_igresso.php`

Recebe os dados enviados pelo formulário e verifica se os campos foram preenchidos. Em seguida, trata os valores para exibição em HTML e compara a idade com 18 anos:

- Com 18 anos ou mais, informa que a pessoa está autorizada a viajar.
- Com menos de 18 anos, informa que é necessário viajar com os responsáveis.
- Se algum dado estiver vazio ou não for enviado, solicita o preenchimento dos dados.

A página também oferece um link para voltar ao formulário. Os dados são processados durante a requisição e não são salvos em banco de dados.

## Arquivo de estilo

As páginas carregam `css/style.css`, que contém os estilos visuais do projeto.

## Como executar

1. Coloque a pasta `Aeroporto` dentro do diretório `htdocs` do XAMPP.
2. Inicie o Apache pelo painel do XAMPP.
3. Abra no navegador `http://localhost/aulasphpenzo/Aula_php/Aeroporto/aeroporto_login.php`.

Se a pasta for movida para outro caminho dentro de `htdocs`, ajuste o endereço conforme esse caminho.

## Autor

Enzo Araújo - 2026 
