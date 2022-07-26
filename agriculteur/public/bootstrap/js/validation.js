$(function(){
    $("#form-submit").submit(function(e){
        e.preventDefault();
        const formData = new FormData(this);
        if(!this.checkValidity()){
            e.preventDefault();
            $(this).addClass('was-validated');
        }else{
            $("#btn-form").text("Ajout en cours ...");
            $.ajax({
                url:'<?= base_url("agriculteur/add") ?>',
                method: 'post',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                success: function(res){
                    console.log(res);
                }
            })
        }
    });
});