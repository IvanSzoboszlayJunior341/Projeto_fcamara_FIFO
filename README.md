# DESAFIO FCAMARA - FIFO
**Hackathon Programa de Formação a Distância - 2ª edição 2020**

## Problemática:
Sempre é bom relaxar entre uma tarefa e outra. Para isso, dentro da **FC Santos** temos como se fosse uma área de recreação, onde nossos consultores podem relaxar enquanto jogam Fifa no Playstation ou uma partida de sinuca. Isso ajuda a descansar a mente, além de criar uma relação com os colegas **#SangueLaranja**🧡.
Mas por algo mais descontraído, não é muito organizado. Às vezes demora para alguém jogar, já que temos em torno de mais de 90 colaboradores só da **FC Santos**. Isso acaba acarretando em uma fila, feita apenas no boca a boca, deixando de fora algumas pessoas que não conseguiram jogar no dia.

## Qual a solução que queremos?
Para melhorar a experiência de jogo e maior convivência com os consultores, tivemos a ideia para ser desenvolvido o **FIFO**, uma fila para organizar as jogatinas dentro do escritório, seja de sinuca, Fifa ou de qualquer outro jogo que temos para Playstation, e até mesmo board games.

## Links:
- Protótipo WEB
- Protótipo Mobile

## Biblioteca:

Instalação com [Composer](https://getcomposer.org/), última versão.

```bash
composer require dompdf/dompdf
```

## Banco de Dados:
Instalar um servidor apache no computador, por exemplo: Xampp ou Wampserver. Caso o servidor tenha alguma senha, alterar as seguintes páginas dentro do codigo:

- _api\Classes\conexao.php
- calendario\conexao.php
- calendario\relatorio.php

-- -----------------------------------------------------
create database banco_fcamara;
use banco_fcamara;
-- -----------------------------------------------------
-- Table Usuario
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Usuario (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(45) NOT NULL,
  `Senha` VARCHAR(255) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Foto` VARCHAR(255) NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table Equipamento
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Equipamento (
  `idequipamento` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(45) NOT NULL,
  `Local` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idequipamento`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table Fila
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Fila (
  `idFila` INT NOT NULL PRIMARY KEY,
  `Hora` TIME NOT NULL,
  `Jogo` VARCHAR(45) NULL,
  `Usuario_idUsuario` INT NOT NULL,
  `Equipamento_idequipamento` INT NOT NULL,
  CONSTRAINT `fk_Fila_1_Usuario`FOREIGN KEY (`Usuario_idUsuario`) REFERENCES Usuario (`idUsuario`),
  CONSTRAINT `fk_Fila_Equipamento1` FOREIGN KEY (`Equipamento_idequipamento`) REFERENCES Equipamento (`idequipamento`))
 ENGINE = InnoDB;
  
-- -----------------------------------------------------
-- Table events
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(220) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`))
  
  -- -----------------------------------------------------

## Colaboradores:

**Devs:**
- [Gabriel Kenji Utiyama](https://github.com/Gabriel-Kenji "Gabriel Kenji Utiyama")
- [Ivan Szoboszlay](https://github.com/IvanSzoboszlayJunior341 "Ivan Szoboszlay")
- [Lucas Vinicius Rodrigues](https://github.com/lucasvrod "Lucas Vinicius Rodrigues")
- [Ranieri Soares](https://github.com/Ranieri-Soares "Ranieri Soares")

**UX:**
- [Bárbara Silva e Souza](https://www.behance.net/bassouza "Bárbara Silva e Souza")
