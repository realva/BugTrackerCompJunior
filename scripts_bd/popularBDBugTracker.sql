USE bdbugtracker;
SET FOREIGN_KEY_CHECKS = 0; 
truncate projeto;
truncate solucao;
truncate erro;
SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO projeto (nome, plataforma, tester, descricao) VALUES ('BugTracker', 'WebSite', 'Lucas Weber', 'PS2016');
INSERT INTO projeto (nome, plataforma, tester, descricao) VALUES ('Comp Android', 'Android', 'Joao Paulo Costa', 'PS2016'); 
INSERT INTO projeto (nome, plataforma, tester, descricao) VALUES ('Fórum de Química', 'WebSite', 'Joao Paulo Costa', 'PS2016'); 
INSERT INTO projeto (nome, plataforma, tester, descricao) VALUES ('Ponto Eletrônico Comp', 'Android', 'Matheus Barros', 'PS2016');
INSERT INTO projeto (nome, plataforma, tester, descricao) VALUES ('Comp Web', 'WebSite', 'Matheus Barros', 'PS2016');


INSERT INTO erro (nome, tipo, status, descricao, projeto_idProjeto) VALUES ('NomeDoErro1', 'Erro de compilação', 'Corrigido', 'PS2016', '1');
INSERT INTO erro (nome, tipo, status, descricao, projeto_idProjeto) VALUES ('NomeDoErro2', 'Interface', 'Pendente', 'PS2016', '1'); 
INSERT INTO erro (nome, tipo, status, descricao, projeto_idProjeto) VALUES ('NomeDoErro3', 'Erro de compilação', 'Corrigido', 'PS2016','3'); 
INSERT INTO erro (nome, tipo, status, descricao, projeto_idProjeto) VALUES ('NomeDoErro4', 'Erro de lógica', 'Corrigido', 'PS2016', '1'); 
INSERT INTO erro (nome, tipo, status, descricao, projeto_idProjeto) VALUES ('NomeDoErro5', 'Interface', 'Corrigido', 'PS2016', '2'); 
INSERT INTO erro (nome, tipo, status, descricao, projeto_idProjeto) VALUES ('NomeDoErro6', 'Erro de execução', 'Corrigido', 'PS2016', '1'); 
INSERT INTO erro (nome, tipo, status, descricao, projeto_idProjeto) VALUES ('NomeDoErro7', 'Erro de lógica', 'Pendente', 'PS2016', '1'); 
INSERT INTO erro (nome, tipo, status, descricao, projeto_idProjeto) VALUES ('NomeDoErro8', 'Interface', 'Pendente', 'PS2016', '1'); 
INSERT INTO erro (nome, tipo, status, descricao, projeto_idProjeto) VALUES ('NomeDoErro9', 'Erro de compilação', 'Pendente', 'PS2016', '2'); 
INSERT INTO erro (nome, tipo, status, descricao, projeto_idProjeto) VALUES ('NomeDoErro10', 'Erro de compilação', 'Corrigido', 'PS2016', '3'); 
INSERT INTO erro (nome, tipo, status, descricao, projeto_idProjeto) VALUES ('NomeDoErro11', 'Interface', 'Pendente', 'PS2016', '3'); 
INSERT INTO erro (nome, tipo, status, descricao, projeto_idProjeto) VALUES ('NomeDoErro12', 'Erro de lógica', 'Pendente', 'PS2016', '2'); 
INSERT INTO erro (nome, tipo, status, descricao, projeto_idProjeto) VALUES ('NomeDoErro13', 'Erro de lógica', 'Pendente', 'PS2016', '1'); 
INSERT INTO erro (nome, tipo, status, descricao, projeto_idProjeto) VALUES ('NomeDoErro14', 'Erro de lógica', 'Corrigido', 'PS2016',  '3'); 
INSERT INTO erro (nome, tipo, status, descricao, projeto_idProjeto) VALUES ('NomeDoErro15', 'Interface', 'Pendente', 'PS2016', '2'); 
INSERT INTO erro (nome, tipo, status, descricao, projeto_idProjeto) VALUES ('NomeDoErro16', 'Erro de execução', 'Pendente', 'PS2016', '2');

INSERT INTO solucao (nome, descricao, desenvolvedor, erro_idError) VALUES ('NomeSolucao1', 'Solucao do erro 1', "NomeDesenvolvedor1", '1');
INSERT INTO solucao (nome, descricao, desenvolvedor, erro_idError) VALUES ('NomeSolucao2', 'Solucao do erro 4', "NomeDesenvolvedor2", '4');
INSERT INTO solucao (nome, descricao, desenvolvedor, erro_idError) VALUES ('NomeSolucao3', 'Solucao do erro 3', "NomeDesenvolvedor3", '3');
INSERT INTO solucao (nome, descricao, desenvolvedor, erro_idError) VALUES ('NomeSolucao4', 'Solucao do erro 10', "NomeDesenvolvedor4", '10');
INSERT INTO solucao (nome, descricao, desenvolvedor, erro_idError) VALUES ('NomeSolucao5', 'Solucao do erro 6', "NomeDesenvolvedor5", '6');
INSERT INTO solucao (nome, descricao, desenvolvedor, erro_idError) VALUES ('NomeSolucao6', 'Solucao do erro 14', "NomeDesenvolvedor6", '14');
INSERT INTO solucao (nome, descricao, desenvolvedor, erro_idError) VALUES ('NomeSolucao7', 'Solucao do erro 5', "NomeDesenvolvedor7", '5');  

