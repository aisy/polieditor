<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajaxorg.github.io/ace-builds/src/ace.js"></script>


<script src="<?= base_url('asset/js') ?>/ext-language_tools.js"></script>
<script src="<?= base_url('asset/js') ?>/mode-html.js"></script>

<style>
    html, body { height: 100% }
    #editor, #return { height: 50% }
</style>

<pre id="editor">xxx</pre>
<div id="return"></div>

<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/twilight");
    editor.session.setMode("ace/mode/html");
    editor.setOptions({
        enableBasicAutocompletion: true,
        enableSnippets: true,
        enableLiveAutocompletion: false
    });

    function showHTML() {
        $('#return').html(editor.getValue());
    }
    // or use data: url to handle things like doctype
    function showHTMLInIFrame() {
        $('#return').html("<iframe src=" +
             "data:text/html," + encodeURIComponent(editor.getValue()) +
        "></iframe>");
    }
    editor.on("input", showHTMLInIFrame)
</script>
