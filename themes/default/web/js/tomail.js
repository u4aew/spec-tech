$(document).ready(function() {
    $("#form").submit(function() {
        $.ajax({
            type: "POST",
            url: "/mail.php",
            data: $(this).serialize()+"&pageLink="+window.location
        }).done(function() {
            $("#myModal").attr("data-needSuccess",true).modal("hide");
            $('#successModal').modal('show');
            setTimeout(function(){
                $('#successModal').modal('hide');
            }, 3000);
        });
        return false;
    });
});