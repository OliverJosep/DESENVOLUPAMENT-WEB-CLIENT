import React, { Component } from 'react';
import './App.css';
import Header from './Header';
import Calculator from './Calculator';

class App extends Component {

  constructor() {
    super();

    this.state = {
      title: 'Calculator',
      display: 1
    }
  }

  render() {

    return (
      <div>
        <Header title = {this.state.title}></Header>
        <div className="mt-5">
          <Calculator />
        </div>
      </div>
      
    );
  }
}

export default App;

