import React from 'react';
import NowPlaying from './nowplaying';
import CalltoVaporaki from './calltovaporaki';
import CalltoWeather from './calltoweather';
import SongsPlayed from './songsplayed';
import Demo from "./geolocation";

function Header() {
    return (
        <header>
            <div className="container">
                <div className="row top-header">
                    <div className="col-md-4 logo-wrapper">
                        <img src="images/vaporaki128.png" />
                        <p>Η Ελλάδα όπως παλιά</p>
                    </div>
                    <div className="col-md-8 sponsor-logo">
                        <img src="images/oremsdiner.jpg" />
                    </div>
                </div>
                <div className="row main-area">

                    <div className="col-md-6"><NowPlaying /><br />
                    <SongsPlayed />
                    </div>
                    <div className="col-md-6">
                        <h3>Πρόσφατες αναρτήσεις στο www.radiovaporaki.com</h3>
                        <CalltoVaporaki />
                    </div>

                </div>

            </div>
        </header>
    );
}

export default Header;