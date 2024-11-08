# Care4You
Este repositório apresenta o MVP de um aplicativo móvel, apresentado como projeto final para nota do Projeto Integrador do 5º Semestre de Análise e Desenvolvimento de Sistemas - SENAC.

Care4You é um app dedicado a encurtar o caminho entre pacientes e profissionais da saúde. O público em foco é o usuário idoso ou com dificuldades de deslocamento, que pode usar o app para ser consultado presencialmente em seu próprio endereço.
O aplicativo é construído em padrão Model-View-Controller (MVC) e utiliza as tecnologias PHP e JavaScript no back-end e HTML, CSS e Bootstrap no front-end.

# Fluxo de navegação
O fluxo de navegação deste MVP busca atender as necessidades de dois stakeholders: o paciente e o profissional.

O usuário "Paciente":
1. Página de Index: o usuário vê opções para se cadastrar ou para fazer login.
2. Ao clicar em se cadastrar, deve inserir os dados de nome completo, data de nascimento, endereço e senha.
3. O usuário é direcionado à tela de login, onde ele insere seu e-mail e senha cadastrados. Caso as informações inseridas não estejam corretas, um aviso de erro aparece na tela.
4. Aparece então a Tela Inicial, onde o usuário deve escolher para quem ele pode agendar a consulta.
5. A Tela de Especialidades aparece, listando as áreas médicas dos profissionais cadastrados na plataforma.
6. Ao selecionar a especialidade, o usuário deve escolher o profissional que preferir na Tela de Especialistas, que lista não só o nome dos profissionais, como a nota dele.
7. O fluxo segue para a Tela de Data, onde o paciente escolhe a melhor data para sua consulta.
9. A Tela de Confirmação mostra um resumo das escolhas desse usuário. Ele pode voltar e fazer novas escolhas ou confirmar.
10. Ao confirmar, aparece a tela de resumo, que oficializa seu agendamento e dá a opção de deletar ou de fazer um novo agendamento.

O usuário "Profissional":
1. Página de Index: o usuário vê opções para se cadastrar ou para fazer login.
2. Ao clicar em se cadastrar, deve inserir os dados de nome completo, data de nascimento, endereço e senha.
3. O usuário é direcionado à tela de login, onde ele insere seu e-mail e senha cadastrados. Caso as informações inseridas não estejam corretas, um aviso de erro aparece na tela.
4. Aparece então a Tela Inicial, onde o usuário entre visualizar seu perfil ou gerenciar consultas.
5. Ao escolher "Visualizar perfil", o profissional vê a Tela de Perfil, onde ele pode clicar em "editar" para alterar informações.
6. ao clicar em "Gerenciar consultas", ele acessa a Tela de Gerenciamento, onde mostra o histórico de consultas realizadas e as futuras consultas marcadas. 



