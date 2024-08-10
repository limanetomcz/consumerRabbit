# RabbitMQ Consumer Project

Este projeto é um consumidor de filas do RabbitMQ desenvolvido em PHP 8.3, utilizando os princípios de design SOLID para manter um código limpo, modular e fácil de manter. O projeto tem como objetivo consumir mensagens de várias filas e processá-las de acordo com a lógica de negócio implementada.

## Requisitos

- PHP 8.3
- Composer
- RabbitMQ
- Extensões do PHP: `php-amqplib`

## Configuração do Ambiente

1. **Clone o Repositório:**

   ```bash
   git clone https://github.com/limanetomcz/consumerRabbit
   cd consumerRabbit


2. Instale as Dependências do Composer:

composer install

3. Configuração do RabbitMQ:

Certifique-se de que o RabbitMQ está instalado e em execução em sua máquina ou servidor. Atualize as configurações de conexão em QueueManager.php conforme necessário.

Estrutura do Projeto
src/Consumers/: Contém as classes responsáveis por consumir mensagens de filas específicas.
src/Interfaces/: Contém as interfaces que definem os contratos para os consumidores de filas.
src/QueueManager.php: Gerencia a inicialização dos consumidores de filas.
start_consumers.php: Script para iniciar o consumo de mensagens das filas.

4. Como Executar
Para iniciar o consumo de mensagens das filas configuradas, execute o seguinte comando:

php start_consumers.php

5. Adicionando Novos Consumidores
Para adicionar uma nova fila ao projeto:

5.1 - Crie uma nova classe de consumidor em src/Consumers/ que herde de RabbitMQConsumer.
5.2 - Implemente os métodos getQueueName() e processMessage() na nova classe.
5.3 - Registre a nova classe no QueueManager (atualmente, isso requer modificação direta no QueueManager).

Contribuindo
Fork o repositório.
Crie sua branch de feature (git checkout -b feature/nova-feature).
Commit suas mudanças (git commit -am 'Adiciona nova feature').
Faça o push para a branch (git push origin feature/nova-feature).
Crie um novo Pull Request.

Licença
Este projeto é licenciado sob a MIT License - veja o arquivo LICENSE para mais detalhes.

Contato
Para dúvidas ou mais informações, entre em contato com [seu email ou outra forma de contato].

### Notas

- **URL do Repositório:** Substitua `<URL_DO_REPOSITORIO>` pelo URL real do seu repositório.
- **Nome do Diretório:** Substitua `<NOME_DO_DIRETORIO>` pelo nome do diretório que será clonado.
- **Configuração:** Certifique-se de ajustar as instruções de configuração conforme seu ambiente e detalhes de conexão específicos.
- **Licença:** Adicione um arquivo `LICENSE` se planeja licenciar o projeto sob uma licença específica.

Sinta-se à vontade para ajustar o texto conforme necessário para refletir melhor o estado atual e os objetivos do seu projeto! Se precisar de mais alguma coisa, é só avisar.

