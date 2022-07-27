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
                url:'agriculteur/add',
                method: 'post',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                success: function(res){
                    if(res.error){
                        
                    }
                    Swal.fire(
                        'Ajouté',
                        res.message,
                        'success'
                    );
                    fetchAllAgriculteurs();
                }
            });
            $("#btn-form").text("Ajouter");
        }
    });

    fetchAllAgriculteurs();

      function fetchAllAgriculteurs() {
        $.ajax({
          url: '/agriculteur/get',
          method: 'get',
          success: function(response) {
            $("#show_agriculteurs").html(response.message);
          }
        });
    }

    $(document).delegate('.delete_icon', 'click', function(e) {
        e.preventDefault();
        const id = $(this).attr('id');
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: 'agriculteur/delete/'+ id,
              method: 'get',
              success: function(response) {
                Swal.fire(
                  'Deleted!',
                  response.message,
                  'success'
                )
                fetchAllAgriculteurs();
              }
            });
          }
        })
      });
});