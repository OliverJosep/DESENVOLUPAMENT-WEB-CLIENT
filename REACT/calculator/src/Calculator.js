import React, { Component } from 'react';
import Display from './Display';
import Button from './Button';

class Calculator extends Component {

    constructor(props) {
      super();
    
      this.state = {
        display: "",
        total: 0,
        auxN: 0,
        aux: ''
      }

    }

    display(char, operator) {
      if (char == 'C') {
        console.log('hola');
        this.state.total = 0;
        this.state.auxN = 0;
        this.state.display = "";
        this.state.aux = "";
        this.setState((prevState) => ({ display: "" }));
      } else {
        if (!operator) this.setState((prevState) => ({ display: prevState.display + char }));
        if (operator)  {
          
          this.state.display = parseInt(this.state.display);
          this.state.total = parseInt(this.state.total);
          console.log(this.state.aux);
          if (this.state.aux == '+') {
            this.state.total = this.state.total + this.state.auxN + this.state.display;
            this.state.display = "";
            this.state.aux = "";
          }
          if (this.state.aux == '-') {
            this.state.total = this.state.total + this.state.auxN - this.state.display;
            this.state.display = "";
            this.state.aux = "";
          }
          if (this.state.aux == '*') {
            this.state.total = this.state.total + (this.state.auxN * this.state.display);
            console.log(this.state.total);
            console.log('mul');
            this.state.display = "";
            this.state.aux = "";
          }
          if (this.state.aux == '/') {
            this.state.total = this.state.total + (this.state.auxN / this.state.display);
            this.state.display = "";
            this.state.aux = "";
          }
          if (char == '+') this.state.aux = '+';
          if (char == '-') this.state.aux = '-';
          if (char == 'X') this.state.aux = '*';
          if (char == '/') this.state.aux = '/';
          if (char == '=') {
            this.setState((prevState) => ({ display: this.state.total }));
          } else {
            this.state.auxN = this.state.display;
            this.setState((prevState) => ({ display: "" }));
          }
        }
          
      }
    
    }

    render() {
        return (
          <div>
            <Display display = {this.state.display}></Display>
            <button onClick={() => { this.display(7, false) }}>7</button>
            <button onClick={() => { this.display(8, false) }}>8</button>
            <button onClick={() => { this.display(8, false) }}>9</button>
            <button onClick={() => { this.display('/', true) }}>/</button><br></br>
            <button onClick={() => { this.display(4, false) }}>4</button>
            <button onClick={() => { this.display(5, false) }}>5</button>
            <button onClick={() => { this.display(6, false) }}>6</button>
            <button onClick={() => { this.display('X', true) }}>X</button><br></br>
            <button onClick={() => { this.display(1, false) }}>1</button>
            <button onClick={() => { this.display(2, false) }}>2</button>
            <button onClick={() => { this.display(3, false) }}>3</button>
            <button onClick={() => { this.display('-', true) }}>-</button><br></br>
            <button onClick={() => { this.display(0, false) }}>0</button>
            <button onClick={() => { this.display('C', false) }}>C</button>
            <button onClick={() => { this.display('=', true) }}>=</button>
            <button onClick={() => { this.display('+', true) }}>+</button>
          </div>
            
        );
    }
}

export default Calculator;