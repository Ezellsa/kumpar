<!DOCTYPE html>
<html class="no-js" lang="en">
	<?php $this->getThemeElement("page/html/head",$__forward); ?>
	<body>
		<!-- Main Container -->
		<?php $this->getThemeContent(); ?>
		<!-- Main Container End -->
		<!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
		<?php $this->getJsFooter(); ?>
		<!-- Load and execute javascript code used only in this page -->
		<script>
		var base_url = '<?=base_url_admin()?>';
		var Login = function(){
			return {
				init: function(){
				}
			}
		}();
			$(document).ready(function(e){
				<?php $this->getJsReady(); ?>
			});
			<?php $this->getJsContent(); ?>
		</script>
	</body>
</html>