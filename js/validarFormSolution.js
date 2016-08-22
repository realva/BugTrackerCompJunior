/*Comp Júnior/Grupo 2*/
/*Projeto a ser realizado para o PS 2016.1/Etapa 3*/
$(function(){

            // validacao de campos
            $('#solutionform').bootstrapValidator({
                
                message: 'Este valor não é válido',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    solucao: {            
                        validators: {
                            notEmpty: {
                                message: 'A descrição da solução do erro é obrigatória'
                            }
                        }
                    },
                    dev: {
                        validators: {
                            notEmpty: {
                                message: 'Por favor escolha algum dos desenvolvedores erro.'
                            }
                        }
                    }         
                }
            });                          
        });