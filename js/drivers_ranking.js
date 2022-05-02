const get_rankings = {
  async: true,
  crossDomain: true,
  url: "https://api-formula-1.p.rapidapi.com/rankings/drivers?season=2022",
  method: "GET",
  headers: {
    "x-rapidapi-host": "api-formula-1.p.rapidapi.com",
    "x-rapidapi-key": "5a064d629amsh0e00769af305bdap180755jsnb03e3a7f19f0",
  },
};
var gold = "#AF9500";
var silver = "#B4B4B4";
var bronze = "#6A3805";

$.ajax(get_rankings).done(function (response) {
  for (var i = 0; i < response.response.length; i++) {
    $(".tbl-standings > tbody").html("");
    for (i = 0; i < response.response.length; i++) {
      var color = "";
      if (i == 0) {
        color = gold;
      } else if (i == 1) {
        color = silver;
      } else if (i == 2) {
        color = bronze;
      } else {
        color = "#24242a";
      }

      position = response.response[i].position;
      driver_name = response.response[i].driver.name;
      team_name = response.response[i].team.name;

      points =
        response.response[i].points == null ? 0 : response.response[i].points;

      output_standings =
        '<tr class="driver">' +
        '<td class="position">' +
        position +
        "</td>" +
        '<td class="driver" style="border-left: 4px solid ' +
        color +
        ';"> ' +
        driver_name +
        "<span>" +
        team_name +
        "</span>" +
        "</td>" +
        '<td class="gap">' +
        "<span>" +
        points +
        "</span>" +
        "</td>" +
        "</tr>";

      $(".tbl-standings > tbody").append(output_standings).hide().fadeIn(500);
    }
    setTimeout(() => {
      $(".loader-container").hide();
      $("#standings").fadeIn(500);
    }, 500);
  }
});
