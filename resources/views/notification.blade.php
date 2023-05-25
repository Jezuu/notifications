@php
    $type = $type ?? 'default';
    $message = $message ?? '';
    
    $icon = '';

    switch ($type) {
        case 'success':
            $icon = 'fa-solid fa-check fa-beat';
            break;
        case 'error':
            $icon = 'fa-solid fa-times fa-beat';
            break;
        case 'warning':
            $icon = 'fa-solid fa-exclamation-triangle fa-beat';
            break;
        default:
            $icon = 'fa-solid fa-info-circle fa-beat';
            break;
    }
@endphp

@push('styles')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endpush

@push('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.5/bootstrap-notify.min.js"></script>
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            $.notify({
                title: '<strong style="padding-left: 5px;">Successful</strong>',
                message: "<p style='padding-top: 5px; margin-bottom: 0.3rem;'>{{ $message }}</p>",
                icon: '{{ $icon }}',
            },{
                template:
                    `<div data-notify="container" role="alert" class="col-xs-11 col-sm-6 alert alert-{0}">
                        <button type="button" class="close" data-notify="dismiss" style="top:7px;">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <span data-notify="icon"></span>
                        <span data-notify="title">{1}</span>
                        <span data-notify="message">{2}</span>
                        <a href="{3}" target="{4}" data-notify="url"></a>
                    </div>`,
                element: 'body',
                position: null,
                type: "{{ $type }}",
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: false,
                placement: {
                    from: "top",
                    align: "center"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 3300,
                timer: 1000,
                url_target: '_blank',
                mouse_over: null,
                animate: {
                    enter: 'animated bounceInDown',
                    exit: 'animated bounceOutUp'
                },
                onShow: null,
                onShown: null,
                onClose: null,
                onClosed: null,
                icon_type: 'class',
            });
        });
    </script>
@endpush
