 $(document).ready(function () {
        var ls1 = sessionStorage.getItem("modal");
        // var ls2 = sessionStorage.getItem("modal2");
        if (!ls1) {
            $(window).on('load', () => {
                $('#exampleModal').modal('show');
                sessionStorage.setItem("modal", true);              
            });
        }
});