
SET FOREIGN_KEY_CHECKS = 0; 
truncate projeto;
truncate solucao;
truncate erro;
SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO projeto (idProjeto, nome, plataforma, tester, descricao) VALUES ('1', 'BugTracker', 'WebSite', 'Arlen Mateus Mendes', 'PS2016');
INSERT INTO projeto (idProjeto, nome, plataforma, tester, descricao) VALUES ('2', 'Comp Android', 'Android', 'Lucas Lopes Garcia', 'PS2016'); 
INSERT INTO projeto (idProjeto, nome, plataforma, tester, descricao) VALUES ('3', 'Fórum de Química', 'WebSite', 'Lucas de Paula', 'PS2016'); 
INSERT INTO projeto (idProjeto, nome, plataforma, tester, descricao) VALUES ('4', 'Ponto Eletrônico Comp', 'Android', 'Matheus Nogueira', 'PS2016');
INSERT INTO projeto (idProjeto, nome, plataforma, tester, descricao) VALUES ('5', 'Comp Web', 'WebSite', 'Lucas Lopes Garcia', 'PS2016');


INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('1', 'NomeDoErro1', 'Erro de compilação', 'PS2016', '1');
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('2', 'NomeDoErro2', 'Interface', 'PS2016', '1'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('3', 'NomeDoErro3', 'Erro de compilação', 'PS2016','3'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('4', 'NomeDoErro4', 'Erro de lógica', 'PS2016', '1'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('5', 'NomeDoErro5', 'Interface', 'PS2016', '2'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('6', 'NomeDoErro6', 'Erro de execução', 'PS2016', '1'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('7', 'NomeDoErro7', 'Erro de lógica', 'PS2016', '1'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('8', 'NomeDoErro8', 'Interface', 'PS2016', '1'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('9', 'NomeDoErro9', 'Erro de compilação', 'PS2016', '2'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('10', 'NomeDoErro10', 'Erro de compilação', 'PS2016', '3'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('11', 'NomeDoErro11', 'Interface', 'PS2016', '3'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('12', 'NomeDoErro12', 'Erro de lógica', 'PS2016', '2'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('13', 'NomeDoErro13', 'Erro de lógica', 'PS2016', '1'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('14', 'NomeDoErro14', 'Erro de lógica', 'PS2016',  '3'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('15', 'NomeDoErro15', 'Interface', 'PS2016', '2'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('16', 'NomeDoErro16', 'Erro de execução', 'PS2016', '2');

INSERT INTO solucao (idSolucao, nome, descricao, desenvolvedor, erro_idError) VALUES ('1', 'NomeSolucao1', 'Solucao', "NomeDesenvolvedor1", '1');
INSERT INTO solucao (idSolucao, nome, descricao, desenvolvedor, erro_idError) VALUES ('2', 'NomeSolucao2', 'Solucao', "NomeDesenvolvedor2", '4');
INSERT INTO solucao (idSolucao, nome, descricao, desenvolvedor, erro_idError) VALUES ('3', 'NomeSolucao3', 'Solucao', "NomeDesenvolvedor3", '3');
INSERT INTO solucao (idSolucao, nome, descricao, desenvolvedor, erro_idError) VALUES ('4', 'NomeSolucao4', 'Solucao', "NomeDesenvolvedor4", '10');
INSERT INTO solucao (idSolucao, nome, descricao, desenvolvedor, erro_idError) VALUES ('5', 'NomeSolucao5', 'Solucao', "NomeDesenvolvedor5", '6');
INSERT INTO solucao (idSolucao, nome, descricao, desenvolvedor, erro_idError) VALUES ('6', 'NomeSolucao6', 'Solucao', "NomeDesenvolvedor6", '14');
INSERT INTO solucao (idSolucao, nome, descricao, desenvolvedor, erro_idError) VALUES ('7', 'NomeSolucao7', 'Solucao', "NomeDesenvolvedor7", '5');  

