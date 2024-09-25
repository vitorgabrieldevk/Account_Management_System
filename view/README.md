## Sistema de Cadastro de Usuários 💻

**Descrição Geral do Projeto:**
O Sistema de Cadastro de Usuários permite o registro e login de usuários com três perfis: Admin, Gestor e Colaborador. Cada perfil tem permissões específicas, facilitando a gestão e o acesso ao sistema de forma segura e eficiente.

#

## **Funcionalidades Principais:**
- **Tela de Login:** Permite que o usuário faça login no sistema com seu e-mail e senha.
- **Tela de Registro:** Permite que novos usuários se cadastrem e escolham seu perfil (Admin, Gestor ou Colaborador).

#

## **Estrutura do Sistema**

O sistema é organizado de forma a separar as funções em três partes principais:

**Controladores:** Responsáveis pelas regras de negócio e operações do sistema.

**Modelos:** Cuidam da interação com o banco de dados.

**Visões:** As telas que os usuários veem e interagem.

#

## **Fluxo Básico do Sistema**

**Login:** O usuário insere suas credenciais (e-mail e senha) para acessar o sistema. Se as credenciais forem válidas, ele é redirecionado para sua área correspondente (Admin, Gestor ou Colaborador).

**Registro:** Novos usuários podem se cadastrar, inserindo nome, e-mail, senha e escolhendo o perfil.

#

## **Organização do Projeto**

O projeto está dividido em diferentes arquivos e pastas que organizam seu funcionamento:

**auth.php:** Gerencia as autenticações.

**index.php:** Ponto de entrada do sistema.

**routes.php:** Define as rotas e ações a serem executadas no sistema.

#


```
    C:.
    ├── controllers/       # Regras de negócio
    ├── models/            # Conexão com banco de dados
    └── views/             # Telas de interface do usuário
```