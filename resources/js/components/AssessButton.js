import React, { useState } from 'react'
import ReactDOM from 'react-dom'
import { Button, Modal, Spinner, Alert } from 'react-bootstrap'
import Axios from 'axios'

export default function AssessButton(props) {
    const [status, setStatus] = useState(props.status)
    const [show, setShow] = useState(false)
    const [spin, setSpin] = useState(false)
    const [showError, setShowError] = useState(false)

    const handleClose = () => setShow(false)
    const handleShow = async () => {
        setShow(true)

        try {
            var investment = await Axios.get('/admin/investments/' + props.id)
            console.log(investment)
            setStatus(investment?.data?.status)
        } catch (e) {
            //console.log(e)
            setShowError(true)
            setTimeout(() => {
                setShowError(false)
            }, 2000)
        }
    }

    const handleConfirm = async () => {
        setSpin(true)

        try {
            await Axios.patch('/admin/investments/update/' + props.id, {
                status,
            })

            location.reload()
        } catch (e) {
            // console.log(e)
            setShowError(true)
            setTimeout(() => {
                setShowError(false)
            }, 2000)
        }
    }

    return (
        <>
            <Button variant="primary" onClick={handleShow}>
                {props.status}
            </Button>
            <Alert show={showError} variant="danger" dismissible>
                Operation failed
            </Alert>

            <Modal show={show} onHide={handleClose}>
                <Modal.Header closeButton>
                    <Modal.Title>Assess Investment</Modal.Title>
                </Modal.Header>
                <Modal.Body>
                    <Button
                        hidden={props.status !== 'PENDING'}
                        variant={
                            status === 'APPROVED'
                                ? 'success'
                                : 'outline-primary'
                        }
                        onClick={() => {
                            setStatus('APPROVED')
                        }}
                    >
                        Approve
                    </Button>
                    <Button
                        hidden={props.status !== 'PENDING'}
                        variant={
                            status === 'DENIED' ? 'danger' : 'outline-secondary'
                        }
                        onClick={() => {
                            setStatus('DENIED')
                        }}
                    >
                        Decline
                    </Button>
                    <Button
                        hidden={props.status !== 'APPROVED'}
                        variant={
                            status === 'TERMINATE'
                                ? 'danger'
                                : 'outline-secondary'
                        }
                        onClick={() => {
                            setStatus('TERMINATE')
                        }}
                    >
                        Terminate
                    </Button>
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
                        Cancel
                    </Button>
                    <Button
                        variant="primary"
                        disabled={status === props.status}
                        onClick={handleConfirm}
                    >
                        Confirm Choice
                    </Button>
                </Modal.Footer>
            </Modal>
        </>
    )
}

var elements = document.getElementsByClassName('assess_button')

if (elements) {
    for (var i = 0; i < elements.length; i++) {
        ReactDOM.render(
            <AssessButton
                id={elements[i].getAttribute('id')}
                status={elements[i].getAttribute('status')}
            />,
            elements[i]
        )
    }
}
