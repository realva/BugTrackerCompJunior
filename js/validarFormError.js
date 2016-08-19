/*Comp Júnior/Grupo 2*/
/*Projeto a ser realizado para o PS 2016.1/Etapa 3*/
$(function(){

            // validacao de campos
            $('#errorform').bootstrapValidator({
                
                message: 'Este valor não é válido',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    nameError: {            
                        validators: {
                            notEmpty: {
                                message: 'O campo Nome do Erro é obrigatório'
                            }
                        }
                    },
                    typeError: {
                        validators: {
                            notEmpty: {
                                message: 'Por favor escolha algum tipo para o erro.'
                            }
                        }
                    },
                    errorProject: {
                        validators: {
                            notEmpty: {
                                message: 'Por favor escolha o Projeto no qual esse erro está vinculado.'
                            }
                        }
                    },
                    mensagemErro: {
                        validators: {
                            notEmpty: {
                                message: 'O campo Descrição do Erro é obrigatório'
                            }
                        }
                    }         
                }
            });                          
        });