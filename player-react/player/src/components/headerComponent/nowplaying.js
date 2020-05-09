import React from 'react';

function NowPlaying() {
    return (
        <div className="row">
            <div className="col-md-12">
                <h3>Παίζει τώρα στο Ράδιο Βαποράκι</h3>
                <div className="player-wrapper">
            <div className="cc_recenttracks_list" data-username="bjmzrrud">Loading ...</div>
            <audio id="player1" className="player center-block" src="http://agnes.torontocast.com:8128/stream" type="audio/mpeg" autoPlay="autoplay" controls>
                    <em>Sorry, your browser doesn't support HTML5 audio.</em>
                    </audio>
                    </div>
            </div>
        </div>
    );
}

export default NowPlaying;