/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

create database matrix;
use matrix;

create table disciplina(
id int not null primary key auto_increment,
sigla varchar(100) not null,
nome varchar(100) not null
);

create table comentario(
id INT NOT NULL AUTO_INCREMENT primary key,
descricao VARCHAR(255) NULL,
data DATETIME NULL
);

INSERT INTO `matrix`.`comentario` (`descricao`, `data`) VALUES ('Não sei', '2018-03-03');
INSERT INTO `matrix`.`comentario` (`descricao`, `data`) VALUES ('Sei', '2018-03-28');
INSERT INTO `matrix`.`comentario` (`descricao`, `data`) VALUES ('Sei não', '2019-05-12');


CREATE TABLE painel (
  id int(11) NOT NULL AUTO_INCREMENT primary key,
  nome varchar(20) NOT NULL,
  ordem int(11) NOT NULL,
  url varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `painel` (`id`, `nome`, `ordem`, `url`) VALUES (1, 'Disciplina', 1, '?classe=Disciplina&acao=all'), (2, 'Comentario', 2, '?classe=Comentario&acao=all'), (3, 'Alunos', 3, '?classe=Alunos&acao=all'), (4, 'Professores', 4, '?classe=Professores&acao=all');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `painel`
--
ALTER TABLE `painel`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
