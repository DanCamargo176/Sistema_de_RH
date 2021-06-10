-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jun-2021 às 22:10
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_efetivo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `log_login`
--

CREATE TABLE `log_login` (
  `USUARIO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DATA` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_efetivo`
--

CREATE TABLE `tb_efetivo` (
  `RE` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `P_G` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `QRA` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CIA` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `FUNCAO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ENDERECO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TELEFONE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NOME_COMPLETO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL_FUNCIONAL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DATA_NASCIMENTO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `FOTO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CPF` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `RG` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CNH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `OBS` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SECAO` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_efetivo`
--

INSERT INTO `tb_efetivo` (`RE`, `P_G`, `QRA`, `CIA`, `FUNCAO`, `ENDERECO`, `TELEFONE`, `NOME_COMPLETO`, `EMAIL_FUNCIONAL`, `DATA_NASCIMENTO`, `FOTO`, `CPF`, `RG`, `CNH`, `OBS`, `SECAO`) VALUES
('920461', 'TEN CEL PM', 'DENIS', 'EM', 'CMT', 'XXX', 'XXX', 'DENIS IZUMIDA', 'XXX@policiamilitar.sp.gov.br', 'xx/xx/xxxx', '9847e6e91601ee0c8414f8c9d5103cf2.jpg', 'testetesteteste', 'testetesteteste', 'testetesteteste', 'testetesteteste', ''),
('931028', 'MAJ PM', 'ALBERTINI', 'EM', 'SUBCMT', 'XXX', 'XXX', 'ANDRE ALBERTINI', 'XXX@policiamilitar.sp.gov.br', 'xx/xx/xxxx', '97ae34d9db07dde71120dd28bc545aa1.jpg', 'testeteste', 'testeteste', 'testeteste', 'testeteste', ''),
('171372', 'SD PM', 'CAMPOS', 'PTT', 'TELEMÃTICA', 'Rua Campo Largo 315 - Vila Bertioga - SP', '11983616826', 'Daniel Campos Camargo', 'danielcamposcamargo@policiamilitar.sp.gov.br', '12/10/1998', '2bae130c8044fb9016d033a3d0873853.jpg', '43340169870', '540780686', 'aaaaaa', 'tttttttttt', ''),
('159345', 'SDPM', 'EVELYN', '2Âª CIA', 'ADM', 'Avenida Clodoaldo Garcia, 149, Santos Dumont, TrÃªs Lagoas, MS', '(67) 2528-4653', 'Evelyn Regina Duarte', '1bptranp4@policiamilitar.sp.gov.br', '19/12/1978', '4cc0e1c26908427158c357e4c9da4d35.jpg', '453.045.328-64', '123123123123123123123123123', '2222222222222222', 'TESTE', ''),
('456896', 'SDPM', 'TESTE', 'SALA DE SITUACAO', 'SALA DE SITUAÃ‡ÃƒO', 'Avenida Clodoaldo Garcia, 149, Santos Dumont, TrÃªs Lagoas, MS', '(67) 2528-4653', 'Evelyn Regina Duarte', 'teste-danielocao2011@hotmail.com', '19/12/1978', 'bc338058ffdba1d0c8213037a25388f2.jpeg', '453.045.328-64', '123123123123123123123123123', '2222222222222222', 'TESTE04', ''),
('147933', 'SDPM', 'TOMAS', '1Âª CIA', 'ADM', 'Avenida Clodoaldo Garcia, 149, Santos Dumont, TrÃªs Lagoas, MS', '(67) 2528-4653', 'Evelyn Regina Duarte', '1bptranp4@policiamilitar.sp.gov.br', '19/12/1978', '21f83ca73b2be361ba1d13bc92e459f7.jpg', '453.045.328-64', '123123123123123123123123123', '123123123123123123123123123', 'TESTESTESTETOMAS', 'GUARDA'),
('123456', 'SDPM', 'TESTE', '1Âª CIA', 'ADM', 'Avenida Clodoaldo Garcia, 149, Santos Dumont, TrÃªs Lagoas, MS', '(67) 2528-4653', 'Evelyn Regina Duarte', '1bptranp4@policiamilitar.sp.gov.br', '19/12/1978', 'd947daef870ccf4384655a59f1b06910.jpg', '453.045.328-64', '123123123123123123123123123', '2222222222222222', 'TESTE', 'GUARDA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `login` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`ID`, `login`, `senha`) VALUES
(0000000001, 'admin', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_efetivo`
--
ALTER TABLE `tb_efetivo`
  ADD PRIMARY KEY (`RE`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
