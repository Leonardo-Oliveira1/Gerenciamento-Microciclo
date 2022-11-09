<script>
    function popup(name, primitiveAction, item_type, HTML_ID) {
        swal({
                title: `Realmente deseja ${primitiveAction} ${item_type} ${name}?`,
                icon: 'warning',
                buttons: true,
                dangerMode: false,
            })
            .then((willDelete) => {
                if (willDelete) {
                    setTimeout(function() {
                        document.getElementById(`${HTML_ID}`).submit();
                    }, 1000);
                    swal('Prontinho! operação feita com sucesso!', {
                        icon: 'success',
                    });
                }
            });
    }

    function inputPopUp(text) {
        swal(text, {
                content: "input",
            })
            .then((value) => {
                swal(`You typed: ${value}`);
            });
    }
</script>
