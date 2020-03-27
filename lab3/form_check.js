function isEmpty(text) {
    return (!text || 0 === text.length)
}

function isWhiteSpaceOrEmpty(str) {
    return /^[\s\t\r\n]*$/.test(str);
}

function isEmailCorrect(str) {
    let email = /^[a-zA-Z_0-9\.]+@[a-zA-Z_0-9\.]+\.[a-zA-Z][a-zA-Z]+$/;
    if (email.test(str)) {
        return true;
    }
    else {
        return false;
    }
}

function checkStringAndFocus(obj, msg) {
    let str = obj.value;
    let errorFieldName = "e_" + obj.name.substr(2, obj.name.length);
    if (isWhiteSpaceOrEmpty(str)) {
        document.getElementById(errorFieldName).innerHTML = msg;
        obj.focus();
        return false;
    }
    else {
        document.getElementById(errorFieldName).innerHTML = "";
        return true;
    }
}

function checkEmailAndFocus(obj) {
    let str = obj.value;
    let errorFieldName = "e_" + obj.name.substr(2, obj.name.length);
    if (isEmailCorrect(str)) {
        document.getElementById(errorFieldName).innerHTML = "";
        return true;
    }
    else {
        document.getElementById(errorFieldName).innerHTML = "Podaj poprawny email!";
        obj.focus();
        return false;
    }
}

function validate(personalDataForm) {
    var validated;
    validated = checkStringAndFocus(personalDataForm.elements["f_imie"], "Podaj imię!");
    if (!validated) return validated;
    validated = checkStringAndFocus(personalDataForm.elements["f_nazwisko"], "Podaj nazwisko!");
    if (!validated) return validated;
    validated = checkEmailAndFocus(personalDataForm.elements["f_email"]);
    if (!validated) return validated;
    validated = checkStringAndFocus(personalDataForm.elements["f_kod"], "Podaj kod pocztowy!");
    if (!validated) return validated;
    validated = checkStringAndFocus(personalDataForm.elements["f_ulica"], "Podaj ulicę!");
    if (!validated) return validated;
    validated = checkStringAndFocus(personalDataForm.elements["f_miasto"], "Podaj miasto!");
    if (!validated) return validated;
    return true;
}