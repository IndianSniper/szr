$(document).ready(function ($) {
    $("#Residential").click(function () {
        // console.log('clicked residential');
        $("#Residential").removeClass('inactive-selection');
        
        $("#Retail").removeClass('active-selection');
        $("#Commercial").removeClass('active-selection');
       
        $("#Residential").addClass('active-selection');
        $("#Residential").css('color', 'white');
        
        $("#Retail").addClass('inactive-selection');
        $("#Retail").css('color', '#353535');
        $("#Commercial").addClass('inactive-selection');
        $("#Commercial").css('color', '#353535');

        $('#retail-image').hide();
        $('#commercial-image').hide();
        $('#residential-image').show();
    }).click();
    
    $("#Retail").click(function () {
        // console.log('clicked retail');

        $("#Retail").removeClass('inactive-selection');
        
        $("#Residential").removeClass('active-selection');
        $("#Commercial").removeClass('active-selection');
       
        $("#Retail").addClass('active-selection');
        $("#Retail").css('color', 'white');
       
        $("#Residential").addClass('inactive-selection');
        $("#Residential").css('color', '#353535');
        $("#Commercial").addClass('inactive-selection');
        $("#Commercial").css('color', '#353535');

        $('#residential-image').hide();
        $('#commercial-image').hide();
        $('#retail-image').show();
    });

    $("#Commercial").click(function () {
        // console.log('clicked retail');

        $("#Commercial").removeClass('inactive-selection');
        
        $("#Residential").removeClass('active-selection');
        $("#Retail").removeClass('active-selection');
       
        $("#Commercial").addClass('active-selection');
        $("#Commercial").css('color', 'white');
       
        $("#Residential").addClass('inactive-selection');
        $("#Residential").css('color', '#353535');
        $("#Retail").addClass('inactive-selection');
        $("#Retail").css('color', '#353535');

        $('#retail-image').hide();
        $('#residential-image').hide();
        $('#commercial-image').show();
    });
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