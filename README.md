<img width=100% src="https://capsule-render.vercel.app/api?type=waving&color=1f6feb&height=120&section=header"/>

# Sistema de Cadastro de Usuários

**Descrição Geral do Projeto:**

### Este projeto é uma aplicação de cadastro de usuários que possui três perfis distintos:
    - Admin
    - Gestor
    - Colaborador

### As funcionalidades principais do sistema, desenvolvidas até o momento, são:
    - Tela de login.
    - Tela de registro de usuários.

### Funcionalidades Atuais: 
- Tela de Login:
    - Permite que o usuário insira suas credenciais (e-mail e senha) para acessar o sistema.

- Tela de Registro:
    - Permite que novos usuários se cadastrem no sistema.
Durante o registro, o usuário seleciona um dos três perfis: Admin, Gestor, ou Colaborador.

#

## Fluxo e funções do sistema:

**Principais Funções do Sistema:**
#### O sistema é construído utilizando uma abordagem MVC (Model-View-Controller) que divide a aplicação em três partes:

- **Controllers (Controladores):** Gerenciam as operações e lógica do sistema.
- **Models (Modelos):** Responsáveis pela manipulação dos dados e interação com o banco de dados.
- **Views (Visões):** Interfaces do usuário que exibem as informações e coletam entradas.

#

**A seguir, conheça as principais funções e como elas atuam no fluxo do sistema.**

#

#### **Controladores:**
- **AuthController.php** (Autenticação)
    - O AuthController gerencia o processo de autenticação dos usuários, permitindo login e registro. Ele faz uso do modelo User para interagir com o banco de dados.

        - **login()**
            - Essa função processa a requisição de login.
            Recebe as credenciais de e-mail e senha fornecidas pelo usuário.
            Usa o método findByEmail() do modelo User para localizar o usuário no banco de dados.
            Verifica se a senha inserida corresponde ao hash armazenado no banco de dados usando password_verify().
            Se as credenciais forem válidas, inicia uma sessão e armazena o ID e o perfil do usuário.

- **UserController.php** (Gerenciamento de Usuários)
    - O UserController controla o registro de novos usuários e possíveis outras operações relacionadas a usuários.
        
        - **register()**
            - Recebe os dados do formulário de registro via POST (nome, e-mail, senha, perfil).
            A senha é criptografada usando password_hash() para garantir a segurança.
            Utiliza o método create() do modelo User para inserir o novo usuário na base de dados.
            Redireciona o usuário de volta à página inicial após o registro bem-sucedido.

#

#### **Modelos:**
- **User.php** (Modelo de Usuário)
    - Este arquivo gerencia a interação com a tabela de usuários no banco de dados. Ele contém funções responsáveis por buscar e criar usuários.

        - **findByEmail($email)**
            - Localiza um usuário no banco de dados a partir de seu e-mail.
            Utiliza uma consulta SQL com o comando SELECT para obter os dados do usuário baseado no e-mail informado.

        - **find($id)**
            - Semelhante ao método findByEmail(), mas busca o usuário pelo seu ID.

        - **create($data)**
            - Insere um novo usuário no banco de dados com os dados fornecidos (nome, e-mail, senha criptografada e perfil).
            Usa a consulta SQL INSERT para adicionar o registro à tabela de usuários.

- **Database.php** (Conexão com o Banco de Dados)
    - A classe Database gerencia a conexão com o banco de dados, garantindo que ela seja estabelecida de maneira eficiente utilizando o padrão de projeto Singleton.

        - **getConnection()**
            - Cria uma conexão com o banco de dados utilizando o PDO (PHP Data Objects) se ainda não existir uma instância.
            Define o modo de erro como exceções para facilitar o tratamento de erros durante o desenvolvimento.

#

#### **Rotas:**

- **routes.php**
    - Este arquivo contém a lógica para gerenciar as rotas do sistema, decidindo quais ações devem ser executadas dependendo da URL acessada. O código principal faz uso de uma variável action que determina qual método deve ser chamado, sendo o login o padrão.


#

### Arquitetura de pasta do projeto:

``` bash
C:.
│   auth.php                     # Gerencia a autenticação do sistema
│   database.sql                 # Script SQL para criar e popular o banco de dados
│   index.php                    # Ponto de entrada principal da aplicação
│   logout.php                   # Lógica de logout para encerrar a sessão do usuário
│   README.md                    # Documentação do projeto
│   routes.php                   # Define rotas do sistema para mapear URLs às funções
│
├───controllers
│       AuthController.php       # Controla as ações de autenticação (login, registro)
│       DashboardController.php  # Gerencia as funcionalidades do painel de controle
│       UserController.php       # Controla as operações de usuários (edição, listagem)
│
├───models
│       database.php             # Gerencia a conexão com o banco de dados
│       user.php                 # Manipula os dados dos usuários
│
└───views
        dashboard.php            # Interface do painel de controle
        edit_user.php            # Tela para editar informações de usuários
        list_users.php           # Tela para listar todos os usuários cadastrados
        login.php                # Interface da tela de login
        register.php             # Interface da tela de registro

```

#

### Repositório:

![Visitas](https://hits.seeyoufarm.com/api/count/incr/badge.svg?url=https://github.com/vitorgabrieldevk/Account_Management_System&count_bg=%2379C83D&title_bg=%23555555&icon=&icon_color=%23E7E7E7&title=Visitas&edge_flat=false)

**Stakeholders:**

<img width=20% src="https://img.shields.io/badge/Criador-Leonardo_Rocha-blue"/>

<img width=20% src="https://img.shields.io/badge/Adaptação-Vitor_Gabriel-blue"/>

#

**Linguagem mais usada:**

<img width=10% src="https://img.shields.io/github/languages/top/vitorgabrieldevk/Account_Management_System"/>

#

**Quantidade de linguagens utilizadas:**

<img width=10% src="https://img.shields.io/github/languages/count/vitorgabrieldevk/Account_Management_System"/>


## Licença

Este projeto está licenciado sob a licença MIT - veja o arquivo [LICENSE](LICENSE) para mais detalhes.


<img width=100% src="https://capsule-render.vercel.app/api?type=waving&color=1f6feb&height=120&section=footer"/>