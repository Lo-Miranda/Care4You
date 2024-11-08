-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/11/2024 às 23:54
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `care4you2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `calendario`
--

CREATE TABLE `calendario` (
  `id` int(11) NOT NULL,
  `dia` date NOT NULL,
  `idEspecialista` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `calendario`
--

INSERT INTO `calendario` (`id`, `dia`, `idEspecialista`) VALUES
(1, '2024-10-31', 1),
(3, '2024-11-01', 6),
(10, '2024-12-13', 1),
(11, '2024-11-15', 11),
(12, '2024-11-11', NULL),
(13, '2024-11-12', NULL),
(14, '2024-11-14', NULL),
(15, '2024-11-18', NULL),
(16, '2024-11-19', NULL),
(17, '2024-11-21', NULL),
(18, '2024-11-22', NULL),
(19, '2024-11-23', NULL),
(20, '2024-11-25', NULL),
(21, '2024-11-26', NULL),
(22, '2024-11-27', NULL),
(23, '2024-11-28', NULL),
(24, '2024-11-29', NULL),
(25, '2024-11-30', NULL),
(26, '2024-12-02', NULL),
(27, '2024-12-03', NULL),
(28, '2024-12-04', NULL),
(29, '2024-12-05', NULL),
(30, '2024-12-06', NULL),
(31, '2024-12-07', NULL),
(32, '2024-12-09', NULL),
(33, '2024-12-10', NULL),
(34, '2024-12-11', NULL),
(35, '2024-12-12', NULL),
(36, '2024-12-13', NULL),
(37, '2024-12-14', NULL),
(38, '2024-12-16', NULL),
(39, '2024-12-17', NULL),
(40, '2024-12-18', NULL),
(41, '2024-12-19', NULL),
(42, '2024-12-20', NULL),
(43, '2024-12-21', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `especialidade`
--

CREATE TABLE `especialidade` (
  `id` int(11) NOT NULL,
  `Nome` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `especialidade`
--

INSERT INTO `especialidade` (`id`, `Nome`) VALUES
(1, 'Cardiologia'),
(2, 'Clínica Geral'),
(3, 'Urologia'),
(4, 'Psicologia'),
(5, 'Geriatria'),
(6, 'Ginecologia'),
(7, 'Proctologia'),
(8, 'Neurologia'),
(9, 'Nutrologia'),
(10, 'Gastroenterologia'),
(11, 'Otorrinolaringologista'),
(12, 'Endocrinologia');

-- --------------------------------------------------------

--
-- Estrutura para tabela `especialista`
--

CREATE TABLE `especialista` (
  `id` int(11) NOT NULL,
  `NomeProfissional` varchar(255) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `endereco` varchar(100) NOT NULL,
  `registro` varchar(100) NOT NULL,
  `Nota` varchar(40) DEFAULT NULL,
  `especialidade_id` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `especialista`
--

INSERT INTO `especialista` (`id`, `NomeProfissional`, `data_nascimento`, `endereco`, `registro`, `Nota`, `especialidade_id`, `email`, `senha`) VALUES
(1, 'Adelaide Gonçalves Silva', '1994-11-11', 'Rua Ágora, 111. São Bernardo do Campo, SP', '369852147', '4.9', 1, 'adelaide_silva@email.com', '123456'),
(6, 'Sofia Helena Figueiredo', '1985-07-16', 'Avenida Bom Pastor, 256. Diadema, SP', '987456321', '4.1', 2, 'sofia_helena@email.com', '123456'),
(11, 'Eduardo Antônio Pires', '1987-09-16', 'Alameda Projeção, 52. Caieiras, SP', '132654789', '4', 12, 'eduardo_pires@email.com', '123456\r\n'),
(16, 'Roberto Carlos Schmitt', '1995-11-10', 'Rua das Febres, 89. Santo André, SP', '258741369', '4.5', 5, 'roberto_schimidt@email.com', '123456'),
(22, 'Jocélia dos Santos ', '1977-07-10', 'Rua dos Dons, 56. Itapecerica da Serra, SP', '3571598462', '4,4', 3, 'jocelia@email.com', '123456\r\n'),
(23, 'Marília Silva Carvalho', '1989-07-16', 'Rua Manaceira, 77. Ferraz de Vasconcelos, SP', '321654789', '3,9', 1, 'marilia_carvalho@email.com', '123456'),
(24, 'Adelaide Gonçalves Silva', '1967-05-20', 'Rua do Fogo, 19. Mogi das Cruzes, SP', '741258963', '4.7', 4, 'adelaide_silva@email.com', '123456'),
(25, 'Eduardo Antônio Pires', '1970-07-13', 'Avenida dos Relatos, 236. Guararema, SP', '236587941', '4,0', 4, 'eduardo_pires@email.com', '123456'),
(26, 'Daniel Pires', '1984-03-04', 'Avenida Canivete de Ouro, 156. Vinhedo, SP', '95178965412', '4,1', 1, 'daniel_pires@email.com', '123456'),
(28, 'Catarina de Alcântara', '1964-08-19', 'Rua dos Jogos, 147. São Caetano, SP', '746396148', '3,9', 1, 'catarina_alcantara@email.com', '123456\r\n'),
(29, 'José de Alencar', '1977-10-20', 'Rua São Jorge, 425. São Paulo, SP', '3571598462', '4,1', 1, 'jose_alencar@email.com', '123456'),
(30, 'Sônia Antunes', '1994-09-09', 'Avenida Ipiranga, 6500. São Paulo, SP', '321444987', '4,3', 2, 'sonia_antunes@email.com', '123456'),
(31, 'Ricardo Vilar', '1975-07-06', 'Rua das Acácias, 289. São Paulo, SP', '6654789123', '4,1', 2, 'ricardo_vilar@email.com', '123456'),
(32, 'Régis de Albuquerque', '1996-10-06', 'Praça da Liberdade, 55', '222654789', '3,5', 2, 'regis_albuquerque@email.com', '123456'),
(33, 'Lúcio Mello', '1993-01-12', 'Rua do Bosque, 90. São Paulo, SP', '888965412', '4,3', 3, 'lucio_mello@email.com', '123456'),
(34, 'Maria do Carmo Lima', '1982-05-08', 'Rua Cândido Motta, 312. São Paulo, SP', '213654789', '4,9', 3, 'maria_lima@email.com', '123456'),
(35, 'Raquel de Almeida', '1986-06-19', 'Rua dos Três Irmãos, 80. São Paulo, SP', '369852147', '4,5', 3, 'raquel_almeida@email.com', '123456'),
(37, 'Maria Rita Seixas', '1984-07-03', 'Rua Adamas, 11. Guarujã, SP', '784976313', '4,9', 5, 'maria_rita@email.com', '123456'),
(38, 'José Francisco Ribeiro', '1990-05-14', 'Avenida Emílio Ribas, 115. Guarulhos, SP', '123654789', '4,8', 6, 'jose_ribeiro@email.com', '123456'),
(39, 'Catarina Furtado', '1996-11-01', 'Avenida do Conhecimento, 89. Caieiras, SP', '789654321', '4,9', 6, 'catarina@email.com', '123456'),
(40, 'Tomás de Castro', '1994-04-04', 'Alameda das Mãos, 78. São José dos Campos, SP', '147852369', '4,6', 7, 'tomas_castro@email.com', '123456'),
(41, 'Lúcia Moniz', '1984-10-10', 'Avenida dos Montes, 111. Sorocaba,SP', '369852147', '4,7', 7, 'lucia_moniz@email.com', '12346'),
(42, 'Eduardo Ferreira', '1986-05-02', 'Alameda Santos, 69. São Paulo, SP', '321456987', '3,7', 8, 'eduardo_ferreira@email.com', '123456'),
(43, 'Isabel Ruth', '1991-08-06', 'Rua Marinalva, 98. Vinhedo, SP', '3571598462', '4,0', 8, '', ''),
(44, 'Sílvia Gomes', '1974-06-14', 'Rua Quarta-feira, 258. Tatuí, SP', '9874563333', '4,5', 9, 'silva_gomes@email.com', '123456'),
(45, 'Miguel Pereira', '1964-11-24', '', '111456987', '4,2', 9, 'miguel_pereira@email.com', '123456'),
(46, 'Marta Pereira', '1978-08-05', 'Rua dos Amantes, 132. Maracanã, SP', '369852147', '4,9', 10, 'marta_pereira@email.com', '123465'),
(47, 'Rogério Samora', '1986-11-14', 'Alameda do Canto, 58. Alphaville, SP', '987456123', '4,6', 10, 'rogerio_samora@email.com', '123456'),
(48, 'Sara Norte', '1985-07-14', 'Avenida Carlos Caldeira Filho, 25. São Paulo, SP', '9994561347', '4,8', 11, 'sara_norte@email.com', '123456'),
(49, 'Mila Robatto', '1996-09-11', 'Rua Maldóvia, 86. Ferraz de Vasconcelos, SP', '3214447989', '4,2', 12, 'milena_robatto@email.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura para tabela `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(55) NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `paciente`
--

