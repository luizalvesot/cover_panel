function deleteData(e) { 
    var t = "delete" + e, 
        a = document.getElementById(t), 
        o = a.dataset.token, 
        r = a.dataset.route, 
        n = a.dataset.redirect; 

    //alert(a);
    
    swal({ 
        title: "Atenção!", 
        text: "Tem certeza que deseja deletar este item?", 
        icon: "warning", buttons: ["Não, cancele", "Sim, tenho certeza"], 
        dangerMode: !0 
    })
    .then((e => {
        e && $.ajax({ url: r, type: "post", 
            data: { 
                _method: "delete",_token:o 
            }, 
            success: function () { 
                swal({ 
                    title: "Exclusão!", text: "Item excluído com sucesso!", 
                    icon: "success" 
                })
                .then((function () { 
                    $(location).attr("href", n) 
                })) 
            }, 
            error: function () { 
                swal("Ocorreu um erro!", { 
                    icon: "error" 
                }) 
            } 
        }) 
    })) 
} 

    var locale = { 
        weekdays: { 
            shorthand: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sab"], 
            longhand: ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"] 
        }, 
        months: { shorthand: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"], 
            longhand: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"] 
        } 
    };

    flatpickr("#start_date", { 
        dateFormat: "d.m.Y", locale 
    }),
    flatpickr("#end_date", { 
        dateFormat: "d.m.Y", locale 
    }),
    flatpickr("#start_time", { 
        enableTime: !0, 
        noCalendar: !0, 
        dateFormat: "H:i", 
        time_24hr: !0 
    }),
    flatpickr("#end_time", { 
        enableTime: !0, 
        noCalendar: !0, 
        dateFormat: "H:i", 
        time_24hr: !0 
    });
