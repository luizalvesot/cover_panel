function deleteData(id)
{
    var element_id = 'delete' + id;
    var item = document.getElementById(element_id);
    var token = item.dataset.token;
    var request_route = item.dataset.route;
    var redirect_route = item.dataset.redirect;

    alert(request_route);

    swal({
      title: "Atenção!",
      text: "Tem certeza que deseja deletar este item?",
      icon: "warning",
      buttons: ['Não, cancele', 'Sim, tenho certeza'],
      dangerMode: true
    })
    .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: request_route,
                type: 'post',
                data: {_method: 'delete', _token :token},
                success: function () {
                    swal({
                        title: "Exclusão!",
                        text: "Item excluído com sucesso!",
                        icon: "success"
                    }).then(function() {
                        $(location).attr('href', redirect_route)
                    });
                },
                error: function () {
                    swal("Ocorreu um erro!", {
                      icon: "error",
                    });
                }
            });
        }
    });
}