INSERT INTO `paciente` (`id`, `nome_completo`, `data_nascimento`, `email`, `senha`, `endereco`) VALUES
(20, 'João Silva Santos', '1975-06-17', 'joao_silva@email.com', '123456', 'Rua dos Aflitos, São Paulo, SP'),
(21, 'Maria Stephanie Oliveira', '1998-08-14', 'maria_stephanie@email.com', '123456', 'Avenida da Solidariedade, 89. Diadema, SP'),
(22, 'Carlos Pereira Schwartz', '1961-05-01', 'carlos@email.com', '123456', 'Rua Thompson, 11. Taboão da Serra, SP'),
(23, 'Ana Carolina Santos', '1965-05-19', 'ana_carolina@email.com', '123456', 'Avenida Adamantina, 89. Guarulhos, SP'),
(24, 'Fernando Gerson Lima', '1968-08-14', 'fernando_gerson@email.com', '123456', 'Avenida Carlos Lacelva, 1800. São Paulo, SP'),
(25, 'Madalena Pires Zuchini', '1972-10-25', 'madalena@email.com', '123456', 'Avenida Emilio Ribas, 225. São Caetano, SP'),
(26, 'Roberto Rodrigo Costa ', '1958-12-27', 'roberto_rodrigo@email.com', '123456', 'Travessa da Cadência, 111. Mauá, SP.'),
(27, 'Lucia Almeida Oliveira', '1973-07-29', 'lucia@email.com', '123456', 'Rua Madalena Silva, 10. São Paulo, SP'),
(28, 'Paulo Salvino Mendes', '1958-09-15', 'paulo_salvino@email.com', '123456', 'Avenida Almada, 25. Guararema, SP'),
(29, 'Mariana Josefa Silva', '1976-12-24', 'mariana@email.com', '123456', 'Rua das Dores, 78. Itú, SP'),
(30, 'Claudio Falchioni', '1982-05-03', 'claudio_falchioni@email.com', '123456', 'Avenida Santos Dummont, 1778. São Paulo, SP'),
(31, 'Gerson Alves Santos', '1970-05-13', 'gerson@email.com', '123456', 'Avenida Carlos Lacerda, 1700. Diadema, SP'),
(32, 'Maria Santos', '1967-02-02', 'maria_santos@email.com', '123456', 'Avenida Carlos Lacerda, 1700. Diadema, SP'),
(33, 'Mariana Santos', '1995-07-07', 'mariana_santos@email.com', '123456', 'Rua Austral, 171. Santos, SP');

