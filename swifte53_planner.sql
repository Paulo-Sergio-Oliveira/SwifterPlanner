-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 07/08/2023 às 14:29
-- Versão do servidor: 5.7.23-23
-- Versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `swifte53_planner`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `id` int(11) NOT NULL,
  `avaliacao` int(11) NOT NULL,
  `id_book` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `avaliacao`
--

INSERT INTO `avaliacao` (`id`, `avaliacao`, `id_book`, `id_user`) VALUES
(1, 4, 'l_NQkpUz4CoC', 2),
(2, 5, 'tMhD8UyBAJkC', 2),
(3, 4, 'tMhD8UyBAJkC', 1),
(4, 4, '3MwaAAAAYAAJ', 1),
(5, 3, '3MwaAAAAYAAJ', 2),
(6, 3, 'ylLoGsee8YcC', 2),
(7, 2, 'ylLoGsee8YcC', 1),
(8, 5, 'oPJyBgAAQBAJ', 1),
(9, 5, '8IFIAQAAMAAJ', 1),
(10, 5, 'ORyo8qAA-CQC', 2),
(11, 4, 'nAYBEAAAQBAJ', 1),
(12, 5, 'Lf0gyAEACAAJ', 14),
(13, 5, 'hiWFDwAAQBAJ', 14),
(14, 5, 'IBZnDwAAQBAJ', 14),
(15, 5, 'edJiDwAAQBAJ', 14),
(16, 5, 'okPGEAAAQBAJ', 14),
(17, 5, 'ypRcZI8-EbEC', 14),
(18, 3, 'teR7DwAAQBAJ', 17);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `id` int(3) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `data_nasc` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `cadastros`
--

INSERT INTO `cadastros` (`id`, `nome`, `email`, `data_nasc`) VALUES
(1, 'Paulo Sergio Vieira de Oliveira', 'paulosergiooliveira113@gmail.com', '18/08/2005'),
(2, 'Thierry Araújo Mendes', 'fredbearolden@gmail.com', '19/08/2005'),
(3, 'Vinicio Duca Bandeira', 'ducao@gmail.com', '18/04/2006'),
(4, 'Gustavo Silva Barbosa', 'gustavo@gmail.com', '28/07/2005'),
(5, 'Kauan Oliveira Freitas', 'kauan@gmail.com', '25/03/2006'),
(6, 'Maycon Dantas de Oliveira', 'dantasmaycon@gmail.com', '11/07/2006'),
(8, 'João', 'joao@gmail.com', '19/05/1998'),
(9, 'João da Silva Sauro', 'joao@gmail.com', '13/04/1997'),
(10, 'Adelaide', 'adel@gmail.com', '12/03/2007'),
(11, 'erwerqwew', 'weweqr@eweq.com', '44/44/4444'),
(12, 'facil', 'facil@gmail.com', '12/08/2005'),
(13, 'Thorfin', 'thorfin@gmail.com', '31/31/3131'),
(14, 'Gustavo Silva', 'gustavosilvabarbosa2021@gmail.com', '28/07/2005'),
(15, 'Maria Eduarda Silva Oliveira ', 'eduardaasilva001@gmail.com', '26/11/2005'),
(16, 'Luccas', 'luccas.lima041@gmail.com', '05/10/2005'),
(17, 'JiiJ', 'jiij@gmail.com', '31/08/2005');

-- --------------------------------------------------------

--
-- Estrutura para tabela `diarios`
--

