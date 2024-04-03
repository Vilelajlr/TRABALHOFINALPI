document.addEventListener('DOMContentLoaded', function () {

    // validação inputs

    const form = document.getElementById('form');
    const campos = document.querySelectorAll('.required');
    const spans = document.querySelectorAll('.span-required');
    const spansColor = document.querySelectorAll('.spanColor');
    const emailRegex = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i;
    const telRegex = /^\(?(?:\d{2})\)?[-. ]?(9\d{4}[-. ]?\d{4})$/;
    var texto = document.getElementById('mensagem');
    

    campos[0].addEventListener('input', PnameValidate);
    campos[1].addEventListener('input', UnameValidate);
    campos[2].addEventListener('input', emailValidate);

    campos[3].addEventListener('input', function () {
        let value = campos[3].value;
        value = value.replace(/\D/g, "");
        value = value.replace(/^(\d{2})(\d)/g, "($1) $2");
        value = value.replace(/(\d)(\d{4})$/, "$1-$2");
        campos[3].value = value;
        telValidate();
    });

    function setError(index) {
        campos[index].style.border = '1px solid red';
        campos[index].style.backgroundColor = 'rgba(255, 0, 0, 0.1)';
        spansColor[index].style.color = 'red';
        spans[index].style.display = 'block';
    }

    function setValidate(index) {
        campos[index].style.border = '1px solid green';
        campos[index].style.backgroundColor = 'rgba(0, 255, 0, 0.1)';
        spansColor[index].style.color = 'green';
        spans[index].style.display = 'none';
    }

    function PnameValidate() {
        if (campos[0].value.length < 3) {
            setError(0);
        } else {
            setValidate(0);
        }
    }

    function UnameValidate() {
        if (campos[1].value.length < 3) {
            setError(1);
        } else {
            setValidate(1);
        }
    }

    function emailValidate() {
        if (!emailRegex.test(campos[2].value)) {
            setError(2);
        } else {
            setValidate(2);
        }
    }

    function telValidate() {
        if (!telRegex.test(campos[3].value)) {
            setError(3);
        } else {
            setValidate(3);
        }
    }

    // validação entre em contato

    $('.bo').click(function () {
        var opcaoSelecionada = $(this).val();
        var span = $('#ctxMsg');

        if (opcaoSelecionada == 'duvida') {
            span.text('Relate suas dúvidas aqui...');
        } else if (opcaoSelecionada == 'sugestao') {
            span.text('Relate suas sugestões aqui...');
        } else if (opcaoSelecionada == 'relata') {
            span.text('Relate seu problema aqui...');
        }
    });

    const btnValidar = document.getElementById('fancy');

    // modal

    const openModal = document.querySelector('.fancy');
    const editarModal = document.querySelector('.editar');
    const closeModal = document.querySelector('.fechar');
    const limparCamposBtn = document.querySelector('.limpar');
    const modal = document.querySelector('#modal');
    const fade = document.querySelector('#fade');

    const toggleModal = () => {
        const allFieldsValidated = Array.from(campos).every(field => field.style.backgroundColor === 'rgba(0, 255, 0, 0.1)');
        if (allFieldsValidated) {
            [modal, fade].forEach((el) => el.classList.toggle('hide'));
            if (!modal.classList.contains('hide')) {
                const nomeModal = campos[0].value;
                const sobrenomeModal = campos[1].value;
                const emailModal = campos[2].value;
                const numeroContato = campos[3].value;
                
                var mensagem = texto.value;
                document.getElementById('nomeCompleto').textContent = ("Nome:" + nomeModal + " " + sobrenomeModal);
                document.getElementById('email').textContent = ("Email: " + emailModal);
                document.getElementById('telefone').textContent = ("Número: " + numeroContato);
                duvidas.textContent = ("Mensagem: " + mensagem);
            }
        } else {
            
            campos.forEach((field, index) => {
                if (field.style.backgroundColor !== 'rgba(0, 255, 0, 0.1)') {
                    setError(index);
                }
            });
        }
    };

    const limparCampos = () => {
        campos.forEach((field) => {
            field.value = '';
            field.style.border = ''; 
            field.style.backgroundColor = ''; 
            const index = Array.from(campos).indexOf(field);
            spansColor[index].style.color = ''; 
            spans[index].style.display = 'none';
        });
    };

    [openModal, editarModal, closeModal, fade].forEach((el) => {
        el.addEventListener('click', () => toggleModal());
    });

    limparCamposBtn.addEventListener('click', () => {
        toggleModal();
        limparCampos();
    });

});
