import React, { Component } from 'react';


class Display extends Component {

    constructor(props) {
      super();
    }

    render() {
      return (
        <div>{this.props.display}</div>
      );
    }
}


export default Display;