                </div>
        </div>
		
        <div style="padding-top: 15px;text-align: center;">
            <a style="color: white;">Sistema desarrollado por alumnos del curso PHP 5 del programa <b>DAT</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@2013</a>
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
</html>
