<!doctype html>
<html lang="<?php  app()->getLocale(); ?>">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Welcome to Readykit Apps</title>
    @stack('before-styles')
    {{ style(mix('css/dropzone.css')) }}
    {{ style(mix('css/core.css')) }}
    {{ style(mix('css/fontawesome.css')) }}
    {{ style('vendor/summernote/summernote-bs4.css') }}
    @stack('after-styles')
</head>
<body>

<div id="app">
    <div class="container-scroller">
        <!--Top Navbar-->
        <test-navbar></test-navbar>
        <!--Sidebar-->
        <test-sidebar></test-sidebar>

        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                {{--<test-toaster></test-toaster>--}}
                {{--<test-calendar-view></test-calendar-view>--}}
                {{--<test-avatars-group></test-avatars-group>--}}
                {{--<test-avatar></test-avatar>--}}
                {{--<test-form></test-form>--}}
                {{--<custom-line-test></custom-line-test>--}}
                {{--<test-error></test-error>--}}
                <test-table></test-table>
                {{--<test-toaster></test-toaster>--}}
                {{--<test-note></test-note>--}}
                {{--<test-organization-chart></test-organization-chart>--}}
                {{-- <test-filter></test-filter>--}}
                {{--<chart-test></chart-test>--}}
                {{--<test-tab></test-tab>--}}
                {{--<test-form-wizard></test-form-wizard>--}}
                {{--<test-table-new></test-table-new>--}}
                {{--<test-card-view></test-card-view>--}}
                {{--<test-preview-card></test-preview-card>--}}
                {{--<example-modal></example-modal>--}}
            </div>
        </div>
    </div>
</div>

<script>
    window.localStorage.setItem('app-languages',
        JSON.stringify(
            <?php echo json_encode(include resource_path() . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . (app()->getLocale() ?? 'en') . DIRECTORY_SEPARATOR . 'default.php')?>
        )
    );
</script>

@stack('before-scripts')
{!! script(mix('js/manifest.js')) !!}
{!! script(mix('js/vendor.js')) !!}
{!! script(mix('js/core.js')) !!}
{!! script('vendor/summernote/summernote-bs4.js') !!}
@stack('after-scripts')
</body>
</html>
