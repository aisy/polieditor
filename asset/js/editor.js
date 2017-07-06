var editor = ace.edit("editor");
editor.setTheme("ace/theme/twilight");
editor.session.setMode("ace/mode/html");
editor.setOptions({
    enableBasicAutocompletion: true,
    enableSnippets: true,
    enableLiveAutocompletion: false,
    autoScrollEditorIntoView: true,
});

function showHTML() {
    $('#return').html(editor.getValue());
}
// or use data: url to handle things like doctype
function showHTMLInIFrame() {
    $('#return').html("<iframe src='" + "data:text/html," + encodeURIComponent(editor.getValue()) + "' width='100%' height='325px'></iframe>");
}

editor.on("input", showHTMLInIFrame)
