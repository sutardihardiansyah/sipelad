</div>
<!-- /main content -->

</div>
<!-- /page content -->

<!-- Core JS files -->
<script src="<?= public_url(); ?>global_assets/js/main/jquery.min.js"></script>
<script src="<?= public_url(); ?>global_assets/js/main/bootstrap.bundle.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="<?= public_url(); ?>global_assets/js/plugins/ui/moment/moment.min.js"></script>
<script src="<?= public_url(); ?>global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
<script src="<?= public_url(); ?>global_assets/js/plugins/pickers/daterangepicker.js"></script>
<script src="<?= public_url(); ?>global_assets/js/plugins/notifications/sweet_alert.min.js"></script>
<script src="<?= public_url(); ?>global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
<script src="<?= public_url(); ?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
<script src="<?= public_url(); ?>global_assets/js/plugins/forms/styling/uniform.min.js"></script>
<script src="<?= public_url(); ?>global_assets/js/plugins/forms/validation/validate.min.js"></script>
<script src="<?= public_url(); ?>global_assets/js/plugins/ui/moment/moment.min.js"></script>
<script src="<?= public_url(); ?>global_assets/js/plugins/pickers/daterangepicker.js"></script>
<script src="<?= public_url(); ?>global_assets/js/plugins/pickers/anytime.min.js"></script>
<script src="<?= public_url(); ?>global_assets/js/plugins/pickers/pickadate/picker.js"></script>
<script src="<?= public_url(); ?>global_assets/js/plugins/pickers/pickadate/picker.date.js"></script>
<script src="<?= public_url(); ?>global_assets/js/plugins/pickers/pickadate/picker.time.js"></script>
<script src="<?= public_url(); ?>global_assets/js/plugins/pickers/pickadate/legacy.js"></script>
<script src="<?= public_url(); ?>global_assets/js/plugins/notifications/jgrowl.min.js"></script>
<script src="<?= public_url(); ?>assets/js/pages/checkbox.js"></script>

<script src="<?= public_url(); ?>assets/js/app.js"></script>
<script src="<?= public_url(); ?>assets/js/pages/datatables.js"></script>

<!-- /theme JS files -->

<?php if (isset($addon_script)) : ?>
	<?php addon_script($addon_script) ?>
<?php endif; ?>
</body>

</html>
