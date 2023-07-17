<div class="row">
    <div class="col-sm-10 offset-sm-1">
        @if (session('status_success'))
            <BR>
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong></strong> {{ session('status_success') }}
            </div>
        @endif

        @if (session('status_error'))
            <BR>
            <div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Erro!</strong> {{ session('status_error') }}
            </div>
        @endif

        @if (session('status_warning'))
            <BR>
            <div class="alert alert-warning alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong></strong> {{ session('status_warning') }}
            </div>
        @endif

        @if (session('status_info'))
            <BR>
            <div class="alert alert-info alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong></strong> {{ session('status_info') }}
            </div>
        @endif
    </div>
</div>
