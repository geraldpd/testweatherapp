$(function() {
    const cities = $('#cities');

    cities.on('change', function() {
        let city = $(this).val();

        if(!city) return;

        axios.get('/search', {
            params: {city: city}
          })
          .then(response => renderPlaceInformation(response.data))
          .catch(function (error) {
            console.log(error);
          })
          .then(function () {
            // always executed
          });
    });

    function renderPlaceInformation(data) {

      let forecast = data.forecast.list[3];
      let venue = {
        geocode: data.venue.response.geocode,
        venues: data.venue.response.venues
      }

      let venueList = venues => venues.map(venue => {
          return `<li class="list-group-item">
                <div class="row">
                    <div class="col-md-4">${venue.name}</div>
                    <div class="col-md-4"><strong>${venue.categories[0].name}</strong></div>
                    <div class="col-md-4">${venue.location.formattedAddress}</div>
                </div>
            </li>`
        }).join('');

      let renderInfo = (venue, forecast) => {
        let temp = forecast.main.temp - 273.15; //kelvin to Celcius
        return `
          <h2 class="text-orange text-center" style="margin-top: 50px;">${venue.geocode.feature.displayName}</h2>
          <br><br><br>
            <h1 class="forecast-temp text-center text-white">${temp.toFixed(2)}°c</h1>
          <br><br><hr>
            <h3 class="text-white text-center" style="text-transform:capitalize">${forecast.weather[0].description}</h3>
          <br><br><br>
          <h5 class="text-white">What to see in ${venue.geocode.feature.name}</h5>
          <ul class="list-group list-group-flush">
            ${venueList(venue.venues)}
          </ul>
        `;
      }

      console.log(forecast)
      $('#place-info')
      .empty()
      .append(renderInfo(venue, forecast))

      $('html,body').animate({scrollTop:$('.result-div').offset().top}, 500);

    }
})