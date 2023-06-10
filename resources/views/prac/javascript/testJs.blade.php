<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     // get all dropdown item
    //     var dropdowns = document.querySelectorAll('.dropdown');
    //     // get the submit button
    //     var submitBtn = document.querySelector('#submit');

    //     // when dropdown item was clicked by user
    //     // will get the item value and pass to dropdown toggle span value
    //     function checkCurrentStatus(event) {
    //         // get the dropdown section which close to the dropdown item was clicked by user
    //         var dropdown = event.currentTarget.closest('.dropdown');
    //         // get the dropdown toggle span element
    //         var dropdownToggleSpan = dropdown.querySelector('.dropdown-toggle span');
    //         // current item value (need to trim)
    //         var dropdownItemValue = event.target.textContent.trim();
    //         // set dropdown toggle span value to current item value
    //         dropdownToggleSpan.textContent = dropdownItemValue;
    //         // set data-value attribute to current item value
    //         dropdownToggleSpan.setAttribute('data-value', dropdownItemValue);
    //         // when item was clicked by user, the error message has to been closed
    //         dropdown.querySelector('.error-msg').style.display = 'none';
    //     }

    //     function submitCheck() {
    //         dropdowns.forEach(function(dropdown) {
    //             var dropdownToggleSpanValue = dropdown.querySelector('.dropdown-toggle span').dataset.value;
    //             if (!dropdownToggleSpanValue) {
    //                 dropdown.querySelector('.error-msg').style.display = 'block';
    //             } else {
    //                 dropdown.querySelector('.error-msg').style.display = 'none';
    //             }
    //         });
    //     }

    //     dropdowns.forEach(function(dropdown) {
    //         var dropdownItems = dropdown.querySelectorAll('.dropdown-item');
    //         dropdownItems.forEach(function(item) {
    //             item.addEventListener('click', checkCurrentStatus);
    //         });
    //     });

    //     submitBtn.addEventListener('click', submitCheck);
    // });

    $(document).ready(function() {
        // get all dropdowns
        var dropdowns = $('.dropdown');
        // get the submit button
        var submitBtn = $('#submit');

        // when dropdown item was clicked by user
        // will get the item value and pass to dropdown toggle span value
        function checkCurrentStatus(event) {
            // get the dropdown section which is closest to the dropdown item clicked by the user
            var dropdown = $(event.currentTarget).closest('.dropdown');
            // get the dropdown toggle span element
            var dropdownToggleSpan = dropdown.find('.dropdown-toggle span');
            // current item value (need to trim)
            var dropdownItemValue = $(event.target).text().trim();
            // set dropdown toggle span value to current item value
            dropdownToggleSpan.text(dropdownItemValue);
            // set data-value attribute to current item value
            dropdownToggleSpan.attr('data-value', dropdownItemValue);
            // when an item is clicked by the user, the error message should be hidden
            dropdown.find('.error-msg').hide();
        }

        function submitCheck() {
            dropdowns.each(function() {
                var dropdownToggleSpanValue = $(this).find('.dropdown-toggle span').attr('data-value');
                if (!dropdownToggleSpanValue) {
                    $(this).find('.error-msg').show();
                } else {
                    $(this).find('.error-msg').hide();
                }
            });
        }

        dropdowns.each(function() {
            var dropdownItems = $(this).find('.dropdown-item');
            dropdownItems.on('click', checkCurrentStatus);
        });

        submitBtn.on('click', submitCheck);
    });
</script>
