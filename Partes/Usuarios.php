document.getElementById("loginForm").addEventListener("submit", function(event) {
event.preventDefault(); // Evita o envio padrão do formulário

var username = document.getElementById("username").value;
var password = document.getElementById("password").value;

// Verifica os dados de login
if (username === "luiz@cms.com.br" && password === "123") {
alert("Login bem-sucedido como Luiz.");
document.getElementById("loginContent").style.display = "none";
document.getElementById("pedidoContent").style.display = "block";
} else if (username === "julio@cms.com.br" && password === "123") {
alert("Login bem-sucedido como Julio.");
document.getElementById("loginContent").style.display = "none";
document.getElementById("pedidoContent").style.display = "block";
} else if (username === "amilton@cms.com.br" && password === "123") {
alert("Login bem-sucedido como Amilton.");
document.getElementById("loginContent").style.display = "none";
document.getElementById("pedidoContent").style.display = "block";
} else if (username === "jenifer@cms.com.br" && password === "123") {
alert("Login bem-sucedido como Jenifer.");
document.getElementById("loginContent").style.display = "none";
document.getElementById("pedidoContent").style.display = "block";
} else if (username === "elias@cms.com.br" && password === "123") {
alert("Login bem-sucedido como Elias.");
document.getElementById("loginContent").style.display = "none";
document.getElementById("pedidoContent").style.display = "block";
} else if (username === "bruna@cms.com.br" && password === "123") {
alert("Login bem-sucedido como Bruna.");
document.getElementById("loginContent").style.display = "none";
document.getElementById("pedidoContent").style.display = "block";
} else if (username === "sergio@cms.com.br" && password === "123") {
alert("Login bem-sucedido como Sérgio.");
document.getElementById("loginContent").style.display = "none";
document.getElementById("pedidoContent").style.display = "block";

} else {
alert("Usuário ou senha incorretos.");
}
});
