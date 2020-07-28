import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Reframing extends Component {
    render() {
        return (
            <div>React test
                <div>リアルタイムじゃないの？</div>
            </div>

        );
    }
}

if (document.getElementById('reframing')) {
    ReactDOM.render(<Reframing />, document.getElementById('reframing'));
}
