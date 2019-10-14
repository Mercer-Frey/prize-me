
function chips(message, type = 'success', timeremove = 3000) {
    let chips = document.createElement('div');
    chips.classList.add('chips');
    chips.classList.add(type);
    chips.innerHTML = message;
    addChips(chips);
    setTimeout(function () { deleteChips(chips) }, timeremove);
}

function deleteChips(chips) {
    chips.remove();
    let allChips = document.querySelectorAll('.chips-field .chips');
    if (allChips.length == 0) document.querySelector('.chips-field').remove();
}

function addChips(chips) {
    let chipsField = document.querySelector('.chips-field');
    if (chipsField) {
        chipsField.appendChild(chips);
    }
    else {
        let chipsField = document.createElement('div');
        chipsField.classList.add('chips-field');
        document.querySelector('body').appendChild(chipsField);
        chipsField.appendChild(chips);
    }
}
