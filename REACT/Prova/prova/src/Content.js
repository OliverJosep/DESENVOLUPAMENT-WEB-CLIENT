import React, { Component } from 'react';

class Content extends Component {
  render() {
    const searchers = ['https://www.google.es', 
                       'https://www.facebook.com', 
                       'https://www.youtube.com'];

    return (
      <div>
        {this.showTitle('Searcher')}
        <ul>
          <li><a href={searchers[0]}>Google</a></li>
          <li><a href={searchers[1]}>Facebook</a></li>
          <li><a href={searchers[2]}>Youtube</a></li>
        </ul>
      </div>
      
    );
  } 
  
  showTitle(params) {
    return (<h1> {params} </h1>)
  }
}

export default Content
