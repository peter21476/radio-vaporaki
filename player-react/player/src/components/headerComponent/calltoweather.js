import React from 'react';

class CalltoWeather extends React.Component {
    constructor(props) {
      super(props);
      this.state = {
        error: null,
        isLoaded: false,
        stations: []
      };
    }
  
    componentDidMount() {
      fetch("http://api.openweathermap.org/data/2.5/weather?id=6167865&units=imperial&APPID=7bd038c713a43503399fe8b1cf907575")
        .then(res => res.json())
        .then(
          (result) => {
            this.setState({
              isLoaded: true,
              stations: result
            });
          },
          // Note: it's important to handle errors here
          // instead of a catch() block so that we don't swallow
          // exceptions from actual bugs in components.
          (error) => {
            this.setState({
              isLoaded: true,
              error
            });
          }
        )
    }
  
    render() {
      const { error, isLoaded, stations } = this.state;
      if (error) {
        return <div>Error: {error.message}</div>;
      } else if (!isLoaded) {
        return <div>Loading...</div>;
      } else {
        return (
          <div className="weather-bulletin">

              <div key={stations.id}>
                {stations.id}
                <img src={"http://openweathermap.org/themes/openweathermap/assets/vendor/owm/img/widgets/" + stations.weather.icon + ".png"} />
              </div>

          </div>
        );
      }
    }
  }

export default CalltoWeather;