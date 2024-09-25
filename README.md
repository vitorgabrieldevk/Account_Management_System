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

**Visitas:**
![Visitas](https://hits.seeyoufarm.com/api/count/incr/badge.svg?url=https://github.com/vitorgabrieldevk/Account_Management_System&count_bg=%2379C83D&title_bg=%23555555&icon=&icon_color=%23E7E7E7&title=Visitas&edge_flat=false)


<img width=100% src="https://capsule-render.vercel.app/api?type=waving&color=1f6feb&height=120&section=footer"/>