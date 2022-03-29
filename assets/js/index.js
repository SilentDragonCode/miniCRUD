// scroll effect van header
function parallax_height() {
  var scroll_top = $(this).scrollTop();
  var sample_section_top = $(".sample-section").offset().top;
  var header_height = $(".sample-header-section").outerHeight();
  $(".sample-section").css({ "margin-top": header_height });
  $(".sample-header").css({ height: header_height - scroll_top });
}

parallax_height();

$(window).scroll(function () {
  parallax_height();
});

// login check
const loginButton = document.querySelector("#loginButton");
const inputs = document.querySelectorAll("input");

if (loginButton) {
  loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    console.log("fout");

    for (let i = 0; i < inputs.length; i++) {
      if (!inputs[i].value.length) {
        console.log("fout");
        inputs[i].style.border = "1px solid red";
      }
    }
  });
}

const modal = document.querySelector("#modal");
const modalImage = document.querySelector("#modal img");
const pizzas = document.querySelectorAll(".pizzas");

pizzas.forEach((pizza) => {
  pizza.addEventListener("click", () => {
    modal.style.display = "block";
    modalImage.src = pizza.src;
  });
});

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
