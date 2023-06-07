let user = sessionStorage.getItem("pop-up-key");

if (!user) {
  $(document).ready(function () {
    $("#pop-up-modal").modal("show");
    sessionStorage.setItem("pop-up-key", "true");
  });
}

$(".btn").mouseover(function () {
  let data = $(this).attr("data-btn");
  let div = $(data);
  let divs = $(".block");

  if (div.hasClass("block-animation")) {
    div.removeClass("block-animation");
  } else {
    divs.removeClass("block-animation");
    div.addClass("block-animation");
  }
});

$(".btn").mouseout(function () {
  let data = $(this).attr("data-btn");
  let div = $(data);
  let divs = $(".block");

  if (div.hasClass("block-animation")) {
    div.removeClass("block-animation");
  } else {
    divs.removeClass("block-animation");
    div.addClass("block-animation");
  }
});
