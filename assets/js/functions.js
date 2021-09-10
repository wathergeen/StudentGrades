/**
 * @param(user email and password)
 * The information is catch by the field ID, and passed to a php page to validate the data,
 * and create the session if the data is correct.
 *
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
                        title: 'Logado com sucesso!',
                        text: `Bem-Vindo: ${data.Nome}`,
                        showConfirmButton: false,
                        timer: 2000,
                    });
                    setTimeout(function () {// wait for 2 secs(2)
                        location.reload(); // then reload the page.
                    }, 2000);
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

function defineNotes() {
    $.ajax({
        url: "server/exibirNotas.php",
        success: function (data) {
            $(".main__content").html("<div class= 'my-4 mx-auto define__student__notes'></div >");
            $(".define__student__notes").html(data);
        }
    });
}

function formsPage() {
    $.ajax({
        url: "server/formsPage.php",
        success: function (data) {
            $(".main__content").html(data);
        }
    });
}

$(".campo-nota").keypress(function (e) {
    //Enter key
    if (e.which == 13) {
        return false;
    }
});

function registerNewStudent() {
    var nome__aluno = document.getElementById('reg_nome_aluno').value;
    var sobrenome__aluno = document.getElementById('reg_sobrenome_aluno').value;
    var email__aluno = document.getElementById('reg_email_aluno').value;
    var matricula__aluno = document.getElementById('reg_matricula_aluno').value;
    var telefone__aluno = document.getElementById('reg_telefone_aluno').value;

    if (nome__aluno !== '' && sobrenome__aluno !== '' && email__aluno !== '' && matricula__aluno !== '') {
        $.ajax({
            url: "server/registrarAluno.php",
            type: "POST",
            data: {
                "nome__aluno": nome__aluno,
                "sobrenome__aluno": sobrenome__aluno,
                "email__aluno": email__aluno,
                "matricula__aluno": matricula__aluno,
                "telefone__aluno": telefone__aluno,
            },
            success: function () {
                Swal.fire({
                    icon: 'success',
                    title: `Aluno ${matricula__aluno} cadastrado com sucesso!`,
                    showConfirmButton: false,
                    timer: 2000,
                });
                setTimeout(function () {// wait for 2 secs(2)
                    location.reload(); // then reload the page.
                }, 2000);
            },
            error: function (error) {
                console.log("Error:");
                console.log(error);
            }
        });
    } else {
        Swal.fire({
            icon: 'info',
            title: 'Ops...',
            text: 'Você precisa preencher todos os campos!',
            timer: 2500,
        })
    }
}

function atualizarNota(Nota, Coluna, IdNotaAluno) {

    console.log(Nota, Coluna, IdNotaAluno);

    $.ajax({
        url: "server/definirNotas.php",
        type: "POST",
        data: {
            "Nota__aluno": Nota,
            "Coluna__DB": Coluna,
            "IdNotaAluno": IdNotaAluno,
        },
        success: function (data) {
            console.log(data);
            alertify.set('notifier', 'position', 'top-right');
            alertify.success('Nota alterada.');
        },
        error: function (error) {
            console.log("Error:");
            console.log(error);
        }
    });
}