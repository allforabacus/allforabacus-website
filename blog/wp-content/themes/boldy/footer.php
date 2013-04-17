 </div>
		   <!-- END CONTENT -->
	</div>
    <!-- END WRAPPER -->
	
	<!-- BEGIN FOOTER -->
	<div id="footer">
	<?php if(get_option('boldy_footer_actions')!="no") {?>
		
		<?php }?>
		<div id="footerWidgets">
			<div id="footerWidgetsInner">
				<!-- BEGIN FOOTER WIDGET -->
				<?php /* Widgetized sidebar */
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) : ?><?php endif; ?>
				<!-- END FOOTER WIDGETS -->
				<!-- BEGIN COPYRIGHT -->
				<div id="copyright">
					<?php if (get_option('boldy_copyright') <> ""){
						echo stripslashes(stripslashes(get_option('boldy_copyright')));
						}else{
							echo 'Just go to Theme Options Page and edit copyright text';
						}?> 
						<div id="site5bottom">Designed by: <a href="http://imagineerblogs.wordpress.com/">Praseetha KR</a></div>
				</div>
				<!-- END COPYRIGHT -->						
				</div>
				
		</div>
	</div>	
	<!-- END FOOTER -->
</div>
<!-- END MAINWRAPPER -->
<?php if (get_option(' boldy_analytics') <> "") { 
		echo stripslashes(stripslashes(get_option('boldy_analytics'))); 
	} ?>
<?php wp_footer(); ?>
</body>
</html>


