const select_menu_size = document.querySelector(".select-menu-size"),
    select_button_size = select_menu_size.querySelector(".select-button-size"),
    size_option = select_menu_size.querySelectorAll(".size-option"),
    select_size_text = select_menu_size.querySelector(".select-size-text");


select_button_size.addEventListener("click", () => select_menu_size.classList.toggle("active"));

size_option.forEach(option => {
    option.addEventListener("click", () => {
        let selectedOption = option.querySelector(".size-option-text").innerText;
        select_size_text.innerText = selectedOption;

        select_menu_size.classList.remove("active");
    });
});

const select_menu_sugar = document.querySelector(".select-menu-sugar"),
    select_button_sugar = select_menu_sugar.querySelector(".select-button-sugar"),
    sugar_option = select_menu_sugar.querySelectorAll(".sugar-option"),
    select_sugar_text = select_menu_sugar.querySelector(".select-sugar-text");


select_button_sugar.addEventListener("click", () => select_menu_sugar.classList.toggle("active"));

sugar_option.forEach(option => {
    option.addEventListener("click", () => {
        let selectedOption = option.querySelector(".sugar-option-text").innerText;
        select_sugar_text.innerText = selectedOption;

        select_menu_sugar.classList.remove("active");
    });
});

const select_menu_ice = document.querySelector(".select-menu-ice"),
    select_button_ice = select_menu_ice.querySelector(".select-button-ice"),
    ice_option = select_menu_ice.querySelectorAll(".ice-option"),
    select_ice_text = select_menu_ice.querySelector(".select-ice-text");


select_button_ice.addEventListener("click", () => select_menu_ice.classList.toggle("active"));

ice_option.forEach(option => {
    option.addEventListener("click", () => {
        let selectedOption = option.querySelector(".ice-option-text").innerText;
        select_ice_text.innerText = selectedOption;

        select_menu_ice.classList.remove("active");
    });
});

const select_menu_whip = document.querySelector(".select-menu-whip"),
    select_button_whip = select_menu_whip.querySelector(".select-button-whip"),
    whip_option = select_menu_whip.querySelectorAll(".whip-option"),
    select_whip_text = select_menu_whip.querySelector(".select-whip-text");


select_button_whip.addEventListener("click", () => select_menu_whip.classList.toggle("active"));

whip_option.forEach(option => {
    option.addEventListener("click", () => {
        let selectedOption = option.querySelector(".whip-option-text").innerText;
        select_whip_text.innerText = selectedOption;

        select_menu_whip.classList.remove("active");
    });
});