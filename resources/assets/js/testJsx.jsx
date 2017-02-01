import React from 'react'; 
import ReactDOM from 'react-dom'; 


function tick() {
  const element = (
      <div>
          <h2>It is {new Date().toLocaleTimeString()}.</h2>
      </div>
    );
    ReactDOM.render(
      element,
      document.getElementById('timer')
      );
}
setInterval(tick, 1000);

//following content is usage or props.
function Welcome (props) {
    return <h1>Hello, {props.name}</h1>
}

function App () {
    return (
        <div>
            <Welcome name="Yada" />
            <Welcome name="Tabata" />
            <Welcome name="Hashimoto" />
        </div>
    );
}

ReactDOM.render(
    <App />,
    document.getElementById('welcome')
);
