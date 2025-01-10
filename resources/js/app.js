import './bootstrap';
import Inputmask from "inputmask";

document.addEventListener("DOMContentLoaded", function () {
    const phoneInput = document.querySelector("#phone");
    const im = new Inputmask("(99) 99999-9999");
    im.mask(phoneInput);
});