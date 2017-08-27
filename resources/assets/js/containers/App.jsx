import React, { Component, PropTypes } from "react"
import { bindActionCreators } from 'redux';
import { connect } from 'react-redux';
import * as CounterActions from '../actions/counter'
import Header from '../components/Header'

class App extends Component {
    render() {
        const { value, actions } = this.props;
        return (
            <div>
                <h2>count={value}</h2>
                <button onClick={actions.increment}>増加</button>
                <button onClick={actions.decrement}>減少</button>
            </div>
        )
    }
}

App.propTypes = {
    value: PropTypes.number.isRequired,
    actions: PropTypes.object.isRequired
}

function mapStateToProps(state) {
    return state.counter
}

function mapDispatchToProps(dispatch) {
    return {
        actions: bindActionCreators(CounterActions, dispatch)
    }
}

export default connect (
    mapStateToProps,
    mapDispatchToProps
)(App)
