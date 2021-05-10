import axios from 'axios';
import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Table } from "./Table";

export default class StudentAverageOfSubject extends Component {
    constructor() {
        super();
        this.state = {
            isLoading: true,
            header: [],
            marks: []
        };
    }

    async componentDidMount() {
        await axios.post('http://localhost:8000/api/get_marks_avarages')
                    .then(response => {
                        const tbody = response.data.data.tbody;
                        const thead = response.data.data.thead;
                        this.setState({
                            isLoading: false,
                            header: thead,
                            marks: tbody
                        });
                    });
    }

    render() {
        if (this.state.isLoading) {
            return <div className="StudentAverageOfSubject">Loading...</div>;
        }

        return <Table columns={this.state.header} data={this.state.marks} />
    };
}

if (document.getElementById('student-average-of-subject')) {
    ReactDOM.render(<StudentAverageOfSubject />, document.getElementById('student-average-of-subject'));
}
