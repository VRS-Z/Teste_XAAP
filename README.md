# Hexapp — Teste Técnico

Implementação de um teste técnico de processo seletivo: reprodução responsiva de duas telas (página inicial e cadastro) a partir de um layout fornecido, com envio de formulário persistido em banco de dados via PHP puro.

**Site publicado (front-end):** https://vrs-z.github.io/Teste_XAAP/

![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white)

---

## Sobre

Este projeto reproduz o layout de um sistema de gestão para clínicas e consultórios (Hexapp) a partir de imagens de referência fornecidas no teste, com duas páginas responsivas — página inicial e formulário de cadastro — e o fluxo de persistência dos dados de cadastro em banco de dados relacional.

## Escopo avaliado

**Front-end**
- Fidelidade ao layout fornecido
- Responsividade (desktop e mobile)
- Semântica HTML
- Performance
- Estética da tipografia

**Back-end**
- Persistência via SQL puro (sem ORM), com PDO e prepared statements
- Transação atômica entre as tabelas `Cliente` e `Contatos`
- Validações e tratamento de erros
- Organização e legibilidade do código

## Tecnologias

- HTML5 semântico
- CSS3 (Flexbox, responsivo)
- JavaScript puro (menu mobile, validação de formulário em tempo real)
- PHP com PDO (MySQL), sem frameworks ou ORM
- [Font Awesome](https://fontawesome.com/) para ícones

## Estrutura do projeto

```
Teste_XAAP/
├── assets/
│   ├── Images/
│   │   └── image1.png ... image5.png
│   └── stylesheet/
│       ├── styles.css
│       └── cadastro.css
├── src/
│   ├── routes/
│   │   ├── database.php
│   │   └── processar.php
│   └── script/
│       └── script.js
├── index.html
├── cadastro.html
└── README.md
```

## Como rodar localmente

O front-end é estático e pode ser aberto diretamente no navegador:

```bash
git clone https://github.com/VRS-Z/Teste_XAAP.git
cd Teste_XAAP
```

Para testar o fluxo completo de cadastro (front-end + persistência), é necessário um ambiente com PHP e MySQL, por exemplo:

```bash
php -S localhost:8000
```

Configure as credenciais de conexão em `src/routes/database.php` e crie as tabelas `Cliente` e `Contatos` antes de testar o envio do formulário em `cadastro.html`.

## Páginas

| Página | Descrição |
| --- | --- |
| `index.html` | Página inicial do produto: hero, recursos, agendamento e atendimento |
| `cadastro.html` | Formulário de criação de conta, com validação em tempo real e envio para `processar.php` |

---

<sub>Projeto desenvolvido como teste técnico de processo seletivo.</sub>
