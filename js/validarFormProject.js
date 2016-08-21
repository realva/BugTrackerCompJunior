/*Comp Júnior/Grupo 2*/
/*Projeto a ser realizado para o PS 2016.1/Etapa 3*/
$(function(){

            // validacao de campos
            $('#projectform').bootstrapValidator({
                
                message: 'Este valor não é válido',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    nameProject: {            
                        validators: {
                            notEmpty: {
                                message: 'O campo Nome do Projeto é obrigatório'
                            }
                        }
                    },
                    platform: {
                        validators: {
                            notEmpty: {
                                message: 'Por favor escolha alguma plataforma para o projeto.'
                            }
                        }
                    },
                    tester: {
                        validators: {
                            notEmpty: {
                                message: 'Por favor escolha o tester desse projeto.'
                            }
                        }
                    },
                    mensagemProjeto: {
                        validators: {
                            notEmpty: {
                                message: 'O campo Descrição do Projeto é obrigatório'
                            }
                        }
                    }         
                }
            });                          
        });