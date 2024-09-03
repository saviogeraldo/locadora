<?php
const SERVIDOR = "localhost";
const USUARIO = "root";
const SENHA = "";
const BANCO = "dblocadora2";

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA) or die("Erro ao conectar ao servidor. " . mysqli_connect_error());


$sql = "CREATE DATABASE `dblocadora2` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */
";
mysqli_query($conexao, $sql);

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die("Erro ao conectar ao servidor. " . mysqli_connect_error());

$sql = "CREATE TABLE `tbcategorias` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCategoria` varchar(100) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
";
mysqli_query($conexao, $sql);

$sql = "INSERT INTO `tbcategorias` (`idCategoria`, `nomeCategoria`) VALUES
(169, 'Aventura'),
(171, 'Romance'),
(173, 'Suspence'),
(175, 'Comédia'),
(176, 'Ação')";
mysqli_query($conexao, $sql);



$sql = "CREATE TABLE `tbclientes` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCliente` varchar(45) NOT NULL,
  `telefoneCliente` varchar(45) DEFAULT NULL,
  `emailCliente` varchar(45) DEFAULT NULL,
  `statusCliente` int(11) DEFAULT 0,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=225 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
mysqli_query($conexao, $sql);

$sql = "INSERT INTO `tbclientes` (`idCliente`, `nomeCliente`, `telefoneCliente`, `emailCliente`, `statusCliente`) VALUES
(6, 'Amanda', '19987402874', 'amanda.123@gmail.com', 0),
(122, 'Marcos Daniel', '19938847634', 'marcosdcaguei@gmail.com', 1),
(161, 'Leonardo Tavares', '19997483987', 'leo246935+34@sougay.com', 1),
(207, 'Jonas Manoel', '19982398452', 'jonas3232@hotmail.com', 1),
(210, 'Pedro José', '1999999995', 'pedroo23@gmail.com', 1),
(214, 'Julho Paulo', '19997699999', 'jp1332@email.com', 0),
(216, 'Ludmila e Mariah', '1999999', 'allanzingrau.com', 0),
(220, 'Leandro Schiavo ', '(19)99232-6165', 'leandro.schiavo@gmail.com', 0),
(221, 'marcos de melo', '12345678', 'marcd@gmail.com', 0)";
mysqli_query($conexao, $sql);


$sql = "CREATE TABLE `tbfilmes` (
  `idFilme` int(11) NOT NULL AUTO_INCREMENT,
  `tituloFilme` varchar(100) NOT NULL,
  `duracaoFilme` varchar(10) NOT NULL,
  `valorLocacao` decimal(10,2) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `statusFilme` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idFilme`)
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
mysqli_query($conexao, $sql);

$sql = "INSERT INTO `tbfilmes` (`idFilme`, `tituloFilme`, `duracaoFilme`, `valorLocacao`, `idCategoria`, `statusFilme`) VALUES
(202, 'Rock II', '2', '2.00', 173, 2),
(203, 'Crepúsculo', '2hrs', '6.00', 171, 0),
(204, 'Velozes e Furiosos', '1:30:00', '10.00', 176, 1),
(205, 'IT a coisa', '1:25:00', '0.00', 177, 0),
(211, 'Gran Turismo', '1:00:00', '40.00', 176, 0),
(214, 'Se beber não case', '1:10:00', '15.00', 175, 1),
(216, 'Indo ali', 'We live', '9.00', 169, 0),
(218, 'Caça fantasmas', '2', '4.00', 173, 0),
(219, 'Rambo 1', '2', '4.00', 173, 0),
(220, 'Rambo 2', '3', '5.00', 173, 0),
(221, 'Rambo 3', '2', '3.00', 173, 0),
(222, 'Rambo 4', '3', '5.00', 173, 0),
(223, 'rambo 5', '2', '2.00', 173, 0),
(224, 'Or Mencenarios 1', '3', '3.00', 173, 1),
(225, 'Or Mencenarios 2', '3', '3.00', 173, 0),
(226, 'Or Mencenarios 3', '2', '2.00', 173, 0),
(227, 'Or Mencenarios 4', '3', '3.00', 173, 0),
(228, 'Flash Dance', '2', '2.00', 173, 0),
(231, 'Alien 1', '3', '3.00', 173, 0),
(232, 'alien 2', '2', '4.00', 173, 1),
(233, 'Alien 4', '2', '2.00', 173, 0),
(234, 'Exterminador', '2', '4.00', 173, 0),
(235, 'Exterminador 2', '1', '3.00', 173, 1),
(236, 'Perdidos no espaço', '1', '2.00', 173, 2),
(237, 'A casa do lago', '2', '3.00', 173, 2),
(238, 'Homem de Ferro', '2', '2.00', 173, 1),
(240, 'sdfsd', '3', '3.00', 176, 0),
(242, 'sdfsd', '3', '3.00', 176, 0),
(244, 'ZX', '2', '2.00', 175, 0),
(245, 'ZX', '2', '2.00', 175, 0),
(246, 'ZX', '2', '2.00', 175, 0),
(247, 'ZX', '2', '2.00', 175, 0),
(248, 'ZX', '2', '2.00', 175, 0),
(249, 'fc', '2', '2.00', 175, 0),
(250, 'fc', '2', '2.00', 175, 0)";
mysqli_query($conexao, $sql);




$sql = "CREATE TABLE `tblocacao` (
  `idLocacao` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) NOT NULL,
  `dataLocacao` date NOT NULL,
  `statusLocacao` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idLocacao`),
  KEY `idCliente_Locacao` (`idCliente`),
  CONSTRAINT `idCliente_Locacao` FOREIGN KEY (`idCliente`) REFERENCES `tbclientes` (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=290 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
mysqli_query($conexao, $sql);

$sql = "INSERT INTO `tblocacao` (`idLocacao`, `idCliente`, `dataLocacao`, `statusLocacao`) VALUES
(287, 220, '2024-08-27', 0),
(288, 214, '2024-08-27', 0),
(289, 6, '2024-08-27', 0)";
mysqli_query($conexao, $sql);


$sql = "CREATE TABLE `tbitenslocados` (
    `idLocacao` int(11) NOT NULL,
    `idFilme` int(11) NOT NULL,
    `dataDeEntrega` date NOT NULL,
    `statusItemLocado` int(11) NOT NULL DEFAULT 0,
    PRIMARY KEY (`idLocacao`,`idFilme`),
    KEY `idFilme_locacao` (`idFilme`),
    CONSTRAINT `fk_id_locacao` FOREIGN KEY (`idLocacao`) REFERENCES `tblocacao` (`idLocacao`),
    CONSTRAINT `idFilme_locacao` FOREIGN KEY (`idFilme`) REFERENCES `tbfilmes` (`idFilme`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
mysqli_query($conexao, $sql);

$sql = "CREATE TABLE `tbusuarios` (
  `loginUser` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senhaUser` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nomeUser` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`loginUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
";
mysqli_query($conexao, $sql);

$sql = "INSERT INTO `tbusuarios` (`loginUser`, `senhaUser`, `nomeUser`) VALUES
('marcos', '88d4266fd4e6338d13b845fcf289579d209c897823b9217da3e161936f031589', 'Marcos de Melo')
";
mysqli_query($conexao, $sql);

echo "Backup do banco de dados criado com sucesso!";