-- --------------------------------------------------------

--
-- Estrutura para tabela `prestador`
--

CREATE TABLE `prestador` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data_nascimento` date NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `especialidade` enum('Cardilogia','Urologia','Psicologia','Clínica Médica') NOT NULL,
  `registro` int(30) NOT NULL,
  `nota` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `prestador`
--

INSERT INTO `prestador` (`id`, `nome`, `data_nascimento`, `endereco`, `especialidade`, `registro`, `nota`, `email`, `senha`) VALUES
(1, 'Jocélia dos Santos Moreira', '1975-10-02', 'Rua da Glória, 52. Liberade, São Paulo - SP', 'Urologia', 12345689, '4,7', 'jocelia@email.com', '123456'),
(3, 'Marília Silva Carvalho', '1990-07-31', 'Rua da Glória, 85. Liberdade, São Paulo, SP', 'Cardilogia', 1232423555, '3,3', 'mar_sil@email.com', '$2y$10$VhpTBaR3f3FcVojVgL8qsehSqni/ntO127kUn.jXLPetUjmHptNHm'),
(6, 'Adelaide Gonçalves Silva', '1984-11-02', 'Rua do Racionalismo Critão, 52. Tietê, São Paulo, SP.', 'Psicologia', 25789632, '4,9', 'adelaide.gon@email.com', '123456'),
(7, 'Sofia Helena Figueiredo', '1964-11-14', 'Avenida Boa Vista, 111. São Bento, São Paulo, SP.', 'Clínica Médica', 125478933, '4,1', 'sofia_helena@email.com', '123456'),
(8, 'Eduardo Antônio Pires', '1985-05-13', 'Rua Macabéa, 121. Vila Augusta, São Paulo, SP', 'Psicologia', 25467893, '4,0', 'eduardo_pires@email.com', '123456'),
(10, 'Daniel Pires', '1992-06-17', 'Rua Mineira, 87. Santo André, SP', 'Cardilogia', 2147483647, '4,1', 'daniel_pires@email.com', '$2y$10$03Jw5mQJAlxrzFCVfyMCR.BP2neYRTobZT7h9Zrz1LaQ1eKDxNrF.'),
(12, 'Roger Santos Moreira', '1985-11-29', 'Avenida Emilio Ribas, 78. São Paulo, SP', '', 789456123, '', 'roger@email.com', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEspecialista` (`idEspecialista`);

--
-- Índices de tabela `especialidade`
--
ALTER TABLE `especialidade`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `especialista`
--
ALTER TABLE `especialista`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_especialidade` (`especialidade_id`);

--
-- Índices de tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `prestador`
--
ALTER TABLE `prestador`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `especialidade`
--
ALTER TABLE `especialidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `especialista`
--
ALTER TABLE `especialista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `prestador`
--
ALTER TABLE `prestador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `calendario`
--
ALTER TABLE `calendario`
  ADD CONSTRAINT `calendario_ibfk_1` FOREIGN KEY (`idEspecialista`) REFERENCES `especialista` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `especialista`
--
ALTER TABLE `especialista`
  ADD CONSTRAINT `fk_especialidade` FOREIGN KEY (`especialidade_id`) REFERENCES `especialidade` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
