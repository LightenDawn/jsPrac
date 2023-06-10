<script>
    let currentResult = 0;

    addBtn.addEventListener('click', add);

    function add() {
        currentResult += parseInt(userInput.value);
        userInput.value = '';
        outputResult(currentResult, '');
    }
</script>
