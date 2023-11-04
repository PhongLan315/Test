function signup(e) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var email = document.getElementById( "email").value;
    var password = document.getElementById("password").value;
    var user = {
        username: username,
        email: email,
        password: password,
    };
    var json = JSON.stringify(user);
    localStorage.setItem(username, json);
    alert("Sign up success");
}
function login(e) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var user = localStorage.getItem(username);
    var data = JSON.parse(user);
    if(user == null){
        alert("Please enter Username, Password")
    }
    else if(username == data.username && email == data.email && password == data.password){
        alert("Login success")
        window.location.href="todolist.html"
    }
    else{
        alert("Login fail")
    }
}