/*
    @searchUser()
    Search the username on Database.
    If the email and password exist, create the session for the user.
*/

function searchUser() {
    var user__identity = document.getElementById('user__identity').value;
    var user__password = document.getElementById('user__password').value;
    if (user__identity !== '' && user__password !== '') {
        $.ajax({
            url: "server/checkUser.php",
            type: "POST",
            dataType: "json",
            data: {
                "user__identity": user__identity,
                "user__password": user__password,
            },
            success: function (data) {
                if (data.db_user_status == 'usable') {
                    Swal.fire({
                        icon: 'success',
                        title: `Bem-Vindo: ${data.Nome}`,
                        timer: 2000,
                    })
                }
            },
            error: function (error) {
                console.log("Error:");
                console.log(error);
                if (error.responseText == 'mail_error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Este email não existe!',
                        timer: 2000,
                    })
                } else if (error.responseText == 'pass_error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Senha incorreta!',
                        text: 'Digite sua senha novamente!',
                        timer: 2000,
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: "Erro no sistema!",
                        text: 'Contate o administrador do sistema com urgência!',
                        timer: 3000,
                    })
                }
            }
        });
    } else {
        Swal.fire({
            icon: 'info',
            title: 'Opa...',
            text: 'Você precisa preencher todos os campos!',
            timer: 2500,
        })
    }
}