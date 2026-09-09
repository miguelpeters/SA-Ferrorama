## O que é o PDO?

O PHP Data Objects é uma extensão que permite ao PHP se comunicar com diversos tipos de bancos de dados. O recurso fornece um meio abstrato para acesso às informações disponibilizadas pelos bancos, sendo os seus métodos independentes para cada um dos tipos suportados.O PDO é orientado a objetos.

## Para que ele é utilizado no PHP?

A extensão define uma interface leve e consistente para acessar bancos de dados em PHP. Cada driver de banco de dados que implementa a interface PDO pode expor recursos específicos do banco de dados como funções de extensão regulares.

## Como funciona uma conexão utilizando PDO?

O PDO fornece uma camada de abstração de acesso a dados , o que significa que, independentemente do banco de dados que estiver sendo utilizado, é usado as mesmas funções para executar consultas e buscar dados. O PDO não fornece uma abstração de banco de dados ; ele não reescreve SQL nem emula recursos ausentes. É preciso usar uma camada de abstração completa se precisar dessa funcionalidade.

## Quais são suas principais características?

Flexibilidade – Como o PDO carrega o driver específico do banco de dados em tempo de execução, não é preciso configurar o PHP sempre que um banco de dados diferente for usado.

Desempenho – O PDO está escrito em C e compilado no PHP, o que lhe garante um aumento considerável no desempenho em relação a soluções escritas em PHP.

Consistência de código – No PDO não existe a inconsistência de código, pois é oferecida apenas uma interface unificada que está disponível para qualquer banco de dados.

Características de orientação de objetos – Possui recursos de orientação de objetos, o que resulta em uma comunicação mais poderosa e eficiente com banco de dados.

## Diferenças entre PDO e MySQLi

Uma das diferenças é que com o mysqli as consultas preparadas são implementadas no lado do servidor do banco de dados, enquanto com o PDO são emuladas no lado do cliente. Isto significa que cada vez que roda um script de PHP, com o PDO as consultas preparadas têm de ser compiladas de novo para gerar uma consulta comum não preparada e o PHP fica gastando tempo recompilando a consulta e enviando a consulta inteira para o servidor MySQL. Já com o mysqli, o PHP apenas manda os parâmetros a cada vez que a mesma consulta preparada é enviada para o servidor quando usa a mesma conexão persistente, mesmo que esteja atendendo uma requisição HTTP diferente.

## Vantagens e desvantagens de utilizar PDO

Vantagens:

Funciona com 12 drivers de bancos de dados diferentes (4D, MS SQL Server, Firebird/Interbase, MySQL, Oracle, ODBC/DB2, PostgreSQL, SQLite, Informix, IBM, CUBRID);
API Orientada a objetos;
Possui parâmetros nomeados;
Possui prepared statements do lado cliente (ver desvantagens abaixo)

Desvantagens:

Não tão veloz quanto MySQLi;
Por padrão, ele simula prepared statements (você pode ativar a versão nativa ao configurar a conexão dele com o banco, mas caso a versão nativa não funcione por algum motivo, ele volta a simular os prepared statements sem disparar erros ou avisos.

## O que são Prepared Statements e por que são importantes?

Prepared statement (ou instrução preparada) São procedimentos que mantém informações de usuários seguras durante consultas SQL, bloqueando ataques de SQL Injection

## Em quais situações o PDO pode ser uma boa escolha?

Para realizar a conexão com os bancos de dados, muda-se apenas o string de conexão. Abaixo alguns exemplos de conexão para alguns bancos de dados estão sendo demonstrados:

SQLite – new PDO(‘sqlite:nomeConexao.db’);
FireBird – new PDO(“firebird:dbname=C:\\nomeBase.DB”, “SYSDBA”, “masterkey”);
MySQL – new PDO(‘mysql:host=localhost:port=3307;dbname=nomeBase’, ‘usuario’, ‘senha’);
Postgress – new PDO(‘pgsql:dbname=example;user=usuario;password=senha;host=localhost’);
