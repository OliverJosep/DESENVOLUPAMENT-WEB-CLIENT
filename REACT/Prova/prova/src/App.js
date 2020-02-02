import React, { Component } from 'react';
import logo from './img/logo.svg';
import './App.css';
import Header from './Header';
import Footer from './Footer';
import Content from './Content';

class App extends Component {

  render() {

    return (
      <div>
        <Header />
        <Content />
        <Footer />
      </div>
      
    );
  }
}

export default App;
