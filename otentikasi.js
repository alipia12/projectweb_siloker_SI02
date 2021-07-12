function validate() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if (email == "siloker@nf.com" && password == "12345678") {
        window.location.href = "admin.html";
        console.log("Login Sukses");
    } 

    else if (email == "siloker@nf.com" && password == "12345678") {
        window.location.href = "admin.html";
        console.log("Login Sukses");
    } 
    else {
        alert("email dan Password salah");
    }
    return false;
}