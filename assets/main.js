const menuIcon = document.querySelector('.mobile-menu');
const navigation = document.querySelector('.navigation-items');

menuIcon.addEventListener('click', function() {
    navigation.classList.toggle('menu-open');
});

document.addEventListener('click', function(event) {
    if (event.target.closest('.mobile-menu') === null) {
        navigation.classList.remove('menu-open');
    }
});

// Set Gravity form row to 0
const textarea = document.getElementById("input_2_5"); // get the textarea element by its ID
// textarea.rows = 0;
