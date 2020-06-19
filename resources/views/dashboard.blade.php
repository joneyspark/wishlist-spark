@extends('shopify-app::layouts.default')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div id="wrapper" class="container py-4 px-4 mx-auto">
        <div class="sm:grid sm:h-32 sm:grid-flow-row sm:gap-4 sm:grid-cols-3">
            <x-status type="positive" title="Today's Wishlist" number="32" growth="9" />
            <x-status type="negative" title="Yesterday's Wishlist" number="20" growth="20" />
            <x-status type="normal" title="Total Wishlist" number="430" growth="8" />
        </div>
    </div>
</div>
@endsection

@section('scripts')
    @parent

    <script type="text/javascript">
        var AppBridge = window['app-bridge'];
        var actions = AppBridge.actions;
        var TitleBar = actions.TitleBar;
        var Button = actions.Button;
        var Redirect = actions.Redirect;
        var titleBarOptions = {
            title: 'Dashboard',
        };
        var myTitleBar = TitleBar.create(app, titleBarOptions);
    </script>
@endsection
