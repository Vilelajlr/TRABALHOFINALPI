document.addEventListener('DOMContentLoaded', function () {

        // validação inputs

        const form = document.getElementById('form');
        const campos = document.querySelectorAll('.required');
        const spans = document.querySelectorAll('.span-required');
        const spansColor = document.querySelectorAll('.spanColor');
        const emailRegex = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i;
        const telRegex = /^\(?(?:\d{2})\)?[-. ]?(9\d{4}[-. ]?\d{4})$/;
        ;
        

        campos[0].addEventListener('input', PnameValidate);
        campos[1].addEventListener('input', UnameValidate);
        campos[2].addEventListener('input', emailValidate);
        
        campos[3].addEventListener('input', function() {
            let value = campos[3].value;
            value = value.replace(/\D/g, "");
            value = value.replace(/^(\d{2})(\d)/g,"($1) $2");
            value = value.replace(/(\d)(\d{4})$/,"$1-$2");
            campos[3].value = value;
            telValidate();
        });

        function setError(index){
            campos[index].style.border = '1px solid red';
            campos[index].style.backgroundColor = 'rgba(255, 0, 0, 0.1)';
            spansColor[index].style.color = 'red';
            spans[index].style.display = 'block';
            console.log(campos[index].value);
            console.log(spans[index].value);
        }

        

        function setValidate(index){
            campos[index].style.border = '1px solid green';
            campos[index].style.backgroundColor = 'rgba(0, 255, 0, 0.1)';
            spansColor[index].style.color = 'green';
            spans[index].style.display = 'none';
            console.log(campos[index].value);
        
        }

        

        function PnameValidate(){
            if(campos[0].value.length < 3){
                setError(0);
            }else{
                setValidate(0);
            }   
        }


        function UnameValidate(){
            if(campos[1].value.length < 3){
                setError(1);
            }else{
                setValidate(1);
            }   
        }


        function emailValidate(){
            if(!emailRegex.test(campos[2].value)){
                setError(2);    
            }else{
                setValidate(2);
            }   
        }


        function telValidate(){
            if(!telRegex.test(campos[3].value)){
                setError(3);
            }else{
                setValidate(3);
            }   
        }


        // validação entre em contato

        $('.bo').click(function(){
            var opcaoSelecionada = $(this).val();
            var span = $('#ctxMsg');

            if(opcaoSelecionada == 'duvida'){
                span.text('Relate suas dúvidas aqui...');
            }else if(opcaoSelecionada == 'sugestao'){
                span.text('Relate suas sugestões aqui...');
            }else if(opcaoSelecionada == 'relata'){
                span.text('Relate seu problema aqui...');
            }


        });


        const btnValidar = document.getElementById('fancy');



});
