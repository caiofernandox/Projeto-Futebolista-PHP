CREATE DATABASE Futebolista;

USE Futebolista;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR( 50 ) NOT NULL ,
  `usuario` VARCHAR( 25 ) NOT NULL ,
  `senha` VARCHAR( 40 ) NOT NULL ,
  `email` VARCHAR( 100 ) NOT NULL ,
  `nivel` INT(1) UNSIGNED NOT NULL DEFAULT '1',
  `ativo` BOOL NOT NULL DEFAULT '1',
  `cadastro` DATETIME NOT NULL , 
  `dataNasc` INT(8),
  `cidade` VARCHAR(20),
  `UF` CHAR(2),
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `nivel` (`nivel`)
) ENGINE=MyISAM ;

CREATE TABLE Jogos (
  `idJogo` INT PRIMARY KEY AUTO_INCREMENT,
  `jogo` VARCHAR(30),
  `placar` VARCHAR(5)
);

CREATE TABLE IF NOT EXISTS `Noticias` (
  `codigo` int(10) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `nome_imagem` varchar(25) NOT NULL,
  `tamanho_imagem` varchar(25) NOT NULL,
  `tipo_imagem` varchar(25) NOT NULL,
  `imagem` longblob NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
 