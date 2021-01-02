<!-- JAVASCRIPTS -->
<script src="{{ asset('public/frontend/assets/js/lib/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/lib/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/lib/plugins.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/lib/nav.fixed.top.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/lib/contact.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/main.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/slider.js') }}"></script>
<!-- JAVASCRIPTS END -->


    @if (!empty($pluginjs))
        @foreach ($pluginjs as $value)
            <script src="{{ asset('public/frontend/assets/js/'.$value) }}" type="text/javascript"></script>
        @endforeach
    @endif

    @if (!empty($js))
    @foreach ($js as $value)
        <script src="{{ asset('public/frontend/assets/js/customjs/'.$value) }}" type="text/javascript"></script>
    @endforeach
    @endif
    <script>
        jQuery(document).ready(function () {
            @if (!empty($funinit))
                    @foreach ($funinit as $value)
                        {{  $value }}
                    @endforeach
            @endif
        });
    </script>

