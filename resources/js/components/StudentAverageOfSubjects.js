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
        // Paimamas adresas
        const origin = window.location.origin
        // Kreipimasis i backend su post užklausa, gavus duomenis jie užkraunami į state masyva.
        await axios.post(origin + '/api/get_marks_avarages')
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

        // prieš atvaizduojant lentele tikrinama ar yra kraunami duomenis
        if (this.state.isLoading) {
            return <div className="StudentAverageOfSubject">Loading...</div>;
        }

        // Gražinama lentelė jai suteikiant 'columns' duomenis ir 'data' duomenis
        return <Table columns={this.state.header} data={this.state.marks} />
    };
}

// Jeigu randamas elementas pagal ID atvaizduojamas komponentas StudentAverageOfSubject

if (document.getElementById('student-average-of-subject')) {
    ReactDOM.render(<StudentAverageOfSubject />, document.getElementById('student-average-of-subject'));
}
