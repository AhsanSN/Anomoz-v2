<script>
    if (+localStorage.tabCount > 0)
    <?//include_once("")?>
    alert('Already open!');
else
    localStorage.tabCount = 0;

localStorage.tabCount = +localStorage.tabCount + 1;
window.onunload = function () {
    localStorage.tabCount = +localStorage.tabCount - 1;
};
</script>