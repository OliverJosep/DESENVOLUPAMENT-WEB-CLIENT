import React, { Component } from 'react';


class Button extends Component {

    constructor(props) {
      super();
    }

    render() {
      return (
        <button>{this.props.display}</button>
      );
    }
}


export default Button;