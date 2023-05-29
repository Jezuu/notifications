@php
    $type = $type ?? '';
    $notifications = config('notifications.types') ?? [];
    $settings = config('notifications.settings') ?? [];
    $notify = $notifications[$type] ?? [];
    $class = $notify['class'] ?? '';
    $title = $notify['title'] ?? '';
    $icon = $notify['icon'] ?? '';
    $message = $message ?? '';
@endphp

<div>
    <link rel="stylesheet" href="{{ asset('vendor/notifications/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/notifications/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/notifications/css/bootstrap.min.css') }}">

    <style>
        .close {
            position: relative;
            border: none;
            background: none;
            padding: 0;
            cursor: pointer;
        }
        .close .fa-xmark {
            transform: rotate(0deg);
            transition: transform 0.3s;
        }
        .close:hover .fa-xmark {
            transform: rotate(180deg);
            transition: transform 0.3s;
        }
    </style>

    <script src="{{ asset('vendor/notifications/js/bootstrap-notify.min.js') }}"></script>

    @if($static)
        <script>
            function showNotification() {
                $.notify({
                    message: "{{ $message }}",
                },{
                    type: "{{ $class }}",
                    template:
                        `<div data-notify="container" role="alert" class="col-xs-11 col-sm-6 alert alert-{0}">
                            <button type="button" class="close" data-notify="dismiss" style="top:7px;">
                                <i class="fa-solid fa-xmark fa-xs"></i>
                                <span class="sr-only">Close</span>
                            </button>
                            <span data-notify="icon"></span>
                            <span data-notify="title">{1}</span>
                            <span data-notify="message">{2}</span>
                            <a href="{3}" target="{4}" data-notify="url"></a>
                        </div>`,
                    placement: {
                        from: "{{ $settings['placement']['from'] }}",
                        align: "{{ $settings['placement']['align'] }}"
                    },
                    animate: {
                        enter: null,
                        exit: null
                    },
                    allow_dismiss: false,
                    delay: 0,
                    timer: 0,
                });
            };
        </script>
    @else
        <script>
            function showNotification() {
                $.notify({
                    title: '<strong style="padding-left: 5px;">{{ $title }}</strong>',
                    message: "<p style='padding-top: 5px; margin-bottom: 0.3rem;'>{{ $message }}</p>",
                    icon: '{{ $icon }}',
                },{
                    template:
                        `<div data-notify="container" role="alert" class="col-xs-11 col-sm-6 alert alert-{0}">
                            <button type="button" class="close" data-notify="dismiss" style="top:7px;">
                                <i class="fa-solid fa-xmark fa-xs"></i>
                                <span class="sr-only">Close</span>
                            </button>
                            <span data-notify="icon"></span>
                            <span data-notify="title">{1}</span>
                            <span data-notify="message">{2}</span>
                            <a href="{3}" target="{4}" data-notify="url"></a>
                        </div>`,
                    element: "{{ $settings['element'] }}",
                    position: "{{ $settings['position'] }}",
                    type: "{{ $class }}",
                    allow_dismiss: "{{ $settings['allow_dismiss'] }}",
                    newest_on_top: "{{ $settings['newest_on_top'] }}",
                    showProgressbar: "{{ $settings['showProgressbar'] }}",
                    placement: {
                        from: "{{ $settings['placement']['from'] }}",
                        align: "{{ $settings['placement']['align'] }}"
                    },
                    offset: Number("{{ (int)$settings['offset'] }}"),
                    spacing: Number("{{ (int)$settings['spacing'] }}"),
                    z_index: Number("{{ (int)$settings['z_index'] }}"),
                    delay: Number("{{ (int)$settings['delay'] }}"),
                    timer: Number("{{ (int)$settings['timer'] }}"),
                    url_target: "{{ $settings['url_target'] }}",
                    mouse_over: "{{ $settings['mouse_over'] }}",
                    animate: {
                        enter: "{{ $settings['animate']['enter'] }}",
                        exit: "{{ $settings['animate']['exit'] }}"
                    },
                    onShow: "{{ $settings['onShow'] }}",
                    onShown: "{{ $settings['onShown'] }}",
                    onClose: "{{ $settings['onClose'] }}",
                    onClosed: "{{ $settings['onClosed'] }}",
                    icon_type: "{{ $settings['icon_type'] }}",
                });
            };
        </script>
    @endif
    <script>
        $(document).ready(function() {
            showNotification();
        });
    </script>
</div>
