import React from 'react';
import Header from './components/headerComponent/header';
import './assets/css/master.css';

function App() {
    const today = new Date();
    return (
        <div className="App">
            <Header />
            <div className="container footer">
            <div className="row">
                <div className="col-md-12">
                    <p>© {today.getFullYear()} Radio Vaporaki.com</p>
                </div>
            </div>
        </div>
        </div>
    );
}

export default App;