CREATE TABLE `diarios` (
  `id` int(4) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `conteudo` varchar(1000) NOT NULL,
  `data` date NOT NULL,
  `id_diario` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `diarios`
--

INSERT INTO `diarios` (`id`, `titulo`, `conteudo`, `data`, `id_diario`) VALUES
(19, 'Hoje foi paia', 'Quase não resolvo o problema do código', '2023-04-26', 1),
(20, 'Hoje foi show', 'Lucas gostou do meu projeto', '2023-05-29', 1),
(23, 'My life', 'aqui dedico para falar sobre minha vida que irá conter pautas pessoais e profissionais', '2023-07-30', 16),
(24, 'Washington ', 'sonho de conhecer a capital dos EUA', '2023-07-30', 16),
(25, 'Washington ', 'sonho de conhecer a capital dos EUA', '2023-07-30', 16),
(26, 'frt5ft5', 'tf5gfy5t6', '2023-08-03', 14),
(27, 'Hoje foi bom', 'A comida tava boa', '2023-08-03', 17),
(28, 'Academia', 'Fazer', '2023-08-04', 13);

-- --------------------------------------------------------

--
-- Estrutura para tabela `habitos`
--

CREATE TABLE `habitos` (
  `id` int(4) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `domingo` varchar(8) DEFAULT NULL,
  `segunda` varchar(8) DEFAULT NULL,
  `terca` varchar(8) DEFAULT NULL,
  `quarta` varchar(8) DEFAULT NULL,
  `quinta` varchar(8) DEFAULT NULL,
  `sexta` varchar(8) DEFAULT NULL,
  `sabado` varchar(8) DEFAULT NULL,
  `id_hab` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `habitos`
--

INSERT INTO `habitos` (`id`, `titulo`, `domingo`, `segunda`, `terca`, `quarta`, `quinta`, `sexta`, `sabado`, `id_hab`) VALUES
(42, 'Ler', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 1),
(40, 'Jogar Bola', 'checked', NULL, NULL, NULL, NULL, NULL, 'checked', 1),
(43, 'Treinar', 'checked', 'checked', 'checked', NULL, 'checked', 'checked', 'checked', 1),
(44, 'Acordar Cedo', NULL, 'checked', 'checked', 'checked', 'checked', 'checked', NULL, 1),
(45, 'Dormir Cedo', 'checked', 'checked', 'checked', 'checked', 'checked', NULL, NULL, 1),
(46, 'Estudar', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 1),
(47, 'Leitura', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14),
(48, 'Leitura', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14),
(49, 'Ir caminhar no campo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16),
(50, 'Dormir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16),
(51, 'Ir caminhar no campo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16),
(52, 'Leitura', 'checked', 'checked', NULL, NULL, 'checked', NULL, 'checked', 17),
(53, 'Academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13),
(54, 'Jogo do Brasil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13),
(55, 'Escola', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13),
(56, 'Um dia Inesquecivel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13),
(57, 'Oi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13);

-- --------------------------------------------------------

--
-- Estrutura para tabela `hab_total`
--

CREATE TABLE `hab_total` (
  `id` int(4) NOT NULL,
  `semana` varchar(25) NOT NULL,
  `titulo` varchar(25) NOT NULL,
  `total` int(2) DEFAULT '0',
  `id_hab` int(4) NOT NULL,
  `id_user` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `hab_total`
--

INSERT INTO `hab_total` (`id`, `semana`, `titulo`, `total`, `id_hab`, `id_user`) VALUES
(48, '23/07/2023 a 29/07/2023', 'Treinar', 6, 43, 1),
(49, '23/07/2023 a 29/07/2023', 'Acordar Cedo', 5, 44, 1),
(50, '23/07/2023 a 29/07/2023', 'Dormir Cedo', 5, 45, 1),
(51, '23/07/2023 a 29/07/2023', 'Estudar', 7, 46, 1),
(47, '23/07/2023 a 29/07/2023', 'Jogar Bola', 2, 40, 1),
(46, '23/07/2023 a 29/07/2023', 'Ler', 7, 42, 1),
(39, '16/07/2023 a 22/07/2023', 'Estudar', 7, 46, 1),
(38, '16/07/2023 a 22/07/2023', 'Dormir Cedo', 5, 45, 1),
(37, '16/07/2023 a 22/07/2023', 'Acordar Cedo', 5, 44, 1),
(34, '16/07/2023 a 22/07/2023', 'Ler', 7, 42, 1),
(35, '16/07/2023 a 22/07/2023', 'Jogar Bola', 2, 40, 1),
(36, '16/07/2023 a 22/07/2023', 'Treinar', 6, 43, 1),
(52, '30/07/2023 a 05/08/2023', 'Leitura', 0, 47, 14),
(53, '30/07/2023 a 05/08/2023', 'Leitura', 0, 48, 14),
(54, '30/07/2023 a 05/08/2023', 'Ir caminhar no campo', 0, 49, 16),
(55, '30/07/2023 a 05/08/2023', 'Dormir', 0, 50, 16),
(56, '30/07/2023 a 05/08/2023', 'Ir caminhar no campo', 0, 51, 16),
(57, '30/07/2023 a 05/08/2023', 'Leitura', 4, 52, 17),
(58, '30/07/2023 a 05/08/2023', 'Academia', 0, 53, 13),
(59, '06/08/2023 a 12/08/2023', 'Academia', 4, 53, 13),
(60, '06/08/2023 a 12/08/2023', 'Jogo do Brasil', 1, 54, 13),
(61, '06/08/2023 a 12/08/2023', 'Escola', 4, 55, 13),
(62, '06/08/2023 a 12/08/2023', 'Um dia Inesquecivel', 2, 56, 13),
(63, '06/08/2023 a 12/08/2023', 'Oi', 2, 57, 13);

-- --------------------------------------------------------

--
-- Estrutura para tabela `logins`
--

CREATE TABLE `logins` (
  `id` int(3) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `logins`
--

INSERT INTO `logins` (`id`, `usuario`, `senha`) VALUES
(1, '$2y$10$V.aERjcyXWOvH8amaP/HduKz/PBTXEPpmG8hop7bvBLrvYMs7v8da', '$2y$10$4NxYLLgxPoNfld4r01k8OewlGf6J09nOCW.fV4TCvQoFjyltEmeey'),
(2, '$2y$10$k3daHO9UaCSZXDtLY8URPuM7Y3Rf7t8g7sGYUwqwQTz9CGKFMh4ku', '$2y$10$p9/T0apM0bF6bq8p0iXUKugn4OcPUVuFmai2UiFk1lSLvGoRYTixC'),
(3, '$2y$10$6lpTGNuCm59brpoz2nM9PedrjLppE9ZqpHMcR26zuEWkD4uRYHJ7a', '$2y$10$z0SB3SysmHmk3Dy7NQ.7S.q0xh2/mMKd51KW2xFI9xql7ZclYztce'),
(4, '$2y$10$FgYb5M9wrj.vkx19rYGwZuEHk4UlIbfDadXrqzlecAUDmGcKfMuzW', '$2y$10$w4w4Rb7evCu7jSIUzaRxJex6V4Gbo.9MS9khwmH7POLQRKMM/3.rW'),
(5, '$2y$10$ao3/vFoT/BmW4d8Fl7jfpOBmUc3bQH301OBuUT976Li6oMV3T4MyS', '$2y$10$44N5Ur2OfBGYfSIcLuN7meD5zL7DXBHPK38ljU3nDZJFxNgdB94RS'),
(6, '$2y$10$PQDBaTT/otzkggTbWNH3yeBelhflTObPelR/86CabVJ45tH9M6SMW', '$2y$10$T7atbB/kM4FR7wLRGpXGGONKc9mLCjqZJ4Wv93LGVDb7r1TLm.tWu'),
(7, '$2y$10$FaxNzj9c9upDTI3iqlWcG.eeYBpysXbnUONEj4RL0HMjyrxcU8N5C', '$2y$10$1aIJtNl7j73TPhtAuCR1ue42BG2Xp0Bt6OOsnhguWXm/ox7gtWkJq'),
(8, '$2y$10$i92IMmMlN4FbRHZRLRTO7uNx.3pPGimBa3d6siPzqvPq0Xc5.C7EK', '$2y$10$GGLD3duNnrDIr1llhXhOIuGXl3Y7qJT62E.X0FXUvJtruxdV6mMLS'),
(9, '$2y$10$Bjc4hM4gbkHgHdyVc48iF.p2DLTxtn3hYwitcIlMvW3N7DSs4QIga', '$2y$10$3ZRofdS69FHLj8ouasS.COX8ecnOge9P6KSNq/J48bAR/0qaRpQIa'),
(10, '$2y$10$qlNlaupa5J0Se3vRKFY3x.CV8XBYqwhd182UeEqwTKG/3tNFVNLgS', '$2y$10$5Ogcw0/YvRm7iX3RiRExhuOhPDhxmPdLe0bZjvwjoBf.DIBF0nEpm'),
(11, '$2y$10$a2czPHkf7/x82uHfC69jpekyBtp8RzfIA0Crh2VnM9dZIljEvYMzy', '$2y$10$5Y6l5TSc6SllEElPHrIib..awpkLMg5Ah4bw47phHGJIzkzY.Rtou'),
(12, '$2y$10$0D1aLf5fxAkEqSy7N4J5F.BeU7P5qYdQgHebIoR/Ho2qTyyBX4YRy', '$2y$10$/ezPbFd1tg.Gmp6vQYcMdeGBwDLCTbPSNo.O./miGfHBg/eF3KI0e'),
(13, '$2y$10$3Wnjfka4WLfzre3d4DD5j.6JeFMttHr8wLil/iShSllOS2Rj5HWs6', '$2y$10$ANOI7xApp1BiKFrTGHSUreoIVge.VR2GUSfhlugIiyBwC8saDP6..'),
(14, '$2y$10$CK8i817rqniUE8fgxAWf.OyVKuhlGpD1SwVqCUacK8KPBZlUrEADK', '$2y$10$BSAqIt5NWQh4U6hYQM1M2.6pM7obOpGu.XeJsqu8qOXXJbqiBc9EG'),
(15, '$2y$10$Jh4eioERDuASMCCZ5ZY.tu.rg7koJJpi4QCBmRy3aYFszUxKs3fn2', '$2y$10$au.M9eIp4NPDMwFUs5Ccme/f1Kq9Wf5p1cd4d1B7OHA8R/s9HCKWy'),
(16, '$2y$10$yYucB9RiJ01ypC07wHsPnO0HXegwZ71x18Z3STMx16wJNXjg7kgge', '$2y$10$sa/ZBnLjlxzGkvp4XVrQqO1GRXmbfanv5fgJvSOV.Ophn9/0S4EEO'),
(17, '$2y$10$0vNxig/5ecG7uq4wH4wDfOkquALDNlnkuqNfL0rqv041b6mb4XTYu', '$2y$10$jwpLtPyWoUH.o99mo0WIt.DquHWEoRvUHFU.y4jnLkUQmo6Vvk/TW');

-- --------------------------------------------------------

--
-- Estrutura para tabela `metas`
--

CREATE TABLE `metas` (
  `id` int(11) NOT NULL,
  `mesSelecionado` varchar(100) NOT NULL,
  `areaMeta` varchar(100) NOT NULL,
  `concluido` tinyint(1) NOT NULL,
  `metas` varchar(100) NOT NULL,
  `anoIns` int(11) NOT NULL,
  `id_user` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `metas`
--

INSERT INTO `metas` (`id`, `mesSelecionado`, `areaMeta`, `concluido`, `metas`, `anoIns`, `id_user`) VALUES
(1, 'Fevereiro', 'vidaPessoal', 1, 'aa', 2023, 1),
(57, 'Janeiro', 'Vida Pessoal', 1, 'Viajar para Rússia', 2023, 1),
(51, 'Março', 'Felicidade e Lazer', 0, 'Correr atrás de crianças pequenas', 2023, 1),
(54, 'Janeiro', 'Família e Relacionamentos', 1, 'cagar na cabeça do meu irmão', 2023, 1),
(58, 'Agosto', 'Vida Pessoal', 0, 'Comemorar meu aniversário', 2023, 1),
(59, 'Novembro', 'Vida Acadêmica', 0, 'Passar no Enem', 2023, 1),
(60, 'Agosto', 'Autocuidado', 1, 'Quero melhorar minha saúde mental ', 2023, 14),
(61, 'Julho', 'Vida Pessoal', 0, '', 2023, 15),
(62, 'Agosto', 'Família e Relacionamentos', 1, 'Arranjar uma namorada', 2023, 17),
(63, 'Agosto', 'Vida Pessoal', 1, 'CASAR', 2023, 13);

-- --------------------------------------------------------

--
-- Estrutura para tabela `new_plan`
--

CREATE TABLE `new_plan` (
  `id` int(4) NOT NULL,
  `data` date NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `id_plan` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `new_plan`
--

INSERT INTO `new_plan` (`id`, `data`, `titulo`, `id_plan`) VALUES
(27, '2023-08-18', 'Meu Aniversário', 1),
(28, '2024-04-07', 'Aniversário do meu amigo', 1),
(30, '2023-05-30', 'Atividades', 1),
(35, '2023-08-07', 'Recuperação de Física', 16),
(36, '2023-07-30', 'Leitura', 14),
(37, '2023-08-18', 'Aniversário do Paulo', 17),
(39, '2023-04-18', 'Aniversário do Vinicio', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `planejamentos`
--

CREATE TABLE `planejamentos` (
  `id` int(4) NOT NULL,
  `planejamento` varchar(20) NOT NULL,
  `hora_de` time NOT NULL,
  `hora_ate` time NOT NULL,
  `id_plan` int(3) NOT NULL,
  `id_titulo` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `planejamentos`
--

INSERT INTO `planejamentos` (`id`, `planejamento`, `hora_de`, `hora_ate`, `id_plan`, `id_titulo`) VALUES
(50, 'Química', '15:30:00', '17:00:00', 1, 30),
(45, 'Festa bacana', '19:30:00', '06:00:00', 1, 27),
(46, 'Festa surpresa', '19:00:00', '22:00:00', 1, 28),
(48, 'História', '13:00:00', '14:00:00', 1, 30),
(49, 'Matemática ', '14:00:00', '15:30:00', 1, 30),
(52, 'Estudar', '22:00:00', '06:30:00', 16, 35),
(53, 'Festa dele', '19:00:00', '04:00:00', 17, 37),
(55, 'Festa bacana', '18:00:00', '06:00:00', 1, 39);

-- --------------------------------------------------------

--
-- Estrutura para tabela `prateleira`
--

CREATE TABLE `prateleira` (
  `id` int(11) NOT NULL,
  `id_book` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `author` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `prateleira`
--

INSERT INTO `prateleira` (`id`, `id_book`, `title`, `img`, `author`, `status`, `id_user`) VALUES
(1, 'b74fEAAAQBAJ', 'Jane Eyre', 'http://books.google.com/books/publisher/content?id=b74fEAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE72iw19OgGOjVVjvu-4VZOvCFN0fp_EA6ltprcdsMGwb_qukps56Tl0t-z1ThISYtdvs_Hf9-hqV8WlaZe-TacAfQ5W6KgKPiF66kmv0NWPHX1tk7j3UvUX-Izl3zwaJ5NR_kgeb&source=gbs_api', 'Charlotte Bronte', 1, 1),
(15, 'tMhD8UyBAJkC', 'The Taming of the Shrew', 'http://books.google.com/books/content?id=tMhD8UyBAJkC&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE704eZmLnQpn7eDirM-7xIPbLkVj26FtEJaAASF6XkPzRJhaEZPBh8vipFdzuhVc2U1SVwgFIwKYGaxvfByFUKg_ShEVtLzSZyMFMnJtqGxFeAwibxyaqNcKFdOwCxc4Ylzqr6cD&source=gbs_api', 'William Shakespeare', 1, 2),
(21, 'a9VxKgui0mEC', 'Thus Spoke Zarathustra', 'http://books.google.com/books/content?id=a9VxKgui0mEC&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE71r8BWP2_9SxBZjDUS8pi1he0o34VKYbA9Zbj-kRoYnHAsyskHO8A2eCJuD2h4fDT_5t7yUZV4MeQ6x3it939JOXImc2yuxHT5oEfGQkV0SFrCWAemkDgyZysfOM2pI-ItAxl5t&source=gbs_api', 'Friedrich Nietzsche', 2, 2),
(4, '6c9NKzJWVYgC', 'Who Were They?', 'http://books.google.com/books/content?id=6c9NKzJWVYgC&printsec=frontcover&img=1&zoom=1&imgtk=AFLRE70-OPvp9PwHX5DZ-hfe9BC43ynPYn7LQtPT9758kks9zXxOtwVJ0kOqANeHWGZ7XNA0FZFGWxnaZClHbQ7ite1eShfJwZSeKWMhxoTpPDHbwGBT435iKgSziDwIA-DBxpyA2SFK&source=gbs_api', 'undefined', 0, 2),
(5, 'jLs7EAAAQBAJ', 'Macbeth', 'http://books.google.com/books/publisher/content?id=jLs7EAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE72pmkl41RxUDeye0OLbAhld4i3v_B2q_gaGH61kPFNyOIgPOX5BxynCvmDPUdrvhJWhLy0pujY3n2KwV5hA3x9hu077gmwH0KJyTJrZwmAdqolTEPGTuvAGIaD3TAnJf5ogbvwb&source=gbs_api', 'William Shakespeare', 0, 2),
(24, 'hiWFDwAAQBAJ', 'Aprendendo a aprender para crianças e adolescentes', 'http://books.google.com/books/publisher/content?id=hiWFDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE73Ev58lU05viePjFqQyFyoAnK3BZwwBMXvT5SznTt_Ao4Wuvu7Oa9lhL-AKyG0bCuPSSmk54-Pif1Bfz2s-wuAxKUZNHNJQsdxnvqJ4q7ZTf5Zu8u1lhZ-EjfBOqCyxMdKSoDwe&source=gbs_api', 'Barbara Oakley,Terrence Sejnowski,Alistair McConville', 2, 14),
(7, 'n5S1PwAACAAJ', 'Querido diário otário', 'https://via.placeholder.com/150', 'Jim Benton', 0, 2),
(8, 'RN-RzQEACAAJ', 'The Dead Zone', 'http://books.google.com/books/content?id=RN-RzQEACAAJ&printsec=frontcover&img=1&zoom=1&imgtk=AFLRE70ikXFwPnnp3TY9UGGrTD0s2vyXpfIlS_QvSVEUJh8l7IQMbLrT2bQdEn0KCjGq__zvZNRd26ERLmfSi3InUVJ-3kvD7FCqqy4TDxga6hedKQJx9ihTCMv0PAi9QbayFNW-Csln&source=gbs_api', 'undefined', 0, 2),
(9, 'uJksEAAAQBAJ', 'DOM CASMURRO', 'http://books.google.com/books/publisher/content?id=uJksEAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE72nVyJldG1Rfi1nMBDKv4L1x7iGTlhtDlt30msjQDA_lHDM5kOrspMllOIK8UNfEjtQl91PyFvNiyFk19i_OC5TFMJvi8P9Os4Mfw92MLw3Fyt2fkqzo1saK7zeMWdyvKeIX5AR&source=gbs_api', 'MACHADO DE ASSIS', 2, 2),
(16, 'tMhD8UyBAJkC', 'The Taming of the Shrew', 'http://books.google.com/books/content?id=tMhD8UyBAJkC&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE70VQ3hVMhyj7UqGBKAdapErf8GNl9RTj8imViIHr5eRZ3sj1BGfnEqkkT4wXu2faNnT8dNZLSpiTa-2YI7Q9gj_meXUH1EdCkCC0HoH7Fs9k5weNe-8zvE53Wo85vgpH1pDFhfq&source=gbs_api', 'William Shakespeare', 0, 1),
(14, 'l_NQkpUz4CoC', 'Imagine: crescendo com o meu irmão John Lennon', 'http://books.google.com/books/content?id=l_NQkpUz4CoC&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE70oB1nGF39fFROq_ONN0d6XiMKondBu_WgRmKRZ7Gj5hGLGKZt8J0GjDbf4LavjweKavK3RsXgygShfCRmDVVV2yaudzPeed7El3SnTkhl_r8_e40LAt5Bu3MaSe2QxDSejj4rj&source=gbs_api', 'Julia Baird', 0, 2),
(12, 'ylLoGsee8YcC', 'Needful Things', 'http://books.google.com/books/content?id=ylLoGsee8YcC&printsec=frontcover&img=1&zoom=1&imgtk=AFLRE73_z7Qoc-k7fKJkRQxLETMNqczRLnigqa8BlwM_vQHnvxcNcQCGmXUWR9CC5_zIZMbp12sMCiQBLcBwd6OXo4V3-iZd1RMwNQDAYXJ2AaJq16Vauij6J-SpE6qvVz21mBmp45D-&source=gbs_api', 'Stephen King', 1, 1),
(13, 'xGmEEAAAQBAJ', 'George Orwell: 1984 + A revolução dos bichos', 'http://books.google.com/books/publisher/content?id=xGmEEAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE71lXetcmai13ygA5z9ElPH7I0NsvPhHZLWcTmSaxcrHBYU3IveqOkaXn3LisyaYHyCCaeD81oVqSKZ6WiK4tkLbwKO3jBUPZwNCfkwpvstWlxpRXXGaReFL8jD7RRk6hJU_WSD1&source=gbs_api', 'George Orwell', 0, 2),
(17, '3MwaAAAAYAAJ', 'A Short Life of Napoleon Bonaparte', 'http://books.google.com/books/content?id=3MwaAAAAYAAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE717byWuCqvxXYWHikdM_DwdvUbSVzNuPkk4rVfhkx2mMIip7oexuhntaNTBvhdrAK09yJEUbd3nOIxedrIma8L4fJtGMOjW_TWKsyTuq0w2Bfi-nl1lJPSCtR6NV2Blw3if-H-C&source=gbs_api', 'Ida Minerva Tarbell', 2, 1),
(18, '3MwaAAAAYAAJ', 'A Short Life of Napoleon Bonaparte', 'http://books.google.com/books/content?id=3MwaAAAAYAAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE73bP6gR6N920hNPSx7DD7bIv5SHnPT1Hdr6DAA84A48o7fqdXua5DKMhe62sA-cwGwjpX40GktXCVYdjumRhZawLKsEfoQj2ntueZnBXL6ghi93UOns89YyAQS25RsIEFjdaOAj&source=gbs_api', 'Ida Minerva Tarbell', 0, 2),
(19, '8IFIAQAAMAAJ', 'Plutarch\'s Lives Translated from the Original Greek', 'http://books.google.com/books/content?id=8IFIAQAAMAAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE73OJIUw8iB2oYCeh1WjYW4JdxFe8v58hp9NoHTUwQZloitwjXcZBdH3TMFpoDNkpGq-fUrZW93R2WAAB7ZEgd2_gu-tY0iLjPOuq8_6EgDCV5dnDzoi6o8kU5teyoxhuunBb253&source=gbs_api', 'Plutarch,John Langhorne,William Langhorne', 0, 1),
(20, 'ORyo8qAA-CQC', 'The Odyssey of Homer', 'http://books.google.com/books/content?id=ORyo8qAA-CQC&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE72EtaAwoHS4Kq04GO-oT-QS69ra9mYhLp92PDQTfqS6jR12P_MMsrFuZUThNNYlC033t12DL2uCld9Vv3wRMAIR60AlMchvwYDcdhVPqxQrr71lr2Js_SB-hv00vYGarxExRnP7&source=gbs_api', 'Homer', 0, 2),
(23, 'Lf0gyAEACAAJ', '12 regras para a vida', 'http://books.google.com/books/content?id=Lf0gyAEACAAJ&printsec=frontcover&img=1&zoom=1&imgtk=AFLRE72r4SX5LTPm2EhuYxWfgkjmh-1AWkfa4sWDgteAGvyd4fmGZ2P6BA-EtLJZohzJak7P8BtFnGDwMwkcvFAK_L7EuO4eCav1EqpeIp5aJXJeIAc7bGfB1oZFgPpY8-Vdf96tJHv2&source=gbs_api', 'Jordan B. Peterson', 1, 14),
(25, 'aizjDQAAQBAJ', 'Mindset', 'http://books.google.com/books/publisher/content?id=aizjDQAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE71n4wovW-eAQESGMq9k--UFm0sNXse8fTtT7H0qsipXswqx2xksjfn_vcQbjnUCyw-d6TiLMf5R4_42_y29Xh3ToH3QTAGx8ZB1rTanDlu3YXfJg5WmvKy29NZI4dvGfnTh2Y1q&source=gbs_api', 'Carol Dweck', 2, 14),
(26, 'IBZnDwAAQBAJ', 'Fixe o Conhecimento', 'http://books.google.com/books/publisher/content?id=IBZnDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE73j41pnZL1IhHQVoRFz7K4OGb4lgznsI-hxjMPjak1jP8etlRDk_9gyHhECrxEgO0oDj5I-Sv2Ok1Tu_afdsuWfPFkJj8iBoIaqBEjYGB0dMVj5HlMvy39ZBu9pdvj0vDbM_OhT&source=gbs_api', 'Peter C. Brown,Henry L. Roediger III,Mark A. McDaniel', 2, 14),
(27, 'edJiDwAAQBAJ', 'O JEITO HARVARD DE SER FELIZ', 'http://books.google.com/books/publisher/content?id=edJiDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE71hn8PRWxMYZnwrjVO8Mu9nnEScTg6x4aAMlPhlV19Bmh29YnntfGdIwgW5AewnD19fjzGlAzkT14iUonRJ5UDD7Y9zxF49Uo-zOfXGww0u8ZAowM18fJ9UaBIZeUBSl49dwJah&source=gbs_api', 'Agencia Literaria Riff Ltda,Shawn Achor', 2, 14),
(28, 'fOnNpwAACAAJ', 'Das hier ist Wasser : Gedanken zu einer Lebensführung der Anteilnahme vorgebracht bei einem wichtige', 'http://books.google.com/books/content?id=fOnNpwAACAAJ&printsec=frontcover&img=1&zoom=1&imgtk=AFLRE718q_GoXWtqj7bln0YK6z_bMIrjF-bHKmuVrdWTHNa9HCYHO5kDhgWwM-f5v1dgfyw3mDCbbH8Ll-0r9V25-c0JCHGfHjxsMp5LGdUiJg_1zEJ5ktO-cS7p_k7mWEvM42UdLrPE&source=gbs_api', 'David Foster Wallace', 0, 14),
(29, 'okPGEAAAQBAJ', 'Hábitos Atômicos', 'http://books.google.com/books/publisher/content?id=okPGEAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE72doLE4ZeVy-_Zti-FwjsPpTgNDuoPUyWvrUNa7roJkJy8r64sQ4jhqRc4GIScjmMi5iKNF4XW_vyoDUn8shpZZCoCVGZToNAVc1Evo0UhCboBguChN0-rYI9RW1_1wHT1TO3s2&source=gbs_api', 'James Clear', 2, 14),
(30, 'ypRcZI8-EbEC', 'Inteligência emocional', 'http://books.google.com/books/content?id=ypRcZI8-EbEC&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE70oCz3ikBU1BGyC8FdMPoNgEDKbFdQK2Jl4tgCV8c7qbgNZvo3C5JJ4MttuqoHEoFt7WcKA7y0e4K68Ge5l25DqUdH2j_Uiz13v6t5MJIQ_qOtROG4tzrfKasRW2ik_svAlZRKp&source=gbs_api', 'Daniel Goleman', 0, 14),
(31, 'zd-yAAAAQBAJ', 'A coragem de ser imperfeito', 'http://books.google.com/books/publisher/content?id=zd-yAAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE71UO9RGDbORWUGlXROhPzQJ8CGsdUcqCZNh8ff3YBVS6msiu61Q_uNGaMHiDGh0bWISTQG8X5axjahcE87yeIR5Q1h93m0SeyNx5gUNgdTyn-OqxcMsiwGbqpM38x6b55XOm7LK&source=gbs_api', 'Brené Brown', 0, 14),
(32, 'k0j8IgiMKoMC', 'O poder do hábito', 'http://books.google.com/books/content?id=k0j8IgiMKoMC&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE71MCMxQ9J-pRQy8tcKnrT9QyUjIucX0W9ltZk1i8oismOOItXYMBCzTOV-woxgy3553AkS05qVQWwFszFLd8Cizadz7KPIi5BKVu7IMA7IBVczsMRGDkhlNJVv-WMofjLyo93oc&source=gbs_api', 'Charles Duhigg', 0, 14),
(33, 'XY2wDwAAQBAJ', 'HIPERFOCO', 'http://books.google.com/books/publisher/content?id=XY2wDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE70PIHmQtl0aSye9dR0JAo9t3rT5nH3IS0_mtpzHHSn5bhnDcLH_n2S3aBF0XcvOA2Gavkx-cQKWhmsdgVxJHPxmRJicYpxRwVnzJRhLZBslpOVxBev8FjXB3WbzODTiANqBj8QG&source=gbs_api', 'Petê Rissatti,Chris Bailey', 0, 14),
(34, '6wrWCQAAQBAJ', 'Você Sabe Estudar?', 'http://books.google.com/books/publisher/content?id=6wrWCQAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE714uh2--wOkVQ1uyjFDGhMd4lvhShZvdh1MHkmJ0CMysYzxZLeU8LzUAJx_YbLdw6gjUNIAWBZ_9anSiIewOJX1hlT_znwMToemhoelrC7JXBR0nwSZyMhdTWuKfXw0B-r4o_Mi&source=gbs_api', 'Claudio de Moura Castro', 0, 14),
(35, 'd3FloqhQHgQC', 'Rápido e devagar', 'http://books.google.com/books/content?id=d3FloqhQHgQC&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE71nwu65Rhh0t15JiE4ZImrg7qLPclbl3nSrsMqn-n0n7gQvEodPOuYVTouCuwPQMnqwqzE-4bQ-Bn673N-mWn44jWmr1o-xwGim21nZPvXD2jv5HDdYZoHOBhQceVIIlQAR2v4r&source=gbs_api', 'Daniel Kahneman', 0, 14),
(36, 'MziFEAAAQBAJ', 'Felicidade', 'http://books.google.com/books/publisher/content?id=MziFEAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE70Cm4Fu9ewFtdD-XpsjUCIE7VoFyX9keusWcNpTIGmBlTGfjGl1R9njkRw_-RhhPiGbCiUxLZOjORT4LsnmVhxmBEeeVAup4B56UnMmPhv4gLZPBvXmSQq10_XWGubZO9VGkhQo&source=gbs_api', 'Ana Beatriz Barbosa', 1, 14),
(37, 'teR7DwAAQBAJ', 'Xadrez Básico', 'http://books.google.com/books/publisher/content?id=teR7DwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE73jnqb8uM7w9-9i0PX2BMp00qjpbWpY8aNKJ9-8cfSc6od9kACTUOe0EBfYBQqZ3x4PJ6fixBrghrx4XUJW_I4xHEszW-Y76Sv8y7ycxiPxCEv-gtWlqrPxUMKwc1IPaDLGfF_h&source=gbs_api', 'Laércio De Azevedo', 1, 17),
(38, 'qR1yDwAAQBAJ', 'Como Conquistar Uma Namorada Agora', 'http://books.google.com/books/publisher/content?id=qR1yDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE70cE3b1Ro3ViKM4_sTkNoSJs-kzqrkM3VsByG69xUWWQx-3KRMIOGwaPYR4yZAhIOapqGeC-_mJNP6CrCa7UDEWWYTll7paWlO5TXEF3lbRs4lL-4yqkQqkXTjkeRttNqr6-9OS&source=gbs_api', 'Universal Wisdom', 0, 17),
(39, 'cp08zQEACAAJ', 'Como Ganhar Dinheiro Em Casa', 'http://books.google.com/books/content?id=cp08zQEACAAJ&printsec=frontcover&img=1&zoom=1&imgtk=AFLRE70MG4R3LWTjPWKz1O4-WCVVOLYjTBjQgDMKK4MmkYIEtP8uTCQDXUxXg99sb7QkVUE8h3UHVd8Ju7YwuAFTgOj8mX55FYheMV5h_mzjRynydlNBpjpMc0DJfhwO0GBt3XzLUrB6&source=gbs_api', 'Luis Paulo Soares', 0, 17),
(40, 'XdMBTKWSfeMC', 'Taras Bulba', 'http://books.google.com/books/content?id=XdMBTKWSfeMC&printsec=frontcover&img=1&zoom=1&edge=curl&imgtk=AFLRE722Hh1-juOzpj30tDc5N42lxdNhQoB3GDZweDFS_O6hrkSrKpOig4PgUqxifMhqzxCDyky916S6dbS42fydZp-hxpAVeK_GgyYuR9DS0FdGUJTIB53uKJgZOTN1GYDojeYbmDUQ&source=gbs_api', 'Nikolái V. Gogol', 2, 13),
(41, 'AKX0zwEACAAJ', 'Xadrez Para Leigos', 'https://via.placeholder.com/150', 'James Eade', 0, 13);

-- --------------------------------------------------------

--
-- Estrutura para tabela `quadro`
--

CREATE TABLE `quadro` (
  `id` int(4) NOT NULL,
  `habitos` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `quadro`
--

INSERT INTO `quadro` (`id`, `habitos`) VALUES
(1, '[{\"habitos\":\"07:00\",\"horarios\":[\"Acordar Cedo\",\"	\",\"\",\"\",\"\",\"\",\"\"]}]');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`) VALUES
(1, 'Kauan', '123'),
(2, 'Teste', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `weekplan`
--

CREATE TABLE `weekplan` (
  `id` int(4) NOT NULL,
  `data` varchar(25) NOT NULL,
  `domingo` varchar(100) DEFAULT NULL,
  `segunda` varchar(100) DEFAULT NULL,
  `terca` varchar(100) DEFAULT NULL,
  `quarta` varchar(100) DEFAULT NULL,
  `quinta` varchar(100) DEFAULT NULL,
  `sexta` varchar(100) DEFAULT NULL,
  `sabado` varchar(100) DEFAULT NULL,
  `id_wp` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `weekplan`
--

INSERT INTO `weekplan` (`id`, `data`, `domingo`, `segunda`, `terca`, `quarta`, `quinta`, `sexta`, `sabado`, `id_wp`) VALUES
(8, '16/07/2023 a 22/07/2023', 'História\r\nGeografia\r\nRedação', 'Biologia I\r\nMatemática I', 'Literatura', 'Filosofia\r\nSociologia', 'Português', 'Biologia II\r\nMatemática II', 'Química\r\nFísica\r\nSimulado', 1),
(9, '23/07/2023 a 05/08/2023', 'Redação sobre: \"Os impactos do racismo estrutural no Brasil contemporâneo\"', 'Redação sobre: \"Os impactos do racismo estrutural no Brasil contemporâneo\"', 'Redação sobre: \"Os impactos do racismo estrutural no Brasil contemporâneo\"', 'Redação sobre: \"Os impactos do racismo estrutural no Brasil contemporâneo\"', '', '', '', 14),
(10, '23/07/2023 a 05/08/2023', '', '', '', '', '', '', '', 14),
(11, '30/07/2023 a 05/08/2023', 'sDWADWA', 'DWADAW', 'WDAWDAW', 'DWADWA', 'DWADAW', 'DAWDAWD', 'WADWA', 13);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadastros`
--
ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `diarios`
--
ALTER TABLE `diarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `habitos`
--
ALTER TABLE `habitos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `hab_total`
--
ALTER TABLE `hab_total`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `new_plan`
--
ALTER TABLE `new_plan`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `planejamentos`
--
ALTER TABLE `planejamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `prateleira`
--
ALTER TABLE `prateleira`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `quadro`
--
ALTER TABLE `quadro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `weekplan`
--
ALTER TABLE `weekplan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `cadastros`
--
ALTER TABLE `cadastros`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `diarios`
--
ALTER TABLE `diarios`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `habitos`
--
ALTER TABLE `habitos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `hab_total`
--
ALTER TABLE `hab_total`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de tabela `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `metas`
--
ALTER TABLE `metas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de tabela `new_plan`
--
ALTER TABLE `new_plan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `planejamentos`
--
ALTER TABLE `planejamentos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de tabela `prateleira`
--
ALTER TABLE `prateleira`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `quadro`
--
ALTER TABLE `quadro`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `weekplan`
--
ALTER TABLE `weekplan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
