<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2023<a
                class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Tomi</a><span
                class="d-none d-sm-inline-block">, All rights Reserved</span></span><span
            class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->

<!-- BEGIN: Theme JS-->
<script src="<?= site_url('themes') ?>/app-assets/js/core/app-menu.js"></script>
<script src="<?= site_url('themes') ?>/app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<script>
$(window).on('load', function() {
    if (feather) {
        feather.replace({
            width: 14,
            height: 14
        });
    }
})
</script>
</body>
<!-- END: Body-->

</html>