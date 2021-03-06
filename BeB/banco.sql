--
-- MySQL 5.6.17
-- Thu, 10 Sep 2015 16:58:29 +0000
--

CREATE TABLE `cds` (
   `id` int(11) not null auto_increment,
   `album` varchar(300),
   `banda` varchar(50),
   `estilo` varchar(50),
   `ano` int(4),
   `preco` float,
   `quantidade` int(4),
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=41;

INSERT INTO `cds` (`id`, `album`, `banda`, `estilo`, `ano`, `preco`, `quantidade`) VALUES 
('1', '	Sal Grosso	', '	Supercombo	', '	Alternativo	', '2011', '19.9', '5'),
('2', '	Supercombo	', '	Supercombo	', '	Alternativo	', '2010', '19.9', '5'),
('3', '	Festa?	', '	Supercombo	', '	Alternativo	', '2008', '19.9', '5'),
('4', '	Fortress	', '	Alter Bridge	', '	Hard Rock	', '2013', '29.9', '10'),
('5', '	AB III	', '	Alter Bridge	', '	Hard Rock	', '2010', '29.9', '10'),
('6', '	Blackbird	', '	Alter Bridge	', '	Hard Rock	', '2007', '29.9', '10'),
('7', '	One Day Remains	', '	Alter Bridge	', '	Hard Rock	', '2004', '29.9', '10'),
('8', '	AM	', '	Arctic Monkeys	', '	Alternativo	', '2013', '25.9', '10'),
('9', '	Suck It And See	', '	Arctic Monkeys	', '	Alternativo	', '2011', '25.9', '10'),
('10', '	Humburg	', '	Arctic Monkeys	', '	Alternativo	', '2009', '25.9', '10'),
('11', '	Favorite Worst Nightmare	', '	Arctic Monkeys	', '	Alternativo	', '2007', '25.9', '10'),
('12', '	Perfil	', '	Adriana Calcanhoto	', '	MPB	', '2003', '9.9', '5'),
('13', '	Banda do Mar	', '	Banda do Mar	', '	Alternativo	', '2014', '25.9', '15'),
('14', '	Sempiternal	', '	Bring Me The Horizon	', '	Post-Hardcore	', '2013', '29.9', '10'),
('15', '	A Praia	', '	C�cero	', '	MPB	', '2015', '0.01', '1'),
('16', '	S�bado	', '	C�cero	', '	MPB	', '2013', '0.01', '1'),
('17', '	Can��es de Apartamento	', '	C�cero	', '	MPB	', '2012', '0.01', '1'),
('18', '	The Hurry And The Harm	', '	City and Colour	', '	Folk	', '2013', '29.9', '5'),
('19', '	Little Hell	', '	City and Colour	', '	Folk	', '2011', '29.9', '5'),
('20', '	Sometimes	', '	City and Colour	', '	Folk	', '2005', '29.9', '5'),
('21', '	Kintsugi	', '	Death Cab For Cutie	', '	Indie	', '2015', '39.9', '10'),
('22', '	Narrow Stairs	', '	Death Cab For Cutie	', '	Indie	', '2008', '39.9', '10'),
('25', '	Whatever People Say I Am Thats What Im Not	', '	Arctic Monkeys	', '	Alternativo	', '2006', '25.9', '10'),
('26', '	Plans	', '	Death Cab For Cutie	', '	Indie	', '2005', '39.9', '10'),
('27', '	Something About Airplanes	', '	Death Cab For Cutie	', '	Indie	', '1998', '39.9', '10'),
('28', '	Little Joy	', '	Little Joy	', '	Alternativo	', '2008', '35.9', '5'),
('29', '	Bloco do Eu Sozinho	', '	Los Hermanos	', '	Rock Alternativo	', '2001', '29.9', '10'),
('30', '	Los Hermanos	', '	Los Hermanos	', '	Rock Alternativo	', '1999', '29.9', '10'),
('31', '	Ventura	', '	Los Hermanos	', '	Rock Alternativo	', '2003', '29.9', '10'),
('32', '	4	', '	Los Hermanos	', '	Rock Alternativo	', '2005', '29.9', '10'),
('33', '	The Hollow	', '	Memphis May Fire	', '	Post-Hardcore	', '2011', '29.9', '10'),
('34', '	Challenger	', '	Memphis May Fire	', '	Post-Hardcore	', '2012', '29.9', '10'),
('35', '	Unconditional	', '	Memphis May Fire	', '	Post-Hardcore	', '2014', '29.9', '10'),
('36', '	All We Know is Falling	', '	Paramore	', '	Rock	', '2005', '29.9', '10'),
('37', '	Riot!	', '	Paramore	', '	Rock	', '2007', '29.9', '10'),
('38', '	The Final Riot!	', '	Paramore	', '	Rock	', '2008', '29.9', '10'),
('39', '	Brand New Eyes	', '	Paramore	', '	Rock	', '2009', '29.9', '10'),
('40', '	Paramore	', '	Paramore	', '	Rock	', '2013', '29.9', '10');

CREATE TABLE `produtos` (
   `id` int(5) not null auto_increment,
   `titulo` varchar(300),
   `autor` varchar(100),
   `editora` varchar(100),
   `ano` int(4),
   `genero` varchar(50),
   `preco` float,
   `quantidade` int(5),
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=92;

INSERT INTO `produtos` (`id`, `titulo`, `autor`, `editora`, `ano`, `genero`, `preco`, `quantidade`) VALUES 
('1', 'Harry Potter e a Pedra Filosofal', 'J.K. Rowling', 'Rocco', '1997', 'Aventura', '27.9', '15'),
('2', 'Harry Potter e o C�mara Secreta ', 'J.K. Rowling', 'Rocco', '1998', 'Aventura', '27.9', '15'),
('3', 'Harry Potter e o Prisioneiro de Askaban', 'J.K. Rowling', 'Rocco', '1999', 'Aventura', '27.9', '15'),
('4', 'Harry Potter e o C�lice de Fogo', 'J.K. Rowling', 'Rocco', '2000', 'Aventura', '27.9', '15'),
('5', 'Harry Potter e a Ordem da F�nix', 'J.K. Rowling', 'Rocco', '2003', 'Aventura', '27.9', '15'),
('6', 'Harry Potter e o Enigma do Pr�ncipe ', 'J.K. Rowling', 'Rocco', '2005', 'Aventura', '27.9', '15'),
('7', 'Harry Potter e as Rel�quias da Morte', 'J.K. Rowling', 'Rocco', '2007', 'Aventura', '27.9', '15'),
('8', 'Millenium - Os Homens que N�o Amavam as Mulheres', 'Stieg Larsson', 'Companhia das Letras', '2005', 'Suspense', '39.9', '10'),
('9', 'Millenium - A Menina que Brincava com Fogo', 'Stieg Larsson', 'Companhia das Letras', '2006', 'Suspense', '39.9', '5'),
('10', 'Millenium - A Rainha do Castelo de Ar', 'Stieg Larsson', 'Companhia das Letras', '2007', 'Suspense', '39.9', '5'),
('11', 'O Senhor dos An�is - A Sociedade do Anel', 'J.R.R. Tolkien', 'LMF', '1954', 'Aventura', '27.9', '10'),
('12', 'O Senhor dos An�is - As Duas Torres', 'J.R.R. Tolkien', 'LMF', '1956', 'Aventura', '27.9', '10'),
('49', '	O Senhor dos An�is - O Retorno do Rei	', '	J.R.R. Tolkien	', '	LMF	', '1958', '	Aventura	', '27.9', '10'),
('50', '	Percy Jackson e Os Olimpianos - O Ladr�o de Raios	', '	Rick Riordan	', '	Intrinseca	', '2008', '	Aventura	', '27.9', '10'),
('51', '	Percy Jackson e Os Olimpianos - O Mar de Monstros	', '	Rick Riordan	', '	Intrinseca	', '2009', '	Aventura	', '27.9', '10'),
('52', '	Percy Jackson e Os Olimpianos - A Maldi��o do Tit�	', '	Rick Riordan	', '	Intrinseca	', '2010', '	Aventura	', '27.9', '10'),
('53', '	Percy Jackson e Os Olimpianos - A Batalha do Labirinto	', '	Rick Riordan	', '	Intrinseca	', '2011', '	Aventura	', '27.9', '10'),
('54', '	Percy Jackson e Os Olimpianos - O �ltimo Olimpiano	', '	Rick Riordan	', '	Intrinseca	', '2012', '	Aventura	', '27.9', '10'),
('55', '	 As Cr�nicas de N�rnia (Volume �nico)	', '	C. S. Lewis	', '	Martins Fontes	', '2009', '	Aventura	', '45.9', '15'),
('56', '	Rangers Ordem dos Arqueiros�1 - Ru�nas de Gorlan	', '	John Flanagan	', '	Fundamento	', '2009', '	Aventura	', '29.9', '20'),
('57', '	Rangers Ordem dos Arqueiros�2 - Ponte em Chamas 	', '	John Flanagan	', '	Fundamento	', '2009', '	Aventura	', '29.9', '20'),
('58', '	Rangers Ordem dos Arqueiros 3 - Terra do Gelo	', '	John Flanagan	', '	Fundamento	', '2009', '	Aventura	', '29.9', '20'),
('59', '	Rangers Ordem dos Arqueiros�4 - Folha de Carvalho	', '	John Flanagan	', '	Fundamento	', '2009', '	Aventura	', '29.9', '20'),
('60', '	Rangers Ordem dos Arqueiros�5 - Feiticeiros do Norte	', '	John Flanagan	', '	Fundamento	', '2009', '	Aventura	', '29.9', '20'),
('61', '	Rangers Ordem dos Arqueiros�6 - Cerco a Macindaw	', '	John Flanagan	', '	Fundamento	', '2009', '	Aventura	', '29.9', '20'),
('62', '	Rangers Ordem dos Arqueiros�7 - Resgate de Erak	', '	John Flanagan	', '	Fundamento	', '2009', '	Aventura	', '29.9', '20'),
('63', '	Rangers Ordem dos Arqueiros�8 - Reis de Clonmel	', '	John Flanagan	', '	Fundamento	', '2009', '	Aventura	', '29.9', '20'),
('64', '	Rangers Ordem dos Arqueiros�9 - Halt Em Perigo	', '	John Flanagan	', '	Fundamento	', '2009', '	Aventura	', '29.9', '20'),
('65', '	Rangers Ordem dos Arqueiros�10 - Imperador de Nihon-J�	', '	John Flanagan	', '	Fundamento	', '2009', '	Aventura	', '29.9', '20'),
('66', '	Rangers Ordem dos Arqueiros�11 - As Hist�rias Perdidas	', '	John Flanagan	', '	Fundamento	', '2009', '	Aventura	', '29.9', '20'),
('67', '	Rangers Ordem dos Arqueiros�12 - O Arqueiro do Rei	', '	John Flanagan	', '	Fundamento	', '2009', '	Aventura	', '29.9', '20'),
('68', 'Os Her�is do Olimpo - O Her�i Perdido	', 'Rick Riordan	', 'Intrinseca	', '2011', '	Aventura	', '27.9', '20'),
('69', 'Os Her�is do Olimpo - O Filho de Netuno	', 'Rick Riordan	', 'Intrinseca	', '2012', '	Aventura	', '27.9', '20'),
('70', 'Os Her�is do Olimpo - A Marca de Atena	', 'Rick Riordan	', 'Intrinseca	', '2013', 'Aventura	', '27.9', '20'),
('71', 'Os Her�is do Olimpo - A Casa de Hades 	', 'Rick Riordan	', 'Intrinseca	', '2013', 'Aventura	', '27.9', '20'),
('72', 'Os Her�is do Olimpo - O Sangue do Olimpo	', 'Rick Riordan	', 'Intrinseca	', '2014', 'Aventura	', '27.9', '20'),
('73', '	As Cr�nicas de Gelo e Fogo - Livro 1 - A Guerra dos Tronos	', '	George R.R. Martin	', '	LeYa	', '2010', '	Aventura	', '39.9', '40'),
('74', '	As Cr�nicas de Gelo e Fogo - Livro 1 - A Guerra dos Tronos	', '	George R.R. Martin	', '	LeYa	', '2011', '	Aventura	', '39.9', '40'),
('75', '	As Cr�nicas de Gelo e Fogo - Livro 1 - A Guerra dos Tronos	', '	George R.R. Martin	', '	LeYa	', '2011', '	Aventura	', '39.9', '40'),
('76', '	As Cr�nicas de Gelo e Fogo - Livro 4 - O Festim dos Corvos	', '	George R.R. Martin	', '	LeYa	', '2011', '	Aventura	', '39.9', '40'),
('77', '	As Cr�nicas de Gelo e Fogo - Livro 5 - A Dan�a dos Drag�es	', '	George R.R. Martin	', '	LeYa	', '2012', '	Aventura	', '39.9', '40'),
('78', '	Jogos Vorazes	', '	Suzanne Collins	', '	Rocco	', '2010', '	Aventura	', '32.9', '10'),
('79', '	Em Chamas	', '	Suzanne Collins	', '	Rocco	', '2011', '	Aventura	', '32.9', '10'),
('80', '	A Esperan�a	', '	Suzanne Collins	', '	Rocco	', '2012', '	Aventura	', '32.9', '10'),
('81', '	Amanh� 1 - Amanh�, Quando a Guerra Come�ou	', '	John Marsden	', '	Fundamento	', '2009', '	Aventura	', '25.9', '5'),
('82', '	Amanh� 2 - O Silencio da Noite	', '	John Marsden	', '	Fundamento	', '2009', '	Aventura	', '25.9', '5'),
('83', '	Amanh� 3 - No Terceiro Dia, A Geada	', '	John Marsden	', '	Fundamento	', '2009', '	Aventura	', '25.9', '5'),
('84', '	Amanh� 4 - Escurid�o, Seja Minha Amiga	', '	John Marsden	', '	Fundamento	', '2010', '	Aventura	', '25.9', '5'),
('85', '	Amanh� 5 - Vingan�a Em Chamas	', '	John Marsden	', '	Fundamento	', '2010', '	Aventura	', '25.9', '5'),
('86', '	Amanh� 6 - Amanh�, Quando a Guerra Come�ou	', '	John Marsden	', '	Fundamento	', '2010', '	Aventura	', '25.9', '5'),
('87', '	Amanh� 7 - O Outro Lado do Amanhecer 	', '	John Marsden	', '	Fundamento	', '2011', '	Aventura	', '25.9', '5'),
('88', '	A Saga Crep�sculo - Crep�sculo	', '	Stephenie Meyer	', '	Intrinseca	', '2008', '	Romance	', '31.5', '15'),
('89', '	A Saga Crep�sculo - Lua Nova	', '	Stephenie Meyer	', '	Intrinseca	', '2009', '	Romance	', '31.5', '15'),
('90', '	A Saga Crep�sculo - Eclipse	', '	Stephenie Meyer	', '	Intrinseca	', '2010', '	Romance	', '31.5', '15'),
('91', '	A Saga Crep�sculo - Amanhecer	', '	Stephenie Meyer	', '	Intrinseca	', '2011', '	Romance	', '31.5', '15');

CREATE TABLE `users` (
   `login` varchar(50),
   `password` varchar(10)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`login`, `password`) VALUES 
('admin', 'admin'),
('caiobarra', 'troller09');