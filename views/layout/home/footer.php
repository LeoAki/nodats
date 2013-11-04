                </div>
        </div>
		

            <script src="<?= BASE_URL; ?>public/js/excanvas.min.js"></script>
            <script src="<?= BASE_URL; ?>public/js/jquery.min.js"></script>
            <script src="<?= BASE_URL; ?>public/js/jquery.ui.custom.js"></script>
            <script src="<?= BASE_URL; ?>public/js/bootstrap.min.js"></script>
            <script src="<?= BASE_URL; ?>public/js/jquery.uniform.js"></script>
            <script src="<?= BASE_URL; ?>public/js/fullcalendar.min.js"></script>
            <script src="<?= BASE_URL; ?>public/js/select2.min.js"></script>
            <script src="<?= BASE_URL; ?>public/js/jquery.dataTables.min.js"></script>
            <script src="<?= BASE_URL; ?>public/js/jquery.validate.js"></script>
            <script src="<?= BASE_URL; ?>public/js/unicorn.js"></script>
            <? if(isset($_layoutParams['js']) && count($_layoutParams['js'])): ?>
		<? foreach($_layoutParams['js'] as $layout): ?>
<script src="<?= $layout ?>" type="text/javascript"></script>
                    <? endforeach; ?>
            <? endif; ?>
	</body>

<!-- Mirrored from wbpreview.com/previews/WB0F35928/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 06 Mar 2013 03:48:12 GMT -->
</html>
