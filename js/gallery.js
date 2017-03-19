$(document).ready(function ($) {
    $("#category-selector").change(function () {
        var categoryName = $('#category-selector').find(":selected").text();
        if(categoryName === 'Home'){
            $('#office-image').hide();
            $('#home-image').show();
        }
        else if(categoryName === 'Office'){
            $('#office-image').show();
            $('#home-image').hide();
        }
    }).change();
});

/*window.onload = function () {
        var selector = document.getElementById('category-selector');
        var home = window['home-image'];
        var office = window['office-image'];
        // selector.addeventListener('change', hideImages());

        function getSelectedText(elementId) {
            var elt = document.getElementById(elementId);

            if (elt.selectedIndex == -1)
                return null;

            return elt.options[elt.selectedIndex].text;
        }

        var category = getSelectedText(selector);

        selector.onchange = hideImages()
        function hideImages() {
            if (category === 'Home') {
                office.style.display = none;
                home.style.display = block;
            }
            else if (category === 'Office') {
                home.style.display = none;
                office.style.display = block;
            }
        }
};
*/