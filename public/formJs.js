const contentform = document.getElementsByClassName('contentform')[0];
const fields = {
    lastname: contentform.querySelector('input[name=lastname]'),
    name: contentform.querySelector('input[name=name]'),
    email: contentform.querySelector('input[name=email]'),
    phone: contentform.querySelector('input[name=phone]'),
    password: contentform.querySelector('input[name=password]')
};
const submit = contentform.querySelector('.button-contact');

for (let field in fields) {
    console.log(fields[field]);
    fields[field].addEventListener('keyup', validateForm);
}


function validateForm() {
    let isValid = true;
    for (let field in fields) {
        if ( fields[field].value.length === 0 ) {
            isValid = false;
            break;
        }
    }

    if (isValid) {
        submit.removeAttribute('disabled');
    }
    else {
        submit.setAttribute('disabled', 'disabled');
    }
}

function showOutput(event) {
    event.preventDefault();

    for (let field in outputFields) {
        outputFields[field].innerHTML = fields[field].value;
    }

    output.classList.remove('hidden');
    contentform.classList.add('hidden');
}
