/**************** Ajax ******************/

$(document).ready(function () {
  $(".send").submit(function () {
    const message = $(".message").val();

    $.post("send.php", { message: message }, function () {
      $(".message").val("");
    });
    return false;
  });

  /******** Maka any ilay message apoitra eo amin'ny front *********/
  $(".text").hide();
  const recup = function recupMessage() {
    $.post("recup.php", function (data) {
      $(".text").html(data).fadeIn(200);
    });
  };

  /********** Auto load any ilay page *************/

  setInterval(recup, 1000);
});
