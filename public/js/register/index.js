$(document).ready(function () {
    $("#togglePassword").click(function() {
        let password = $("#password");
        let confirm_password = $("#confirm_password");
        if(password.attr('type') === 'password') {
            password.attr('type', 'text');
            confirm_password.attr('type', 'text');
        }
        else {
            password.attr('type', 'password');
            confirm_password.attr('type', 'password');
        }
    });

    $("#registerForm").submit(function (e) {
        e.preventDefault();
        const fields = ['name', 'username', 'email', 'password', 'confirm_password', 'phone', 'gender', 'role']
        const params = {};

        fields.forEach(field => {
            params[field] = $(`#${field}`).val();
        });
        console.log(params);
        axios.post(this.action, params).then(({ data: response }) => {
            console.log(response)
            if (response.status == 0) {
                return window.location.href = "/login";
            }
            if (response.error?.summary) {
                $("#errorToast").removeClass("d-none");
                $("#errorToast").html(response.error?.summary);
            } else {
                $("#errorToast").addClass("d-none");
            }

            fields.forEach(field => {
                $(`#${field}_error`).html(response.error?.[field]??"");
            })
        }).catch(err => {
            console.error(err);
        })
    })
})