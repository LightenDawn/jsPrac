<script>
    // default setting
    var result = 18;
    var userInputValue = document.getElementById('is_num');
    var displaySection = document.querySelector('.display-result p');
    var addBtn = document.getElementById('add');
    var multiplyBtn = document.getElementById('multiply');
    var divideBtn = document.getElementById('divide');

    // when loading page will show the current result value
    function onloadingPage() {
        displaySection.textContent = result;
    }

    // sum the result and userInput value
    function add() {
        var value = userInputValue.value;
        if (userIsInput(value)) {
            result += parseInt(value);
        }
        displayResult();
    }

    // multiply the result and userInput value
    function multiply() {
        var value = userInputValue.value;
        if (userIsInput(value)) {
            result *= parseInt(value);
        }
        displayResult();
    }

    // divide the result and userInput value
    function divide() {
        var value = userInputValue.value;
        if (userIsInput(value)) {
            if (value != 0) {
                result /= parseInt(value);
            }
        }
        displayResult();
    }

    // check the user has input or not
    // has input => return true
    // has not input => return false and do nothing
    function userIsInput(value) {
        if (!value) {
            return false;
        }
        return true;
    }

    // display the result on the alert
    function displayResult() {
        result = Math.floor(result);
        displaySection.textContent = result;
        alert(result);
    }

    window.onload = onloadingPage;

    addBtn.addEventListener('click', add);
    multiplyBtn.addEventListener('click', multiply);
    divideBtn.addEventListener('click', divide);
</script>
