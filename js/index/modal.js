$(document).ready(function () {
        var ls1 = sessionStorage.getItem("modal1");
        // var ls2 = sessionStorage.getItem("modal2");
        if (!ls1) {
            $(window).on('load', () => {
                $('#avisoModal').modal('show');
                sessionStorage.setItem("modal1", true);
                // 				$('#exampleModal1').modal('show');
                // window.open('cedula_c_tutorial.php', '_self');
                // 				sessionStorage.setItem("modal2", true);
            });
        }
    });