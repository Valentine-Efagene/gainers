import React, { useEffect, useState } from 'react'
import ReactDOM from 'react-dom'
import { Button, Modal, Spinner, Form, Table, Alert } from 'react-bootstrap'
import Axios from 'axios'

export default function ProfitButton(props) {
    const [amount, setAmount] = useState(0)
    const [show, setShow] = useState(false)
    const [spin, setSpin] = useState(false)
    const [profits, setProfits] = useState([])
    const [showError, setShowError] = useState(false)

    const loadProfits = async () => {
        setSpin(true)

        try {
            var response = await Axios.get('/admin/profits/' + props.id)
            setProfits(response?.data ? response.data : [])
        } catch (error) {
            // console.log(error)
            setShowError(true)
            setTimeout(() => {
                setShowError(false)
            }, 2000)
        } finally {
            setSpin(false)
        }
    }

    const handleClose = () => setShow(false)
    const handleShow = async () => {
        setShow(true)
        loadProfits()
    }

    const handleAddProfit = async (event) => {
        event.preventDefault()
        setSpin(true)

        try {
            await Axios.post('/admin/profits/create/' + props.id, {
                investment_id: props.id,
                amount,
            })
            loadProfits()
        } catch (e) {
            // console.log(e)
            setShowError(true)
            setTimeout(() => {
                setShowError(false)
            }, 2000)
        } finally {
            setSpin(false)
            setAmount(0)
        }
    }

    const handleChange = (event) => {
        //console.log(event.target.value)
        setAmount(
            event.target.value.match(/^\d*$/) ? event.target.value : amount
        )
    }

    return (
        <>
            <Button
                variant="primary"
                onClick={handleShow}
                disabled={props.status !== 'APPROVED'}
            >
                PROFIT
            </Button>
            <Alert show={showError} variant="danger" dismissible>
                Operation failed
            </Alert>

            <Modal show={show} onHide={handleClose}>
                <Modal.Header closeButton>
                    <Modal.Title>Assess Investment</Modal.Title>
                </Modal.Header>
                <Modal.Body>
                    <Form onSubmit={handleAddProfit}>
                        <Form.Group controlId="amount">
                            <Form.Label>Amount (USD)</Form.Label>
                            <Form.Control
                                type="text"
                                required
                                value={amount == 0 ? '' : amount}
                                onChange={handleChange}
                            />
                        </Form.Group>
                        <Button
                            variant="primary"
                            type="submit"
                            disabled={amount <= 0}
                        >
                            Add profit
                        </Button>
                    </Form>
                    Deposit Date:{' '}
                    {new Date(props.date).toLocaleDateString() +
                        ' ' +
                        new Date(props.date).toLocaleTimeString()}
                    <Table striped bordered hover>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Amount (USD)</th>
                            </tr>
                        </thead>
                        <tbody>
                            {profits.map((profit, index) => {
                                return (
                                    <tr key={index}>
                                        <td>
                                            {new Date(
                                                profit.created_at
                                            ).toLocaleDateString() +
                                                ' ' +
                                                new Date(
                                                    profit.created_at
                                                ).toLocaleTimeString()}
                                        </td>
                                        <td>{profit.amount}</td>
                                    </tr>
                                )
                            })}
                        </tbody>
                    </Table>
                </Modal.Body>
                <Modal.Footer>
                    <Spinner
                        animation="border"
                        role="status"
                        variant="info"
                        hidden={!spin}
                    >
                        <span className="sr-only">Loading...</span>
                    </Spinner>
                    <Button variant="secondary" onClick={handleClose}>
                        Close
                    </Button>
                </Modal.Footer>
            </Modal>
        </>
    )
}

var elements = document.getElementsByClassName('profit_button')

if (elements) {
    for (var i = 0; i < elements.length; i++) {
        ReactDOM.render(
            <ProfitButton
                id={elements[i].getAttribute('id')}
                date={elements[i].getAttribute('date')}
                status={elements[i].getAttribute('status')}
            />,
            elements[i]
        )
    }
}
