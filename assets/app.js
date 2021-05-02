import React from 'react';
import ReactDOM from 'react-dom';
import Login from './components/Login';
import Form from './components/Form';
import {
  BrowserRouter as Router,
  Switch,
  Route,
  } from "react-router-dom";


class App extends React.Component{
  render(){
    return(
    <div>
      <Router>
         <div className="container">
           <Switch>

              <Route  path="/" exact component={Form}/>

            </Switch>

          </div>
       </Router>
     </div>
    );
  }
}
ReactDOM.render(<App/>,document.getElementById("root"));