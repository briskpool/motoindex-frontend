const get_race = {
  async: true,
  crossDomain: true,
  url: "https://api-formula-1.p.rapidapi.com/races?competition=1&season=2022",
  method: "GET",
  headers: {
    "x-rapidapi-host": "api-formula-1.p.rapidapi.com",
    "x-rapidapi-key": "5a064d629amsh0e00769af305bdap180755jsnb03e3a7f19f0",
  },
};
let race_id;
$.ajax(get_race).done(function (response) {
  for (var i = 0; i < response.response.length; i++) {
    var race_type = response.response[i].type;
    if (race_type.toLowerCase() == "race") {
      race_id = response.response[i].id;
      competition_name = response.response[i].competition.name;
      $("#competition_name").text(competition_name);
    }
  }

  const race_rankings = {
    async: true,
    crossDomain: true,
    url: "https://api-formula-1.p.rapidapi.com/rankings/races?race=" + race_id,
    method: "GET",
    headers: {
      "x-rapidapi-host": "api-formula-1.p.rapidapi.com",
      "x-rapidapi-key": "5a064d629amsh0e00769af305bdap180755jsnb03e3a7f19f0",
    },
  };
  var gold = "#AF9500";
  var silver = "#B4B4B4";
  var bronze = "#6A3805";
  $.ajax(race_rankings).done(function (response) {
    rankings = response.response;

    if (rankings.length == 0) {
      output_standings =
        "<tr>" +
        '<td colspan="5" class="align-middle text-center h3">Coming Soon</td>' +
        "</tr>";
      $(".tbl-standings > tbody").html(output_standings);
    } else {
      $(".tbl-standings > tbody").html("");
      for (i = 0; i < 20; i++) {
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

        position = rankings[i].position;
        driver_name = rankings[i].driver.name;
        team_name = rankings[i].team.name;

        time = rankings[i].time == null ? "Scheduled" : rankings[i].time;

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
          time +
          "</span>" +
          "</td>" +
          "</tr>";

        $(".tbl-standings > tbody").append(output_standings).hide().fadeIn(500);
      }
    }
  });
});
