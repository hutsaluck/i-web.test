jQuery(function ($) {
    $(`img.menu`).on(`click`, e => {
        $(e.currentTarget).nextAll(`nav`).addClass(`open`);
    })
    $(`img.close`).on(`click`, e => {
        $(e.currentTarget).nextAll(`nav`).removeClass(`open`);
    })
    $(`nav a`).on(`click`, e => {
        $(e.currentTarget).parents(`nav`).removeClass(`open`);
    })
})