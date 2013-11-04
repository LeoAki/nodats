        <script type="text/javascript" src="<?= BASE_URL; ?>public/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?= BASE_URL; ?>public/js/unicorn.login.js"></script>
        <? if(isset($_layoutParams['js']) && count($_layoutParams['js'])): ?>
		<? foreach($_layoutParams['js'] as $layout): ?>
        <script src="<?= $layout ?>" type="text/javascript"></script>
		<? endforeach; ?>
	<? endif; ?>
            <div id="footer">
                Copyright &copy; 2012 <a href="http://www.lncc.edu.pe" target="_blank"></a>
            </div>
        </div>
    </body>
</html>