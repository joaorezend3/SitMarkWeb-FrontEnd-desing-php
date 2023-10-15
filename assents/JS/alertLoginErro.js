document.getElementById("loginForm").addEventListener("submit", function (event) {
    var email = document.getElementById("email").value;
    var senha = document.getElementById("senha").value;
    var erroMsg = document.getElementById("erroMsg");

    if (email === "" || senha === "") {
        erroMsg.textContent = "Preencha todos os campos.";
        erroMsg.style.color = "red";
        event.preventDefault(); // Impede o envio do formulário
    } else {
        // Enviar o formulário via AJAX para processa_login.php
        var formData = new FormData(this);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "processa_login.php", true);

        xhr.onload = function () {
            if (xhr.status === 200) {
                if (xhr.responseText === "success") {
                    // Redirecionar ou realizar outras ações após o login bem-sucedido
                    window.location.href = "pagina_de_boas_vindas.php";
                } else {
                    erroMsg.textContent = xhr.responseText;
                    erroMsg.style.color = "red";
                }
            }
        };

        xhr.send(formData);
        event.preventDefault(); // Impede o envio do formulário
    }
});
