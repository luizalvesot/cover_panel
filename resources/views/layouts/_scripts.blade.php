<script>
    // warning, error, success, info
    @if (session('swal'))
        swal({
            title: "{{ session('title') }}",
            text: "{{ session('message') }}",
            icon: "{{ session('swal') }}",
            button: "Ok",
        });
    @endif

    window.addEventListener('swal', event => {
        swal({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.icon,
            button: "Ok",
        });
    });
</script>
