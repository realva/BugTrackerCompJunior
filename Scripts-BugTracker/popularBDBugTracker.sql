
SET FOREIGN_KEY_CHECKS = 0; 
truncate projeto;
truncate solucao;
truncate erro;
SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO projeto (idProjeto, nome, plataforma, equipe, descricao) VALUES ('1', 'BugTracker', 'WebSite', 'Arlen Mateus Mendes', 'PS2016');
INSERT INTO projeto (idProjeto, nome, plataforma, equipe, descricao) VALUES ('2', 'Comp Android', 'Android', 'Lucas Lopes Garcia', 'PS2016'); 
INSERT INTO projeto (idProjeto, nome, plataforma, equipe, descricao) VALUES ('3', 'Fórum de Química', 'WebSite', 'Lucas de Paula', 'PS2016');
INSERT INTO projeto (idProjeto, nome, plataforma, equipe, descricao) VALUES ('4', 'Fórum de Química', 'Android', 'Lucas de Paula', 'PS2016'); 
INSERT INTO projeto (idProjeto, nome, plataforma, equipe, descricao) VALUES ('5', 'Ponto Eletrônico Comp', 'Android', 'Matheus Nogueira', 'PS2016');


INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('1', 'NomeDoErro1', 'Erro de compilcação', 'PS2016', '1');
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('2', 'NomeDoErro2', 'Interface', 'PS2016', '1'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('3', 'NomeDoErro3', 'Erro de compilcação', 'PS2016','3'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('4', 'NomeDoErro4', 'Erro de lógica', 'PS2016', '1'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('5', 'NomeDoErro5', 'Interface', 'PS2016', '2'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('6', 'NomeDoErro6', 'Erro de execução', 'PS2016', '1'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('7', 'NomeDoErro7', 'Erro de lógica', 'PS2016', '1'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('8', 'NomeDoErro8', 'Interface', 'PS2016', '1'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('9', 'NomeDoErro9', 'Erro de compilcação', 'PS2016', '2'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('10', 'NomeDoErro10', 'Erro de compilcação', 'PS2016', '3'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('11', 'NomeDoErro11', 'Interface', 'PS2016', '3'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('12', 'NomeDoErro12', 'Erro de lógica', 'PS2016', '2'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('13', 'NomeDoErro13', 'Erro de lógica', 'PS2016', '1'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('14', 'NomeDoErro14', 'Erro de lógica', 'PS2016',  '3'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('15', 'NomeDoErro15', 'Interface', 'PS2016', '2'); 
INSERT INTO erro (idErro, nome, tipo, descricao, projeto_idProjeto) VALUES ('16', 'NomeDoErro16', 'Erro de execução', 'PS2016', '2');

INSERT INTO solucao (idSolucao, nome, descricao, erro_idError) VALUES ('1', 'NomeSolucao1', 'Solucao', '1');
INSERT INTO solucao (idSolucao, nome, descricao, erro_idError) VALUES ('2', 'NomeSolucao2', 'Solucao', '4');
INSERT INTO solucao (idSolucao, nome, descricao, erro_idError) VALUES ('3', 'NomeSolucao3', 'Solucao', '3');
INSERT INTO solucao (idSolucao, nome, descricao, erro_idError) VALUES ('4', 'NomeSolucao4', 'Solucao', '10');
INSERT INTO solucao (idSolucao, nome, descricao, erro_idError) VALUES ('5', 'NomeSolucao5', 'Solucao', '6');
INSERT INTO solucao (idSolucao, nome, descricao, erro_idError) VALUES ('6', 'NomeSolucao6', 'Solucao', '14');
INSERT INTO solucao (idSolucao, nome, descricao, erro_idError) VALUES ('7', 'NomeSolucao7', 'Solucao', '5');


select * from erro;  

