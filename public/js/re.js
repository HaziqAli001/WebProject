function SignupValidation(e) {
    var pat3 = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
    var pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    var pattern1 = /^[a-zA-Z0-9]{2,10}$/;
    var patphone = /^\+92-[0-9]{3}-[0-9]{7}$/;
    var user = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var phone = document.getElementById("phoneNumber");

    if (!pattern1.test(user)) {
        document.getElementById('errN').innerHTML = "Your Name is incorrect ";
    }
    else if (!pattern.test(email)) {
        document.getElementById('errE').innerHTML = "Your Email is not correct";
    }
    else if (!pat3.test(password)) {
        document.getElementById('errP').innerHTML = "Your password is incorrect is not correct";
    }
    else if (!patphone.test(phone)) {
        document.getElementById('errph').innerHTML = "Your Phone is incorrect is not correct";
    }
    else if (!pattern1.test(user) || !pattern.test(email) || !pat3.test(password) || !patphone.test(phone)) {
        alert("your cardentilas are wrong");
    }
    else
        return true;
    return false;
};


function signinvalidation() {
    var pat3 = /(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@$!%*#?&])/;
    var pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z]+\.[a-zA-Z0-9]{2,4}$/;

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (!pattern.test(email)) {
        document.getElementById('errE').innerHTML = "Your Email is not correct";
    }
    else if (!checkCharacters("password", "Password is incorrect", "passwordError", /(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w])/, false, null)) {
    }
    else
        return true;
    return false;
}


function checkCharacters(id, errorMessage, errorElementId, regex, showAfterParent = true, errorId = null) {
    element = document.getElementById(id);
    errorElement = document.getElementById(errorElementId);
    if (errorElement != null) {
        errorElement.parentNode.removeChild(errorElement);
    }
    if (!regex.test(element.value)) {
        if (errorId != null) {
            document.getElementById(errorId).insertAdjacentHTML("afterend", `<p id='${errorElementId}' class='color-red py-0 m-0'>${errorMessage}</p>`);
        } else {
            if (showAfterParent) {
                element.parentNode.insertAdjacentHTML('afterend', `<p id='${errorElementId}' class='text-danger py-2 m-0'>${errorMessage}</p>`);
            } else {
                element.insertAdjacentHTML('afterend', `<p id='${errorElementId}' class='text-danger py-2 m-0'>${errorMessage}</p>`);
            }
        }
        return false;
    } else {
        return true;
    }
}