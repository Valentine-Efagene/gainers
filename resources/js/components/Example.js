import React from 'react';
import ReactDOM from 'react-dom';
import { AddPhotoAlternate } from '@mui/icons-material';
import { Button } from '@mui/material';

function Example() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Example Component <AddPhotoAlternate /><Button>Hello</Button></div>
                        <div className="card-body">I'm an       component! hjhjh</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
