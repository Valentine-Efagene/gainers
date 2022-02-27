import React, { useState } from 'react'
import ReactDOM from 'react-dom'
import { Button, Modal, Spinner, Alert } from 'react-bootstrap'
import Axios from 'axios'

export default function AssessWithdrawalButton(props) {
    const [tempStatus, setTempStatus] = useState(props.status)
    const [status, setStatus] = useState(props.status)
    const [show, setShow] = useState(false)
    const [spin, setSpin] = useState(false)
    const [showError, setShowError] = useState(false)

    const handleClose = () => setShow(false)
    const handleShow = async () => {
        setShow(true)
    }

    const handleConfirm = async () => {
        setSpin(true)

        try {
            await Axios.patch('/admin/withdrawals/update/' + props.id, {
                status: tempStatus,
            })

            setStatus(tempStatus)
            setShow(false)
        } catch (e) {
            console.log(e)
            setShowError(true)
            setTimeout(() => {
                setShowError(false)
            }, 2000)
        } finally {
            setSpin(false)
        }
    }

    return (
        <>
            <Button
                variant="primary"
                hidden={status !== 'PENDING'}
                onClick={handleShow}
            >
                PENDING
            </Button>
            <div hidden={status === 'PENDING'}>{status}</div>
            <Alert show={showError} variant="danger" dismissible>
                Operation failed
            </Alert>

            <Modal show={show} onHide={handleClose}>
                <Modal.Header closeButton>
                    <Modal.Title>Assess Withdrawal</Modal.Title>
                </Modal.Header>
                <Modal.Body>
                    <Button
                        hidden={status !== 'PENDING'}
                        variant={
                            tempStatus === 'COMPLETED'
                                ? 'success'
                                : 'outline-primary'
                        }
                        onClick={() => {
                            setTempStatus('COMPLETED')
                        }}
                    >
                        Completed
                    </Button>
                    <Button
                        hidden={props.status !== 'PENDING'}
                        variant={
                            tempStatus === 'DENIED'
                                ? 'danger'
                                : 'outline-secondary'
                        }
                        onClick={() => {
                            setTempStatus('DENIED')
                        }}
                    >
                        Decline
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
                        disabled={tempStatus === props.status}
                        onClick={handleConfirm}
                    >
                        Confirm Choice
                    </Button>
                </Modal.Footer>
            </Modal>
        </>
    )
}

var elements = document.getElementsByClassName('assess_withdrawal_button')

if (elements) {
    for (var i = 0; i < elements.length; i++) {
        ReactDOM.render(
            <AssessWithdrawalButton
                id={elements[i].getAttribute('id')}
                status={elements[i].getAttribute('status')}
            />,
            elements[i]
        )
    }
}
