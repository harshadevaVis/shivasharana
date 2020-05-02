@include('includes.header_start')

@include('includes.common_styles')

@yield('pageSpecificStyles') <!-- your custom styles goes here -->

@include('includes.header_end')

@include('administrator.includes.top_bar')

@yield('pageSpecificContent') <!-- Page content goes here -->

@include('includes.footer_start')

@include('includes.common_scripts')

@yield('pageSpecificScript') <!-- your custom scripts goes here -->

@include('includes.footer_end')
