		<footer>Developed by <a href="#" target="_BLANK">iBacor</a>. Build with <a href="#" target="_BLANK">CodeMirror</a>. Made with &hearts; in Garut, Indonesia. </footer>

		<!-- Javascript -->
		<script type="text/javascript" src="<?php base_url('asset/libacor/js/jquery-2.2.0.min.js') ?>"></script>
		<script type="text/javascript" src="<?php base_url('asset/libacor/js/ibacor_stack.js')?>"></script>
		<script type="text/javascript" src="<?php base_url('asset/js/typed.js')?>"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/codemirror.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/mode/xml/xml.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/mode/javascript/javascript.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/mode/css/css.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/mode/htmlmixed/htmlmixed.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/addon/dialog/dialog.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/addon/search/searchcursor.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/addon/search/search.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/addon/display/placeholder.js"></script>
		<script>					 
			var html = CodeMirror.fromTextArea(document.getElementById('html'), {
				mode: 'text/html', lineNumbers: true, lineWrapping: true, theme: "monokai"
			});					 
			var css = CodeMirror.fromTextArea(document.getElementById('css'), {
				mode: 'text/css', lineNumbers: true, lineWrapping: true, theme: "monokai"
			});					 
			var js = CodeMirror.fromTextArea(document.getElementById('js'), {
				mode: 'text/javascript', lineNumbers: true, lineWrapping: true, theme: "monokai"
			});
		</script>
		<script>
            $(document).ready(function(){
                	$(".element").typed({
					strings: ['&lt;?php<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$CodingDong = "This is a code editor, code execute and web builder";<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$CodingDong .= "Write css code, html, javascript, PHP, sql and run the code";<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$CodingDong .= "Supports cdn sourche";<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$CodingDong .= "You can try all the code directly on the website";<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$CodingDong .= "Try it out!";<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo $CodingDong;<br>?>'],
					typeSpeed: 0
				});
            });
		</script>
	</body>
</html>