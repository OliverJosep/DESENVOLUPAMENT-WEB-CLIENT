import React, { Component } from 'react';
import './App.css';
import Header from './Header';
import Clicker from './Clicker';

class App extends Component {

  constructor() {
    super();

    this.state = {
      title: 'Clicker'
    }
  }

  render() {

    return (
      <div>
        <Header title = {this.state.title}></Header>
        <div className="mt-5">
          <Clicker/>
          
        </div>
      </div>
      
    );
  }
}

export default App;
