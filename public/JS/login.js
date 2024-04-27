const signUpButton = document.getElementById('signup');
const signInButton = document.getElementById('signin');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

function showPassIn() {
    var pass = document.getElementById("passwordin");
    if (pass.type == "password") {
        pass.type = "text";
    } else {
        pass.type = "password";
    }
}

function showPassUp() {
    var pass = document.getElementById("passwordup");
    if (pass.type == "password") {
        pass.type = "text";
    } else {
        pass.type = "password";
    }
}

function checkUsername() {
    var username = document.getElementById("usernameup");
    var iconCheck = document.getElementById("checkUser")
    if (username.length <= 20){
        iconCheck.class = "glyphicon glyphicon-ok";
    }else{
        iconCheck.class = "glyphicon glyphicon-ok remove";
    }
}