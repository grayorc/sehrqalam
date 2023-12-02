let clos = document.querySelector('.closeeye');
let opn = document.querySelector('.openeye');
let password = document.querySelector('.pass');
clos.addEventListener('click', () => {
    if (password.type === 'password') {
        password.type = 'text';
        clos.classList.add('hide');
        opn.classList.remove('hide')
    }
})
opn.addEventListener('click', () => {
    if(password.type==='text'){
        password.type = 'password';
        clos.classList.remove('hide');
        opn.classList.add('hide')
    }
})